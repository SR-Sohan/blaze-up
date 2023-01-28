<?php require_once('inc/header.php'); ?>


    <!-- breadcrumb area start  -->
    <div class="container">
        <nav aria-label="breadcrumb " class="breadcrumb-area my-5">
            <ol class="breadcrumb ">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Library</li>
            </ol>
        </nav>
    </div>
    <!-- breadcrumb area end  -->


    <!-- products list area start  -->
    <div class="products-list-area mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                

                   
                </div>
                <div class="col-md-3">
                    <div class="sidebar-area">

                        <div class="category-area">
                            <div class="sidebar-heading">
                                <h3>Category</h3>
                            </div>
                            <ul class="category-list">
                                <li><i class="fa-solid fa-caret-right"></i><a href="">Smart phone</a></li>
                                <li><i class="fa-solid fa-caret-right"></i><a href="">Desktop</a></li>
                                <li><i class="fa-solid fa-caret-right"></i><a href="">laptop</a></li>
                                <li><i class="fa-solid fa-caret-right"></i><a href="">Networking</a></li>
                                <li><i class="fa-solid fa-caret-right"></i><a href="">software</a></li>
                                <li><i class="fa-solid fa-caret-right"></i><a href="">accessories</a></li>
                            </ul>
                        </div>

                        <div class="brand-area">
                            <div class="sidebar-heading">
                                <h3>by brand</h3>
                            </div>
                            <form action="" class="ms-4">
                                <input type="checkbox" name="brand[]" id="" value="hp"> HP <br>
                                <input type="checkbox" name="brand[]" id="" value="dell"> DELL <br>
                                <input type="checkbox" name="brand[]" id="" value="asus"> ASUS <br>
                                <input type="checkbox" name="brand[]" id="" value="samsung"> SAMSUNG <br>
                                <input type="checkbox" name="brand[]" id="" value="apple"> APPLE <br>
                                <input type="checkbox" name="brand[]" id="" value="toshiba"> TOSHIBA <br>
                            </form>                           
                        </div>
                        <div class="category-area">
                            <div class="sidebar-heading">
                                <h3>by price</h3>
                            </div>
                            <ul class="category-list">
                                <li><i class="fa-solid fa-caret-right"></i><a href="">$5000 - $10000</a></li>
                                <li><i class="fa-solid fa-caret-right"></i><a href="">$10000 - $15000</a></li>
                                <li><i class="fa-solid fa-caret-right"></i><a href="">$15000 - $20000</a></li>
                                <li><i class="fa-solid fa-caret-right"></i><a href="">$20000 - $25000</a></li>
                                <li><i class="fa-solid fa-caret-right"></i><a href="">$25000 - $30000</a></li>
                                <li><i class="fa-solid fa-caret-right"></i><a href="">$30000+</a></li>
                            </ul>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- products list area end  -->

 


    <?php require_once('inc/footer.php'); ?>