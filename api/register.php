<?php
    include("connect.php");
    $s_id = $_POST['s_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $address = $_POST['address'];
    $image = $_FILES['photo']['name'];
    $tmp_name = $_FILES['photo']['tmp_name'];
    $dept = $_POST['dept'];

    if($password==$cpassword){
        move_uploaded_file($tmp_name, "../uploads/$image");
        $insert = mysqli_query($connect, "INSERT INTO vote(name, s_id, email, mobile, address, password, dept, photo) VALUES('$name','$s_id','$email','$mobile','$address','$password','$dept','$image')");
        
        if($insert){
            echo '
                <script>
                    alert("Registration Successful!");
                    window.location = "../";
                </script>
            ';
        }
        else{
            echo '
                <script>
                    alert("Error!!");
                    window.location = "../routes/register.html";
                </script>
            ';
        }
    }
    else{
        echo '
          <script>
            alert("Password and Confirm Password does not match!");
            window.location = "../routes/register.html";
          </script>
        ';
    }

?>