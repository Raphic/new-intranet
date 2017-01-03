<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Demo EXP</title>
    <?php include("include/bootstrap.php"); ?>
    
    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">
    
    <!-- Custom JS -->
    
    
</head>
   
<body>
        <?php include("include/leftmenu.php"); ?>
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <!-- Page Content Main-->
<!--       <div class="container-fluid">-->
            <!-- Top menu -->
            <div class="topmenu container">
                <ul class="nav nav-pills row">
                    <li id="corporate-tabs"><a data-toggle="tab" href="#corporate">Corporate</a></li>
                    <li class="active"><a data-toggle="tab" href="#news-events">News and Events</a></li>
                    <li><a data-toggle="tab" href="#employees">Employees</a></li>
                    <li class="mypages-tabs"><a data-toggle="tab" href="#my-page">My page</a></li>
                    <div class="profile">
                        <div class="btn-group navbar-right">
                            <button type="button" class="btn btn-primary">Profile</button>
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                    </div>
                </ul>
            </div>
            <!-- End Top menu -->
            
            <div class="warp-content container">
                <div class="tab-content flex flex-between">
                   
                    <?php include("include/index-tab.php"); ?>
                    <?php include("include/workspace.php"); ?>
                    
                </div>
            </div>
            
            <!-- Page Content Main-->
        </div>
        <!-- /#page-content-wrapper -->
<script src="js/jquery.mCustomScrollbar.js"></script>
<script src="js/scrip.js"></script>
<script>
    (function($){
			$(window).on("load",function(){
				$(".event-tab-content").mCustomScrollbar({
					setHeight:390,
					theme:"light-2"
				});
				$(".employ-tab-content").mCustomScrollbar({
					setHeight:145,
					theme:"light"
				});
			});            
		})(jQuery);
        
</script>
<script>
    
$('.topmenu ul.nav li').on ('click', function() {
     var aId = $(this).attr('id'),
           active = $('#id_leave_record').attr('aria-expanded');
     if(aId == 'corporate-tabs') {
      $(".workspace").parent().hide();
     }
     else if(aId == 'mypages-tabs') {
           if(active = true){
               $(".workspace").parent().hide();
           }
         else{
           $(".workspace").parent().show();
         }
     }
   });
</script>
</body>
</html>