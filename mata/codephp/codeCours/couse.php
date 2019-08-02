
<!DOCTYPE html>
<html>

<head>

<?php
                include('../src/php/header.php');
                ?>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php
        include('../src/php/sidebar.php');
    ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content" style="background-color: #dbe0ff6b;">

        <!-- Topbar -->
        <?php
                include('../src/php/toolbar.php');
                ?>
          <!-- Topbar Navbar -->
         

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
<div class="container">
    <div class="row">
        <div class="col-xl-12 col-12 mb-4">
            <div class="card">
                <div class="card-header card-bg text-primary">
                หลักสูตร
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-3 col-12 mb-4">
            <div class="card border-left-primary card-color-one shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="font-weight-bold  text-uppercase mb-1">จำนวนหลักสูตร</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">2 หลักสูตร</div>
                        </div>
                        <div class="col-auto">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-12 mb-4">
                <div class="card border-left-primary card-color-four shadow h-100 py-2" id="addsubject" style="cursor:pointer;">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="font-weight-bold  text-uppercase mb-1">เพิ่มหลักสูตร</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">+1 หลักสูตร</div>
                                
                            </div>
                            <div class="col-auto">
                                <i class="material-icons icon-big">add_location</i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
 


    



    <div class="card shadow mb-4">
        <div class="card-header card-header-table py-3">
            <h6 class="m-0 font-weight-bold text-primary">รายชื่อหลักสูตรในระบบ</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered dataTable" id="dataTable"
                                width="100%" cellspacing="0" role="grid"
                                aria-describedby="dataTable_info" style="width: 100%;">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0"
                                            aria-controls="dataTable" rowspan="1" colspan="1"
                                            aria-sort="ascending"
                                            aria-label="รหัสวิชา: activate to sort column descending"
                                            style="width: 18px;">หลักสูตร</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable"
                                            rowspan="1" colspan="1"
                                            aria-label="ชื่อวิชา: activate to sort column ascending"
                                            style="width: 109px;">คณะ</th>
                                        
                                        <th class="sorting" tabindex="0" aria-controls="dataTable"
                                            rowspan="1" colspan="1"
                                            aria-label="หลักสูตร: activate to sort column ascending"
                                            style="width: 46px;">จัดการ</th>
                                       
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th rowspan="1" colspan="1">หลักสูตร</th>
                                        <th rowspan="1" colspan="1">คณะ</th>
                                        <th rowspan="1" colspan="1">จัดการ</th>
                                        
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">วิศวกรรมศาสตรบัณฑิต สาขาวิศวกรรมคอมพิวเตอร์</td>
                                        <td>วิศวกรรมศาสตร์</td>
                                        
                                        
                                        <td style="text-align:center;">
                                            <button type="button" id="btn_edit"
                                                class="btn btn-warning btn-sm"><i
                                                    class="fas fa-edit"></i></button>
                                            <button type="button" id="btn_delete"
                                                class="btn btn-danger btn-sm"><i
                                                    class="far fa-trash-alt"></i></button>

                                        </td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">วิศวกรรมศาสตรบัณฑิต</td>
                                        <td>วิศวกรรมศาสตร์</td>

                                       
                                        <td style="text-align:center;">
                                            <button type="button" id="btn_edit1"
                                                class="btn btn-warning btn-sm"><i
                                                    class="fas fa-edit"></i></button>
                                            <button type="button" id="btn_delete1"
                                                class="btn btn-danger btn-sm"><i
                                                    class="far fa-trash-alt"></i></button>

                                        </td>
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
<div id="modaladdsub" class="modal fade">

    <form class="modal-dialog modal-lg " action="/action_page.php">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#3E49BB">
                <h4 class="modal-title" style="color:white">เพิ่มรายวิชา</h4>
            </div>
            <div class="modal-body" id="addModalBody">
                <div class="container">

                    <div class="row mb-4">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                            <span>หลักสูตร:</span>
                        </div>
                        <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                            <input type="text" class="form-control" id="username"
                                placeholder="กรุณากรอกหลักสูตร" maxlength="8">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                            <span>คณะ:</span>
                        </div>
                        <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                            <input type="text" class="form-control" id="username"
                                placeholder="กรุณากรอกคณะ" maxlength="8">
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">ยืนยัน</button>
                <button type="button" class="btn btn-danger"
                    onclick="closeForm()" data-dismiss="modal">ยกเลิก</button>
            </div>
        </div>
    </form>

</div>
<div id="modaleditsub" class="modal fade">

    <form class="modal-dialog modal-lg " action="/action_page.php">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#3E49BB">
                <h4 class="modal-title" style="color:white">เพิ่มรายวิชา</h4>
            </div>
            <div class="modal-body" id="addModalBody">
                <div class="container">

                    <div class="row mb-4">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                            <span>หลักสูตร:</span>
                        </div>
                        <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                            <input type="text" class="form-control" id="username"
                                placeholder="แก้ไขหลักสูตร" maxlength="8">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                            <span>คณะ:</span>
                        </div>
                        <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                            <input type="text" class="form-control" id="username"
                                placeholder="แก้ไขคณะ" maxlength="8">
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">ยืนยัน</button>
                <button type="button" class="btn btn-danger"
                    onclick="closeForm()" data-dismiss="modal">ยกเลิก</button>
            </div>
        </div>
    </form>

</div>

</body>

</html>

<script>
   <?php
        include('../src/js/datatable.php');
        ?>
    // $( document ).ready(function() {

    //     $('#addUser').click(function(){
    //         console.log('fffff')
    //     });
    // });
    $(document).ready(function () {
        console.log("ready!");
        $("#btn_delete").click(function () {
            swal({
                title: "ยืนยันการลบ ",
                icon: "warning",
                buttons: ["ยกเลิก", "ยืนยัน"],
            });
        });
        $("#btn_delete1").click(function () {
            swal({
                title: "ยืนยันการลบ ",
                icon: "warning",
                buttons: ["ยกเลิก", "ยืนยัน"],
            });
        });
        $("#addsubject").click(function () {
            $("#modaladdsub").modal();
        });
        $("#btn_edit").click(function () {
            $("#modaleditsub").modal();
        });
        $("#btn_edit1").click(function () {
            $("#modaleditsub").modal();
        });
    });
    


</script>

<?php include('../src/php/footer.php') ?>
</body>

</html>

