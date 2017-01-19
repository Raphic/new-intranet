<!-- ======================= My page Tab ======================= -->
<div class="row">
    <div class="col-xs-12 col-sm-12 my-page-profile">
       <label class="col-xs-4 col-sm-2" for="myFavourite"><span class="glyphicon glyphicon-user"></span></label>
        <div class="col-xs-8 col-sm-8 col-xs-offset-4 col-sm-offset-4 input-group">
             <input type="text" class="form-control" id="myFavourite" placeholder="My favourite quote...">
             <span class="input-group-addon"><a href="#" class="glyphicon glyphicon-pencil"></a></span>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12">
        <!-- =======================Nav tabs lv2======================= -->
        <ul class="my-page-nav pc nopadding nav nav-tabs nav-stacked col-xs-12 col-sm-6 col-md-4">
            <li class="active"><a href="#profile-details" data-toggle="tab">Profile details</a></li>
            <li><a href="#job-description" data-toggle="tab">Job description</a></li>
            <li id="id_leave_record" class="hideRight"><a href="#leave-record" data-toggle="tab">Leave record</a></li>
            <li><a href="#payslip-modal" data-toggle="modal" data-target="#payslip-modal">Payslip</a></li>
            <li><a href="#changebg-modal" data-toggle="modal" data-target="#changebg-modal">Change background</a></li>
        </ul>
        <ul class="nav nav-tabs my-page-nav mb" role="tablist">
            <li class="dropdown active"> 
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Profile details <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="active"><a href="#profile-details" data-toggle="tab">Profile details</a></li>
                    <li><a href="#job-description" data-toggle="tab">Job description</a></li>
                    <li><a href="#leave-record" data-toggle="tab">Leave record</a></li>
                    <li><a href="#payslip-modal" data-toggle="modal">Payslip</a></li>
                    <li><a href="#changebg-modal" data-toggle="modal">Change background</a></li>
                </ul>
            </li>
        </ul>
        <!-- =======================End Nav tabs lv2======================= -->

        <!-- =======================Tab panes======================= -->
        <div class="my-page-content tab-content col-xs-12 col-sm-6 col-md-8">
           <!--Profile details Tab panes -->
            <div class="tab-pane active" id="profile-details">
                <form>
                    <div class="form-inline">
                        <div class="form-group">
                            <label for="join-date">Join date</label>
                            <div class="input-group">
                                 <input type="text" class="form-control" id="input-join-date" placeholder="Exp : 14/12/2016" required>
                                 <span class="input-group-addon"><a href="#" class="glyphicon glyphicon-pencil"></a></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-inline">
                        <div class="form-group">
                            <label for="extension">Extension</label>
                            <div class="input-group">
                                 <input type="tel" class="form-control" id="input-extension" placeholder="1994" required>
                                 <span class="input-group-addon"><a href="#" class="glyphicon glyphicon-pencil"></a></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-inline">
                        <div class="form-group">
                            <label for="mobile">Mobile</label>
                            <div class="input-group">
                                 <input type="tel" class="form-control" id="input-mobile" placeholder="096 xxx xxx x" required> 
                                 <span class="input-group-addon"><a href="#" class="glyphicon glyphicon-pencil"></a></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-inline">
                        <div class="form-group">
                            <label for="location">Location</label>
                            <div class="input-group">
                                 <input type="text" class="form-control" id="input-location" placeholder="HO-ILAV" required> 
                                 <span class="input-group-addon"><a href="#" class="glyphicon glyphicon-pencil"></a></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-inline">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <div class="input-group">
                                <input type="email" class="form-control" id="input-email" placeholder="Exp : myemail@mycompany.com" required>
                                <span class="input-group-addon"><a href="#" class="glyphicon glyphicon-pencil"></a></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
             <!--=======================End Profile details Tab panes======================= -->
             
             <!--=======================Job description Tab panes======================= -->
            <div class="tab-pane fade" id="job-description">
                <form>
                    <div class="form-inline">
                        <div class="form-group">
                            <label for="join-date">Job title</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="input-job-title" placeholder="Web Developer" required>
                                <span class="input-group-addon"><a href="#" class="glyphicon glyphicon-pencil"></a></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-inline">
                        <div class="form-group">
                            <label for="extension">Report to</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="input-report" placeholder="Education Technology Manager" required>
                                <span class="input-group-addon"><a href="#" class="glyphicon glyphicon-pencil"></a></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-inline">
                        <div class="form-group">
                            <label for="name">Department</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="input-department" placeholder="Management Information Systems" required>
                                <span class="input-group-addon"><a href="#" class="glyphicon glyphicon-pencil"></a></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-inline">
                        <div class="form-group">
                            <label for="mobile">Job purpose</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="input-job-purpose" placeholder="Job purpose" required>
                                <span class="input-group-addon"><a href="#" class="glyphicon glyphicon-pencil"></a></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!--=======================End Job description Tab panes======================= -->
            
            <!--=======================Leave record Tab panes======================= -->
            <div class="tab-pane fade" id="leave-record">
               <table class="table">
                    <thead>
                       <div class="row">
                           <h5 class="col-xs-6">Summary</h5>
                           <div class="col-xs-6 text-right">
                                <button type="button" class="btn btn-mirror btn-request"  data-toggle="modal" data-target="#request-leave-modal">+ Request Leave</button>
                           </div>
                       </div>
                        <tr>
                            <th>Total in year</th>
                            <th>Hrs Entitled to</th>
                            <th>Hrs Used</th>
                            <th>Balance</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Anna</td>
                            <td>Pitt</td>
                            <td>35</td>
                            <td>New York</td>
                        </tr>
                    </tbody>
                </table>
                
                <table class="table">
                    <thead>
                        <div class="row"><h5 class="col-xs-12">Annual leave</h5></div>
                        <tr>
<!--                            <th>#</th>-->
                            <th>From</th>
                            <th>To</th>
                            <th>Leave Type</th>
                            <th>Remark</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
<!--                            <th scope="row">1</th>-->
                            <td>20/12/2016</td>
                            <td>21/12/2016</td>
                            <td>Wedding leave</td>
                            <td>Sick</td>
                            <td><span class="glyphicon glyphicon-open"></span></td>
                            <td><span class="glyphicon glyphicon-ok"></span></td>
                        </tr>
                        <tr>
                            <td>20/12/2016</td>
                            <td>21/12/2016</td>
                            <td>Wedding leave</td>
                            <td>Remark</td>
                            <td><span class="glyphicon glyphicon-saved"></span></td>
                            <td><span class="glyphicon glyphicon-remove"></span></td>
                        </tr>
                        <tr>
                            <td>20/12/2016</td>
                            <td>21/12/2016</td>
                            <td>Wedding leave</td>
                            <td>Remark</td>
                            <td><span class="glyphicon glyphicon-repeat"></span></td>
                            <td><span class="glyphicon glyphicon-remove"></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!--=======================End Leave record Tab panes======================= -->
            
            <!--=======================Payslip Tab panes======================= -->
            <div class="modal fade" id="payslip-modal" tabindex="-1" role="dialog" aria-labelledby="PayslipLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="myModalLabel">Payslip</h4> </div>
                        <div class="modal-body"> ... </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Payslip Tab panes -->
            <!--Change backgroup Tab panes -->
            <div class="modal fade" id="changebg-modal" tabindex="-1" role="dialog" aria-labelledby="BgpLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="myModalLabel">Change background</h4> </div>
                        <div class="modal-body">
                            <form class="form-horizontal" role="form">
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <select class="form-control" required>
                                            <option value="Leave Type">Leave Type</option>
                                            <option value="Annual Leave">Annual Leave</option>
                                            <option value="Unpaid leave">Unpaid leave</option>
                                            <option value="Maternity leave">Maternity leave</option>
                                            <option value="Wedding leave">Wedding leave</option>
                                            <option value="Bereavement leave">Bereavement leave</option>
                                            <option value="Sick leave with legal docs">Sick leave with legal docs</option>
                                            <option value="Contract break">Contract break</option>
                                            <option value="Paternity Leave - Cesarean">Paternity Leave - Cesarean</option>
                                            <option value="Paternity Leave - normal">Paternity Leave - normal</option>	
                                        </select>
                                   </div>
                                    <div class="col-sm-6">
                                        <select class="form-control col-sm-6" required>
                                            <option value="Leave Year">Leave Year</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <input type="date" class="form-control col-sm-6" placeholder="Form date" required>
                                   </div>
                                    <div class="col-sm-6">
                                        <input type="date" class="form-control" placeholder="To date" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="number" class="form-control" placeholder="Total Hours" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                       <textarea class="form-control" placeholder="Remarks" autofocus="autofocus" required></textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--=======================End Change backgroup Tab panes======================= -->
            
            <!--=======================Request leave Tab panes======================= -->
            <div class="modal fade" id="request-leave-modal" tabindex="-1" role="dialog" aria-labelledby="RequestleaveLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="myModalLabel">Request Leave</h4>
                        </div>
                        <!--=======================Content Modal======================= -->
                        <div class="modal-body">
                            <form class="form-horizontal" role="form">
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label>Leave Type</label>
                                        <select class="form-control" required>
<!--                                            <option value="Leave Type">Leave Type</option>-->
                                            <option value="0"></option>
                                            <option value="Annual Leave">Annual Leave</option>
                                            <option value="Unpaid leave">Unpaid leave</option>
                                            <option value="Maternity leave">Maternity leave</option>
                                            <option value="Wedding leave">Wedding leave</option>
                                            <option value="Bereavement leave">Bereavement leave</option>
                                            <option value="Sick leave with legal docs">Sick leave with legal docs</option>
                                            <option value="Contract break">Contract break</option>
                                            <option value="Paternity Leave - Cesarean">Paternity Leave - Cesarean</option>
                                            <option value="Paternity Leave - normal">Paternity Leave - normal</option>	
                                        </select>
                                   </div>
                                    <div class="col-sm-6">
                                        <label>Leave Year</label>
                                        <select class="form-control col-sm-6" required>
<!--                                            <option value="Leave Year">Leave Year</option>-->
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label>Form date</label>
                                        <input type="date" class="form-control col-sm-6" placeholder="Form date" required>
                                   </div>
                                    <div class="col-sm-6">
                                        <label>To date</label>
                                        <input type="date" class="form-control" placeholder="To date" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label>Total Hours</label>
                                        <input type="number" class="form-control" placeholder="Total Hours" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                       <label>Remarks</label>
                                       <textarea class="form-control" placeholder="Remarks" autofocus="autofocus" required></textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--=======================End Content Modal======================= -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--=======================EndRequest leave Tab panes======================= -->
        </div>
    </div>
    <script>
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
            $(".my-page-nav").addClass('col-sm-4 col-md-2');
            $(".my-page-content").removeClass('col-sm-6 col-md-8');
            $(".my-page-content").addClass('col-sm-8 col-md-10');
            $(".workspace").parent().hide();
          }
          else if(dataToggle != 'modal') {
            $("#my-page").removeClass('container');
            $(".my-page-nav").removeClass('col-xs-12 col-sm-4 col-md-2');
            $(".my-page-nav").addClass('col-xs-12 col-sm-6 col-md-4');
            $(".my-page-content").removeClass('col-sm-8 col-md-10');
            $(".my-page-content").addClass('col-sm-6 col-md-8');
            $(".workspace").parent().show();
          }
        });
    </script>
</div>
<!-- ======================= End My page Tab ======================= -->