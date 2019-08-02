<!DOCTYPE html>
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
        include '../src/php/sidebar.php'
        ?>
		<!-- End of Sidebar -->

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->

			<div id="content" style="background-color: #dbe0ff6b;">

				<!-- Topbar -->
				<?php
                include '../src/php/toolbar.php'
                ?>
				<!-- End of Topbar -->

				<!-- Begin Page Content -->

				<!-- /.container-fluid -->


				<!-- End of Main Content -->
				<div class="container-fluid">
					<div class="container">
						<div class="row">
							<div class="col-xl-12 col-12 mb-4">
								<div class="card">
									<div class="card-header card-bg text-primary">
										รายชื่อห้อง
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
												<div class="font-weight-bold  text-uppercase mb-1">รายวิชา</div>
												<div class="h5 mb-0 font-weight-bold text-gray-800">2 วิชา</div>
											</div>
											<div class="col-auto">
												<i class="material-icons icon-big">library_books</i>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-12 mb-4">
									<a href='addroom.html' style="text-decoration: none">
									<div class="card border-left-primary card-color-four shadow h-100 py-2" id="addsub" style="cursor:pointer;">
										<div class="card-body">
											<div class="row no-gutters align-items-center">
												<div class="col mr-2">
													<div class="font-weight-bold  text-uppercase mb-1">เพิ่มรายวิชาใหม่
													</div>
													<div class="h5 mb-0 font-weight-bold text-gray-800">+1 วิชา</div>
												</div>
												<div class="col-auto">
													<i class="material-icons icon-big">add_circle</i>
												</div>
											</div>
										</div>
									</div></a>
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
												<th>หมายเลขห้อง</th>
												<th>ชนิดของห้อง[จำนวนคนที่รองรับ]</th>
												<th>สิทธิการใช้งาน</th>
												<th>สถานะ</th>
												<th>ประวัติการจอง</th>
												<th>จัดการ</th>
											</tr>
										</thead>

										<tbody>
											<tr>
												<td>E8405</td>
												<td style="text-align:center;">ห้องLab [30คน]<br>
													<hr class="sidebar-divider my-1">ห้องเรียน [30คน]</td>
												<td style="text-align:center;">
													<a class="btn btn-info btn-sm btn-circle active">T</a>
													<a class="btn btn-danger btn-sm btn-circle active">S</a>
													<a class="btn btn-success btn-sm btn-circle active">P</a>
													<a class="btn btn-warning btn-sm btn-circle active" >O</a>
													</td>
												<td style="text-align:center;">
													<a class="btn btn-success btn-sm btn-circle active">R</a></td>
												<td style="text-align:center;"><button type="button" id="btn_info"
														class="btn btn-info btn-sm"><i
															class="fas fa-file-alt"></i></button>
												</td>

												<td style="text-align:center;">
													<button type="button" id="btn_info"
														class="btn btn-warning btn-sm"><i
															class="fas fa-edit"></i></button>

													<button type="button" id="btn_delete"
														class="btn btn-danger btn-sm"><i
															class="far fa-trash-alt"></i></button>

												</td>
											</tr>
											<tr>
												<td>E8405</td>
												<td style="text-align:center;">ห้องLab [30คน]<br>
													<hr class="sidebar-divider my-1">ห้องเรียน [30คน]</td>
												<td style="text-align:center;">
													<a class="btn btn-info btn-sm btn-circle active">T</a>
													<a class="btn btn-danger btn-sm btn-circle active">S</a>
													<a class="btn btn-success btn-sm btn-circle active">P</a>
													<a class="btn btn-warning btn-sm btn-circle active" >O</a>
													</td>
												<td style="text-align:center;">
													<a class="btn btn-success btn-sm btn-circle active">R</a></td>
												<td style="text-align:center;"><button type="button" id="btn_info"
														class="btn btn-info btn-sm"><i
															class="fas fa-file-alt"></i></button>
												</td>

												<td style="text-align:center;">
													<button type="button" id="btn_info"
														class="btn btn-warning btn-sm"><i
															class="fas fa-edit"></i></button>

													<button type="button" id="btn_delete"
														class="btn btn-danger btn-sm"><i
															class="far fa-trash-alt"></i></button>

												</td>
											</tr>
											<tr>
												<td>E8405</td>
												<td style="text-align:center;">ห้องLab [30คน]<br>
													<hr class="sidebar-divider my-1">ห้องเรียน [30คน]</td>
												<td style="text-align:center;">
													<a class="btn btn-info btn-sm btn-circle active">T</a>
													<a class="btn btn-danger btn-sm btn-circle active">S</a>
													<a class="btn btn-success btn-sm btn-circle active">P</a>
													<a class="btn btn-warning btn-sm btn-circle active" >O</a>
													</td>
												<td style="text-align:center;">
													<a class="btn btn-success btn-sm btn-circle active">R</a></td>
												<td style="text-align:center;"><button type="button" id="btn_info"
														class="btn btn-info btn-sm"><i
															class="fas fa-file-alt"></i></button>
												</td>

												<td style="text-align:center;">
													<button type="button" id="btn_info"
														class="btn btn-warning btn-sm"><i
															class="fas fa-edit"></i></button>

													<button type="button" id="btn_delete"
														class="btn btn-danger btn-sm"><i
															class="far fa-trash-alt"></i></button>

												</td>
											</tr>
											<tr>
												<td>E8405</td>
												<td style="text-align:center;">ห้องLab [30คน]<br>
													<hr class="sidebar-divider my-1">ห้องเรียน [30คน]</td>
												<td style="text-align:center;">
													<a class="btn btn-info btn-sm btn-circle active">T</a>
													<a class="btn btn-danger btn-sm btn-circle active">S</a>
													<a class="btn btn-success btn-sm btn-circle active">P</a>
													<a class="btn btn-warning btn-sm btn-circle active" >O</a>
													</td>
												<td style="text-align:center;">
													<a class="btn btn-success btn-sm btn-circle active">R</a></td>
												<td style="text-align:center;"><button type="button" id="btn_info"
														class="btn btn-info btn-sm"><i
															class="fas fa-file-alt"></i></button>
												</td>

												<td style="text-align:center;">
													<button type="button" id="btn_info"
														class="btn btn-warning btn-sm"><i
															class="fas fa-edit"></i></button>

													<button type="button" id="btn_delete"
														class="btn btn-danger btn-sm"><i
															class="far fa-trash-alt"></i></button>

												</td>
											</tr>
											<tr>
												<td>E8405</td>
												<td style="text-align:center;">ห้องLab [30คน]<br>
													<hr class="sidebar-divider my-1">ห้องเรียน [30คน]</td>
												<td style="text-align:center;">
													<a class="btn btn-info btn-sm btn-circle active">T</a>
													<a class="btn btn-danger btn-sm btn-circle active">S</a>
													<a class="btn btn-success btn-sm btn-circle active">P</a>
													<a class="btn btn-warning btn-sm btn-circle active" >O</a>
													</td>
												<td style="text-align:center;">
													<a class="btn btn-success btn-sm btn-circle active">R</a></td>
												<td style="text-align:center;"><button type="button" id="btn_info"
														class="btn btn-info btn-sm"><i
															class="fas fa-file-alt"></i></button>
												</td>

												<td style="text-align:center;">
													<button type="button" id="btn_info"
														class="btn btn-warning btn-sm"><i
															class="fas fa-edit"></i></button>

													<button type="button" id="btn_delete"
														class="btn btn-danger btn-sm"><i
															class="far fa-trash-alt"></i></button>

												</td>
											</tr>
											<tr>
												<td>E8405</td>
												<td style="text-align:center;">ห้องLab [30คน]<br>
													<hr class="sidebar-divider my-1">ห้องเรียน [30คน]</td>
												<td style="text-align:center;">
													<a class="btn btn-info btn-sm btn-circle active">T</a>
													<a class="btn btn-danger btn-sm btn-circle active">S</a>
													<a class="btn btn-success btn-sm btn-circle active">P</a>
													<a class="btn btn-warning btn-sm btn-circle active" >O</a>
													</td>
												<td style="text-align:center;">
													<a class="btn btn-success btn-sm btn-circle active">R</a></td>
												<td style="text-align:center;"><button type="button" id="btn_info"
														class="btn btn-info btn-sm"><i
															class="fas fa-file-alt"></i></button>
												</td>

												<td style="text-align:center;">
													<button type="button" id="btn_info"
														class="btn btn-warning btn-sm"><i
															class="fas fa-edit"></i></button>

													<button type="button" id="btn_delete"
														class="btn btn-danger btn-sm"><i
															class="far fa-trash-alt"></i></button>

												</td>
											</tr>
											<tr>
												<td>E8405</td>
												<td style="text-align:center;">ห้องLab [30คน]<br>
													<hr class="sidebar-divider my-1">ห้องเรียน [30คน]</td>
												<td style="text-align:center;">
													<a class="btn btn-info btn-sm btn-circle active">T</a>
													<a class="btn btn-danger btn-sm btn-circle active">S</a>
													<a class="btn btn-success btn-sm btn-circle active">P</a>
													<a class="btn btn-warning btn-sm btn-circle active" >O</a>
													</td>
												<td style="text-align:center;">
													<a class="btn btn-success btn-sm btn-circle active">R</a></td>
												<td style="text-align:center;"><button type="button" id="btn_info"
														class="btn btn-info btn-sm"><i
															class="fas fa-file-alt"></i></button>
												</td>

												<td style="text-align:center;">
													<button type="button" id="btn_info"
														class="btn btn-warning btn-sm"><i
															class="fas fa-edit"></i></button>

													<button type="button" id="btn_delete"
														class="btn btn-danger btn-sm"><i
															class="far fa-trash-alt"></i></button>

												</td>
											</tr>
											<tr>
												<td>E8405</td>
												<td style="text-align:center;">ห้องLab [30คน]<br>
													<hr class="sidebar-divider my-1">ห้องเรียน [30คน]</td>
												<td style="text-align:center;">
													<a class="btn btn-info btn-sm btn-circle active">T</a>
													<a class="btn btn-danger btn-sm btn-circle active">S</a>
													<a class="btn btn-success btn-sm btn-circle active">P</a>
													<a class="btn btn-warning btn-sm btn-circle active" >O</a>
													</td>
												<td style="text-align:center;">
													<a class="btn btn-success btn-sm btn-circle active">R</a></td>
												<td style="text-align:center;"><button type="button" id="btn_info"
														class="btn btn-info btn-sm"><i
															class="fas fa-file-alt"></i></button>
												</td>

												<td style="text-align:center;">
													<button type="button" id="btn_info"
														class="btn btn-warning btn-sm"><i
															class="fas fa-edit"></i></button>

													<button type="button" id="btn_delete"
														class="btn btn-danger btn-sm"><i
															class="far fa-trash-alt"></i></button>

												</td>
											</tr>
											<tr>
												<td>E8405</td>
												<td style="text-align:center;">ห้องLab [30คน]<br>
													<hr class="sidebar-divider my-1">ห้องเรียน [30คน]</td>
												<td style="text-align:center;">
													<a class="btn btn-info btn-sm btn-circle active">T</a>
													<a class="btn btn-danger btn-sm btn-circle active">S</a>
													<a class="btn btn-success btn-sm btn-circle active">P</a>
													<a class="btn btn-warning btn-sm btn-circle active" >O</a>
													</td>
												<td style="text-align:center;">
													<a class="btn btn-success btn-sm btn-circle active">R</a></td>
												<td style="text-align:center;"><button type="button" id="btn_info"
														class="btn btn-info btn-sm"><i
															class="fas fa-file-alt"></i></button>
												</td>

												<td style="text-align:center;">
													<button type="button" id="btn_info"
														class="btn btn-warning btn-sm"><i
															class="fas fa-edit"></i></button>

													<button type="button" id="btn_delete"
														class="btn btn-danger btn-sm"><i
															class="far fa-trash-alt"></i></button>

												</td>
											</tr>
											<tr>
												<td>E8405</td>
												<td style="text-align:center;">ห้องLab [30คน]<br>
													<hr class="sidebar-divider my-1">ห้องเรียน [30คน]</td>
												<td style="text-align:center;">
													<a class="btn btn-info btn-sm btn-circle active">T</a>
													<a class="btn btn-danger btn-sm btn-circle active">S</a>
													<a class="btn btn-success btn-sm btn-circle active">P</a>
													<a class="btn btn-warning btn-sm btn-circle active" >O</a>
													</td>
												<td style="text-align:center;">
													<a class="btn btn-success btn-sm btn-circle active">R</a></td>
												<td style="text-align:center;"><button type="button" id="btn_info"
														class="btn btn-info btn-sm"><i
															class="fas fa-file-alt"></i></button>
												</td>

												<td style="text-align:center;">
													<button type="button" id="btn_info"
														class="btn btn-warning btn-sm"><i
															class="fas fa-edit"></i></button>

													<button type="button" id="btn_delete"
														class="btn btn-danger btn-sm"><i
															class="far fa-trash-alt"></i></button>

												</td>
											</tr>
											<tr>
												<td>E8405</td>
												<td style="text-align:center;">ห้องLab [30คน]<br>
													<hr class="sidebar-divider my-1">ห้องเรียน [30คน]</td>
												<td style="text-align:center;">
													<a class="btn btn-info btn-sm btn-circle active">T</a>
													<a class="btn btn-danger btn-sm btn-circle active">S</a>
													<a class="btn btn-success btn-sm btn-circle active">P</a>
													<a class="btn btn-warning btn-sm btn-circle active" >O</a>
													</td>
												<td style="text-align:center;">
													<a class="btn btn-success btn-sm btn-circle active">R</a></td>
												<td style="text-align:center;"><button type="button" id="btn_info"
														class="btn btn-info btn-sm"><i
															class="fas fa-file-alt"></i></button>
												</td>

												<td style="text-align:center;">
													<button type="button" id="btn_info"
														class="btn btn-warning btn-sm"><i
															class="fas fa-edit"></i></button>

													<button type="button" id="btn_delete"
														class="btn btn-danger btn-sm"><i
															class="far fa-trash-alt"></i></button>

												</td>
											</tr>
											<tr>
												<td>E8405</td>
												<td style="text-align:center;">ห้องLab [30คน]<br>
													<hr class="sidebar-divider my-1">ห้องเรียน [30คน]</td>
												<td style="text-align:center;">
													<a class="btn btn-info btn-sm btn-circle active">T</a>
													<a class="btn btn-danger btn-sm btn-circle active">S</a>
													<a class="btn btn-success btn-sm btn-circle active">P</a>
													<a class="btn btn-warning btn-sm btn-circle active" >O</a>
													</td>
												<td style="text-align:center;">
													<a class="btn btn-success btn-sm btn-circle active">R</a></td>
												<td style="text-align:center;"><button type="button" id="btn_info"
														class="btn btn-info btn-sm"><i
															class="fas fa-file-alt"></i></button>
												</td>

												<td style="text-align:center;">
													<button type="button" id="btn_info"
														class="btn btn-warning btn-sm"><i
															class="fas fa-edit"></i></button>

													<button type="button" id="btn_delete"
														class="btn btn-danger btn-sm"><i
															class="far fa-trash-alt"></i></button>

												</td>
											</tr>
											<tr>
												<td>E8405</td>
												<td style="text-align:center;">ห้องLab [30คน]<br>
													<hr class="sidebar-divider my-1">ห้องเรียน [30คน]</td>
												<td style="text-align:center;">
													<a class="btn btn-info btn-sm btn-circle active">T</a>
													<a class="btn btn-danger btn-sm btn-circle active">S</a>
													<a class="btn btn-success btn-sm btn-circle active">P</a>
													<a class="btn btn-warning btn-sm btn-circle active" >O</a>
													</td>
												<td style="text-align:center;">
													<a class="btn btn-success btn-sm btn-circle active">R</a></td>
												<td style="text-align:center;"><button type="button" id="btn_info"
														class="btn btn-info btn-sm"><i
															class="fas fa-file-alt"></i></button>
												</td>

												<td style="text-align:center;">
													<button type="button" id="btn_info"
														class="btn btn-warning btn-sm"><i
															class="fas fa-edit"></i></button>

													<button type="button" id="btn_delete"
														class="btn btn-danger btn-sm"><i
															class="far fa-trash-alt"></i></button>

												</td>
											</tr>
											<tr>
												<td>E8405</td>
												<td style="text-align:center;">ห้องLab [30คน]<br>
													<hr class="sidebar-divider my-1">ห้องเรียน [30คน]</td>
												<td style="text-align:center;">
													<a class="btn btn-info btn-sm btn-circle active">T</a>
													<a class="btn btn-danger btn-sm btn-circle active">S</a>
													<a class="btn btn-success btn-sm btn-circle active">P</a>
													<a class="btn btn-warning btn-sm btn-circle active" >O</a>
													</td>
												<td style="text-align:center;">
													<a class="btn btn-success btn-sm btn-circle active">R</a></td>
												<td style="text-align:center;"><button type="button" id="btn_info"
														class="btn btn-info btn-sm"><i
															class="fas fa-file-alt"></i></button>
												</td>

												<td style="text-align:center;">
													<button type="button" id="btn_info"
														class="btn btn-warning btn-sm"><i
															class="fas fa-edit"></i></button>

													<button type="button" id="btn_delete"
														class="btn btn-danger btn-sm"><i
															class="far fa-trash-alt"></i></button>

												</td>
											</tr>
											<tr>
												<td>E8405</td>
												<td style="text-align:center;">ห้องLab [30คน]<br>
													<hr class="sidebar-divider my-1">ห้องเรียน [30คน]</td>
												<td style="text-align:center;">
													<a class="btn btn-info btn-sm btn-circle active">T</a>
													<a class="btn btn-danger btn-sm btn-circle active">S</a>
													<a class="btn btn-success btn-sm btn-circle active">P</a>
													<a class="btn btn-warning btn-sm btn-circle active" >O</a>
													</td>
												<td style="text-align:center;">
													<a class="btn btn-success btn-sm btn-circle active">R</a></td>
												<td style="text-align:center;"><button type="button" id="btn_info"
														class="btn btn-info btn-sm"><i
															class="fas fa-file-alt"></i></button>
												</td>

												<td style="text-align:center;">
													<button type="button" id="btn_info"
														class="btn btn-warning btn-sm"><i
															class="fas fa-edit"></i></button>

													<button type="button" id="btn_delete"
														class="btn btn-danger btn-sm"><i
															class="far fa-trash-alt"></i></button>

												</td>
											</tr>
											<tr>
												<td>E8405</td>
												<td style="text-align:center;">ห้องLab [30คน]<br>
													<hr class="sidebar-divider my-1">ห้องเรียน [30คน]</td>
												<td style="text-align:center;">
													<a class="btn btn-info btn-sm btn-circle active">T</a>
													<a class="btn btn-danger btn-sm btn-circle active">S</a>
													<a class="btn btn-success btn-sm btn-circle active">P</a>
													<a class="btn btn-warning btn-sm btn-circle active" >O</a>
													</td>
												<td style="text-align:center;">
													<a class="btn btn-success btn-sm btn-circle active">R</a></td>
												<td style="text-align:center;"><button type="button" id="btn_info"
														class="btn btn-info btn-sm"><i
															class="fas fa-file-alt"></i></button>
												</td>

												<td style="text-align:center;">
													<button type="button" id="btn_info"
														class="btn btn-warning btn-sm"><i
															class="fas fa-edit"></i></button>

													<button type="button" id="btn_delete"
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
			</div>
		</div>
		<!-- End of Content Wrapper -->

	</div>
	<!-- End of Page Wrapper -->
	<?php include('../src/php/footer.php') ?>
	<?php
        include('../src/js/datatable.php');
        ?>
</body>

<script>

	// $( document ).ready(function() {

	//     $('#addUser').click(function(){
	//         console.log('fffff')
	//     });
	// });
	$(document).ready(function () {
		console.log("ready!");
		$("#btn_delete").click(function () {
			swal({
				title: "ยืนยันการลบ 02204223 Electronics Fundamentals",
				icon: "warning",
				buttons: ["ยกเลิก", "ยืนยัน"],
			});
		});
		$("#addsub").click(function () {
			$("#modaladdsub").modal();
		});

	});




</script>








</html>