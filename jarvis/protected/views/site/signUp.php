<script type="text/javascript">
window.onload=function()
{
    $("#id_signUpLogo1").animate({left:'423px'});
    $("#id_signUpLogo2").animate({left:'-443px'});
}
</script>
<div class="jumbotron">
  <div class="container">
  	<div class="row">
  		<div id="id_signUpLogo1">
		    <h1>J.A.R.</h1>
		    <p>
		    	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo smoking,
		    </p>
	    </div>
	    <div id="id_signUpLogo2">
		    <h1>V.I.S.</h1>
		    <p>
		    	 unless you want.
		    </p>
	    </div>
    </div>
  </div>
</div>
<div id="signUpPage">
	<form class="form-horizontal" role="form" action="index.php?r=site/adduser" onsubmit="return validate_signUp(this)" method="post" enctype="multipart/form-data">
	  <div class="form-group" id="id_sUser">
	    <label class="col-md-4 control-label">用户名</label>
	    <div class="col-md-4" class="form_group">
	      <input name='username' type="username" class="form-control" placeholder="请输入用户名">
	    </div>
	  </div>

	  <div class="form-group" id="id_sPsw1">
	    <label class="col-md-4 control-label">密码</label>
	    <div class="col-md-4">
	      <input name='password1' type="password" class="form-control" placeholder="请输入密码">
	    </div>
	  </div>

	  <div class="form-group" id="id_sPsw2">
	    <label class="col-md-4 control-label">确认密码</label>
	    <div class="col-md-4">
	      <input name='password2' type="password" class="form-control" placeholder="请再输入一次密码">
	    </div>
	  </div>
		
	  <div class="form-group" id="id_sHead">
	    <label class="col-md-4 control-label">上传头像</label>
	    <div class="col-md-4">
	      	<input name='head' type="file" id="exampleInputFile">
	    </div>
	  </div>


	  <div class="form-group">
	    <div class="col-md-offset-4 col-md-10">
	      <button type="submit" class="btn btn-primary btn-lg signUpBtn">注册</button>
	    </div>
	  </div>
	</form>
</div>