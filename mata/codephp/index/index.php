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

                <div class="container-fluid">

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12 col-12 mb-4">
                                <div class="card text-primary" >
                                    <div class="card-header card-bg">
                                        บัญชีผู้ใช้
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-12 mb-4">
                                <div class="row">
                                    <div class="col-xl-12 col-12">
                                        <div class="card text-primary">
                                            <div class="card-header card-bg">
                                                รูปโปรไฟล์
                                            </div>
                                            <div class="card-body">

                                                <div class="box">
                                                    <img src="../../img/profile.jpg"  style=" float: left; width : 200px;margin-left : 15px">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-xl-12 col-12 mb-4">
                                        <div class="card text-primary">
                                            <div class="card-header card-bg">
                                                เเก้ไขข้อมูล
                                            </div>
                                            <div class="card-body">
                                                <div class="row mt-3">

                                                    <div class="col-xl-12 col-12" style="color:#6C8BA3">
                                                        <input type="file" id="input_upload" style="display:none" />
                                                        <button type="button" id="btn_upload" class="btn btn-info btn-sm form-control mb-3">เปลี่ยนรูปโปรไฟล์</button>
                                                    </div>
                                                </div>
                                                <div class="row" style="color:#6C8BA3">
                                                    <div class="col-xl-6 col-12">

                                                        <button type="button" id="btn_info" class="btn btn-warning btn-sm form-control mb-3">เปลี่ยนข้อมูลบัญชี</button>
                                                    </div>
                                                    <div class="col-xl-6 col-12">
                                                        <button type="button" id="btn_pass" class="btn btn-success btn-sm form-control">เปลี่ยนรหัสผ่าน</button>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-8 col-12 mb-4">
                                <div class="card text-primary">
                                    <div class="card-header card-bg">
                                        รายละเอียดบัญชี
                                    </div>
                                    <div class="card-body" style="color:#6C8BA3">
                                        <div class="row mb-4">
                                            <div class="col-xl-3 col-12 text-right">
                                                <span>คำนำหน้า</span>
                                            </div>
                                            <div class="col-xl-9 col-12">
                                                <input type="text" class="form-control" id="rank" value="นางสาว">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-xl-3 col-12 text-right">
                                                <span>ชื่อ</span>
                                            </div>
                                            <div class="col-xl-9 col-12">
                                                <input type="text" class="form-control" id="firstname" value="สวยเด่น">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-xl-3 col-12 text-right">
                                                <span>นามสกุล</span>
                                            </div>
                                            <div class="col-xl-9 col-12">
                                                <input type="text" class="form-control" id="lastname" value="เป็นสง่า">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-xl-3 col-12 text-right">
                                                <span>อีเมล์</span>
                                            </div>
                                            <div class="col-xl-9 col-12">
                                                <input type="text" class="form-control" id="mail" value="S19158@cp.ac.th">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-xl-3 col-12 text-right">
                                                <span>เบอร์โทรศัพท์</span>
                                            </div>
                                            <div class="col-xl-9 col-12">
                                                <input type="text" class="form-control" id="mail" value="0969841857">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-xl-3 col-12 text-right">
                                                <span>ชื่อบัญชี</span>
                                            </div>
                                            <div class="col-xl-9 col-12">
                                                <input type="text" class="form-control" id="username" value="Torfun">
                                            </div>
                                        </div>
                                      
                                       
                                        <div class="row mb-4">
                                            <div class="col-xl-3 col-12 text-right">
                                                <span>สิทธิ์การเข้าถึง</span>
                                            </div>
                                            <div class="col-xl-9 col-12">
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" checked disabled>
                                                    <label class="form-check-label" for="exampleCheck1">ผู้บริหารระบบ</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" disabled>
                                                    <label class="form-check-label" for="exampleCheck1">อาจาร์ย+เจ้าหน้าที่</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" checked disabled>
                                                    <label class="form-check-label" for="exampleCheck1">นิสิต</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" disabled>
                                                    <label class="form-check-label" for="exampleCheck1">บุคลลภายนอก</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- End of Main Content -->

            </div>

            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        
</body>

</html>
<?php include('../src/php/footer.php') ?>

<script>
	
    $("#btn_upload").click(function () {
        $("#input_upload").click();
    });

    $("#btn_info").click(function () {
        $("body").append(infoModal);
        $("#infoModal").modal('show');
    });

    $("#btn_pass").click(function () {
        $("body").append(passModal);
        $("#passModal").modal('show');
    });
</script>

</body>

</html>