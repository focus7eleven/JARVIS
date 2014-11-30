
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
    	//$temp=Contact::model()->count();
    	//echo $temp;die;
    	//date_default_timezone_set('Asia/Shanghai');
    	//echo date('M.d Y').'!!!!';
    	//echo date('H:i:s');die;
    	$model=new LoginForm;



        // collect user input data
        if(isset($_POST['LoginForm']))
        {
            $model->attributes=$_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid

            if($model->validate() && $model->login())
                $this->redirect(array('site/index'));
                //$this->createUrl('site/index',array('name'=>$model->username));
                //$this->render('brooklyn',array('model'=>$model,'contact'=>$c));
        }
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
    		$question->qtime=date('H:i:s M.d Y');
    		if($model->qpic)
    		{
    			$preRand='img_'.time(). mt_rand(0,99);
    			$imgName=$preRand.'.'.$model->qpic->extensionName;
    			if($model->validate())
    			{
    				$model->qpic->saveAs('uploads/'.$imgName);
    				$thumb = Yii::app()->thumb;
                    $thumb->image = 'uploads/'.$imgName;
                    $thumb->directory = 'uploads/';
                    $thumb->defaultName = $imgName.'_thumb';
                    $thumb->createThumb();
                    $thumb->save();
    			}
    			$model->qpic=$imgName;
    			$question->qpic=$imgName;
    		}
    		
    		

	    	
	    	if($model->validate())
	    	{	 
	    		$flag=false;   		
	    		//$question->save();
	    		$this->render('questionmodal',array('model'=>$question));
	    	}
    	}
    	}
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

    public function actionQuestionDetail()
    {
    	//$question=Question::model()->find('qname=:postID', array(':postID'=>$qname));
    	//$this->render('questionmodal',array('model'=>$question));
    	$this->render('questionmodal');
    }

    public function actionList()
    {
    	//$question=Question::model()->find('qname=:postID', array(':postID'=>$qname));
    	//$this->render('questionmodal',array('model'=>$question));
    	$this->render('list');
    }

    public function actionLogin(){
        $this->redirect(array('site/list'));       
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
        $this->redirect(Yii::app()->homeUrl);
    }


    public function actionSignUp()
    {
    	$this->render('signUp');
    }

    public function actionSignupvalidate(){	

    }


}


?>