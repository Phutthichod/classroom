<!DOCTYPE html>
<html>

<head>
    <!-- Custom fonts for this template-->
    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../css/sb-admin-2.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <link href="../../css/customize.css" rel="stylesheet">

    <link href="../../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">
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
                <div id="calendar">
                    <iframe
                        src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=Asia%2FBangkok&amp;src=YzlsZ2g1dThiOHRrOGtrNzVibHVkbG5qMGdAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;src=a3Uua3BzLmNhbGVuZGFyQGdtYWlsLmNvbQ&amp;src=dGgudGgjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%23EF6C00&amp;color=%234285F4&amp;color=%230B8043"
                        style="border-width:0" width="1280" height="600" frameborder="0" scrolling="no"></iframe>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
 <!-- Bootstrap core JavaScript-->
 <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../js/sb-admin-2.min.js"></script>

    <script src="../../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- RangeSlider Plugin Js -->
    <script src="../../lib/ion-rangeslider/js/ion.rangeSlider.js"></script>

    <script src="../../lib/markmap/markerclusterer.js"></script>

    <script src='../../lib/calendar/js/fullcalendar.js' type="text/javascript"></script>

    <script src='../../js/customize.js' type="text/javascript"></script>
    <script src="../../lib/chart.js/Chart.min.js"></script>
</body>
<?php include('../src/php/footer.php') ?>
</html>