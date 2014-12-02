<script type="text/javascript">
window.onload=function()
{

	$("#id_logo").animate({left:'-800px'});
	$("#id_logo").fadeOut(700);

    $("#userInfoPanel").animate({left:'-720px'});

    $("#userInfoPanel").fadeOut(700);


	$("#homePersonPanel").animate({left:'-20px'});


	setTimeout(function () {
		document.getElementById('homePersonPanel').className="col-md-10" 
		$("#homePersonPanel").fadeIn(1000);
	},1800);
	setTimeout(function () {
		$("#page").fadeIn(1000);
	},2500);

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
	    		<img src="uploads/head_jayz.jpg" alt="uploads/head_jayz.jpg">
	    	</div>
	    	<div style="text-align: center">
	    		focus
	    	</div>

			<div style="text-align: center">
				<span class="fui-question-circle"> ：<?php echo $contact->qNum ?></span>
				<span>&nbsp&nbsp|&nbsp&nbsp&nbsp</span>
				<span class="fui-alert-circle"> : <?php echo $contact->aNum ?></span>
				<span>&nbsp&nbsp|&nbsp&nbsp&nbsp</span>
				<span class="fui-paypal"> : <?php echo $contact->points ?></span>
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
						<span class="fui-question-circle"> ：<?php echo $contact->qNum ?></span>
						<span>&nbsp&nbsp|&nbsp&nbsp&nbsp</span>
						<span class="fui-alert-circle"> : <?php echo $contact->aNum ?></span>
						<span>&nbsp&nbsp|&nbsp&nbsp&nbsp</span>
						<span class="fui-paypal"> : <?php echo $contact->points ?></span>
					</div>
				</div>
			</div>
		</div>
	    		
	    	
	    
	    
	    		
    </div>
  </div>
</div>


<div id="page" style="display: none">

<div class="row">
	<div class="col-md-8">
		<div>
			<fieldset>

			<legend><a href="#"><span class="fui-triangle-up" id="id_questionArrow" onclick="slide_question()"></span></a> &nbsp&nbsp&nbsp我的问题</legend>
			<div id="id_switchMyQuestion" style="display:none">1</div>
			<div id="id_myQuestion">
			<?php
				foreach ($questionList as $q) {
					echo '
					<div class="media">
				  		<a class="media-left" href="#">
				    		<img src="uploads/head_'.$q->quser.'.jpg" alt="uploads/myThumb.jpg">
				  		</a>
				  		<div class="media-body">
				  			
				  			<a href="index.php?r=site/questionDetail&qname='.$q->qname.'&qtime='.$q->qtime.'">'.'<h4 class="media-heading">'.$q->qname.'</h4></a>
				  					
				    		<p style="font-size:14px;">'.$q->qcontent.'</p>
							
							<div id="myRow">
								<div id="myColName">
						    		<span class="fui-user">				    			
						    			'.$q->quser.'
						    		</span>
					    		</div>
					    		<div id="myColTime">
					    			<span class="fui-time"> 
					    				'.$q->qtime.'
					    			</span>
					    		</div>
					    		<div id="myColLikeHome">
					    			
									<span class="fui-heart"> '.$q->qlike.'</span>
						    		
					    		</div>
				    		</div>
				  		</div>
					</div>
					<HR>	
					';
				}
			?>
			</div>
			</fieldset>
		
		</div>	
	</div>	
	<div class="col-md-4">
		<legend><a href="#"><span class="fui-triangle-up" id="id_answerArrow" onclick="slide_answer()"></span></a> &nbsp&nbsp&nbsp我回答过的问题</legend>
		<div id="id_switchMyAnswer" style="display:none">1</div>
		<div id="id_myAnswer">
			
				<?php
					foreach ($ansed as $q) {
						echo '<div class="row" style="margin-left:10px;">
							<h4><a href=\'index.php?r=site/questionDetail&qname='.$questionList[0]->qname.'\'>'.$q->qname.'</a></h4>
						</div>
						'; 
					}
					
				?>
			
		
		</div>
		
	</div>
</div>
