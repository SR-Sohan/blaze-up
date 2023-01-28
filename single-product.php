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
                <div class=" row">
                    <div class="col-md-6">
                        <div class="border mainimg">
                            <img src="assets/image/macbook-air-01-500x500 (1).jpg" width="100%" id="limg" alt="">
                        </div>
                        <div class="row mt-2 mx-auto border position-relative">


                            <div class="col my-2">
                                <img class="subimg border" src="assets/image/macbook-air-gold-500x500.jpg" width="100%" alt="">
                            </div>
                            <div class="col  my-2">
                                <img class="subimg border" src="assets/image/zenbook-14-0001-500x500.jpg" width="100%" alt="">
                            </div>
                            <div class="col  my-2">
                                <img class="subimg border" src="assets/image/macbook-air-gold-500x500.jpg" width="100%" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3>Product Title Here</h3>
                        <hr>
                        <p>Menufacturer: </p>
                        <p>Availability: </p>
                        <p>Product Coad: </p>
                        <br>
                        <h3>Product Dimensions and Weight</h3>
                        <p>Product Length:</p>
                        <p>Product Weight:</p>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet aut minima perferendis dolorem ullam minus culpa deserunt, consectetur enim? Aut tenetur voluptate optio facilis vel accusantium eligendi cupiditate quia beatae!</p>
                        <hr>
                        <p class="position-relative"><span class="position-absolute start-0 text-decoration-line-through text-danger">Price:$000 </span> <span class="position-absolute end-0">Discount Price:$000 </span></p>
                        <br><br>
                        <div class="buyicon ">
                            <a class="color-bg px-3 py-1 fs-5 rounded" href="">
                                <i class="fa-solid fa-cart-shopping "></i> Add to Chart
                            </a>
                            <a class="bg-secondary-emphasis fs-5 text-secondary px-3 py-1 rounded shadow-lg" href="">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <a class="bg-secondary-emphasis fs-5 text-secondary px-3 py-1 rounded shadow-lg" href="">
                                <i class="fa-solid fs-5 fa-code-compare"></i>
                            </a>
                            <a class="bg-secondary-emphasis fs-5 text-secondary px-3 py-1 rounded shadow-lg" href="">
                                <i class="fa-solid fa-question"></i>
                            </a>
                        </div>

                    </div>
                </div>


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