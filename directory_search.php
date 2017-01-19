<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Directory</title>
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
                    <div class="profile">
                        <div class="btn-group navbar-right">
                            <button type="button" class="btn btn-primary">Profile</button>
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> <span class="caret"></span> </button>
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
                <div class="directory row">
<!--
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        class="col-xs-12 col-sm-8 col-md-8"
                    </div>
-->
                    <div class="col-xs-12">
                        <h2>Position list</h2>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            adsad
                            
                        </div>
                        <table id="position-table" class="table table-bordered  dataTable no-footer col-xs-12 col-sm-8 col-md-8" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="position-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Short Title: activate to sort column descending" style="width: 120px;">Short Title</th>
                                    <th class="sorting" tabindex="0" aria-controls="position-table" rowspan="1" colspan="1" aria-label="English Title: activate to sort column ascending" style="width: 397px;">English Title</th>
                                    <th class="sorting" tabindex="0" aria-controls="position-table" rowspan="1" colspan="1" aria-label="Vietnamese Title: activate to sort column ascending" style="width: 397px;">Vietnamese Title</th>
                                    <th class="sorting" tabindex="0" aria-controls="position-table" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 154px;">Department</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Short Title</th>
                                    <th>English Title</th>
                                    <th>Vietnamese Title</th>
                                    <th>Department</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr class="gradeA even" role="row">
                                    <td class="sorting_1" tabindex="0">Gecko</td>
                                    <td>Firefox 1.5</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td>1.8</td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">ILACN/ILACNM</td>
                                    <td>ILA Community Network Manager</td>
                                    <td>Truởng Phòng Hỗ Trợ Cộng Đồng</td>
                                    <td>ILA Community Network</td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">CMD/TDS</td>
                                    <td>Training & Development Specialist</td>
                                    <td>Chuyên Viên Đào Tạo & Phát Triển</td>
                                    <td>Centre Management</td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">CM/CEO</td>
                                    <td>Chief Executive Officer</td>
                                    <td>Tổng Giám Đốc</td>
                                    <td>Corporate Management</td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">BOD/CM</td>
                                    <td>Chairman</td>
                                    <td>Chủ tịch</td>
                                    <td>Board of Directors</td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">MRK/CBO</td>
                                    <td>Chief Brand Officer</td>
                                    <td>Giám Đốc Thương Hiệu</td>
                                    <td>Marketing</td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">MIS/CTO</td>
                                    <td>Chief Technology Officer</td>
                                    <td>Giám Đốc Công Nghệ</td>
                                    <td>Management Information Systems</td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">OSC/COD</td>
                                    <td>Centre Operations Director</td>
                                    <td>Giám Đốc Điều Hành Trung Tâm Tư Vấn Du Học</td>
                                    <td>The Overseas Study Centre</td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">AMD/AD</td>
                                    <td>Academic Director</td>
                                    <td>Giám Đốc Học Vụ</td>
                                    <td>Academic Management</td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">CMD/COO</td>
                                    <td>Chief Operations Officer</td>
                                    <td>Giám Đốc Điều Hành</td>
                                    <td>Centre Management</td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">CMD/COD</td>
                                    <td>Centre Operations Director</td>
                                    <td>Giám Đốc Điều Hành Trung Tâm</td>
                                    <td>Centre Management</td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">MRK/HM</td>
                                    <td>Head of Marketing</td>
                                    <td>Giám Đốc Tiếp Thị</td>
                                    <td>Marketing</td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">MRK/MRD</td>
                                    <td>Marketing Director</td>
                                    <td>Giám Đốc Tiếp Thị</td>
                                    <td>Marketing</td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">HR/BSD</td>
                                    <td>Business Support Director</td>
                                    <td>Giám Đốc Các Bộ Phận Hỗ Trợ</td>
                                    <td>Human Resources</td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">BE/BED</td>
                                    <td>Business Expansion Director</td>
                                    <td>Giám Đốc Phát Triển Kinh Doanh</td>
                                    <td>Business Expansion</td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">CE/CED</td>
                                    <td>Customer Experience Director</td>
                                    <td>Giám Đốc Chăm Sóc Khách Hàng</td>
                                    <td>Customer Experience</td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">PDM/PDD</td>
                                    <td>Product Development Director</td>
                                    <td>Giám Đốc Phát Triển Sản Phẩm</td>
                                    <td>Product Development Management</td>
                                </tr>
                                
                                <tr role="row" class="odd">
                                    <td class="sorting_1">AMD/AD</td>
                                    <td>Academic Director</td>
                                    <td>Giám Đốc Học Vụ</td>
                                    <td>Academic Management</td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">AMD/CAM</td>
                                    <td>Country Academic Manager</td>
                                    <td>Trưởng Bộ Phận Học Vụ Toàn Quốc</td>
                                    <td>Academic Management</td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">AMD/RAM</td>
                                    <td>Regional Academic Manager</td>
                                    <td>Trưởng Nhóm Quản Lý Học Vụ</td>
                                    <td>$Academic Management</td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Angelica Ramos</td>
                                    <td>Chief Executive Officer (CEO)</td>
                                    <td>London</td>
                                    <td>$1,200,000</td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">Ashton Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td>$86,000</td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Bradley Greer</td>
                                    <td>Software Engineer</td>
                                    <td>London</td>
                                    <td>$132,000</td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">Brenden Wagner</td>
                                    <td>Software Engineer</td>
                                    <td>San Francisco</td>
                                    <td>$206,850</td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Brielle Williamson</td>
                                    <td>Integration Specialist</td>
                                    <td>New York</td>
                                    <td>$372,000</td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">Bruno Nash</td>
                                    <td>Software Engineer</td>
                                    <td>London</td>
                                    <td>$163,500</td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Caesar Vance</td>
                                    <td>Pre-Sales Support</td>
                                    <td>New York</td>
                                    <td>$106,450</td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">Cara Stevens</td>
                                    <td>Sales Assistant</td>
                                    <td>New York</td>
                                    <td>$145,600</td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">Cedric Kelly</td>
                                    <td>Senior Javascript Developer</td>
                                    <td>Edinburgh</td>
                                    <td>$433,060</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Page Content Main-->
                <!---------------  Footer --------------->
                <?php include("include/footer.php"); ?>
                <!--------------- /Footer --------------->
            </div>
        <!-- /#page-content-wrapper -->
        </div>

<script>
        $(document).ready(function () {
            $('#position-table').DataTable({
                pageLength: 10
                , responsive: true
                , select: true
                , dom: '<"html5buttons"B>lTfgitp'
                , buttons: [
                    {
                        extend: 'copy'
                    }
                    , {
                        extend: 'csv'
                    }
//                    , {
//                        extend: 'excel'
//                        , title: 'ExampleFile'
//                    }
                    , {
                        extend: 'pdf'
                        , title: 'ExampleFile'
                    },

                    {
                        extend: 'print'
                        , customize: function (win) {
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');
                            $(win.document.body).find('table').addClass('compact').css('font-size', 'inherit');
                        }
                    }
                ]
//                ,initComplete: function () {
//                    this.api().columns().every(function () {
//                        var column = this;
//                        var select = $('<select><option value=""></option></select>').appendTo($(column.footer()).empty()).on('change', function () {
//                            var val = $.fn.dataTable.util.escapeRegex($(this).val());
//                            column.search(val ? '^' + val + '$' : '', true, false).draw();
//                        });
//                        column.data().unique().sort().each(function (d, j) {
//                            select.append('<option value="' + d + '">' + d + '</option>')
//                        });
//                    });
//                }
            });
        });
    </script>
</body>
</html>