
<div id="innerPage">
<form role="form" class="form-horizontal" action="index.php?r=site/question&entrance=1" method="post" enctype="multipart/form-data">
  <div class="form-group">
	<div class="row">
	  	<div class="col-md-1 control-label">
	    	<label for="qname">标题</label>
	    </div>
	    <div class="col-md-11">
	    	<input type="text" class="form-control" name="qname" placeholder="">
	    </div>
	</div>
    
    
  </div>

  <div class="form-group">
  	<div class="row">
	  	<div class="col-md-1 control-label">
	    	<label for="qtag">标签</label>
	    </div>
	    <div class="col-md-11">
	    	<div class="tagsinput-primary">
            	<input name="qtag" class="tagsinput" data-role="tagsinput" placeholder="以回车分隔标签" />
           	</div>
	    </div>
	</div>
  </div>

  <div class="form-group">
    <div class="row">
	  	<div class="col-md-1 control-label">
	    	<label for="qpic">图片</label>
	    </div>
	    <div class="col-md-11">
	    	<input type="file" name="qpic" />
	    </div>
	</div>
    
    
  </div>


  <div class="form-group">
  	<div class="row">
	  	<div class="col-md-1 control-label">
	    	<label for="qcontent">描述</label>
	    </div>
	    <div class="col-md-11">
	    	<textarea name="qcontent" class="form-control" rows="10"></textarea>
	    </div>
	</div>	
  </div>

  <button type="submit" class="btn btn-inverse" id="questionBtn">发布问题</button>

</form>
</div>

