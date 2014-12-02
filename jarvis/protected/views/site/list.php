<script type="text/javascript">
window.onload=function()
{
    $("#id_1").fadeIn(1000);
    setTimeout(function () { 
		$("#id_2").fadeIn(1000);
	},200);
	setTimeout(function () { 
		$("#id_3").fadeIn(1000);
	},400);
	setTimeout(function () { 
		$("#id_4").fadeIn(1000);
	},600);
	setTimeout(function () { 
		$("#id_5").fadeIn(1000);
	},800);
	setTimeout(function () { 
		$("#pager").fadeIn(1000);
	},1000);
   
    var present=document.getElementById('id_prePage').innerHTML;
    
}
</script>

<div id="questionPage">
	
	<div class="row">
		
		<div class="col-md-9">
			<legend><span class="fui-list-bulleted"> 话题动态</span></legend>


			<h1></h1>

			<?php
				$i=1;
				foreach ($questions as $q) {
					echo '
						<div class="media" id="id_'.$i.'" style="display:none">
					  		<a class="media-left">
					    		<img src="uploads/head_'.$q->quser.'.jpg" alt="uploads/myThumb.jpg">
					  		</a>
			  				<div class="media-body">
			  					<h4 class="media-heading"><a href="index.php?r=site/questionDetail&qname='.$q->qname.'&qtime='.$q->qtime.'">'.$q->qname.'</a></h4>
				  				<div id="listContent">'.$q->qcontent.'</div>		
								<div id="answerInfo">
									<div id="myColName">
							    		<span class="fui-user">
							    		'.$q->quser.'
							    		</span>
						    		</div>
						    		<div id="myColLike">
						    			<span class="fui-time"> '.$q->qtime.'</span>
							    		
						    		</div>
						    		<div id="myColAns">
							    		<span class="fui-new"> '.$q->qans.'</span>
						    		</div>
						    		<div id="myColLike">
							    		<a href="#"><span class="fui-heart"> '.$q->qlike.'</span></a>
						    		</div>
				    			</div>
			  				</div>
						<HR>
						</div>
						
					';
					$i=$i+1;
				}
			?>		  		
		</div>

	</div>

		<HR>

		<div id="pager" style="display:none">	
			<div class="pagination">
	            <ul>

	              <li class="previous"><a href="#fakelink" class="fui-arrow-left"></a></li>
	              <li id="id_page1" class="active"><a href="index.php?r=site/list&pageNum=1">1</a></li>
	              <?php
	              	echo '<li style="display:none" id="id_prePage">'.$pageNum.'</li>';
	              	$pages=$pages-1;
	              	$i=2;
	              	while ($pages>0) {
	              	 	echo '<li id="id_page'.$i.'"><a href="index.php?r=site/list&pageNum='.$i.'">'.$i.'</a></li>';
	              	 	$i=$i+1;
	              	 	$pages=$pages-1;
	              	} 
	              ?>	              
	              <li class="next"><a href="#fakelink" class="fui-arrow-right"></a></li>
	            </ul>
	        </div>
		</div>
		
</div>