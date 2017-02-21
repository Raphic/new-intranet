<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Department</title>
    <?php include("include/bootstrap.php"); ?>
        <!-- Custom Css -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/hover.css" rel="stylesheet">
        <!-- Custom JS -->
</head>

<body>
    <div class="safari-ios"><img src="images/background/bg.jpg"></div>
    <?php include("include/leftmenu.php"); ?>
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <!-- Page Content Main-->
            <!--       <div class="container-fluid">-->
            <div class="warp-content container">
               <!-- Top menu -->
                <div class="topmenu container">
                    <ul class="nav nav-pills row">
                        <a class="logo-back" href="index.php"><img src="images/back-home.png"></a>
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
                <div class="department tab-pane fade active in">
<!--                    <h2>Department</h2>-->
                    <br>
                    <div class="row">
                       <div class="department-select-center">
                           <div class="dropdown">
                                <button class="btn btn-mirror dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">ILAV Head Office <span class="caret"></span> </button>
                                <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="dLabel">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">ILAV Head Officet</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">HCM Head Office</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">HN Head Office</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">DN Head Office</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">BD Head Office</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">BH Head Office</a></li>
                                </ul>
                            </div>
                       </div>
                        <!-- =======================Nav tabs lv2======================= -->
                        <ul class="system-nav pc nopadding nav nav-tabs nav-stacked col-xs-12 col-sm-3">
                            <li class="active"><a data-toggle="tab" href="#introduction">Introduction</a></li>
                            <li><a href="#functions" data-toggle="tab">Functions</a></li>
                            <li><a href="#members" data-toggle="tab">Members</a></li>
                            <li><a href="chart.php" target="_blank">Org Chart</a></li>
                            <li><a href="https://drive.google.com/open?id=0B-FNGSdCyRCia05Pb3ZucUREYnM" target="_blank">Working Calendar</a></li>
                            <div class="line ease"></div>
                        </ul>
                        <ul class="nav nav-tabs mb my-page-nav" role="tablist">
                            <li class="dropdown active"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">Introduction <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li class="active"><a href="#introduction" data-toggle="tab">Introduction</a></li>
                                    <li><a href="#functions" data-toggle="tab">Functions</a></li>
                                    <li><a href="#members" data-toggle="tab">Members</a></li>
                                    <li><a href="chart.php" target="_blank">Org Chart</a></li>
                                    <li><a href="https://drive.google.com/open?id=0B-FNGSdCyRCia05Pb3ZucUREYnM" target="_blank">Working Calendar</a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- =======================End Nav tabs lv2======================= -->
                        <!-- =======================Tab panes======================= -->
                        <div class="tab-content col-xs-12 col-sm-9 system-content">
                            <!--======================= Tab panes 1 ======================= -->
                            <div class="row tab-pane active" id="introduction">
                                <div class="col-xs-12">
                                    <h4>A warm welcome from ILA Vietnam - ILA Cau Giay, Hanoi</h4>
                                    <div class="map-local">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.9357916956033!2d105.79113721548653!3d21.035254985994765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab480f6b62f7%3A0x520db0a374988707!2zMjk5IEPhuqd1IEdp4bqleSwgROG7i2NoIFbhu41uZywgQ-G6p3UgR2nhuqV5LCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1483949628951" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                                    </div>
                                    <div class="row introduction-info">
                                        <div class="col-sm-4">
                                            <h4><span>Address:</span></h4>
                                            <div> <i class="icons-marker fa fa-home"></i> 299 Cau Giay St., Cau Giay Dist., Hanoi, Vietnam </div>
                                            <h4><span>Phones:</span></h4>
                                            <div> <i class="icons-marker fa fa-phone"></i> 04-22201666 </div>
                                            <div> <i class="icons-marker fa fa-fax"></i> 04-22201667 </div>
                                        </div>
                                        <div class="contact_details col-sm-4">
                                            <h4>Working hours:</h4>
                                            <p>8:00 AM - 9:30 PM - Monday to Friday
                                                <br>7:30 AM - 8:00 PM - Saturday
                                                <br>7:30 AM - 7:30 PM - Sunday
                                                <br>
                                            </p>
                                        </div>
                                        <div class="facility contact_details col-sm-4">
                                            <h4>Facility:</h4>
                                            <p>Classrooms <span class="label pull-right">21</span></p>
                                            <p>Students <span class="label pull-right">593</span></p>
                                            <p>Teachers <span class="label pull-right">19</span></p>
                                            <p>Staff <span class="label pull-right">16</span></p>
                                            <p>Teaching assistants <span class="label pull-right">19</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--=======================End Tab panes 1 ======================= -->
                            <!--=======================Tab panes 2 ======================= -->
                            <div class="row tab-pane fade" id="functions">
                                <div class="row text-right fuctions-note">
                                    <h5>Centre
                                        <span class="label label-success pull-right">Supervise</span>
                                        <span class="label label-info pull-right">Direct</span>
                                    </h5>
                                    <h5>Head Office
                                        <span class="label label-default pull-right">Supervise</span>
                                        <span class="label label-primary pull-right">Direct</span>
                                    </h5>
                                </div>
                                <div class="functions-box">
                                    <div class="panel-group" id="accordion">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#tab1collapse1" class="" aria-expanded="true">Sales Plan</a> 
                                                </h4>
                                            </div>
                                            <div id="tab1collapse1" class="panel-collapse collapse" aria-expanded="true">
                                                <div class="panel-body">
                                                    <h5>Annual sales plan</h5>
                                                    <ul class="style-disc">
                                                        <li>
                                                            <div class="label-control">
                                                                <span class="label label-default pull-right"><a href="#">COO</a></span> 
                                                                <span class="label label-primary pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-success pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-info pull-right"><a href="#">TCM</a></span>
                                                            </div>
                                                            Propose the annual sales plan
                                                        </li>
                                                    </ul>
                                                    
                                                    <h5>Campaign plans</h5>
                                                    <ul class="style-disc">
                                                        <li>
                                                            <div class="label-control">
                                                                <span class="label label-default pull-right"><a href="#">COO</a></span> 
                                                                <span class="label label-primary pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-success pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-info pull-right"><a href="#">TCM</a></span>
                                                            </div>
                                                            Propose campaign sales plans
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#fcollapse1" class="" aria-expanded="true">Sales Management</a> 
                                                </h4>
                                            </div>
                                            <div id="fcollapse1" class="panel-collapse collapse" aria-expanded="true">
                                                <div class="panel-body">
                                                    <h5>Sales Channels Management</h5>
                                                    <ul class="style-disc">
                                                        <li>
                                                            <div class="label-control">
                                                                <span class="label label-default pull-right"><a href="#">COO</a></span> 
                                                                <span class="label label-primary pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-success pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-info pull-right"><a href="#">TCM</a></span>
                                                            </div>
                                                            Manage current sales channels
                                                        </li>
                                                        <li>
                                                            <div class="label-control">
                                                                <span class="label label-default pull-right"><a href="#">COO</a></span> 
                                                                <span class="label label-primary pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-success pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-info pull-right"><a href="#">TCM</a></span>
                                                            </div>
                                                            Develop new sales channels
                                                        </li>
                                                        <li>
                                                            <div class="label-control">
                                                                <span class="label label-default pull-right"><a href="#">COO</a></span> 
                                                                <span class="label label-primary pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-success pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-info pull-right"><a href="#">TCM</a></span>
                                                            </div>
                                                            Do telesales, online consultant (live chat)
                                                        </li>
                                                        <li>
                                                            <div class="label-control">
                                                                <span class="label label-default pull-right"><a href="#">COO</a></span> 
                                                                <span class="label label-primary pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-success pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-info pull-right"><a href="#">TCM</a></span>
                                                            </div>
                                                            Promote sales campaigns
                                                        </li>
                                                    </ul>
                                                    
                                                    <h5>Sales Administration</h5>
                                                    <ul class="style-disc">
                                                        <li>
                                                            <div class="label-control">
                                                                <span class="label label-default pull-right"><a href="#">COO</a></span> 
                                                                <span class="label label-primary pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-success pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-info pull-right"><a href="#">TCM</a></span>
                                                            </div>
                                                            Organise rewards and recognition activities
                                                        </li>
                                                        <li>
                                                            <div class="label-control">
                                                                <span class="label label-default pull-right"><a href="#">COO</a></span> 
                                                                <span class="label label-primary pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-success pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-info pull-right"><a href="#">TCM</a></span>
                                                            </div>
                                                            Propose and execute the incentive scheme
                                                        </li>
                                                        <li>
                                                            <div class="label-control">
                                                                <span class="label label-default pull-right"><a href="#">COO</a></span> 
                                                                <span class="label label-primary pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-success pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-info pull-right"><a href="#">TCM</a></span>
                                                            </div>
                                                            Report the sales results
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#fcollapse2" class="collapsed" aria-expanded="false">Market Research</a> 
                                                </h4> </div>
                                            <div id="fcollapse2" class="panel-collapse collapse" aria-expanded="false">
                                                <div class="panel-body">
                                                    <ul class="style-disc">
                                                        <li>
                                                            <div class="label-control">
                                                                <span class="label label-default pull-right"><a href="#">COO</a></span> 
                                                                <span class="label label-primary pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-success pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-info pull-right"><a href="#">TCM</a></span>
                                                            </div>
                                                            Research and analyse the market
                                                        </li>
                                                        <li>
                                                            <div class="label-control">
                                                                <span class="label label-default pull-right"><a href="#">COO</a></span> 
                                                                <span class="label label-primary pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-success pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-info pull-right"><a href="#">TCM</a></span>
                                                            </div>
                                                            Consult on customer preferences
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#fcollapse3" class="collapsed" aria-expanded="false">Talent Development</a> 
                                                </h4> </div>
                                            <div id="fcollapse3" class="panel-collapse collapse" aria-expanded="false">
                                                <div class="panel-body">
                                                    <h5>Training and coaching</h5>
                                                    <ul class="style-disc">
                                                        <li>
                                                            <div class="label-control">
                                                                <span class="label label-default pull-right"><a href="#">COO</a></span> 
                                                                <span class="label label-primary pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-success pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-info pull-right"><a href="#">TCM</a></span>
                                                            </div>
                                                            Train/coach staff on product knowledge
                                                        </li>
                                                        <li>
                                                            <div class="label-control">
                                                                <span class="label label-default pull-right"><a href="#">COO</a></span> 
                                                                <span class="label label-primary pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-success pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-info pull-right"><a href="#">TCM</a></span>
                                                            </div>
                                                            Train staff on selling skills
                                                        </li>
                                                        <li>
                                                            <div class="label-control">
                                                                <span class="label label-default pull-right"><a href="#">COO</a></span> 
                                                                <span class="label label-primary pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-success pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-info pull-right"><a href="#">TCM</a></span>
                                                            </div>
                                                            Train staff on ELT system
                                                        </li>
                                                    </ul>
                                                    
                                                    <h5>Monitoring and assessment</h5>
                                                    <ul class="style-disc">
                                                        <li>
                                                            <div class="label-control">
                                                                <span class="label label-default pull-right"><a href="#">COO</a></span> 
                                                                <span class="label label-primary pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-success pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-info pull-right"><a href="#">TCM</a></span>
                                                            </div>
                                                            Monitor staff performance
                                                        </li>
                                                        <li>
                                                            <div class="label-control">
                                                                <span class="label label-default pull-right"><a href="#">COO</a></span> 
                                                                <span class="label label-primary pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-success pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-info pull-right"><a href="#">TCM</a></span>
                                                            </div>
                                                            Assess staff performance
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#fcollapse4" class="collapsed" aria-expanded="false">TA management in HO and 
centre</a> 
                                                </h4>
                                            </div>
                                            <div id="fcollapse4" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                                <div class="panel-body">
                                                   <ul class="style-disc">
                                                        <li>
                                                            <div class="label-control">
                                                                <span class="label label-default pull-right"><a href="#">COO</a></span> 
                                                                <span class="label label-primary pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-success pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-info pull-right"><a href="#">TCM</a></span>
                                                            </div>
                                                            TA recruitment and selection
                                                        </li>
                                                        <li>
                                                            <div class="label-control">
                                                                <span class="label label-default pull-right"><a href="#">COO</a></span> 
                                                                <span class="label label-primary pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-success pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-info pull-right"><a href="#">TCM</a></span>
                                                            </div>
                                                            TA Induction
                                                        </li>
                                                        <li>
                                                            <div class="label-control">
                                                                <span class="label label-default pull-right"><a href="#">COO</a></span> 
                                                                <span class="label label-primary pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-success pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-info pull-right"><a href="#">TCM</a></span>
                                                            </div>
                                                            TA Training and development
                                                        </li>
                                                        <li>
                                                            <div class="label-control">
                                                                <span class="label label-default pull-right"><a href="#">COO</a></span> 
                                                                <span class="label label-primary pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-success pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-info pull-right"><a href="#">TCM</a></span>
                                                            </div>
                                                            TAO Training and development
                                                        </li>
                                                       <li>
                                                           <div class="label-control">
                                                                <span class="label label-default pull-right"><a href="#">COO</a></span> 
                                                                <span class="label label-primary pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-success pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-info pull-right"><a href="#">TCM</a></span>
                                                            </div>
                                                            TA performance monitoring
                                                        </li>
                                                       <li>
                                                            <div class="label-control">
                                                                <span class="label label-default pull-right"><a href="#">COO</a></span> 
                                                                <span class="label label-primary pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-success pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-info pull-right"><a href="#">TCM</a></span>
                                                            </div>
                                                            TAO Performance Mangement (TA Management only)
                                                        </li>
                                                       <li>
                                                            <div class="label-control">
                                                                <span class="label label-default pull-right"><a href="#">COO</a></span> 
                                                                <span class="label label-primary pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-success pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-info pull-right"><a href="#">TCM</a></span>
                                                            </div>
                                                            TA schedule and hours review
                                                        </li>
                                                       <li>
                                                            <div class="label-control">
                                                                <span class="label label-default pull-right"><a href="#">COO</a></span> 
                                                                <span class="label label-primary pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-success pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-info pull-right"><a href="#">TCM</a></span>
                                                            </div>
                                                            Develop new documents
                                                        </li>
                                                       <li>
                                                            <div class="label-control">
                                                                <span class="label label-default pull-right"><a href="#">COO</a></span> 
                                                                <span class="label label-primary pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-success pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-info pull-right"><a href="#">TCM</a></span>
                                                            </div>
                                                            Review and improve the current working process
                                                        </li>
                                                        <li>
                                                            <div class="label-control">
                                                                <span class="label label-default pull-right"><a href="#">COO</a></span> 
                                                                <span class="label label-primary pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-success pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-info pull-right"><a href="#">TCM</a></span>
                                                            </div>
                                                            Customer Care
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>                                           
                                        </div>
                                        
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#fcollapse5" class="collapsed" aria-expanded="false">Administration management 
in HO</a> 
                                                </h4> </div>
                                            <div id="fcollapse5" class="panel-collapse collapse" aria-expanded="false">
                                                <div class="panel-body">
                                                    <h5>Document System</h5>
                                                    <ul class="style-disc">
                                                        <li>
                                                            <div class="label-control">
                                                                <span class="label label-default pull-right"><a href="#">COO</a></span> 
                                                                <span class="label label-primary pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-success pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-info pull-right"><a href="#">TCM</a></span>
                                                            </div>
                                                            Develop new documents
                                                        </li>
                                                        <li>
                                                            <div class="label-control">
                                                                <span class="label label-default pull-right"><a href="#">COO</a></span> 
                                                                <span class="label label-primary pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-success pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-info pull-right"><a href="#">TCM</a></span>
                                                            </div>
                                                            Review and improve the current working processes
                                                        </li>
                                                    </ul>
                                                    
                                                    <h5>Training and Assessment</h5>
                                                    <ul class="style-disc">
                                                        <li>
                                                            <div class="label-control">
                                                                <span class="label label-default pull-right"><a href="#">COO</a></span> 
                                                                <span class="label label-primary pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-success pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-info pull-right"><a href="#">TCM</a></span>
                                                            </div>
                                                            Train staff in new and established centres
                                                        </li>
                                                        <li>
                                                            <div class="label-control">
                                                                <span class="label label-default pull-right"><a href="#">COO</a></span> 
                                                                <span class="label label-primary pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-success pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-info pull-right"><a href="#">TCM</a></span>
                                                            </div>
                                                            Assessment and quality control
                                                        </li>
                                                    </ul>
                                                    
                                                    <h5>Planning</h5>
                                                    <ul class="style-disc">
                                                        <li>
                                                            <div class="label-control">
                                                                <span class="label label-default pull-right"><a href="#">COO</a></span> 
                                                                <span class="label label-primary pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-success pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-info pull-right"><a href="#">TCM</a></span>
                                                            </div>
                                                            Produce ELT working calendar
                                                        </li>
                                                        <li>
                                                            <div class="label-control">
                                                                <span class="label label-default pull-right"><a href="#">COO</a></span> 
                                                                <span class="label label-primary pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-success pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-info pull-right"><a href="#">TCM</a></span>
                                                            </div>
                                                            Implement and monitor the working calendar at all centres
                                                        </li>
                                                    </ul>
                                                    
                                                    <h5>ELT Events</h5>
                                                    <ul class="style-disc">
                                                        <li>
                                                            <div class="label-control">
                                                                <span class="label label-default pull-right"><a href="#">COO</a></span> 
                                                                <span class="label label-primary pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-success pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-info pull-right"><a href="#">TCM</a></span>
                                                            </div>
                                                            In-cooperate with MRK and centres to organise events
                                                        </li>
                                                    </ul>
                                                    
                                                    <h5>Others</h5>
                                                    <ul class="style-disc">
                                                        <li>
                                                            <div class="label-control">
                                                                <span class="label label-default pull-right"><a href="#">COO</a></span> 
                                                                <span class="label label-primary pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-success pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-info pull-right"><a href="#">TCM</a></span>
                                                            </div>
                                                            Manage the master data in ERP
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#fcollapse6" class="collapsed" aria-expanded="false">ELT management at centre</a> 
                                                </h4> </div>
                                            <div id="fcollapse6" class="panel-collapse collapse" aria-expanded="false">
                                                <div class="panel-body">
                                                    <h5>Course Administration</h5>
                                                    <ul class="style-disc">
                                                        <li>
                                                            <div class="label-control">
                                                                <span class="label label-default pull-right no-control"><a href="#">none</a></span> 
                                                                <span class="label label-primary pull-right"><a href="#">OSSM</a></span> 
                                                                <span class="label label-success pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-info pull-right"><a href="#">TCM</a></span>
                                                            </div>
                                                            Forecast classes
                                                        </li>
                                                        <li>
                                                            <div class="label-control">
                                                                <span class="label label-default pull-right"><a href="#">COO</a></span> 
                                                                <span class="label label-primary pull-right"><a href="#">MISM</a></span> 
                                                                <span class="label label-success pull-right no-control"><a href="#">none</a></span> 
                                                                <span class="label label-info pull-right"><a href="#">TCM</a></span>
                                                            </div>
                                                            Schedule classes
                                                        </li>
                                                        <li>
                                                            <div class="label-control">
                                                                <span class="label label-default pull-right"><a href="#">COO</a></span> 
                                                                <span class="label label-primary pull-right no-control"><a href="#">none</a></span> 
                                                                <span class="label label-success pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-info pull-right"><a href="#">TCM</a></span>
                                                            </div>
                                                            Schedule Teacher/ TA for classes
                                                        </li>
                                                        <li>
                                                            <div class="label-control">
                                                                <span class="label label-default pull-right"><a href="#">COO</a></span> 
                                                                <span class="label label-primary pull-right no-control"><a href="#">none</a></span> 
                                                                <span class="label label-success pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-info pull-right no-control"><a href="#">none</a></span> 
                                                            </div>
                                                            Prepare materials, tests, supporting documents for students/teachers
                                                        </li>
                                                        <li>
                                                            <div class="label-control">
                                                                <span class="label label-default pull-right"><a href="#">COO</a></span> 
                                                                <span class="label label-primary pull-right no-control"><a href="#">none</a></span> 
                                                                <span class="label label-success pull-right no-control"><a href="#">none</a></span> 
                                                                <span class="label label-info pull-right"><a href="#">TCM</a></span>
                                                            </div>
                                                            Manage class information
                                                        </li>
                                                        <li>
                                                            <div class="label-control">
                                                                <span class="label label-default pull-right no-control"><a href="#">none</a></span> 
                                                                <span class="label label-primary pull-right no-control"><a href="#">none</a></span> 
                                                                <span class="label label-success pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-info pull-right"><a href="#">TCM</a></span>
                                                            </div>
                                                            Update students/parents with changes
                                                        </li>
                                                        <li>
                                                            <div class="label-control">
                                                                <span class="label label-default pull-right"><a href="#">COO</a></span> 
                                                                <span class="label label-primary pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-success pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-info pull-right"><a href="#">TCM</a></span>
                                                            </div>
                                                            Update parents/ students with progress
                                                        </li>
                                                        <li>
                                                            <div class="label-control">
                                                                <span class="label label-default pull-right"><a href="#">COO</a></span> 
                                                                <span class="label label-primary pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-success pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-info pull-right"><a href="#">TCM</a></span>
                                                            </div>
                                                            Manage classrooms quota
                                                        </li>
                                                        <li>
                                                            <div class="label-control">
                                                                <span class="label label-default pull-right"><a href="#">COO</a></span> 
                                                                <span class="label label-primary pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-success pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-info pull-right"><a href="#">TCM</a></span>
                                                            </div>
                                                            Organise social programme activities
                                                        </li>
                                                    </ul>
                                                    
                                                    <h5>Customer care</h5>
                                                    <ul class="style-disc">
                                                        <li>
                                                            <div class="label-control">
                                                                <span class="label label-default pull-right"><a href="#">COO</a></span> 
                                                                <span class="label label-primary pull-right no-control"><a href="#">none</a></span> 
                                                                <span class="label label-success pull-right no-control"><a href="#">none</a></span> 
                                                                <span class="label label-info pull-right"><a href="#">TCM</a></span>
                                                            </div>
                                                            Class visit for induction, reservation deadlines
                                                        </li>
                                                        <li>
                                                            <div class="label-control">
                                                                <span class="label label-default pull-right"><a href="#">COO</a></span> 
                                                                <span class="label label-primary pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-success pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-info pull-right"><a href="#">TCM</a></span>
                                                            </div>
                                                            Conduct customer satisfaction survey
                                                        </li>
                                                        <li>Telesales
                                                            <div class="label-control">
                                                                <span class="label label-default pull-right no-control"><a href="#">none</a></span> 
                                                                <span class="label label-primary pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-success pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-info pull-right no-control"><a href="#">none</a></span>
                                                                
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="label-control">
                                                                <span class="label label-default pull-right"><a href="#">COO</a></span> 
                                                                <span class="label label-primary pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-success pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-info pull-right"><a href="#">TCM</a></span>
                                                            </div>
                                                            Handle requests and complaints
                                                        </li>
                                                    </ul>
                                                    
                                                    <h5>International Examination Organisation</h5>
                                                    <ul class="style-disc">
                                                        <li>
                                                            <div class="label-control">
                                                                <span class="label label-default pull-right"><a href="#">COO</a></span> 
                                                                <span class="label label-primary pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-success pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-info pull-right"><a href="#">TCM</a></span>
                                                            </div>
                                                            Prepare students taking Cambridge Examinations
                                                        </li>
                                                    </ul>
                                                    
                                                    <h5>Materials management</h5>
                                                    <ul class="style-disc">
                                                        <li>
                                                            <div class="label-control">
                                                                <span class="label label-default pull-right"><a href="#">COO</a></span> 
                                                                <span class="label label-primary pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-success pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-info pull-right"><a href="#">TCM</a></span>
                                                            </div>
                                                            Forecast/ order books and materials for students
                                                        </li>
                                                        <li>
                                                            <div class="label-control">
                                                                <span class="label label-default pull-right"><a href="#">COO</a></span> 
                                                                <span class="label label-primary pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-success pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-info pull-right"><a href="#">TCM</a></span>
                                                            </div>
                                                            Manage inventory of books and materials
                                                    </ul>
                                                    
                                                    <h5>ILC/TSC management</h5>
                                                    <ul class="style-disc">
                                                        <li>
                                                            <div class="label-control">
                                                                <span class="label label-default pull-right"><a href="#">COO</a></span> 
                                                                <span class="label label-primary pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-success pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-info pull-right"><a href="#">TCM</a></span>
                                                            </div>
                                                            Maintain, review and manage resources
                                                        </li>
                                                        <li>
                                                            <div class="label-control">
                                                                <span class="label label-default pull-right"><a href="#">COO</a></span> 
                                                                <span class="label label-primary pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-success pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-info pull-right"><a href="#">TCM</a></span>
                                                            </div>
                                                            Update of resources
                                                        </li>
                                                        <li>
                                                            <div class="label-control">
                                                                <span class="label label-default pull-right"><a href="#">COO</a></span> 
                                                                <span class="label label-primary pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-success pull-right"><a href="#">GCM</a></span> 
                                                                <span class="label label-info pull-right"><a href="#">TCM</a></span>
                                                            </div>
                                                            Provide services as requested
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                                <!--=======================End Functions Box ======================= -->
                            </div>
                            <!--=======================End Tab panes 2 ======================= -->
                            <!--======================= Tab panes 3======================= -->
                            <div class="row tab-pane fade" id="members">
                                <!--======================= Member 1 ======================= -->
                                <div class="row member-box clearfix">
                                    <h4 class="col-xs-12">Board of Directors</h4>
                                    <div class="col-xs-12">
                                        <div class="col-xs-12 col-sm-9 col-md-8 col-lg-6">
                                            <div class="contact-box">
                                                <div class="col-sm-4">
                                                    <div class="contact-img"> <img alt="image" class="img-circle img-responsive" src="images/a1.jpg"> </div>
                                                </div>
                                                <div class="col-sm-8"> <a href="#"><h5><strong>Bùi Lê Thị Diệu Mai</strong></h5></a>
                                                    <p class="contact-position">Business Analysis Manager</p>
                                                    <p class="contact-phone"><i class="fa fa-phone" aria-hidden="true"></i>08-62586220 - Ext. -</p>
                                                    <p class="contact-mobile"><i class="fa fa-mobile" aria-hidden="true"></i>01264914931</p>
                                                    <p class="contact-email"><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:#">alexsmith01@ilavietnam.edu.vn</a></p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-3 col-md-4 col-lg-offset-2 text-right view-staff">
                                            <button type="button" class="btn btn-mirror" data-toggle="modal" data-target="#view-profile">View staff info</button>    
                                        </div>
                                    </div>
                                 </div>
                                <!--======================= End Member 1 ======================= -->
                                <!--======================= Member 2 ======================= -->
                                <div class="row member-box clearfix">
                                    <h4 class="col-xs-12">Corporate Management</h4>
                                    <div class="col-xs-12">
                                        <div class="col-xs-12 col-sm-9 col-md-8 col-lg-6">
                                            <div class="contact-box">
                                                <div class="col-sm-4">
                                                    <div class="contact-img"> <img alt="image" class="img-circle img-responsive" src="images/a1.jpg"> </div>
                                                </div>
                                                <div class="col-sm-8"> <a href="#"><h5><strong>Bùi Lê Thị Diệu Mai</strong></h5></a>
                                                    <p class="contact-position">Business Analysis Manager</p>
                                                    <p class="contact-phone"><i class="fa fa-phone" aria-hidden="true"></i>08-62586220 - Ext. -</p>
                                                    <p class="contact-mobile"><i class="fa fa-mobile" aria-hidden="true"></i>01264914931</p>
                                                    <p class="contact-email"><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:#">alexsmith01@ilavietnam.edu.vn</a></p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-3 col-md-4 col-lg-offset-2 text-right view-staff">
                                            <button type="button" class="btn btn-mirror" data-toggle="modal" data-target="#view-profile">View staff info</button>
                                        </div>
                                    </div>
                                    <!--======================= Member 2-1 ======================= -->
                                    <div class="col-xs-12">
                                        <div class="col-xs-12 col-sm-9 col-md-8 col-lg-6">
                                            <div class="contact-box">
                                                <div class="col-sm-4">
                                                    <div class="contact-img"> <img alt="image" class="img-circle img-responsive" src="images/a1.jpg"> </div>
                                                </div>
                                                <div class="col-sm-8"> <a href="#"><h5><strong>Bùi Lê Thị Diệu Mai</strong></h5></a>
                                                    <p class="contact-position">Business Analysis Manager</p>
                                                    <p class="contact-phone"><i class="fa fa-phone" aria-hidden="true"></i>08-62586220 - Ext. -</p>
                                                    <p class="contact-mobile"><i class="fa fa-mobile" aria-hidden="true"></i>01264914931</p>
                                                    <p class="contact-email"><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:#">alexsmith01@ilavietnam.edu.vn</a></p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-3 col-md-4 col-lg-offset-2 text-right view-staff">
                                            <button type="button" class="btn btn-mirror" data-toggle="modal" data-target="#view-profile">View staff info</button>
                                        </div>
                                    </div>
                                    <!--======================= End Member 2-1 ======================= -->
                                    <!--======================= Member 2-1 ======================= -->
                                    <div class="col-xs-12">
                                        <div class="col-xs-12 col-sm-9 col-md-8 col-lg-6">
                                            <div class="contact-box">
                                                <div class="col-sm-4">
                                                    <div class="contact-img"> <img alt="image" class="img-circle img-responsive" src="images/a1.jpg"> </div>
                                                </div>
                                                <div class="col-sm-8"> <a href="#"><h5><strong>Bùi Lê Thị Diệu Mai</strong></h5></a>
                                                    <p class="contact-position">Business Analysis Manager</p>
                                                    <p class="contact-phone"><i class="fa fa-phone" aria-hidden="true"></i>08-62586220 - Ext. -</p>
                                                    <p class="contact-mobile"><i class="fa fa-mobile" aria-hidden="true"></i>01264914931</p>
                                                    <p class="contact-email"><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:#">alexsmith01@ilavietnam.edu.vn</a></p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-3 col-md-4 col-lg-offset-2 text-right view-staff">
                                            <button type="button" class="btn btn-mirror" data-toggle="modal" data-target="#view-profile">View staff info</button>
                                        </div>
                                    </div>
                                    <!--======================= End Member 2-1 ======================= -->
                                    <!--======================= Member 2-1 ======================= -->
                                    <div class="col-xs-12">
                                        <div class="col-xs-12 col-sm-9 col-md-8 col-lg-6">
                                            <div class="contact-box">
                                                <div class="col-sm-4">
                                                    <div class="contact-img"> <img alt="image" class="img-circle img-responsive" src="images/a1.jpg"> </div>
                                                </div>
                                                <div class="col-sm-8"> <a href="#"><h5><strong>Bùi Lê Thị Diệu Mai</strong></h5></a>
                                                    <p class="contact-position">Business Analysis Manager</p>
                                                    <p class="contact-phone"><i class="fa fa-phone" aria-hidden="true"></i>08-62586220 - Ext. -</p>
                                                    <p class="contact-mobile"><i class="fa fa-mobile" aria-hidden="true"></i>01264914931</p>
                                                    <p class="contact-email"><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:#">alexsmith01@ilavietnam.edu.vn</a></p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-3 col-md-4 col-lg-offset-2 text-right view-staff">
                                            <button type="button" class="btn btn-mirror" data-toggle="modal" data-target="#view-profile">View staff info</button>
                                        </div>
                                    </div>
                                    <!--======================= End Member 2-1 ======================= -->
                                 </div>
                                <!--======================= End Member 2 ======================= -->
                                <!--======================= Member 3 ======================= -->
                                <div class="row member-box clearfix">
                                    <h4 class="col-xs-12">Centre Management</h4>
                                    <div class="col-xs-12">
                                        <div class="col-xs-12 col-sm-9 col-md-8 col-lg-6">
                                            <div class="contact-box">
                                                <div class="col-sm-4">
                                                    <div class="contact-img"> <img alt="image" class="img-circle img-responsive" src="images/a1.jpg"> </div>
                                                </div>
                                                <div class="col-sm-8"> <a href="#"><h5><strong>Bùi Lê Thị Diệu Mai</strong></h5></a>
                                                    <p class="contact-position">Business Analysis Manager</p>
                                                    <p class="contact-phone"><i class="fa fa-phone" aria-hidden="true"></i>08-62586220 - Ext. -</p>
                                                    <p class="contact-mobile"><i class="fa fa-mobile" aria-hidden="true"></i>01264914931</p>
                                                    <p class="contact-email"><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:#">alexsmith01@ilavietnam.edu.vn</a></p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-3 col-md-4 col-lg-offset-2 text-right view-staff">
                                            <button type="button" class="btn btn-mirror" data-toggle="modal" data-target="#view-profile">View staff info</button>
                                        </div>
                                    </div>
                                 </div>
                                <!--======================= End Member 3 ======================= -->
                                <!--======================= Member 4 ======================= -->
                                <div class="row member-box clearfix">
                                    <h4 class="col-xs-12">Academic Management</h4>
                                    <div class="col-xs-12">
                                        <div class="col-xs-12 col-sm-9 col-md-8 col-lg-6">
                                            <div class="contact-box">
                                                <div class="col-sm-4">
                                                    <div class="contact-img"> <img alt="image" class="img-circle img-responsive" src="images/a1.jpg"> </div>
                                                </div>
                                                <div class="col-sm-8"> <a href="#"><h5><strong>Bùi Lê Thị Diệu Mai</strong></h5></a>
                                                    <p class="contact-position">Business Analysis Manager</p>
                                                    <p class="contact-phone"><i class="fa fa-phone" aria-hidden="true"></i>08-62586220 - Ext. -</p>
                                                    <p class="contact-mobile"><i class="fa fa-mobile" aria-hidden="true"></i>01264914931</p>
                                                    <p class="contact-email"><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:#">alexsmith01@ilavietnam.edu.vn</a></p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-3 col-md-4 col-lg-offset-2 text-right view-staff">
                                            <button type="button" class="btn btn-mirror" data-toggle="modal" data-target="#view-profile">View staff info</button>
                                        </div>
                                    </div>
                                 </div>
                                <!--======================= End Member 4 ======================= -->
                            </div>
                            <!--=======================End Tab panes 3 ======================= -->
                            <!--======================= Tab panes 4 ======================= -->
<!--
                            <div class="tab-pane fade" id="org-chart">
                                <h4>A warm welcome from ILA Vietnam - ILA Cau Giay, Hanoi</h4>
                            </div>
-->
                            <!--=======================End Tab panes 4 ======================= -->
                        </div>
                    </div>
                </div>
                <!--======================= Modal info member======================= -->
                <?php include("include/profile.php"); ?>
                <!--======================= End Modal info member======================= -->
                <!-- Page Content Main-->
            </div>
            <!---------------  Footer --------------->
            <?php include("include/footer.php"); ?>
            <!--------------- /Footer --------------->
        <!-- /#page-content-wrapper -->
        </div>
        <script src="js/jquery.mCustomScrollbar.js"></script>
        <script>
            (function ($) {
                $(window).on("load", function () {
                    $("#members").mCustomScrollbar({
                        theme: "minimal"
                    });
                    $(".functions-box").mCustomScrollbar({
                        theme: "minimal"
                    });
                    //                Menu  Select
                    $(".dropdown-menu li a").click(function(){
                        var selText = $(this).text();
                        $(this).parents('.dropdown').find('.dropdown-toggle').html(selText+' <span class="caret"></span>');
                  });
                });
            })(jQuery);
        </script>
</body>

</html>