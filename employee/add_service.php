<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Gem Service</title>
    <link type="text/css" rel="stylesheet" href="css/font-awesome.css">
    <link type="text/css" rel="stylesheet" href="css/material-design-iconic-font.css">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="css/animate.css">
    <link type="text/css" rel="stylesheet" href="css/layout.css">
    <link type="text/css" rel="stylesheet" href="css/components.css">
    <link type="text/css" rel="stylesheet" href="css/widgets.css">
    <link type="text/css" rel="stylesheet" href="css/plugins.css">
    <link type="text/css" rel="stylesheet" href="css/pages.css">
    <link type="text/css" rel="stylesheet" href="css/bootstrap-extend.css">
    <link type="text/css" rel="stylesheet" href="css/common.css">
    <link type="text/css" rel="stylesheet" href="css/responsive.css">
</head>
 <script type="text/javascript" src="print/jquery.min.js"></script>

<body class="leftbar-view">
<?php include 'header.php' ?>
<section class="main-container">
<div class="container-fluid">
<?php include ("db/db_connect.php"); ?>


    <div class="row">
        <div class="col-md-12">
            <div class="widget-wrap material-table-widget">

                <div class="widget-container margin-top-0">
                    <div class="widget-content">
           
 <div class="row">
                                <div class="col-md-6">
                                    <form class="form-horizontal" id="addcity">
									   <div class="form-group">
                                            <label class="col-md-4 control-label">Select Zone</label>
                                            <div class="col-md-8">
                                                <select class="form-control"  name="zone" id="zone"  onChange="getplace(this.value)">>
													<option value="0">SELECT ZONE</option>
<?php $x = mysql_query("select * from service_zone");
														while($y = mysql_fetch_array($x))
														{
															
														?><option value="<?php echo $y['id'];?>"><?php echo $y['zone'];?></option> 									
														<?php }
 														?>
												
												  </select>
                                            </div>
                                        </div>
										 <div class="form-group">
                                            <label class="col-md-4 control-label">Select Plzce</label>
                                            <div class="col-md-8">
                                            <select name="place"  class="form-control" id="hide">
	<option value=''>Select Area First</option>
        </select>
		<span id="show"></span>
		</div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Engineer Code</label>
                                            <div class=" col-md-8">
                                                <input type="text" class="form-control" name="eng_code" id="code" placeholder="Enter Engineer Code">
                                               
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="col-md-4 control-label">Engineer Name</label>
                                            <div class=" col-md-8">
                                                <input type="text" class="form-control" id="name" name="eng_name" placeholder="Enter Engineer Name">
                                               
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="col-md-4 control-label">Engineer Email</label>
                                            <div class=" col-md-8">
                                                <input type="text" class="form-control" name="eng_email" id="email" placeholder="Enter Engineer Email">
                                               
                                            </div>
                                        </div>
								 <div class="form-group col-md-12" style="text-align:center">		<span id="errors"  style="color:#ff0000;text-align:center"></span></div>
								  <div class="form-group col-md-12" style="text-align:center">		<span id="success"  style="color:#139c9b;text-align:center"></span></div>
                                         <div class="form-group">
                                            <label class="col-md-4 control-label">&nbsp;</label>
                                            <div class="col-md-8">
                                                <div class="form-actions">
                                                    <button type="button" name="button" class="btn btn-primary proceed" id="login_button">Save changes</button>
                                                    <button type="button" class="btn btn-default">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                       
                                     
                                       </form>
                                </div>
                                </div>
                   
                      
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Footer Start Here -->
<footer class="footer-container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="footer-left">
                    <span>© <?php echo date('Y');?> <a href="http://www.banyaninfotech.com">The Banyan Infotech</a></span>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="footer-right">
                    <span class="footer-meta">Crafted with&nbsp;<i class="fa fa-heart"></i>&nbsp;by&nbsp;<a href="http://themeforest.net/user/westilian">westilian</a></span>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Footer End Here -->
</section>

<script src="js/lib/jquery.js"></script>
<script src="js/lib/jquery-migrate.js"></script>
<script src="js/lib/bootstrap.js"></script>
<script src="js/lib/jquery.ui.js"></script>
<script src="js/lib/jRespond.js"></script>
<script src="js/lib/nav.accordion.js"></script>
<script src="js/lib/hover.intent.js"></script>
<script src="js/lib/hammerjs.js"></script>
<script src="js/lib/jquery.hammer.js"></script>
<script src="js/lib/jquery.fitvids.js"></script>
<script src="js/lib/scrollup.js"></script>
<script src="js/lib/smoothscroll.js"></script>
<script src="js/lib/jquery.slimscroll.js"></script>
<script src="js/lib/jquery.syntaxhighlighter.js"></script>
<script src="js/lib/velocity.js"></script>
<script src="js/lib/smart-resize.js"></script>

<!--Tables-->
<script src="js/lib/footable.all.js"></script>

<!--Data Tables-->
<script src="js/lib/jquery.dataTables.js"></script>
<script src="js/lib/dataTables.responsive.js"></script>
<script src="js/lib/dataTables.tableTools.js"></script>
<script src="js/lib/dataTables.bootstrap.js"></script>

<!--Exportable Data Tables-->
<script src="js/lib/tableExport.js"></script>
<script src="js/lib/jquery.base64.js"></script>
<script src="js/lib/sprintf.js"></script>
<script src="js/lib/jspdf.js"></script>
<script src="js/lib/base64.js"></script>

<!--Forms-->
<script src="js/lib/jquery.maskedinput.js"></script>
<script src="js/lib/jquery.validate.js"></script>
<script src="js/lib/jquery.form.js"></script>

<!--Select2-->
<script src="js/lib/select2.full.js"></script>
<script src="js/lib/j-forms.js"></script>
<script src="js/apps.js"></script>

<script>
$(function () {

    $("#login_button").click(function () {
      
var data = $("#addcity").serialize();
var username = $("#zone").val();
 var password = $("#city").val();

 var code = $("#code").val();
  var name = $("#name").val();
   var email = $("#email").val();
        if (username == '0')
        {
            $('#errors').html('Please Select zone');
            $("#zone").focus();

            return false;
        }
		 if (password == '')
        {
            $('#errors').html("Please Select city");
            $("#city").focus();

            return false;
        }
		if (code == '')
        {
            $('#errors').html('Enter code');
            $("#code").focus();

            return false;
        }
		 if (name == '')
        {
            $('#errors').html("Enter name");
            $("#name").focus();

            return false;
        }
		if (email == '')
        {
            $('#errors').html('Enter email');
            $("#email").focus();

            return false;
        }
		
        else{
          
$.ajax({
type : 'POST',
url : 'add_service_man_process.php',
data : data,
beforeSend: function(){
$("#errors").html('');

},
success : function(response){

  if(response==1){
$("#success").html(" Service Engineer added successfully!");
  }
  else{
$("#errors").html("Servie Engineer Already Exist");
  }
document.getElementById("addcity").reset();
 setTimeout(function () {
                            $('#success').html('');
                        }, 5000);
						
						
						 setTimeout(function () {
                            $('#errors').html('');
                        }, 5000);


}
});
}
return false;
});
});
</script>


<script>

	function getplace(countryId) {	

var id=countryId;            
                // alert(id);
if(id!=0){
                // alert('sss');
                $.ajax({
                    type: "POST",
                    url: 'find_state.php',
                    data: {
                        id: id,
                    },
                    success: function (data)
                    { $('#show').show();
						 $('#hide').hide();
                    $('#show').html(data);
                    },
                });






            }
else{
	 $('#hide').show();
	  $('#show').hide();
}
}
	</script>
</body>
</html>