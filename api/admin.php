<?php
    session_start();
    include("connect.php");

    $a_password = $_POST['a_password'];
    $a_email = $_POST['a_email'];

    $admin = mysqli_query($connect, "SELECT * FROM admin WHERE a_password='$a_password' AND a_email='$a_email'");
    if(mysqli_num_rows($admin) > 0){
      

      echo '
          <script>
          alert("Admin login Successful!!");
            window.location = "../routes/a-dash.html";
          </script>
        ';
    }
    else{
        echo '
          <script>
            alert("USER NOT FOUND!!");
            window.location = "../";
          </script>
        ';
    }
?>

