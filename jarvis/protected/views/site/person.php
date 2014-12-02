<script type="text/javascript">
window.onload=function()
{
    $("#id_logo").animate({left:'-800px'});
    $("#id_logo").fadeOut(700);

    $("#userInfoPanel").animate({left:'-720px'});

    $("#userInfoPanel").fadeOut(700);

    //$("#userInfoPanel").animate({display:none});

    //setTimeout(function () { 
		$("#homePersonPanel").animate({left:'-20px'});
	//},700);

	setTimeout(function () {
		document.getElementById('homePersonPanel').className="col-md-10" 
		$("#homePersonPanel").fadeIn(1000);
	},1800);
}
</script>

<div class="jumbotron">
  <div class="container">
  	<div class="row">
  		<div class="col-md-1" style="opacity:0">
  			<h1>M</h1>
		    <p>
		    	星
		    </p>
	    </div>
  		<div class="col-md-7" id="id_logo">
		    <h1>Mix&Match</h1>
		    <p>
		    	星期天在动物园散步才是正经事.
		    </p>
	    </div>
	    
		<div class="col-md-3" id="userInfoPanel">
			<div id="infoHead">
	    		<img src="uploads/head_jayz.jpg" alt="uploads/head_tara.jpg">
	    	</div>
	    	<div style="text-align: center">
	    		focus
	    	</div>

			<div style="text-align: center">
				<span class="fui-question-circle"> ：0</span>
				<span>&nbsp&nbsp|&nbsp&nbsp&nbsp</span>
				<span class="fui-alert-circle"> : 0</span>
			</div>
		</div>

		<div class="col-md-3" id="homePersonPanel" style="display:none" >
			<div class="row">
				<div class="col-md-3">
					<div id="infoHead">
			    		<img src="uploads/home_jayz.jpg" alt="uploads/head_tara.jpg">
			    	</div>
		    	</div>

		    	<div class="col-md-4">
			    	<div style="text-align:center;font-size:35px;margin-bottom:20px;">
			    		focus
			    	</div>

					<div style="text-align: center">
						<span class="fui-question-circle"> ：0</span>
						<span>&nbsp&nbsp|&nbsp&nbsp&nbsp</span>
						<span class="fui-alert-circle"> : 0</span>
					</div>
				</div>
			</div>
		</div>
	    		
	    	
	    
	    
	    		
    </div>
  </div>
</div>
<div id="questionPage">
	<div class="row"> 
		<div class="col-md-9">

		</div>
	</div>
</div>