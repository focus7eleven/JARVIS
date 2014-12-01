function mOver(id)
{
	document.getElementById(id.id).className="active";
}

function mOut(id)
{
	document.getElementById(id.id).className="inactive";
}


function validate_required1(field)
{
with (field)
  {
	  if (value==null||value==""){
	  	document.getElementById('id_username').className="form-group has-error";
	  	return false;
	  }
	  else {
	  	document.getElementById('id_username').className="form-group";
	  	return true;
	  }
  }
}

function validate_required2(field)
{
with (field)
  {
	  if (value==null||value==""){
	  	document.getElementById('id_password').className="form-group has-error";
	  	return false;
	  }
	  else {
	  	document.getElementById('id_password').className="form-group";
	  	return true;
	  }
  }
}

function validate_required3(field)
{
with (field)
  {
	  if (value==null||value==""){
	  	document.getElementById('id_sUser').className="form-group has-error";
	  	return false
	  }
	  else {
	  	document.getElementById('id_sUser').className="form-group";
	  	return true
	  }
  }
}

function validate_required4(field)
{
with (field)
  {
	  if (value==null||value==""){
	  	document.getElementById('id_sPsw1').className="form-group has-error";
	  	return false
	  }
	  else {
	  	document.getElementById('id_sPsw1').className="form-group";
	  	return true
	  }
  }
}

function validate_required5(field)
{
with (field)
  {
	  if (value==null||value==""){
	  	document.getElementById('id_sPsw2').className="form-group has-error";
	  	return false
	  }
	  else {
	  	document.getElementById('id_sPsw2').className="form-group";
	  	return true
	  }
  }
}

function validate_required6(field1,field2)
{
	  if (field1.value!=field2.value){
	  	document.getElementById('id_sPsw1').className="form-group has-error";
	  	document.getElementById('id_sPsw2').className="form-group has-error";
	  	return false
	  }
	  else {
	  	document.getElementById('id_sPsw1').className="form-group";
	  	document.getElementById('id_sPsw2').className="form-group";
	  	return true
	  }
}

function validate_required7(field)
{
with (field)
  {
	  if (value==null||value==""){
	  	document.getElementById('id_sHead').className="form-group has-error";
	  	return false
	  }
	  else {
	  	document.getElementById('id_sHead').className="form-group";
	  	return true
	  }
  }
}

function validate_required8(field)
{	
  	if(field.name=='qname'){
  	  	if(field.value==""){ 
  	  		document.getElementById('id_qName').className="form-group has-error";
	  		return false
  	  	}else{
			document.getElementById('id_qName').className="form-group";
	  		return true
  	  	}	
  	}else if(field.name=='qtag'){ 
  	  	if(field.value==""){ 
  	  		document.getElementById('id_qTag').className="form-group has-error";
	  		return false
  	  	}else{
			document.getElementById('id_qTag').className="form-group";
	  		return true
  	  	}				
  	}else if(field.name=='qcontent'){ 
  	  	if(field.value==""){ 
  	  		document.getElementById('id_qContent').className="form-group has-error";
	  		return false
  	  	}else{
			document.getElementById('id_qContent').className="form-group";
	  		return true
  	  	}		
  	}
}


function validate_like()
{
	var qname=document.getElementById('id_qname').innerHTML;
	var qtime=document.getElementById('id_qtime').innerHTML;
	$.ajax(
		{
			url:"index.php?r=detail/questionlike&qname="+qname+"&qtime="+qtime,
			async:false,
			success:function(data){
				var data=JSON.parse(data);
				if(!data['result']){
					//alert(data['q'])
					$("#id_qlike").fadeOut("slow");
  					$("#id_qliked").fadeIn(2500);
				}else{
					alert(data['result']);
				}
		}
	});
	  	
}

function cancel_like()
{
	var qname=document.getElementById('id_qname').innerHTML;
	var qtime=document.getElementById('id_qtime').innerHTML;
	$.ajax(
		{
			url:"index.php?r=detail/cancellike&qname="+qname+"&qtime="+qtime,
			async:false,
			success:function(data){
				var data=JSON.parse(data);
				if(data['result']){					
  					$("#id_qliked").fadeOut("slow");
  					$("#id_qlike").fadeIn(2500);
				}else{
					alert(data['result']);
				}
		}
	});
}

function validate_questionform(questionform)
{
with(questionform)
{
	var flag1=validate_required8(qname);
	var flag2=validate_required8(qtag);
	var flag3=validate_required8(qcontent);
	if(flag1==false){ 
		qname.focus();
		return false;
	}else if(flag2==false){ 
		qtag.focus();
		return false;
	}else if(flag3==false){ 
		qcontent.focus();
		return false;
	}else if(flag1&&flag2&&flag3){ 
		return true;
	}
} 
}


function validate_signUp(signUpform)
{
with(signUpform)
{
		var flag3=validate_required3(username);
  	    var flag4=validate_required4(password1);
  	    var flag5=validate_required5(password2);
  	    var flag6=true;
  	    var flag7=validate_required7(head);
  	    if(flag4&&flag5)
  	    	flag6=validate_required6(password1,password2);

  	    if(flag3==false){
	        username.focus();
	        return false
	  	}else if(flag4==false){ 
	  	  	password1.focus();
	  	  	return false
	  	}else if(flag5==false){
	  	  	password2.focus();
	  	  	return false
	  	}else if(flag6==false){
	  		$("#id_signUpPanel").slideDown("slow");
		    setTimeout(function () { 
		    	$("#id_signUpPanel").slideUp(1100);
		    },2200);
		    password2.focus();
	  	  	return false
	  	}else if(flag7==false){
	  		head.focus();
	  		return false;
	  	}else{
	  		var isExist=false;
	  		$.ajax(
	  	    	{
	  	    		url:"index.php?r=site/signupvalidate&username="+username.value+"&password1="+password1.value,
	  	    		async:false,
	  	    		success:function(data){
	  	    			var data=JSON.parse(data);
	  	    			//alert(data['result']);
	  	    			if(data['result']){
	  	    				document.getElementById('id_sUser').className="form-group has-error";
	  	    				
	  	    				$("#id_sameUsernamePanel").slideDown("slow");
		    				setTimeout(function () { 
		       					$("#id_sameUsernamePanel").slideUp(1100);
		    				},2200);
		    				isExist=false;
	  	    			}else{
	  	    				
	  	    				isExist=true;
	  	    			}
					}
	  	    	});
	  	    
	  	    return isExist;
	  	}
}
}








function validate_form(thisform)
{

with (thisform)
  {
  	  var flag1=validate_required1(username);
  	  var flag2=validate_required2(password);
	  if(flag1==false){
	      username.focus();
	      return false;
	  }else if(flag2==false){ 
	  	  password.focus();
	  	  return false;
	  }else if(flag1==true&&flag2==true){
	  		var flag=false;
	  	    $.ajax(
	  	    	{
	  	    		url:"index.php?r=site/validate&username="+username.value+"&password="+password.value,
	  	    		async:false,
	  	    		success:function(data){
	  	    			var data=JSON.parse(data);
	  	    			//alert(data['result']);
	  	    			if(data['result']){
	  	    				flag=true;
	  	    			}else{
	  	    				document.getElementById('id_username').className="form-group has-error";
	  	    				document.getElementById('id_password').className="form-group has-error";
	  	    				$("#id_validatePanel").slideDown("slow");
		    				setTimeout(function () { 
		       					$("#id_validatePanel").slideUp(1100);
		    				},2200);
	  	    				flag=false;
	  	    			}
					}
	  	    	});
	  	    
	  	    return flag;
	  }
  }
}




