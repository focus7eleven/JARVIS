
<?php

class DetailController extends CController
{

	public function actionQuestionlike($qname,$qtime){ 
		$model=new QuestionLike;
    	$model->qname=$qname;
    	$model->qtime=$qtime;
    	$model->qliker=Yii::app()->user->name;

    	$sql = "SELECT COUNT(*) as users FROM questionlike 
    			WHERE qliker='".$model->qliker."' 
    			and qname='".$model->qname."' 
    			and qtime='".$model->qtime."'";
    	$command = Yii::app()->db->createCommand($sql);  
		$results = $command->queryAll();    
		$numUsers = (int)$results[0]["users"]; 

        
        
        $response=false;
        $isGuest=false;
        if(Yii::app()->user->isGuest){
        	$isGuest=true;
        }else{
        	if($numUsers==0){
	        	$ques = Question::model()->findByAttributes(array (
	                                'qname' => $model->qname, 
	                                'qtime' => $model->qtime
	                    ));

	        	$ques->qlike=$ques->qlike+1;
				$ques->update();
				
	        	$model->save();
	        }else if($numUsers>=1){ 
	        	$response=true;
	        }
   		}

        
        $json = array (  
            'result' => $response,
            'guest' => $isGuest,
    	);  
    	$jsonObj = CJSON::encode( $json );

		echo $jsonObj;
	}


	public function actionCancellike($qname,$qtime){ 
		$user=Yii::app()->user->name;
    	$delete=QuestionLike::model()->deleteAll('qname=:qName and qtime=:qTime and qliker=:qLiker',
    		array(':qName'=>$qname , ':qTime'=>$qtime , ':qLiker'=>$user ));

    	$ques = Question::model()->findByAttributes(array (
                                'qname' => $qname, 
                                'qtime' => $qtime
                    ));

        $ques->qlike=$ques->qlike-1;
		$ques->update();

		$json = array (  
            'result' => true,
    	);  
    	$jsonObj = CJSON::encode( $json );

		echo $jsonObj;
	}

	public function actionNewMessage(){ 
		$user=Yii::app()->user->name;
		if(!Yii::app()->user->isGuest){ 
			$ques = Question::model()->findAll('quser=:qUser' , array(':qUser' => $user ));
			$quesHistory=Yii::app()->session['question'];
			$length=count($quesHistory);

			$flag=false;

			for($i=0;$i<$length;$i++){ 
				if($quesHistory[$i]->qlike<$ques[$i]->qlike){ 
					$flag=true;
				}
				if($quesHistory[$i]->qans<$ques[$i]->qans){ 
					$flag=true;
				}
			}

			$json = array (  
            	'result' => $flag,
            	'num' => $quesHistory[0]->qlike,
    		);  
    		$jsonObj = CJSON::encode( $json );

			echo $jsonObj;
		}
	}
}

?>