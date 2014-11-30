


<div class="jumbotron">
  <div class="container">
  	<div class="row">
  		<div class="col-md-7">
		    <h1>Mix&Match</h1>
		    <p>
		    	星期天在动物园散步才是正经事.
		    </p>

	    </div>
	    <?php 
	    	if(Yii::app()->user->isGuest){
	    		echo 
	    		'<div class="col-md-3" id="loginPanel">
			    	<form role="form" action="index.php?r=site/login" onsubmit="return validate_form(this)" method="post">
			            <div class="form-group" id="id_username">
			              <input type="text" name="username" placeholder="Username" class="form-control" >
			            </div>
			            <div class="form-group" id="id_password">
			              <input type="password" name="password" placeholder="Password" class="form-control">
			            </div>
			            <div class="form-group">
			            	<button type="submit" class="btn btn-success" id="loginBtn">登录</button>
			            </div>
		            </form>
	    		</div>' ;
	    	}else{
	    		echo 
	    		'
	    		<div class="col-md-3" id="userInfoPanel">
	    			<div id="infoHead">
			    		<img src="uploads/myThumb.jpg" alt="uploads/myThumb.jpg">
			    	</div>
			    	<div style="text-align: center">
			    		'.Yii::app()->user->name.'
			    	</div>
					<div style="text-align: center">
						<span class="fui-question-circle"> ：0</span>
						<span>&nbsp&nbsp|&nbsp&nbsp&nbsp</span>
						<span class="fui-alert-circle"> : 0</span>
					</div>
	    		</div>
	    		';	
	    	}
	    
	    ?>
	    		
    </div>
  </div>
</div>


<div id="page">

<div class="row">
	<div class="col-md-8">
		<div>

			<fieldset>


	
			<legend><span class="glyphicon glyphicon-th-list"></span> 最新动态</legend>
			<div class="media">
		  		<a class="media-left" href="#">
		    		<img src="uploads/myThumb.jpg" alt="uploads/myThumb.jpg">
		  		</a>
		  		<div class="media-body">
		  			<?php
		  				echo '<a href=\'index.php?r=site/questionDetail&qname='.$questionList[0]->qname.'\'>'.'<h4 class="media-heading">'.$questionList[0]->qname.'</h4>'.'</a>';
		  			?>   		
		    		<h5><?php echo $questionList[0]->qcontent ?>今天怎么不开心</h5>
					
					<div id="myRow">
						<div id="myColName">
				    		<span class="fui-user">
				    		<?php
				    			echo $questionList[0]->quser;
				    		?>
				    		</span>
			    		</div>
			    		<div id="myColLike">
			    			<span class="fui-time"> 2014.11.14</span>
				    		
			    		</div>
			    		<div id="myColLike">
			    			<a href="#">
				    		<?php
				    			echo '<span class="fui-heart"> '.$questionList[0]->qlike.'</span>';
				    		?>
				    		</a>
			    		</div>
		    		</div>
		  		</div>
			</div>
			<HR>
				<div class="media">
		  		<a class="media-left" href="#">
		    		<img src="uploads/myThumb.jpg" alt="uploads/myThumb.jpg">
		  		</a>
		  		<div class="media-body">
		  			<?php
		  				echo '<a href=\'index.php?r=site/questionDetail&qname='.$questionList[1]->qname.'\'>'.'<h4 class="media-heading">'.$questionList[1]->qname.'</h4>'.'</a>';
		  			?>   		
		    		<h5><?php echo $questionList[1]->qcontent ?></h5>
					
					<div id="MyRow">
						<div id="myColName">
				    		<span class="fui-user">
				    		<?php
				    			echo $questionList[1]->quser;
				    		?>
				    		</span>
			    		</div>
			    		<div id="myColLike">
			    			<span class="fui-time"> 2014.11.14</span>
				    		
			    		</div>
			    		<div id="myColLike">
			    			<a href="#">
				    		<?php
				    			echo '<span class="fui-heart"> '.$questionList[1]->qlike.'</span>';
				    		?>
				    		</a>
			    		</div>
		    		</div>
		  		</div>
			</div>
			<HR>
				<div class="media">
		  		<a class="media-left" href="#">
		    		<img src="uploads/myThumb.jpg" alt="uploads/myThumb.jpg">
		  		</a>
		  		<div class="media-body">
		  			<?php
		  				echo '<a href=\'index.php?r=site/questionDetail&qname='.$questionList[2]->qname.'\'>'.'<h4 class="media-heading">'.$questionList[2]->qname.'</h4>'.'</a>';
		  			?>   		
		    		<h5><?php echo $questionList[2]->qcontent ?></h5>
					
					<div id="myRow">
						<div id="myColName">
				    		<span class="fui-user">
				    		<?php
				    			echo $questionList[2]->quser;
				    		?>
				    		</span>
			    		</div>
			    		<div id="myColLike">
			    			<span class="fui-time"> 2014.11.14</span>
				    		
			    		</div>
			    		<div id="myColLike">
			    			<a href="#">
				    		<?php
				    			echo '<span class="fui-heart"> '.$questionList[2]->qlike.'</span>';
				    		?>
				    		</a>
			    		</div>
		    		</div>
		  		</div>
			</div>
			

			</fieldset>

			<HR>
			
		</div>	
	</div>	
	<div class="col-md-4">
		<legend><span class="glyphicon glyphicon-star"></span> 最热话题</legend>
		<div id="hotTopic">
			<?php
				$blank='<span style="font-size:12px;">&nbsp;&nbsp;&nbsp;</span>';
				echo '<h4><span class="label" id="firstTopic">NO.1</span>'.$blank.$blank.'<a href=\'index.php?r=site/questionDetail&qname='.$questionList[0]->qname.'\'>'.$questionList[0]->qname.'</a></h4>'; 
			?>
		</div>
		<div id="hotTopic">
			<?php
				$blank='<span style="font-size:12px;">&nbsp;&nbsp;&nbsp;</span>';
				echo '<h4><span class="label" id="secondTopic">NO.2</span>'.$blank.$blank.'<a href=\'index.php?r=site/questionDetail&qname='.$questionList[0]->qname.'\'>'.$questionList[1]->qname.'</a></h4>'; 
			?>
		</div>
		<div id="hotTopic">
			<?php
				$blank='<span style="font-size:12px;">&nbsp;&nbsp;&nbsp;</span>';
				echo '<h4><span class="label" id="thirdTopic">NO.3</span>'.$blank.$blank.'<a href=\'index.php?r=site/questionDetail&qname='.$questionList[0]->qname.'\'>'.$questionList[2]->qname.'</a></h4>'; 
			?>
		</div>

		<HR>
	</div>
</div>



</div>

