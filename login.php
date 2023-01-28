    <?php require "inc/header.php" ?>
    <div class="shadow-lg mt-5 p-3 mx-auto mb-5 rounded" id="registration">
        <form class="form-horizontal  mx-auto" method="post">
            <h4 class="text-center my-4">Log In</h4>

            <div class="form-group row mb-2">
                <label class="control-label col-sm-4" for="email">Email:</label>
                <div class="col-sm">
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                    <div class="spanf" id="emailerror"></div>
                </div>
            </div>
            <div class="form-group row mb-2">
                <label class="control-label col-sm-4" for="pwd">Password:</label>
                <div class="col-sm">
                    <input type="password" class="form-control" id="pass" placeholder="Enter password" name="pwd" required>
                    <div class="spanf" id="passerror"></div>
                </div>
            </div>
           
            
            <div class="form-group mt-3">
                <div class="col-sm-offset-2 col-sm-10 mx-auto px-3 text-center">
                    <input id="submit" class="bg-outline-primary" name="submit" type="submit" value="Log In">
                    <!-- <button onclick="emailCheck()" type="button" class="btn btn-default bg-primary px-4">Submit</button> -->
                </div>
            </div>
            <div class="form-group mt-3">
                <div class="col-sm-offset-2 col-sm-10 mx-auto px-3 text-center">
                    <p>If you Don't have any account, please <a href="register.php" target="" rel="noopener noreferrer">registration</a> here.</p>
            </div>
            </div>
        </form>
        
       <?php
    //    include 'connection.php';
       
    //    if (isset($_POST['submit'])) {
          
    //        $email = $_POST['email'];
    //        $pass = $_POST['pwd'];
    //        $password = password_hash($pass, PASSWORD_DEFAULT);
       
       
    //        $sql = "select * from `regs1` where email='$email' and password='$password'";
    //         //    echo $sql;
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