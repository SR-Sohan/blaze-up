<?php require("inc/dhead.php") ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php require("inc/dsidebar.php") ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php require_once("inc/topbar.php") ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Add Product</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <form style="width: 60%;" action="">
                            <div class="mb-3">
                                <label for="formFileLg" class="form-label">Product Images</label>
                                <input class="form-control form-control-lg" id="formFileLg" type="file">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Product title</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="title">
                            </div>
                            <select style="width: 60%;padding: 5px;" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                <option selected>Category</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <br>
                            <select style="width: 60%;padding: 5px;" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                <option selected>Brand</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Product Price</label>
                                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Price">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Product Discount</label>
                                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Discount">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Product Length</label>
                                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Length">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Product Weight</label>
                                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Weight">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Product Quantity</label>
                                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Quantity">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Product Manufacturer</label>
                                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Manufacturer">
                            </div>
                            <input class="btn btn-outline-success" type="submit" name="submit" value="Add Product">
                        </form>

                    </div>





                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Genuity System - 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->



    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>