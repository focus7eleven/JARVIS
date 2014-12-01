
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
        $json = array (  
            'result' => $response,
            'q' => $ques,
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
}

?>