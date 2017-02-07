<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ILA Intranet</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico"/>
    <?php include("include/bootstrap.php"); ?>
    
    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/hover.css" rel="stylesheet">
    <!-- Custom JS -->
    
    
</head>
   
<body>
        <?php include("include/leftmenu.php"); ?>
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <!-- Page Content Main-->
<!--       <div class="container-fluid">-->
            <div class="warp-content container">
               <!-- Top menu -->
                <div class="topmenu container">
                    <ul class="nav nav-pills">
<!--                        <li><a title="Home" href="index.php"><i class="fa fa-home" aria-hidden="true"></i></a></li>-->
                        <li class="parentHideRight"><a data-toggle="tab" href="#corporate">Corporate</a></li>
                        <li class="active"><a data-toggle="tab" href="#news-events">News and Events</a></li>
                        <li><a data-toggle="tab" href="#employees">Employees</a></li>
                        <li><a data-toggle="tab" href="#my-page">My page</a></li>
                        <div class="profile">
                            <div class="btn-group navbar-right">
                                <button type="button" class="btn">Profile</button>
                                <button type="button" class="btn btn-mirror dropdown-toggle" data-toggle="dropdown">
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
                <div class="tab-content flex flex-between">
                   
                    <?php include("include/index-tab.php"); ?>
                    <?php include("include/workspace.php"); ?>
                    
                    <div class="feedback">
                        <a class="btn-feedback" target="_blank"  title="Give your Feedback" href="https://docs.google.com/a/ilavietnam.edu.vn/forms/d/e/1FAIpQLScDQ2V4WgBB7fSaCqV_vqPdG61LMh6QdeyB67jXREzC2htAHg/viewform"><span class="fa fa-commenting" aria-hidden="true"></span></a>
                    </div>
                </div>
            </div>
            <!-- Page Content Main-->
            <!---------------  Footer --------------->
            <?php include("include/footer.php"); ?>
            <!--------------- /Footer --------------->
        </div>
        <!-- /#page-content-wrapper -->
<script src="js/jquery.mCustomScrollbar.js"></script>
<script src="js/classie.js"></script>
<script src="js/svganimations.js"></script>
<!--<script src="js/scrip.js"></script>-->
<script>
    (function ($) {
        $(window).on("load", function () {
            $(".event-tab-content").mCustomScrollbar({
                setHeight: 390
                , theme: "light-2"
            });
            $(".employ-tab-content").mCustomScrollbar({
                setHeight: 145
                , theme: "light"
            });
        });
        //////////////////////////////Top menu////////////////////////////
        $('ul.nav li').on('click', function () {
            var activeId = $(this).find('a').attr('href'); // lấy ra id tab đang được active
            var dataToggle = $(this).find('a').attr('data-toggle');
            if (activeId.search("http") == -1 && dataToggle != 'modal') {
                // root 
                var parentHideRight = $('.topmenu').find('li.active').attr('class');
                parentHideRight = (parentHideRight && !$(this).closest('.topmenu').html()) ? parentHideRight : "";
                // it
                var hideRight = $(this).attr('class');
                hideRight = (hideRight) ? hideRight : "";
                // child
                var childHideRight = $(activeId).find('li.active').attr('class'); // tìm trong div dang active có id levave record dc kich hoat hay
                childHideRight = (childHideRight) ? childHideRight : "";
                var findClassActive = -1;
                if (parentHideRight.search('parentHideRight') > -1 || childHideRight.search('hideRight') > -1 || hideRight.search('hideRight') > -1 || hideRight.search('parentHideRight') > -1) {
                    $(".workspace").parent().hide();
                }
                else {
                    $(".workspace").parent().show();
                }
            }
        });  
    })(jQuery);
</script>
<script>
        $(document).ready(function () {
              $('#annual-table').DataTable({
                pageLength: 5
                , responsive: true
                , select: false
                , paging:true
                , lengthChange:false
            });
            
            $('#summary-table').DataTable({
                pageLength: 5
                , responsive: true
                , select: false
                , paging:false
                ,searching:false
                ,info:false
            });
            
            $('ul.my-page-nav li').on ('click', function() {
            //  $('ul.side_nav li a').removeClass('current');
            //  $(this).addClass('current');
              var aId = $(this).attr('id');
           // Tìm tất cả thẻ a có giá trị là data-toggle
              var dataToggle = $(this).find('a').attr('data-toggle');
           // dataToggle != 'modal' Xác định popup
              if(aId == 'id_leave_record' && dataToggle != 'modal') {
                $("#my-page").addClass('container');
                $(".my-page-nav").removeClass('col-sm-6 col-md-4');
                $(".my-page-nav").addClass('col-sm-3');
                $(".my-page-content").removeClass('col-sm-6 col-md-8');
                $(".my-page-content").addClass('col-sm-9');
                $(".workspace").parent().hide();
              }
              else if(dataToggle != 'modal') {
                $("#my-page").removeClass('container');
                $(".my-page-nav").removeClass('col-xs-12 col-sm-3');
                $(".my-page-nav").addClass('col-xs-12 col-sm-6 col-md-4');
                $(".my-page-content").removeClass('col-sm-9');
                $(".my-page-content").addClass('col-sm-6 col-md-8');
                $(".workspace").parent().show();
              }
            });
        });
    </script>
</body>
</html>