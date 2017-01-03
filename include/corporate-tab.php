<!-- ======================= Corporate Tabs lv2 ======================= -->
 <div class="row">
    <ul  id="menu-select-tab" class="nav nav-pills pc">
        <li class="active"><a href="#corporate-principles" data-toggle="tab">ILA's Principles</a> </li>
        <li><a href="#corporate-chart" data-toggle="tab">Organisation Chart</a> </li>
        <li><a href="#corporate-video" data-toggle="tab">Heritage Video</a> </li>
        <li><a href="#corporate-system" data-toggle="tab">Document Control System</a> </li>
        <li><a href="https://drive.google.com/open?id=0B-FNGSdCyRCidTNxemN2RGlMTlk" target="_blank">ILA Calendar</a> </li>
    </ul>
    <ul class="nav nav-tabs my-page-nav mb" role="tablist">
        <li class="dropdown active"> 
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">ILA's Principles <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li class="active"><a href="#corporate-principles" data-toggle="tab">ILA's Principles</a> </li>
                <li><a href="#corporate-chart" data-toggle="tab">Organisation Chart</a> </li>
                <li><a href="#corporate-video" data-toggle="tab">Heritage Video</a> </li>
                <li><a href="#corporate-system" data-toggle="tab">Document Control System</a> </li>
                <li><a href="https://drive.google.com/open?id=0B-FNGSdCyRCidTNxemN2RGlMTlk" target="_blank">ILA Calendar</a> </li>
            </ul>
        </li>
    </ul>
</div>
<!-- ======================= End Corporate Tabs lv2 ======================= -->

<!-- ======================= Corporate panel ======================= -->
<div class="container row corporate-tab tab-content index-left">
    <!-- ======================= Priciples Tab's Corporate Tab ======================= -->
    <div id="corporate-principles" class="tab-pane fade in active">
        <div class="row">
            <img class="pc" src="images/corporate/principle.png"/>
            <div class="container mb">
                <div class="col-xs-12 col-xm-12 values">
                    <h3 class="row">VALUES</h3>
                    <p>We place our customer expirence at the core of all we do.</p>
                    <p>We are committed to build a professional and open working environment, where people have epual chance to grow.</p>
                    <p>We operate our business ethically, trans-parently and efficiently.</p>
                    <p>We struve continually ti grow,learn and improve.</p>
                </div>

                <div class="col-xs-12 col-xm-12 vision">
                    <h3 class="row">VISIONS</h3>
                    <p>To become best-in-class in the education and trainning industry. We do this through our commitment to deliver life-changing learning experiences that empower our students for life.</p>
                </div>
                <div class="col-xs-12 col-xm-12 misson">
                    <h3 class="row">MISSION</h3>
                    <p>We are committed to continuously improve our operations, to build more schools and to provide 21st century learning standards for our students.</p>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <!-- ======================= End Priciples Tab's Corporate Tab ======================= -->
    
    <!-- ======================= Chart Tab's Corporate Tab ======================= -->
    <div id="corporate-chart" class="tab-pane fade">
        <div class="row">
            <img src="images/corporate/orgchart_HO.png"/>
        </div>
    </div>
    <!-- ======================= End Chart Tab's Corporate Tab ======================= -->
    
    <!-- ======================= Video Tab's Corporate Tab ======================= -->
    <div id="corporate-video" class="tab-pane fade">
        <div class="row">
            <video id="video" controls="" preload="metadata" poster="http://intranet.ila.edu.vn/static/intranet/images/poster.jpg" style="width:100%;">
                <source src="video/ILA-Heritage Video_wSub.mp4" type="video/mp4">
                <source src="video/ILA-Heritage Video_wSub.webm" type="video/webm">
                <source src="video/ILA-Heritage Video_wSub.ogg" type="video/ogg">
                <!-- Flash fallback -->
                <object type="application/x-shockwave-flash" data="flash-player.swf?videoUrl=video/ILA-Heritage Video_wSub.mp4" width="1024" height="576">
                    <param name="movie" value="flash-player.swf?videoUrl=video/ILA-Heritage Video_wSub.mp4">
                    <param name="allowfullscreen" value="true">
                    <param name="wmode" value="transparent">
                    <param name="flashvars" value="controlbar=over&amp;image=video/poster.jpg&amp;file=flash-player.swf?videoUrl=video/ILA-Heritage Video_wSub.mp4"> 
                        <img alt="Tears of Steel poster image" src="video/poster.jpg" width="1024" height="428" title="No video playback possible, please download the video from the link below"> 
                </object>
                <!-- Offer download -->
                <a href="/static/intranet/video/ILA-Heritage Video_wSub.mp4">Download MP4</a>
            </video>
        </div>
    </div>
    <!-- ======================= End Video Tab's Corporate Tab ======================= -->
    
    <!-- ======================= System Tab's Corporate Tab ======================= -->
    <div id="corporate-system" class="tab-pane fade">
        <?php include("document-control-system-tab.php"); ?>
    </div>
    <!-- ======================= End System Tab's Corporate Tab ======================= -->
</div>
<!-- ======================= End Corporate panel ======================= -->