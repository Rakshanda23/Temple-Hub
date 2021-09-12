

<!----register------>
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="color:black;font-weight:900;font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;" id="exampleModalLabel1">REGISTER</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post" class="p-3">
                        <div class="form-group">
                            <label for="recipient-name" style="color:darkslategrey;font-size: 20px;font-weight:500" class="col-form-label">Username</label>
                            <input type="text" class="form-control" placeholder="Enter Name" name="Name" id="recipient-rname"
                                required="">
                        </div>
                        <div class="form-group">
                            <label for="recipient-email" style="color:darkslategrey;font-size: 20px;font-weight:500" class="col-form-label">Email</label>
                            <input type="email" class="form-control" placeholder="Enter Email" name="Email" id="recipient-email"
                                required="">
                        </div>
                        <div class="form-group">
                            <label for="password1" style="color:darkslategrey;font-size: 20px;font-weight:500" class="col-form-label">Password</label>
                            <input type="password" class="form-control" placeholder="Enter Password " name="Password" id="password1"
                                required="">
                        </div>
                        <div class="form-group">
                            <label for="password2" style="color:darkslategrey;font-size: 20px;font-weight:500" class="col-form-label">Confirm Password</label>
                            <input type="password" class="form-control" placeholder="Re-enter Password " name="Confirm_Password" id="password2"
                                required="">
                        </div>
                        <div class="sub-w3l">
                            <div class="sub-w3layouts_hub">
                                <input type="checkbox" id="brand2" value="" required>
                                <label for="brand2" class="mb-3 text-white">
                                    <span></span>I Accept to the Terms & Conditions</label>
                            </div>
                        </div>
                        <div class="right-w3l">
                            <input type="submit" name="register_button" style="color:rgb(24, 20, 20);font-size: 20px;font-weight:500" class="form-control bg-theme1" value="Register">
                            <!-- to do link it with login section id  -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!----register------>


    <!-- login -->
    
    <!-- login  -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" style="color:black;font-weight:700;font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;" id="exampleModalLabel">LOGIN</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post" class="p-3">
                        <div class="form-group">
                            <label for="recipient-name" style="color:darkslategrey;font-size: 20px;font-weight:500" class="col-form-label">Username</label>
                            <input type="text" class="form-control" placeholder="Enter Username" name="Name" id="recipient-name"
                                required="true">
                        </div>
                        <div class="form-group">
                            <label for="password" style="color:darkslategrey;font-size: 20px;font-weight:500" class="col-form-label">Password</label>
                            <input type="password" class="form-control" placeholder="Enter Password" name="Password" id="password"
                                required="">
                        </div>
                        <div class="right-w3l">
                            <input type="submit" name="submit_button" style="color:rgb(24, 20, 20);font-size: 20px;font-weight:500" class="form-control bg-theme1" value="Login">
                        </div>
                        <div class="row sub-w3l my-3">
                            <div class="col sub-w3layouts_hub">
                                <input type="checkbox" id="brand1" value=""required>
                                <label for="brand1" class="text-white" >
                                    <span></span>Remember me?</label>
                            </div>
                            <div class="col forgot-w3l text-sm-right">
                                <a href="#" class="text-white">Forgot Password?</a>
                            </div>
                        </div>
                        <p class="text-center dont-do text-white">Don't have an account?
                            <a  data-toggle="modal" data-target="#exampleModal1" class="text-dark" data-dismiss="modal" > 
                                 Register Now</a>

                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- //login -->


    
<?php
include('conn.php');
if(isset($_POST['register_button']))
{
    extract($_POST);
    //$lang=implode(',',$_POST['lang']);

    echo $asd="insert into registration_table(user_name,email_id,pass)
                 value('$Name','$Email','$Password')";
    $add=mysqli_query($connect,$asd)or die (mysqli_error($connect));
    if($asd)
    {
        echo "<script>;";
        echo "window.alert('data inserted sucessfully!!');";
        echo 'window.location.href="somnath.php";';
        echo "</script>;";
    }
    else
    {   echo "<script>;";
        echo "window.alert('error occured in insertion!!');";
        echo 'window.location.href="index.php";';
        echo "</script>;";
    }


}
?>




<?php
include('conn.php');
if (isset($_POST['submit_button']))
{
    $log=0;
    extract($_POST);
    $username=mysqli_real_escape_string($connect,$_POST['Name']);

    $password=mysqli_real_escape_string($connect,$_POST['Password']);
    echo $check="select * from registration_table where  user_name='$username' and pass='$password'";

    $log=mysqli_query($connect,$check)
    or die(mysqli_error($connect));
    if(mysqli_num_rows($log)>0)
    {
        $fetch=mysqli_fetch_array($log);

        $_SESSION['username']=$fetch['user_name'];
        $_SESSION['password']=$fetch['pass'];

       
        echo "<script>;";
        echo "window.alert('login successfull!!!');";
        echo 'window.location.href="somnath.php";';
        echo "</script>;";
    }
    
    else
    {
        echo"<script>;";
        echo "window.alert('login failed!!');";
        echo 'window.location.href="somnath.php";';
        echo"</script>;";
    }
       
        

}


?>