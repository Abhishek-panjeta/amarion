<?php
session_start();
include("dbconnection.php");
include("checklogin.php");
check_login();
error_reporting(0);
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$company=$_POST['company'];
	$wdd=$_POST['wdd'];
	$seo=$_POST['seo'];
	$swd=$_POST['swd'];
	$fwd=$_POST['fwd'];
	$whs=$_POST['whs'];
	$ed=$_POST['ed'];
	$opi=$_POST['opi'];
	$dba=$_POST['dba'];
	$nd=$_POST['nd'];
	$cms=$_POST['cms'];
	$smo=$_POST['smo'];
	$dwd=$_POST['dwd'];
	$dr=$_POST['dr'];
	$wm=$_POST['wm'];
	$wta=$_POST['wta'];
	$ld=$_POST['ld'];
	$osc=$_POST['osc'];
	$other=$_POST['other'];
	$query=$_POST['query'];
	$pd=date('Y-m-d');
    $uid=$_REQUEST['id'];
mysqli_query($con,"update prequest set name = '".$name."', email = '".$email."', contactno = '".$contact."', company = '".$company."', wdd = '".$wdd."', cms = '".$cms."', seo = '".$seo."', smo = '".$smo."', swd = '".$swd."', dwd = '".$dwd."', fwd = '".$fwd."', dr = '".$dr."', whs = '".$whs."', wm = '".$wm."', ed = '".$ed."', wta = '".$wta."', opi = '".$opi."', ld = '".$ld."', da = '".$dba."', osc = '".$osc."', nd = '".$nd."', others = '".$other."', query = '".$query."', posting_date ='".$pd."' where id ='".$uid."'");
echo "<script>alert('Query received. We will contact you soon.');</script>";  
echo "<script>window.location.href='user-manage-quotes.php'</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>𝔄𝔪𝔞𝔯𝔦𝔬𝔫 | Request Quote</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />

<link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
</head>
<body class="">
<?php include("header.php");?>
<div class="page-container row-fluid">
	<?php include("leftbar.php");?>
	<div class="clearfix"></div>
    <!-- END SIDEBAR MENU --> 
  </div>
  </div>
  <a href="#" class="scrollup">Scroll</a>
   <div class="footer-widget">		
	<div class="progress transparent progress-small no-radius no-margin">
		<div data-percentage="79%" class="progress-bar progress-bar-success animate-progress-bar" ></div>		
	</div>
	<div class="pull-right">
	</div>
  </div>
  <!-- END SIDEBAR --> 
  <!-- BEGIN PAGE CONTAINER-->
  <div class="page-content"> 
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <div id="portlet-config" class="modal hide">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button"></button>
        <h3>Widget Settings</h3>
      </div>
      <div class="modal-body"> Widget settings form goes here </div>
    </div>
    <div class="clearfix"></div>
    <div class="content">  
		<div class="page-title">	
			<h3>Request a Quote</h3>
     
	
             <div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                            <div class="panel panel-default">
                             
                                <div class="panel-body">
                                    <p>Please click below mention services of your interest to receive quotation for the same:</p>
                                </div>
                                <div class="panel-body">                                                                        
                                    
                                    <div class="row">
                                        
                                        <div class="col-md-6">
 <?php
 function checked($value)
 {
     
     if (strlen($value)>0) {
        print_r($value);
         return 'checked';
     }
 
     return '';
 }
$uid=$_REQUEST['id'];
$query=mysqli_query($con,"select * from prequest where id ='".$uid."'");
while($rw=mysqli_fetch_array($query)){
    switch ($rw) {
        case 'value':
            # code...
            break;
        
        default:
            # code...
            break;
    }
      ?>                                          
<p><?php  if (strlen($rw['cms'])>0) echo $rw['cms']; else echo "Hal bhala"?></p>
    <div class="form-group">
    <label class="col-md-3 control-label">Name </label>
    <div class="col-md-9">                                            
    <div class="input-group">  
        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
         <input type="text" name="name" class="form-control" value="<?php echo $rw['name'];?>"/>
          </div>                                            
                                                
        </div>
       </div>
                                            
        <div class="form-group">                                        
   <label class="col-md-3 control-label">Contact no</label>
  <div class="col-md-9 col-xs-12">
  <div class="input-group">
   <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
    <input type="text" name="contact" class="form-control" value="<?php echo $rw['contactno'];?>"/>
     </div>            
       </div>
     </div>
                                      
                                            
                                            
<div class="form-group">
<label class="col-md-3 control-label">Service Required :</label>
    <div class="col-md-9">                                                                                                                                        
                                             <label class="check">
                                             <input type="checkbox" class="icheckbox" name="wdd" value="Website Design & Development" <?php if (strlen($rw['wdd'])>0){?> checked="checked" <?php }?> /> Website Design & Development</label><br>
                                             <label class="check">
                                             <input type="checkbox" class="icheckbox" name="seo" value="SEO (Search Engine Optimization)" <?php if (strlen($rw['seo'])>0){?> checked="checked" <?php }?> />SEO (Search Engine Optimization)	</label><br>
                                             <label class="check">
                                             <input type="checkbox" class="icheckbox" name="swd" value="Static Website Design" <?php if (strlen($rw['swd'])>0){?> checked="checked" <?php }?>  /> Static Website Design</label><br>
                                             <label class="check">
                                             <input type="checkbox" class="icheckbox" name="fwd" value="Flash Website Development" <?php if (strlen($rw['fwd'])>0){?> checked="checked" <?php }?> /> Flash Website Development</label><br>
                                             <label class="check">
                                             <input type="checkbox" class="icheckbox" name="whs" value="Web Hosting Services" <?php if (strlen($rw['whs'])>0){?> checked="checked" <?php }?> /> Web Hosting Services</label><br>
                                             <label class="check">
                                             <input type="checkbox" class="icheckbox" name="ed"  value="Ecommerce Development" <?php if (strlen($rw['ed'])>0){?> checked="checked" <?php }?> /> Ecommerce Development</label><br>
                                                 <label class="check">
                                             <input type="checkbox" class="icheckbox" name="opi" value="Online Payment Integration" <?php if (strlen($rw['opi'])>0){?> checked="checked" <?php }?> /> Online Payment Integration</label><br>
                                                 <label class="check">
                                             <input type="checkbox" class="icheckbox" name="dba" value="Dash board Application" <?php if (strlen($rw['dba'])>0){?> checked="checked" <?php }?> /> Dash board Application</label><br>
                                                 <label class="check">
                                             <input type="checkbox" class="icheckbox" name="nd" value="NewsLetter Design" <?php if (strlen($rw['nd'])>0){?> checked="checked" <?php }?> /> NewsLetter Design</label>
                                                
                                                  
                                                </div>
                                            </div>
                                            
                                          
                                            
                                        </div>
                                        <div class="col-md-6">
                                            
                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Email</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                        <input type="email" name="email" class="form-control" value="<?php echo $rw['email'];?>">                                            
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                            
                                               <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Company</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" name="company" class="form-control datepicker" value="<?php echo $rw['company'];?>" required>                                            
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                       
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label"></label>
                                                <div class="col-md-9">                                                                                                                                        
                                                 <label class="check">
                                             <input type="checkbox" class="icheckbox" name="cms" value="CMS (Content Management System)" <?php if (strlen($rw['cms'])>0){?> checked="checked" <?php }?> />CMS (Content Management System)</label><br>
                                             <label class="check">
                                             <input type="checkbox" class="icheckbox" name="smo" value="SMO (Social Media Optimization)	" <?php if (strlen($rw['smo'])>0){?> checked="checked" <?php }?> />SMO (Social Media Optimization)		</label><br>
                                             <label class="check">
                                             <input type="checkbox" class="icheckbox" name="dwd" value="Dynamic Website Design" <?php if (strlen($rw['dwd'])>0){?> checked="checked" <?php }?> /> Dynamic Website Design</label><br>
                                             <label class="check">
                                             <input type="checkbox" class="icheckbox" name="dr" value="Domain Registration" <?php if (strlen($rw['dr'])>0){?> checked="checked" <?php }?> /> Domain Registration </label><br>
                                             <label class="check">
                                             <input type="checkbox" class="icheckbox" name="wm" value="Website Maintenance" <?php if (strlen($rw['wm'])>0){?> checked="checked" <?php }?> /> Website Maintenance</label><br>
                                             <label class="check">
                                             <input type="checkbox" class="icheckbox" name="wta" value="Walk Through Animation" <?php if (strlen($rw['wta'])>0){?> checked="checked" <?php }?> /> Walk Through Animation</label><br>
                                                 <label class="check">
                                             <input type="checkbox" class="icheckbox" name="ld" value="Logo Design" <?php if (strlen($rw['ld'])>0){?> checked="checked" <?php }?> /> Logo Design</label><br>
                                                 <label class="check">
                                             <input type="checkbox" class="icheckbox" name="osc" value="Open Source Customization" <?php if (strlen($rw['osc'])>0){?> checked="checked" <?php }?> /> Open Source Customization</label><br>
                                                 <label class="check">
                                             <input type="checkbox" class="icheckbox" name="other" value="Others" <?php if (strlen($rw['other'])>0){?> checked="checked" <?php }?> /> Others </label>
                                                   
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div style="margin-top:20px;" class="col-md-6">
                                         <div class="form-group">
                                                <label class="col-md-3 control-label">Query</label>
                                                <div class="col-md-9 col-xs-12">                                            
                                                    <textarea class="form-control" rows="5" name="query" required><?php echo $rw['query'];?></textarea>
                                                </div>
                                            </div></div>
                                        
                                    </div>
   <?php } ?>   
                                </div>
                                <div class="panel-footer">
                                    <button class="btn btn-default">Clear Form</button>                                    
                                    <input value="Update" type="submit" name="submit" class="btn btn-primary pull-right">
                                </div>
                            </div>
                            </form>
                            
                        </div>
                    </div>            
                                    
                                    
                                   
                                   
                                    
                               
                                    
                                    
                                      
             
            	
		</div>
    </div>
  </div>
<!-- BEGIN CHAT --> 

 </div>
<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script> 
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
<script src="assets/plugins/breakpoints.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js" type="text/javascript"></script>
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
<script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<script src="assets/js/core.js" type="text/javascript"></script> 
<script src="assets/js/chat.js" type="text/javascript"></script> 
<script src="assets/js/demo.js" type="text/javascript"></script> 

</body>
</html>