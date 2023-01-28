<?php require "inc/header.php" ?>
    <div class="shadow-lg mt-5 p-3 mx-auto mb-5 rounded" id="registration">
        <form class="form-horizontal  mx-auto" method="post">
            <h2 class="text-center my-4">Register</h2>
            <hr>
            <div class="form-group row mb-2">
                <label class="control-label col-sm-4" for="name">User Name:</label>
                <div class="col-sm">
                    <input type="text" class="form-control" id="name" placeholder="Enter Your Name" name="name" autocomplete="off" required>
                    <div class="spanf" id="nameerror"></div>
                </div>
            </div>

            <div class="form-group row mb-2">
                <label class="control-label col-sm-4" for="email">Email:</label>
                <div class="col-sm">
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                    <div class="spanf" id="emailerror"></div>
                </div>
            </div>


            <div class="form-group row mb-2">
                <label class="control-label col-sm-4" for="number">Mobile Number:</label>
                <div class="col-sm">
                    <input class="form-control" type="number" name="mobile" id="number" required>
                </div>
            </div>
            <div class="form-group row mb-2">
                <label class="control-label col-sm-4" for="number">Gender:</label>
                <div class="col-sm">
                    Male <input class="" type="radio" value="Male" name="gender" id="genderm" required> |
                    Female <input class="" type="radio" value="Female" name="gender" id="genderf" required> |
                    Other <input class="" type="radio" value="Other" name="gender" id="gendero" required>
                </div>
            </div>
            <div class="form-group row mb-2">
                <label class="control-label col-sm-4" for="number">Address:</label>
                <div class="col-sm">
                    <input class="form-control" type="text" name="address" id="address" required>
                </div>
            </div>
            <div class="form-group row mb-2">
                <label class="control-label col-sm-4" for="pwd">Password:</label>
                <div class="col-sm">
                    <input type="password" class="form-control" id="pass" placeholder="Enter password" name="pwd" required>
                    <div class="spanf" id="passerror"></div>
                </div>
            </div>
            <div class="form-group row mb-2">
                <label class="control-label col-sm-4" for="rpass">Re-Type Password:</label>
                <div class="col-sm">
                    <input type="password" autocomplete="off" class="form-control" id="rpass" placeholder="Enter password" name="rpwd" required>
                    <div class="spanf" id="rpasserror"></div>
                </div>
            </div>
            <div class="form-group mb-2">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label><input type="checkbox" class="check" name="remember" required> Accept all terms
                            and
                            conditions.</label>
                    </div>
                </div>
            </div>
            <div class="form-group mt-3">
                <div class="col-sm-offset-2 col-sm-10 mx-auto px-3 text-center">
                    <input id="submit" class="bg-outline-primary" name="submit" type="submit" value="Sign Up">
                    <!-- <button onclick="emailCheck()" type="button" class="btn btn-default bg-primary px-4">Submit</button> -->
                </div>
            </div>
        </form>
        
       <?php
    //    include 'connection.php';
       
    //    if (isset($_POST['submit'])) {
    //        $name = $_POST['name'];
    //        $email = $_POST['email'];
    //        $mobile = $_POST['mobile'];
    //        $gender = $_POST['gender'];
    //        $address = $_POST['address'];
    //        $pass = $_POST['pwd'];
    //        $rpwd = $_POST['rpwd'];
    //        $password = password_hash($pass, PASSWORD_DEFAULT);
       
       
    //        $sql = "insert into `regs1` (name,email,mobile,gender,address,password) values('$name','$email',$mobile,'$gender','$address','$password')";
    //     //    echo $sql;
    //     //    exit;
    //        $result = $con->query($sql);
    //        if ($result) {
    //            echo "data inserted";
    //        } else {
    //         echo "data Not inserted";
    //        }
    //     //    if($pass !==$rpwd){
    //     //     false;
    //     //    }else{
    //     //     true;
    //     //    }
    //    }
       ?>
        
    </div>

    <?php require_once('inc/footer.php') ?>