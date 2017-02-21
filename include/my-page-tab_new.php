<!-- ======================= My page Tab ======================= -->
<div class="row">
    <div class="col-xs-12">
        <div class="panel-group" id="accordionMytab">
            <div class="panel panelMytab">
                <div class="panel-heading">
                    <h4 class="panel-title" data-toggle="collapse" data-parent="#accordionMytab" href="#collapsemytabOne">
                        Profile
                    </h4> 
                </div>
                <div id="collapsemytabOne" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="col-xs-12 col-sm-12 my-page-profile">
                            <label class="col-xs-4 col-sm-2" for="myFavourite"><span class="glyphicon glyphicon-user"></span></label>
                            <div class="col-xs-8 col-sm-8 col-xs-offset-4 col-sm-offset-4 input-group">
                                <input type="text" class="form-control" id="myFavourite" placeholder="My favourite quote..."> 
                                <span class="input-group-addon">
                                    <a href="#" class="glyphicon glyphicon-pencil"></a>
                                </span> 
                            </div>
                            <form class="col-xs-12">
                                <div class="form-inline">
                                    <div class="form-group">
                                        <label for="join-date">Join date</label>
                                        <div class="input-group">
                                             <input type="text" class="form-control" id="input-join-date" placeholder="Exp : 14/12/2016" required="">
                                             <span class="input-group-addon"><a href="#" class="glyphicon glyphicon-pencil"></a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-inline">
                                    <div class="form-group">
                                        <label for="extension">Extension</label>
                                        <div class="input-group">
                                             <input type="tel" class="form-control" id="input-extension" placeholder="1994" required="">
                                             <span class="input-group-addon"><a href="#" class="glyphicon glyphicon-pencil"></a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-inline">
                                    <div class="form-group">
                                        <label for="mobile">Mobile</label>
                                        <div class="input-group">
                                             <input type="tel" class="form-control" id="input-mobile" placeholder="096 xxx xxx x" required=""> 
                                             <span class="input-group-addon"><a href="#" class="glyphicon glyphicon-pencil"></a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-inline">
                                    <div class="form-group">
                                        <label for="location">Location</label>
                                        <div class="input-group">
                                             <input type="text" class="form-control" id="input-location" placeholder="HO-ILAV" required=""> 
                                             <span class="input-group-addon"><a href="#" class="glyphicon glyphicon-pencil"></a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-inline">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <div class="input-group">
                                            <input type="email" class="form-control" id="input-email" placeholder="Exp : myemail@mycompany.com" required="">
                                            <span class="input-group-addon"><a href="#" class="glyphicon glyphicon-pencil"></a></span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="panel panelMytab">
                <div class="panel-heading">
                    <h4 class="panel-title" data-toggle="collapse" data-parent="#accordionMytab" href="#collapsemytabTwo">
                        Job description
                    </h4> 
                </div>
                <div id="collapsemytabTwo" class="panel-collapse collapse in">
                    <div class="panel-body"> 
                        <div>
                            <table id="summary-table" class="table dataTable">
                                <thead>
                                   <div class="row">
                                       <h5 class="col-xs-6">Summary</h5>
                                       <div class="col-xs-6 text-right">
                                            <button type="button" class="btn btn-mirror btn-request"  data-toggle="modal" data-target="#request-leave-modal">+ Request Leave</button>
                                       </div>
                                   </div>
                                    <tr>
                                        <th class="sorting_asc" tabindex="0" aria-controls="annual-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Total in year: activate to sort column descending">Total in year</th>
                                        <th class="sorting" tabindex="0" aria-controls="annual-table" rowspan="1" colspan="1" aria-label="Hrs Entitled to: activate to sort column ascending">Hrs Entitled to</th>
                                        <th class="sorting" tabindex="0" aria-controls="annual-table" rowspan="1" colspan="1" aria-label="Hrs Used: activate to sort column ascending">Hrs Used</th>
                                        <th class="sorting" tabindex="0" aria-controls="annual-table" rowspan="1" colspan="1" aria-label="Balance: activate to sort column ascending">Balance</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="gradeA even" role="row">
                                        <td class="sorting_1" tabindex="0">122</td>
                                        <td>11</td>
                                        <td>35</td>
                                        <td>12</td>
                                    </tr>
                                </tbody>
                            </table>

                            <table id="annual-table" class="table dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
                                <thead>                    
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="annual-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="From: activate to sort column descending">From</th>
                                        <th class="sorting" tabindex="0" aria-controls="annual-table" rowspan="1" colspan="1" aria-label="To: activate to sort column ascending">To</th>
                                        <th class="sorting" tabindex="0" aria-controls="annual-table" rowspan="1" colspan="1" aria-label="Leave Type: activate to sort column ascending">Leave Type</th>
                                        <th class="sorting" tabindex="0" aria-controls="annual-table" rowspan="1" colspan="1" aria-label="Remark: activate to sort column ascending">Remark</th>
                                        <th class="sorting" tabindex="0" aria-controls="annual-table" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Status</th>
                                        <th class="sorting" tabindex="0" aria-controls="annual-table" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="gradeA even" role="row">
                                        <td class="sorting_1" tabindex="0">20/12/2016</td>
                                        <td>21/12/2016</td>
                                        <td>Wedding leave</td>
                                        <td>Sick</td>
                                        <td><span class="glyphicon glyphicon-open"></span>1</td>
                                        <td><span class="glyphicon glyphicon-ok"></span>2</td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">20/12/2016</td>
                                        <td>21/12/2016</td>
                                        <td>Wedding leave</td>
                                        <td>Remark</td>
                                        <td><span class="glyphicon glyphicon-saved"></span></td>
                                        <td><span class="glyphicon glyphicon-remove"></span></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">20/12/2016</td>
                                        <td>21/12/2016</td>
                                        <td>Wedding leave</td>
                                        <td>Remark</td>
                                        <td><span class="glyphicon glyphicon-repeat"></span></td>
                                        <td><span class="glyphicon glyphicon-remove"></span></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">20/12/2016</td>
                                        <td>21/12/2016</td>
                                        <td>Wedding leave</td>
                                        <td>Remark</td>
                                        <td><span class="glyphicon glyphicon-repeat"></span></td>
                                        <td><span class="glyphicon glyphicon-remove"></span></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">20/12/2016</td>
                                        <td>21/12/2016</td>
                                        <td>Wedding leave</td>
                                        <td>Remark</td>
                                        <td><span class="glyphicon glyphicon-repeat"></span></td>
                                        <td><span class="glyphicon glyphicon-remove"></span></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">20/12/2016</td>
                                        <td>21/12/2016</td>
                                        <td>Wedding leave</td>
                                        <td>Remark</td>
                                        <td><span class="glyphicon glyphicon-repeat"></span></td>
                                        <td><span class="glyphicon glyphicon-remove"></span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<!-- ======================= End My page Tab ======================= -->
