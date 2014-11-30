<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">


<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/personal.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/bootstrap/css/bootstrap.css"/>

	    <!-- Loading Flat UI -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/flatUI/css/flat-ui.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/flatUI/img/favicon.ico" rel="stylesheet">
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/flatUI/js/vendor/jquery.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/flatUI/js/flat-ui.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/bootstrap/js/bootstrap.js"></script>
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/docs/assets/css/demo.css" rel="stylesheet">
	 
	
	<script type="text/javascript" charset="utf-8" src="<?php echo Yii::app()->request->baseUrl ?>/assets/ueditor/ueditor.config.js"></script>
	<script type="text/javascript" charset="utf-8" src="<?php echo Yii::app()->request->baseUrl ?>/assets/ueditor/ueditor.all.min.js"></script>

	<script type="text/javascript" charset="utf-8" src="<?php echo Yii::app()->request->baseUrl ?>/assets/effect.js"></script>

	<title>Jarvis</title>

<script type="text/javascript">	
$(document).ready(function(){
	 <?php
		if(Yii::app()->user->isGuest)
		{
			echo '$("#id_ask").click(function(){
	    
		    $("#id_loginFirst").slideDown("slow");
		    
		    setTimeout(function () { 
		        $("#id_loginFirst").slideUp(1500);
		    },3000); });' ;
		}else
		{
			echo '$("#id_ask").click(function(){
	    		window.location.href="index.php?r=site/question&entrance=0";
		    });' ;
		}
	?>  	  
});
</script>


</head>
<body>

<div class="panel" id="id_sameUsernamePanel">
	用户名已存在，请重新输入
</div>

<div class="panel" id="id_signUpPanel">
	两次输入的密码不一致
</div>

<div class="panel" id="id_validatePanel">
	用户名或密码错误
</div>

<div class="panel" id="id_loginFirst">
	请先登录
</div>


    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <a class="navbar-brand" id="id_jarvis">Jarvis</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-01">
               <ul class="nav navbar-nav">
    			<li id="id_home" onclick="changeState(id_home)" onmouseover="mOver(id_home)" onmouseout="mOut(id_home)"><a href="index.php">主页</a></li>
    	        <li id="id_ask" onclick="isGuest(id_ask)" onmouseover="mOver(id_ask)" onmouseout="mOut(id_ask)"><a>提问</a></li>
    	        <li><a href="index.php?r=site/questionDetail">提问跳转</a></li>
    	        <li id="id_list" onclick="changeState(id_list)" onmouseover="mOver(id_list)" onmouseout="mOut(id_list)"><a href="index.php?r=site/list">话题动态</a></li>
    	      	</ul>
    				
    				<?php
    					if(Yii::app()->user->isGuest){
    						echo
    						'<ul class="nav navbar-nav navbar-right">
    		    				<li><a href="index.php?r=site/signUp">注册</a></li>
    	      			</ul>';	
    					}else{
    						echo
    						'<ul class="nav navbar-nav navbar-right">
    		    				<li><a href="index.php?r=site/logout"><span class="fui-power"></span></a></li>
    	      			</ul>';
    					}
    				?>
    
               <form class="navbar-form navbar-right" action="#" role="search">
                <div class="form-group">
                  <div class="input-group">
                    <input class="form-control" id="navbarInput-01" type="search" placeholder="Search">
                    <span class="input-group-btn">
                      <button type="submit" class="btn"><span class="fui-search"></span></button>
                    </span>
                  </div>
                </div>
              </form>              
    			  
            </div>
          </nav>


    <?php echo $content;?>



	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by Focus.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->


</body>

<script type="text/javascript">

	$(".media-body").each(function(i){
    var divH = $(this).height();
    var $h5 = $("h5", $(this)).eq(0);
    while ($h5.outerHeight() > divH) {
        $h5.text($h5.text().replace(/(\s)*([a-zA-Z0-9]+|\W)(\.\.\.)?$/, "..."));
    };
</script>
</html>