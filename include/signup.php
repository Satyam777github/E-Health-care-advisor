<?php include_once("header.php"); ?>



<?php 

    if (isset($_POST['signup'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $pass = $_POST['pasw'];
        $cpass = $_POST['cpasw'];
        $mobile = $_POST['mobile'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $sq = $_POST['sq'];
        $sa = $_POST['sa'];

        if($pass == $cpass){
            
            $sql = "INSERT INTO users (fname, lname, email, gender, mobile, pass, sq, sa)
            VALUES ('$fname', '$lname', '$email', '$gender', '$mobile', '$pass', '$sq', '$sa')";

            $result = mysqli_query($conn, $sql);

            if($result){
                echo "<script>alert('Registration Successful'); </script>";
            }
        }

    }

?>


<style>
         body {
            background-image: url("/healthcheck/image/loginbg.jpg") ;
            background-size: 1350px 700px;
         }
      </style>
            <div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>You are just one step away from symptom checker</p>
                        <input type="submit" name="" value="Login" onclick="location.href='login.php';" /><br/>
                    </div>
                    <div class="col-md-9 register-right">
                        <div class="tab-content" id="myTabContent">
                           <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                            <form action="signup.php" method="post">
                                <h3 class="register-heading">User Registration</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name *" value="" name="fname" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" value="" name="lname" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" value="" name="pasw" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"  placeholder="Confirm Password *" value="" name="cpasw" />
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="male" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="female">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email *" value="" name="email" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="10" maxlength="10" class="form-control" placeholder="Your Phone *" value="" name="mobile" />
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="sq">
                                                <option class="hidden"  selected disabled>Please select your Security Question</option>
                                                <option value="What is your Birthdate?">What is your Birthdate?</option>
                                                <option value="What is Your old Phone Number">What is Your old Phone Number</option>
                                                <option value="What is your Pet Name?">What is your Pet Name?</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter Your Answer *" value="" name="sa" />
                                        </div>
                                        <input type="submit" class="btnRegister"  value="Register" name="signup" />
                                    </div>
                                </div>
                            </form>
                            </div>
                            
                            </div>
                           </div>
                        </div>
                    </div>
            <br><br><br>

























<?php include_once("footer.php"); ?>