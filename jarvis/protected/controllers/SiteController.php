
<?php

class SiteController extends CController
{


    public function actions()
    {
        return array(
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page'=>array(
                'class'=>'CViewAction',
            ),
        );
    }
    public function actionIndex(){
    	
    	//date_default_timezone_set('Asia/Shanghai');
    	//echo date('M.d Y').'!!!!';
    	$model=new LoginForm;



        // collect user input data
        /*if(isset($_POST['LoginForm']))
        {
            $model->attributes=$_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid

            if($model->validate() && $model->login()){
		        $question=Question::model()->findAll();
		    	$question=array_reverse($question);
		    	$total=count($question);
		    	$last=fmod($total,5);
		    	$pages=(int)($total/5);
		    	if($last>0){ 
		    		$pages=$pages+1;
		    	}
		    	if($pageNum*5<=$total){
		    		$slice_question=array_slice($question,5*($pageNum-1),5*$pageNum);
				}else{
					$slice_question=array_slice($question,5*($pageNum-1)); 
				}
    			$this->render('list',array('pages'=>$pages,'questions'=>$slice_question,'pageNum'=>$pageNum));
            }
                //$this->createUrl('site/index',array('name'=>$model->username));
                //$this->render('brooklyn',array('model'=>$model,'contact'=>$c));
        }*/
        // display the login form




    	$questionList=Question::model()->findall();

        $this->render('index',array('questionList'=>$questionList,'model'=>$model));

        
    }

    public function actionBrooklyn(){


        $contact = Contact::model()->findAll();
        if ( null != $contact )
        {
            $this->render('brooklyn',array('model'=>$contact,));

        }
        else{
            echo 'no record exists';
        }
    }

    public function actionCreate()
    {
        $model = new LoginForm();
        $form = new CForm( 'application.views.site.loginform', $model );
        if ( $form->submitted('create') && $form->validate())
        {
            $contact = new Contact();
            $contact->username = $model->username;
            $contact->password=$model->password;
            $contact->save();
            $this->redirect(array('site/brooklyn'));
        }
        else
        {
            $this->render( 'create', array( 'form'=>$form ));
        }
    }

    public function actionQuestion($entrance)
    {
    	$model=new QuestionForm;
    	$flag=true;
    	if($entrance==1){
    	if(!($_POST['qname']==null)&!($_POST['qtag']==null)&!($_POST['qcontent']==null))
    	{   
    		$upload=CUploadedFile::getInstanceByName('qpic');
    		$model->qpic=$upload;
    		$model->qname=$_POST['qname'];
    		$model->qtag=$_POST['qtag'];
    		$model->qcontent=$_POST['qcontent'];
    		$question=new Question();
    		$question->qname=$model->qname;
    		$question->quser=Yii::app()->user->name;
    		$question->qcontent=$model->qcontent;
    		$question->qlike=0;
    		$question->qans=0;
    		$question->qtag=$model->qtag;
    		date_default_timezone_set('Asia/Shanghai');
    		$question->qtime=date('H:i:s M.d');
    		if($model->qpic)
    		{
    			$preRand='img_'.time(). mt_rand(0,99);
    			$imgName=$preRand.'.'.$model->qpic->extensionName;
    			if($model->validate())
    			{
    				$model->qpic->saveAs('uploads/'.$imgName);
    			}
    			$model->qpic=$imgName;
    			$question->qpic=$imgName;
    		}
	    	if($model->validate()){	 
	    		$flag=false;   		
	    		$question->save();
	    		$this->render('questionmodal',array('model'=>$question));
	    	}else{ 
	    		echo "error";
	    	}
    	}
    	}

    	//导航栏入口
    	$entrance=0;
    	if($entrance==0){
    	if($flag)
    	{
    		$this->render('question',array('model'=>$model));
    	}
    	}
    }



   //public function actionQuestionDetail($qname)
    //{
    	//$question=Question::model()->find('qname=:postID', array(':postID'=>$qname));
    	//$this->render('questionmodal',array('model'=>$question));
    	//$this->render('questionmodal');
    //}

    public function actionQuestionDetail($qname,$qtime)
    {
    	$question = Question::model()->findByAttributes(array (
                                'qname' => $qname, 
                                'qtime' => $qtime
        ));

    	$ans = Answer::model()->findAll('qnum=:qNum' , array(':qNum'=>$question->qnum));

    	$ans=array_reverse($ans);

    	//$question=Question::model()->find('qname=:postID', array(':postID'=>$qname));
    	//$this->render('questionmodal',array('model'=>$question));
    	$this->render('questionmodal',array('model'=>$question,'ans'=>$ans));
    }

    public function actionList($pageNum)
    {
     	$question=Question::model()->findAll();
    	$question=array_reverse($question);
    	$total=count($question);
    	$last=fmod($total,5);
    	$pages=(int)($total/5);
    	if($last>0){ 
    		$pages=$pages+1;
    	}
    	if($pageNum*5<=$total){
    		$slice_question=array_slice($question,5*($pageNum-1),5*$pageNum);
		}else{
			$slice_question=array_slice($question,5*($pageNum-1)); 
		}


    	//$this->render('questionmodal',array('model'=>$question));
    	$this->render('list',array('pages'=>$pages,'questions'=>$slice_question,'pageNum'=>$pageNum));
    }

    public function actionLogin(){

        $questionList=Question::model()->findall();

        /*$user=Yii::app()->user->name;
        $ques = Question::model()->findAll('quser=:qUser' , array(':qUser' => $user ));
        Yii::app()->session['question']=$ques;
        $temp=count(Yii::app()->session['question']);*/

        $this->render('index',array('questionList'=>$questionList));     
    }

    public function actionValidate($username,$password)
    {
    	$model=new LoginForm;
    	$model->username=$username;
        $model->password=$password;

        if($model->validate() && $model->login()){
            //$this->redirect(array('site/list'));
            $response=true;
        }else{
            $response=false;
        }
        
        /*if($username=='11112')
        	$response='bbb';
        else
        	$response='aaa';
        return $response;
         */
        $json = array (  
            'result' => $response,
            'username' =>$username,
            'password'=>$password
    	);  
    	$jsonObj = CJSON::encode( $json );

		echo $jsonObj;
        
    }


    public function actionLogout()
    {
        Yii::app()->user->logout();
        Yii::app()->session->clear();
		Yii::app()->session->destroy();
        $this->redirect(Yii::app()->homeUrl);
    }


    public function actionSignUp()
    {
    	$this->render('signUp');
    }

    public function actionSignupvalidate($username,$password1){	
    	$model=new Contact;
    	$model->username=$username;
        $isExist=Contact::model()->exists('username=:unInput', array(':unInput'=>$username));
        $json = array (  
            'result' => $isExist,
    	);  
    	$jsonObj = CJSON::encode( $json );
		echo $jsonObj;
    }

    public function actionAdduser(){ 	
    	$model=new Contact;
    	$model->username=$_POST['username'];
        $model->password=$_POST['password1'];
        $upload=CUploadedFile::getInstanceByName('head');
        $model->head=$upload;
        $model->qNum=0;
        $model->aNum=0;

        $imgName=$model->username.'.jpg';

        $model->head->saveAs('uploads/'.$imgName);

    	$thumb = Yii::app()->thumb;
        $thumb->image = 'uploads/'.$imgName;
        $thumb->directory = 'uploads/';
        $thumb->defaultName = 'head_'.$imgName;
        $thumb->createThumb();
        $thumb->save();

        $bigThumb = Yii::app()->bigThumb;
        $bigThumb->image = 'uploads/'.$imgName;
        $bigThumb->directory = 'uploads/';
        $bigThumb->defaultName = 'home_'.$imgName;
        $bigThumb->createThumb();
        $bigThumb->save();

        $model->head=$imgName;
        $model->save();

        $this->redirect(array('site/index'));

    }


    public function actionAnswer($content,$qname,$qtime){ 
    	$question = Question::model()->findByAttributes(array (
                                'qname' => $qname, 
                                'qtime' => $qtime
        ));
        $question->qans=$question->qans+1;

        $answer=new Answer;
        $answer->acontent=$content;
        $answer->qnum=$question->qnum;
        $answer->auser=Yii::app()->user->name;
        $answer->alike=0;
        date_default_timezone_set('Asia/Shanghai');
    	$answer->atime=date('H:i:s M.d');
    	

    	$question->update();

    	$answer->save();

    	$json = array (  
            'result' => true,
            'content' => $content,
    	);  
    	$jsonObj = CJSON::encode( $json );
		echo $jsonObj;
    }

    public function actionPerson(){ 
    	$this->render('person');
    }


}


?>