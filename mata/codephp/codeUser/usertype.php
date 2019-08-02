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
                <!-- End of Topbar -->

                <!-- Begin Page Content -->

                <div class="container-fluid">
                    <div class="container">
                        <!-- Page Heading -->
                        <div class="row">
                            <div class="col-xl-12 col-12 mb-4">
                                <div class="card">
                                    <div class="card-header card-bg text-primary">
                                        ชนิดผู้ใช้
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Pending Requests Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2 card-color-three">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class=" font-weight-bold  text-uppercase mb-1">
                                                    <h5>ผู้ดูแลระบบ</h5>
                                                </div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <h5>1 คน</h5>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="material-icons icon-big">build</i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <!-- Pending Requests Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-info shadow h-100 py-2 card-color-two">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class=" font-weight-bold text-uppercase mb-1">
                                                    <h5>อาจารย์</h5>
                                                </div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <h5>1 คน</h5>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="material-icons icon-big">person</i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Pending Requests Card Example -->

                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2 card-color-one">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class=" font-weight-bold text-uppercase mb-1">
                                                    <h5>นิสิต</h5>
                                                </div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <h5>1 คน</h5>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="material-icons icon-big">person</i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Pending Requests Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2 card-color-four">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class=" font-weight-bold  text-uppercase mb-1">
                                                    <h5>บุคคลภายนอก</h5>
                                                </div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <h5>1 คน</h5>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="material-icons icon-big">people</i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <br>

                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">รายชื่อผู้ใช้งานในระบบ</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ชื่อ-นามสกุล</th>
                                                <th>รหัสนิสิต</th>
                                                <th>สิทธิ์การเข้าใช้งาน</th>
                                                <th>คำสั่ง</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Pongwisanu Hootip</td>
                                                <td>-</td>
                                                <td>
                                                    <a class="btn btn-success btn-square btn-sm active">
                                                        <b>A
                                                    </a>
                                                    <a class="btn btn-info btn-square btn-sm active">
                                                        <b>T
                                                    </a>
                                                    </a></td>
                                                <td>
                                                    <a href="#" class="btn btn-danger btn-circle btn-sm"
                                                        data-toggle="modal" data-target="#modalRemoveUserType"
                                                        data-whatever="">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                    <a href="index.html" class="btn btn-warning btn-circle btn-sm">
                                                        <i class="fas fa-exclamation-triangle"></i>
                                                    </a></td>
                                            </tr>
                                            <tr>
                                                <td>Pongwisanu Hootip</td>
                                                <td>6120502734</td>
                                                <td>-</td>

                                                <td>
                                                    <a class="btn btn-warning btn-circle btn-sm active">
                                                        <b>O
                                                    </a></td>

                                                <td>
                                                    <a href="#" class="btn btn-danger btn-circle btn-sm"
                                                        data-toggle="modal" data-target="#modalRemoveUserType"
                                                        data-whatever="">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                    <a href="index.html" class="btn btn-warning btn-circle btn-sm">
                                                        <i class="fas fa-exclamation-triangle"></i>
                                                    </a></td>
                                            </tr>
                                            <tr>
                                                <td>Pongwisanu Hootip</td>
                                                <td>6120502734</td>

                                                <td>
                                                    <a class="btn btn-danger btn-circle btn-sm active">
                                                        <b>S
                                                    </a></td>
                                                <td>
                                                    <a href="#" class="btn btn-danger btn-circle btn-sm"
                                                        data-toggle="modal" data-target="#modalRemoveUserType"
                                                        data-whatever="">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                    <a href="index.html" class="btn btn-warning btn-circle btn-sm">
                                                        <i class="fas fa-exclamation-triangle"></i>
                                                    </a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="modal fade" id="modalRemoveUserType">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">ลบชนิดผู้ใช้</h4>
                                <button type="button" class="close" data-dismiss="modal">×</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <h3> ท่านต้องการที่จะลบชนิดผู้ใช้นี้ใช่หรือไม่ </h3>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Remove</button>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="modal fade" id="modalRemoveUserType" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">

                            <div class="modal-header">
                                <h5 class="modal-title">New message</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                </button>
                            </div>

                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Recipient:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Message:</label>
                                        <textarea class="form-control" id="message-text"></textarea>
                                    </div>
                                </form>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Send message</button>
                            </div>

                        </div>
                    </div>
                </div>


                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <?php include('../src/php/footer.php') ?>





<?php
        include('../src/js/datatable.php');
        ?>
<script>
$('#modalRemoveUserType').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget)
    var recipient = button.data('whatever')
    var modal = $(this)
    modal.find('.modal-title').text('New message to ' + recipient)
    modal.find('.modal-body input').val(recipient)
})
</script>

</body>

</html>