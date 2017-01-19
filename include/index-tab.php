<!-- ======================= Main Tab Home Page ======================= -->
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 nopadding">
    <div class="jumpo row">
        <div class="clearfix">
            <div class="tab-content nopadding">
                <!-- ======================= Corporate Tab ======================= -->
                <div id="corporate" class="container tab-pane fade">
                    <?php include("corporate-tab.php"); ?>
                </div>
                <!-- ======================= End Corporate Tab ======================= -->
                
                <!-- ======================= New and Event Tab ======================= -->
                <div id="news-events" class="tab-pane fade in active">
                    <!-- ======================= Corporate Tabs lv2 ======================= -->
                    <div class="row">
                       <div class="container">
                            <ul id="menu-select-tab" class="nav nav-pills">
                                <li class="active"> <a href="#news-events-ne" data-toggle="tab">News & Events</a> </li>
                                <li><a href="#news-events-vacancies" data-toggle="tab">Vacancies</a> </li>
                            </ul>
                        </div>
                    </div>
                    <!-- ======================= End Corporate Tabs lv2 ======================= -->
                    
                    <!-- ======================= Corporate Content ======================= -->
                    <div class="news-events tab-content index-left in active">
                        <?php include("newevent-tab.php"); ?>
                        <?php include("vacancies-tab.php"); ?>
                    </div>
                    <!-- ======================= End Corporate Content ======================= --> 
                </div>
                <!-- ======================= End New and Event Tab ======================= -->
                
                <!-- ======================= Employees Tab ======================= -->
                <div id="employees" class="tab-pane fade index-left">
                    <?php include("employees-tab.php"); ?>
                </div>
                <!-- ======================= End Employees Tab ======================= -->
                
                <!-- ======================= My page Tab ======================= -->
                <div id="my-page" class="tab-pane fade nopadding index-left clearfix">
                     <?php include("my-page-tab.php"); ?>
                </div>
                <!-- ======================= End My page Tab ======================= -->
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
          var box_event = $("#news-events-ne .event-content"),
                btn_load_event = $("#news-events-ne #loadMore"),
              
                box_vacan = $("#news-events-vacancies .event-content"),
                btn_load_vacan = $("#news-events-vacancies #loadMore"),
              
                box_wel_board = $(".wel-board .empoly-content"),
                btn_load_wel_board = $(".wel-board #loadMore"),
              
                box_staff_move = $(".staff-move .empoly-content"),
                btn_load_staff_move = $(".staff-move #loadMore"),
                
                box_happ_birth = $(".happy-birth .empoly-content"),
                btn_load_happ_birth = $(".happy-birth #loadMore");

                box_event.slice(0, 4).show();
                btn_load_event.on('click', function (loadmore) {
                    loadmore.preventDefault();
                    $("#news-events-ne .event-content:hidden").slice(0, 4).slideDown();
                    if ($("#news-events-ne .event-content:hidden").length == 0) {
                        btn_load_event.fadeOut('slow');
                    }
                });

                box_vacan.slice(0, 4).show();
                btn_load_vacan.on('click', function (loadmore) {
                    loadmore.preventDefault();
                    $("#news-events-vacancies .event-content:hidden").slice(0, 4).slideDown();
                    if ($("#news-events-vacancies .event-content:hidden").length == 0) {
                        btn_load_vacan.fadeOut('slow');
                    }
                });
            
                box_wel_board.slice(0, 2).show();
                btn_load_wel_board.on('click', function (loadmore) {
                    loadmore.preventDefault();
                    $(".wel-board .empoly-content:hidden").slice(0, 4).slideDown();
                    if ($(".wel-board .empoly-content:hidden").length == 0) {
                        btn_load_wel_board.fadeOut('slow');
                    }
                });
            
                box_staff_move.slice(0, 2).show();
                btn_load_staff_move.on('click', function (loadmore) {
                    loadmore.preventDefault();
                    $(".staff-move .empoly-content:hidden").slice(0, 4).slideDown();
                    if ($(".staff-move .empoly-content:hidden").length == 0) {
                        btn_load_staff_move.fadeOut('slow');
                    }
                });
            
                box_happ_birth.slice(0, 2).show();
                btn_load_happ_birth.on('click', function (loadmore) {
                    loadmore.preventDefault();
                    $(".happy-birth .empoly-content:hidden").slice(0, 4).slideDown();
                    if ($(".happy-birth .empoly-content:hidden").length == 0) {
                        btn_load_happ_birth.fadeOut('slow');
                    }
                });
//                Menu  Select
                $(".dropdown-menu li a").click(function(){
                    var selText = $(this).text();
                    $(this).parents('.dropdown').find('.dropdown-toggle').html(selText+' <span class="caret"></span>');
                  });
        });
    </script> 
</div>
<!-- ======================= Main Tab Home Page ======================= -->