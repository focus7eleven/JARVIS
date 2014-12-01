<div id="questionPage">
<div class="row"> 
	<div class="col-md-9">

	

		<div class="row"> 


			<h4><span class="fui-arrow-right"></span>&nbsp&nbsp <?php echo $model->qname; ?></h4>
			<div id="id_qname" style="display:none"><?php echo $model->qname; ?></div>

			<span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>

			<span class="fui-user"> <?php echo $model->quser; ?></span>
			<span>&nbsp&nbsp|&nbsp&nbsp</span>

			<span class="fui-time"> <?php echo $model->qtime; ?></span>
			<div id="id_qtime" style="display:none"><?php echo $model->qtime; ?></div>

			<span>&nbsp&nbsp|&nbsp&nbsp</span>


			<a href="#"><span class="fui-heart" onclick="validate_like()" id="id_qlike"> <?php echo $model->qlike; ?> </span></a>
			<a href="#"><span class="fui-check" onclick="cancel_like()" style="display:none" id="id_qliked"> 取消赞</span></a>
			<span>&nbsp&nbsp|&nbsp&nbsp</span>

			<?php
				$tag=explode(",",$model->qtag);
				foreach ($tag as $value) {
					echo '<span class="label label-primary">'.$value.'</span>' ;
					echo '&nbsp';
				}	
			?>			

			
		</div>

		<h5></h5>

		<div class="row">
			
			<span class="fui-new"></span>
			
			<div id="questionContent">
				<?php echo $model->qcontent; ?>
			</div>	
		</div>

		<?php
			if($model->qpic){
				echo '
				<div class="row">
					<span class="fui-image"></span>
					<div id="questionContent">
						<img src="uploads/'.$model->qpic.'" alt="image" class="img-rounded img-responsive">
					</div>
				</div>
				'; 
			}else{ 

			} 
		?>
		

		<div id="splash"></div>

		<div class="row">
			<h4><span class="fui-arrow-right"></span>&nbsp&nbsp 回答</h4>
		</div>
<h5></h5>
		<div class="row">
			<div class="media">
		  		<a class="media-left">
		    		<img src="uploads/myThumb.jpg" alt="uploads/myThumb.jpg">
		  		</a>
		  		<div class="media-body">
		  			<div id="answerContent">我试图辩称这只是娱乐，哥们儿Gangsta? Naw, courageous balls
				黑帮，帮，不，我只是有勇气罢了Had to change my style, they said I*m way too soft 帮，不，我只是有勇气罢了Had to change my style, they said I*m way too soft 
				应该改变我的风帮，不，我只是有勇气罢了Had to change my style, they said I*m way too soft 
				应该改变我的风帮，不，我只是有勇气罢了Had to change my style, they said I*m way too soft 
				应该改变我的风
				应该改变我的风不，我只是有勇气罢了Had to change my style, they said I*m way too soft 
				应该改变我的风格，他们说我的唱法太软了And I sound like AZ and Nas, out came the claws</div>		
					<div id="answerInfo">
						<div id="myColName">
				    		<span class="fui-user">
				    		Focus
				    		</span>
			    		</div>
			    		<div id="myColLike">
			    			<span class="fui-time"> 2014.11.14</span>
				    		
			    		</div>
			    		<div id="myColLike">
				    		<a href="#"><span class="fui-heart"> 42</span></a>
			    		</div>
			    		
		    		</div>
		  		</div>
			</div>
		</div>
		<HR>
		<div class="row">
			<div class="media">
		  		<a class="media-left">
		    		<img src="uploads/myThumb.jpg" alt="uploads/myThumb.jpg">
		  		</a>
		  		<div class="media-body">
		  			<div id="answerContent">我试图辩称这只是娱乐，哥们儿Gangsta? Naw, courageous balls
				黑帮，帮，不，我只是有勇气罢了Had to change my style, they said I*m way too soft 帮，不，我只是有勇气罢了Had to change my style, they said I*m way too soft 
				应该改变我的风帮，不，我只是有勇气罢了Had to change my style, they said I*m way too soft 
				应该改变我的风帮，不，我只是有勇气罢了Had to change my style, they said I*m way too soft 
				应该改变我的风
				应该改变我的风不，我只是有勇气罢了Had to change my style, they said I*m way too soft 
				应该改变我的风格，他们说我的唱法太软了And I sound like AZ and Nas, out came the claws</div>		
					<div id="answerInfo">
						<div id="myColName">
				    		<span class="fui-user">
				    		Focus
				    		</span>
			    		</div>
			    		<div id="myColLike">
			    			<span class="fui-time"> 2014.11.14</span>
				    		
			    		</div>
			    		<div id="myColLike">
				    		<a href="#"><span class="fui-heart"> 42</span></a>
			    		</div>
			    		
		    		</div>
		  		</div>
			</div>
		</div>







		<div id="splash"></div>

		<div class="row">
			<h4><span class="fui-arrow-right"></span>&nbsp&nbsp 我要回答</h4>
		</div>

	<div>
		<textarea name="answerText" id="answerText" style="height: 200px"></textarea>
	</div>
	 
	<script>
		window.UEDITOR_HOME_URL = "<?php echo Yii::app()->request->baseUrl ?>/assets/index/org/ueditor/";
	    //实例化编辑器
	    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
	    var ue = UE.getEditor('answerText');
	</script>

	<div class="row">
		<div id="answerBtn">
			<a href="#fakelink" class="btn btn-block btn-lg btn-inverse">提交答案</a>
		</div>
        
	</div>


	</div>

	<div class="col-md-3">
		<legend><span class="fui-arrow-right"> 具有相同标签的问题</span></legend>

		<div id="similarColumn">
			<span class="label label-primary">TAG1</span>
			<a id="aColor" href=\'#\'> 时间时间</a>		
		</div>

		<div id="similarColumn">
			<span class="label label-primary">TAG2</span>
			<a id="aColor" href=\'#\'> 会给我答案</a>		
		</div>

		<div id="similarColumn">
			<span class="label label-primary">TAG2</span>
			<a id="aColor" href=\'#\'> 这里的人们</a>		
		</div>

		<div id="similarColumn">
			<span class="label label-primary">TAG2</span>
			<a id="aColor" href=\'#\'> 称他为魅力之都</a>		
		</div>
		

	</div>


</div>
</div>


