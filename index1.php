<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap EXP</title>
    <?php include("include/bootstrap.php"); ?>
    
    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">
    
    <!-- Custom JS -->
    <script src="js/scrip.js"></script>
    
</head>
   
<body>
    <div id="sidebarleft">
        <div class="overlay"></div>
        <!-- Sidebar -->
        <div id="sidebarleft-wrapper">
            <ul class="sidebarleft-nav">
                <li class="sidebarleft-brand"><a href="#">ILA Intranet</a></li>
                <li> <a data-toggle="collapse" data-parent="#sidebarleft-wrapper" href="#sidebar-sub01">
                            Centres
                            <span class="caret"></span>
                        </a>
                    <ul id="sidebar-sub01" class="panel-collapse collapse list-unstyled in">
                        <li> 
                            <a data-toggle="collapse" data-parent="#accordion" href="#sidebar-sub01a">North <span class="caret"></span></a>
                            <ul id="sidebar-sub01a" class="collapse list-unstyled ">
                                <li><a href="#" title="ILA Cau Giay, Hanoi">TC-HN1</a></li>
                                <li><a href="#" title="ILA Tay Son, Hanoi">TC-HN2</a></li>
                                <li><a href="#" title="ILA Times City, Hanoi">TC-HN3</a></li>
                                <li><a href="#" title="ILA Pho Hue, Hanoi">TC-HN4</a></li>
                                <li><a href="#" title="ILA Kim Ma, Hanoi">TC-HN5</a></li>
                                <li><a href="#" title="ILA My Dinh, Hanoi">TC-HN6</a></li>
                                <li><a href="#" title="ILA Long Bien, Hanoi">TC-HN7</a></li>
                                <li><a href="#" title="ILA Trung Hoa Nhan Chinh, Hanoi">TC-HN8</a></li>
                                <li class="divider"></li>
                                <li><a href="#" title="ILA Le Thanh Tong, Hai Phong">TC-HP1</a></li>
                                <li class="divider"></li>
                                <li><a href="#" title="OSC Ha Noi">OSC_HN</a></li>
                            </ul>
                        </li>
                        <li>
                            <a data-toggle="collapse" data-parent="#sidebarleft-wrapper" href="#sidebar-sub01b">South <span class="caret"></span></a>
                            <ul id="sidebar-sub01b" class="panel-collapse collapse list-unstyled ">
                                <li><a href="#" title="ILA Nguyen Dinh Chieu, Ho Chi Minh City">TC-HCMC1</a></li>
                                <li><a href="#" title="ILA Cong Hoa, Ho Chi Minh City">TC-HCMC2</a></li>
                                <li><a href="#" title="ILA Nguyen Cu Trinh, Ho Chi Minh City">TC-HCMC3</a></li>
                                <!--                           <li><a href="#" title="ILA Hung Vuong, Ho Chi Minh City">TC-HCMC4</a></li>-->
                                <li><a href="#" title="ILA Hung Vuong, Ho Chi Minh City">TC-HCMC5</a></li>
                                <!--
                                    <li><a href="#" title="ILA Nguyen Huu Canh, Ho Chi Minh City">TC-HCMC6</a></li>
                                    <li><a href="#" title="ILA Phu My Hung, Ho Chi Minh City">TC-HCMC7</a></li>
    -->
                                <li><a href="#" title="ILA Phan Xich Long, Ho Chi Minh City">TC-HCMC8</a></li>
                                <li><a href="#" title="ILA Nguyen Huu Canh, Ho Chi Minh City">TC-HCMC9</a></li>
                                <!--                           <li><a href="#" title="">TC-HCMC10</a></li>-->
                                <li><a href="#" title="ILA Phu My Hung, Ho Chi Minh City">TC-HCMC11</a></li>
                                <li><a href="#" title="ILA Go Vap, Ho Chi Minh City">TC-HCMC12</a></li>
                                <!--                           <li><a href="#" title="">TC-HCMC13</a></li>-->
                                <li><a href="#" title="ILA Thu Duc, Ho Chi Minh City">TC-HCMC14</a></li>
                                <li><a href="#" title="ILA An Phu, Ho Chi Minh City">TC-HCMC15</a></li>
                                <li><a href="#" title="ILA Tan Phu, Ho Chi Minh City">TC-HCMC16</a></li>
                                <li><a href="#" title="ILA Phu Lam, Ho Chi Minh City">TC-HCMC17</a></li>
                                <li><a href="#" title="ILA Pham Hung, Ho Chi Minh City">TC-HCMC18</a></li>
                                <!--                           <li><a href="#" title="">TC-HCMC19</a></li>-->
                                <li><a href="#" title="ILA Hoa Binh, Ho Chi Minh City">TC-HCMC20</a></li>
                                <li><a href="#" title="ILA Nguyen Xi, Ho Chi Minh City">TC-HCMC21</a></li>
                                <li><a href="#" title="ILA Hoang Van Thu, Ho Chi Minh City">TC-HCMC22</a></li>
                                <li class="divider"></li>
                                <li><a href="#" title="ILA Nguyen Cu Trinh, Ho Chi Minh City">TTC</a></li>
                                <li class="divider"></li>
                                <li><a href="#" title="OSC Ho Chi Minh">OSC-HCM</a></li>
                                <li class="divider"></li>
                                <li><a href="#" title="ILA Thu Dau Mot, Binh Duong">BD1</a></li>
                                <li><a href="#" title="ILA Aeon, Binh Duong">BD2</a></li>
                                <li class="divider"></li>
                                <li><a href="#" title="ILA Vo Thi Sau, Bien Hoa">BH1</a></li>
                                <li class="divider"></li>
                                <li><a href="#" title="ILA Nguyen Thai Hoc, Vung Tau">TC-VT1</a></li>
                                <li class="divider"></li>
                                <li><a href="#" title="ILA Vo Van Tan, Da Nang">TC-DN1</a></li>
                                <li><a href="#" title="OSC Da Nang">OSC-DN1</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a data-toggle="collapse" data-parent="#sidebarleft-wrapper" href="#sidebar-sub02">Departments<span class="caret"></span></a>
                    <ul id="sidebar-sub02" class="panel-collapse collapse list-unstyled in">
                        <li><a href="#">ILAV Head Office</a></li>
                        <li><a href="#">Internal Audit</a></li>
                        <li><a href="#">Hanoi Head Office</a></li>
                        <li><a href="#">Board of Directors</a></li>
                        <li><a href="#">Corporate Management</a></li>
                        <li><a href="#">Centre Management</a></li>
                        <li><a href="#">Academic Management</a></li>
                        <li><a href="#">Product Development<div>Management</div></a></li>
                        <li><a href="#">Human Resources</a></li>
                        <li><a href="#">ILA Community Network</a></li>
                        <li><a href="#">Accounts</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Sales</a></li>
                        <li><a href="#">Business Expansion</a></li>
                        <li><a href="#">Purchasing</a></li>
                        <li><a href="#">Management Information<div>Systems</div></a></li>
                        <li><a href="#">Operations</a></li>
                        <li><a href="#">Customer Experience</a></li>
                        <li><a href="#">Purchasing Dept</a></li>
                    </ul>
                </li>
                <li><a href="#">Directory</a></li>
                <li><a href="#">Document Control System</a></li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" id="menu-toggle" class="hamburger is-closed animated fadeInLeft" data-toggle="offcanvas"> <span class="hamb-top"></span> <span class="hamb-middle"></span> <span class="hamb-bottom"></span> </button>
            <br>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Simple Sidebar</h1>
                        <p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
                        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
                    </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->
        </div>
    </div>
    <script>
    $(document).ready(function () {
      var trigger = $('.hamburger'),
          overlay = $('.overlay'),
          xtrigger = $('#sidebarleft'),
         isClosed = false;

        trigger.click(function () {
          hamburger_cross();      
        });
        overlay.click(function () {
          overlay_x();      
        });
        function hamburger_cross() {
          if (isClosed == true) {          
            overlay.hide();
            trigger.removeClass('is-open');
            trigger.addClass('is-closed');
            isClosed = false;
          } else {   
            overlay.show();
            trigger.removeClass('is-closed');
            trigger.addClass('is-open');
            isClosed = true;
          }
      }
        function overlay_x() {
              if (isClosed == true) {          
                overlay.hide();
                trigger.removeClass('is-open');
                trigger.addClass('is-closed');
                isClosed = false;
                xtrigger.toggleClass("toggled");
              } else {   
                overlay.show();
                trigger.removeClass('is-closed');
                trigger.addClass('is-open');
                isClosed = true;
              }
          }
      $('[data-toggle="offcanvas"]').click(function () {
            $('#sidebarleft').toggleClass('toggled');
      });  
    });
    </script>

</body>
</html>