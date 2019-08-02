<!DOCTYPE html>
<html>

<head>

    <?php
    include('../src/php/header.php');
    ?>
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

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

                <div class="container-fluid" id="app">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12 col-12 mb-4">
                                <div class="card">
                                    <div class="card-header card-bg text-primary">
                                        อุปกรณ์
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-12 mb-4">
                                <div class="card border-left-primary card-color-three shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="font-weight-bold  text-uppercase mb-1">อุปกรณ์</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">25 ชิ้น</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="material-icons icon-big">library_books</i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                                <div class="col-xl-3 col-12 mb-4">
                                    <div class="card border-left-primary card-color-four shadow h-100 py-2" id="addtool"
                                        style="cursor:pointer;">
                                        <a href="edit_tools.php">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="font-weight-bold  text-uppercase mb-1">เพิ่มอุปกรณ์ใหม่
                                                    </div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">+1 ชิ้น</div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="material-icons icon-big">add_circle</i>
                                                </div>
                                            </div>
                                        </div></a>
                                    </div>
                                </div>

                          

                        </div>

                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header card-header-table py-3 text-primary">
                                <h6 class="m-0 font-weight-bold">รายชื่อห้องในระบบ</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div class="row">
                                    </div>
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                                        <thead>
                                            <tr>
                                                <th>ชื่อ</th>
                                                <th>ชื่อย่อ</th>
                                                <th>หมายเลข</th>
                                                <th>ชนิด</th>
                                                <th>ที่อยู่</th>
                                                <th>จัดการ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $a = array("Volvo", "BMW", "Toyota , Volvo", "BMW", "Toyota");
                                            for($i = 25; $i >= 0 ; $i--){
                                            ?>
                                            <tr>
                                                <td><?php echo $a[0];?></td>
                                                <td>Pongwisanu Hootip</td>
                                                <td>6120502734</td>
                                                <td>Pongwisanu Hootip</td>
                                                <td>Pongwisanu Hootip</td>
                                                <td style="text-align:center;">
                                                    <button type="button" id="btn_info"
                                                        class="btn btn-warning btn-sm"><i
                                                            class="fas fa-edit"></i></button>

                                                    <button type="button" id="btn_delete"
                                                        class="btn btn-danger btn-sm"><i
                                                            class="far fa-trash-alt"></i></button>
                                                    <button type="button" id="btn_info"
                                                        class="btn btn btn-info btn-sm"><i
                                                            class="fas fa-file-alt"></i></button>

                                                    </a>

                                                </td>

                                            </tr>
                                            <?php } ?>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- start Model -->

                        <!-- End Model -->

                        <!-- <div class="card-body">
                                        
                        <div class="accordion basic-accordion" id="accordion" role="tablist">
                            <div class="card">
                                <div class="card-header" role="tab" id="headingOne">
                                    <h6 class="mb-0">
                                    <a data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                                        <i class="card-icon mdi mdi-checkbox-marked-circle-outline"></i>
                                        <i class="material-icons">perm_contact_calendar</i>
                                        How can I pay for an order I placed?
                                    </a>
                                    </h6>
                                </div>
                            <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" style="">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img class="img-fluid rounded" src="https://placehold.it/200x150" alt="image"> </div>
                                            <div class="col-md-9">
                                            <p>You can pay for the product you bit cards, or via online banking. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                            
                    </div> -->

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
    <?php include('../src/php/footer.php') ?>

</body>
<script>
$('#dataTable').dataTable({
    "oLanguage": {
        sLengthMenu: "แสดง _MENU_ แถว",
        sSearch: "<span>ค้นหา </span> _INPUT_",
        sInfo: "กำลังแสดง _START_ ถึง _END_ จาก _TOTAL_ แถว", //search
        oPaginate: {
            sFirst: "First",
            sLast: "Last",
            sNext: "ต่อไป",
            sPrevious: "ก่อนหน้า"
        },
    }
});
</script>
<?php $a = '1';//ตัวแปร php?>

<script type="text/javascript">
x = <?php json_encode($a);?>;
x = x * 20;
$.post('tools.php', {
    data: x
});
</script>
<script>
// $( document ).ready(function() {

//     $('#addUser').click(function(){
//         console.log('fffff')
//     });
// });
$(document).ready(function() {

    $("#btn_delete").click(function() {
        swal({
            title: "ยืนยันการลบ 02204223 Electronics Fundamentals",
            icon: "warning",
            buttons: ["ยืนยัน", "ยกเลิก"],
        });
    });
    $("#addtool").click(function() {
        $("#modaladdtool").modal();
    });

});
</script>




</html>