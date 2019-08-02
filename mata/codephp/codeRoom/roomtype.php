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
                        <div class="row">
                            <div class="col-xl-12 col-12 mb-4">
                                <div class="card">
                                    <div class="card-header card-bg text-primary">
                                        ชนิดห้อง
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Pending Requests Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2 card-color-three">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold =text-uppercase mb-1">
                                                    <h5>ชนิดห้องทั้งหมด</h5>
                                                </div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <h4>4 ชนิด</h4>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="material-icons icon-big">home</i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Pending Requests Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-info shadow h-100 py-2 card-color-two" id="addroom"
                                    style="cursor:pointer">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-uppercase mb-1 ">
                                                    <h5>เพิ่มชนิดห้อง</h5>
                                                </div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <h4>+1 ชนิด</h4>
                                                </div>
                                            </div>

                                            <div class="col-auto">
                                                <i class="material-icons icon-big">add_box</i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <br>

                        <!-- DataTales RoomType -->
                        <div class="card shadow mb-4">
                            <div class="card-header card-header-table py-3">
                                <h6 class="m-0 font-weight-bold text-primary">ชนิดของห้อง</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Room type</th>
                                                <th>Information</th>
                                                <th>Requirement</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>ห้องเรียน</td>
                                                <td>20-30 คน</td>
                                                <td>
                                                    <a href="#" class="btn btn-danger btn-circle btn-sm "
                                                        data-toggle="modal" data-target="#modalRemoveroom"
                                                        data-whatever="">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-warning btn-circle btn-sm"
                                                        data-toggle="modal" data-target="#modalChangeroom"
                                                        data-whatever="ห้องเรียน">
                                                        <i class="fas fa-exclamation-triangle"></i>
                                                    </a></td>
                                            <tr>
                                                <td>ห้องสอบ</td>
                                                <td>20 คน</td>
                                                <td>
                                                    <a href="#" class="btn btn-danger btn-circle btn-sm"
                                                        data-toggle="modal" data-target="#modalRemoveroom"
                                                        data-whatever="">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-warning btn-circle btn-sm"
                                                        data-toggle="modal" data-target="#modalChangeroom"
                                                        data-whatever="ห้องสอบ">
                                                        <i class="fas fa-exclamation-triangle"></i>
                                                    </a></td>
                                            <tr>
                                                <td>ห้องประชุม</td>
                                                <td>20 คน</td>
                                                <td>
                                                    <a href="#" class="btn btn-danger btn-circle btn-sm"
                                                        data-toggle="modal" data-target="#modalRemoveroom"
                                                        data-whatever="">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-warning btn-circle btn-sm"
                                                        data-toggle="modal" data-target="#modalChangeroom"
                                                        data-whatever="ห้องประชุม">
                                                        <i class="fas fa-exclamation-triangle"></i>
                                                    </a></td>
                                            <tr>
                                                <td>ห้องอ่านหนังสือ</td>
                                                <td>20-30 คน</td>
                                                <td>
                                                    <a href="#" class="btn btn-danger btn-circle btn-sm"
                                                        data-toggle="modal" data-target="#modalRemoveroom"
                                                        data-whatever="">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-warning btn-circle btn-sm"
                                                        data-toggle="modal" data-target="#modalChangeroom"
                                                        data-whatever="ห้องอ่านหนังสือ">
                                                        <i class="fas fa-exclamation-triangle"></i>
                                                    </a></td>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>

                <!-- The Modal -->
                <div class="modal fade" id="modaladdroom">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">เพิ่มชนิดของห้อง</h4>
                                <button type="button" class="close" data-dismiss="modal">×</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Room type </label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Information </label>
                                        <textarea class="form-control" id="message-text"></textarea>
                                    </div>
                                </form>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Add</button>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="modal fade" id="modalRemoveroom">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">ลบชนิดห้อง</h4>
                                <button type="button" class="close" data-dismiss="modal">×</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <h3> ท่านต้องการที่จะลบชนิดห้องนี้ใช่หรือไม่ </h3>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Remove</button>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="modal fade" id="modalChangeroom">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">แก้ไขชนิดห้อง</h4>
                                <button type="button" class="close" data-dismiss="modal">×</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Room type </label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Information </label>
                                        <textarea class="form-control" id="message-text"></textarea>
                                    </div>
                                </form>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Change</button>
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

          <!-- Bootstrap core JavaScript-->
          <?php include('../src/php/footer.php') ?>
          <script>
    $(document).ready(function() {
        $("#addroom").click(function() {
            $("#modaladdroom").modal();
        });
    });

    $('#modalRemoveroom').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('New message to ' + recipient)
        modal.find('.modal-body input').val(recipient)
    })

    $('#modalChangroom').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('New message to ' + recipient)
        modal.find('.modal-body input').val(recipient)
    })
    </script>
    <?php include('../src/js/datatable.php') ?>
</body>

</html>