<script type="text/javascript">
window.onload=function()
{
    $("#id_first").fadeIn(1000);
    setTimeout(function () { 
		$("#id_second").fadeIn(1000);
	},300);
   
}
</script>

<div id="questionPage">
	
	<div class="row">
		
		<div class="col-md-9">
			<legend><span class="fui-list-bulleted"> 话题动态</span></legend>


			<h1></h1>

			<div class="media" id="id_first" style="display:none">
		  		<a class="media-left">
		    		<img src="uploads/myThumb.jpg" alt="uploads/myThumb.jpg">
		  		</a>
		  		<div class="media-body">
		  			<h4 class="media-heading"><a href="">我的滑板鞋</a></h4>
		  			<div id="listContent">我试图辩称这只是娱乐，哥们儿Gangsta? Naw, courageous balls
						黑帮，帮，不，我只是有勇气罢了Had to change my style, they said I*m way too soft 帮，不，我只是有勇气罢了Had to change my style, they said I*m way too soft 
						应该改变我的风帮，不，我只是有勇气罢了Had to change my style, they said I*m way too soft 
						应该改变我的风帮，不，我只是有勇气罢了Had to change my style, they said I*m way too soft 
						应该改变我的风
						应该改变我的风不，我只是有勇气罢了Had to change my style, they said I*m way too soft 
						应该改变我的风格，他们说我的唱法太软了And I sound like AZ and Nas, out came the claws
					</div>		
					<div id="answerInfo">
						<div id="myColName">
				    		<span class="fui-user">
				    		Focus
				    		</span>
			    		</div>
			    		<div id="myColLike">
			    			<span class="fui-time"> 2014.11.14</span>
				    		
			    		</div>
			    		<div id="myColAns">
				    		<span class="fui-new"> 3</span>
			    		</div>
			    		<div id="myColLike">
				    		<a href="#"><span class="fui-heart"> 42</span></a>
			    		</div>
			    		
		    		</div>
		  		</div>
			</div>
			<HR>
			
			<div class="media" id="id_second" style="display:none">
		  		<a class="media-left">
		    		<img src="uploads/myThumb.jpg" alt="uploads/myThumb.jpg">
		  		</a>
		  		<div class="media-body">
		  			<h4 class="media-heading"><a href="">我的滑板鞋</a></h4>
		  			<div id="listContent">我试图辩称这只是娱乐，哥们儿Gangsta? Naw, courageous balls
						黑帮，帮，不，我只是有勇气罢了Had to change my style, they said I*m way too soft 帮，不，我只是有勇气罢了Had to change my style, they said I*m way too soft 
						应该改变我的风帮，不，我只是有勇气罢了Had to change my style, they said I*m way too soft 
						应该改变我的风帮，不，我只是有勇气罢了Had to change my style, they said I*m way too soft 
						应该改变我的风
						应该改变我的风不，我只是有勇气罢了Had to change my style, they said I*m way too soft 
						应该改变我的风格，他们说我的唱法太软了And I sound like AZ and Nas, out came the claws
					</div>		
					<div id="answerInfo">
						<div id="myColName">
				    		<span class="fui-user">
				    		Focus
				    		</span>
			    		</div>
			    		<div id="myColLike">
			    			<span class="fui-time"> 2014.11.14</span>
				    		
			    		</div>
			    		<div id="myColAns">
				    		<span class="fui-new"> 3</span>
			    		</div>
			    		<div id="myColLike">
				    		<a href="#"><span class="fui-heart"> 42</span></a>
			    		</div>
			    		
		    		</div>
		  		</div>
			</div>
			<HR>
			
		  		
		</div>

	</div>

		<HR>

		<div id="pager">	
			<div class="pagination">
	            <ul>
	              <li class="previous"><a href="#fakelink" class="fui-arrow-left"></a></li>
	              <li class="active"><a href="#fakelink">1</a></li>
	              <?php
	              	$pages=$pages-1;
	              	$i=2;
	              	while ($pages>0) {
	              	 	echo '<li><a href="#fakelink">'.$i.'</a></li>';
	              	 	$i=$i+1;
	              	 	$pages=$pages-1;
	              	} 
	              ?>	              
	              <li class="next"><a href="#fakelink" class="fui-arrow-right"></a></li>
	            </ul>
	        </div>
		</div>
		
</div>