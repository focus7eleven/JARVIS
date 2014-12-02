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
    var i="id_page"+present;
    document.getElementById(i).className="active";
    
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
					$sql = "SELECT COUNT(*) as users FROM questionlike 
			    			WHERE qliker='".Yii::app()->user->name."' 
			    			and qname='".$q->qname."' 
			    			and qtime='".$q->qtime."'";
			    	$command = Yii::app()->db->createCommand($sql);  
					$results = $command->queryAll();    
					$numUsers = (int)$results[0]["users"];
					$flag=false;
					if($numUsers>=1)
						$flag=true; 
					echo '
						<div class="media" id="id_'.$i.'" style="display:none">
					  		<a class="media-left">
					    		<img src="uploads/head_'.$q->quser.'.jpg" alt="uploads/myThumb.jpg">
					  		</a>
			  				<div class="media-body">
			  					<h4 class="media-heading"><a id="id_qname'.$i.'" href="index.php?r=site/questionDetail&qname='.$q->qname.'&qtime='.$q->qtime.'">'.$q->qname.'</a></h4>
				  				<div id="listContent">'.$q->qcontent.'</div>		
								<div id="answerInfo">
									<div id="myColName">
							    		<span class="fui-user">
							    		'.$q->quser.'
							    		</span>
						    		</div>
						    		<div id="myColTime">
						    			<span class="fui-time"> '.$q->qtime.'</span>
						    			<span id="id_qtime'.$i.'" style="display:none">'.$q->qtime.'</span>						    		
						    		</div>
						    		<div id="myColAns">
							    		<span class="fui-new"> '.$q->qans.'</span>
						    		</div>
						    		<div id="myColLike">';
						    		if(!$flag){
						    			echo '
							    		<a href="#"><span class="fui-heart" onclick="list_like('.$i.')" id="id_qlike'.$i.'"> '.$q->qlike.'</span></a>
							    		<a href="#"><span class="fui-check" onclick="list_cancel_like('.$i.')" style="display:none" id="id_qliked'.$i.'"> 取消赞</span></a>
						    		</div>
				    			</div>
			  				</div>
						<HR>
						</div>						
					';
									}else{
										echo '
							    		<a href="#"><span class="fui-heart" onclick="list_like('.$i.')" style="display:none" id="id_qlike'.$i.'"> '.$q->qlike.'</span></a>
							    		<a href="#"><span class="fui-check" onclick="list_cancel_like('.$i.')" id="id_qliked'.$i.'"> 取消赞</span></a>
						    		</div>
				    			</div>
			  				</div>
						<HR>
						</div>						
					';
									}
					$i=$i+1;
				}
			?>		  		
		</div>

	</div>

		<HR>

		<div id="pager" style="display:none">	
			<div class="pagination">
	            <ul>
	              <?php
	              	if($pageNum>1){
	              	echo'
	              		<li class="previous"><a href="index.php?r=site/list&pageNum='.($pageNum-1).'" class="fui-arrow-left"></a></li>
	              		';
	              	}
	              ?>
	              
	              <li id="id_page1"><a href="index.php?r=site/list&pageNum=1">1</a></li>

	              <?php
	              	echo '<li style="display:none" id="id_prePage">'.$pageNum.'</li>';
	              	$temp_pages=$pages-1;
	              	$i=2;
	              	while ($temp_pages>0) {
	              	 	echo '<li id="id_page'.$i.'"><a href="index.php?r=site/list&pageNum='.$i.'">'.$i.'</a></li>';
	              	 	$i=$i+1;
	              	 	$temp_pages=$temp_pages-1;
	              	} 
	              ?>

	              <?php
	              	if($pageNum<$pages){
	              	echo'
	              		<li class="next"><a href="index.php?r=site/list&pageNum='.($pageNum+1).'" class="fui-arrow-right"></a></li>
	              		';
	              	}
	              ?>	              
	              
	            </ul>
	        </div>
		</div>
		
</div>