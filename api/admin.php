<?php
    session_start();
    include("connect.php");

    $a_password = $_POST['a_password'];
    $a_email = $_POST['a_email'];

    $check = mysqli_query($connect, "SELECT * FROM vote WHERE a_password='$a_password' AND a_email='$a_email'");
    if(mysqli_num_rows($check) > 0){
      $userdata = mysqli_fetch_array($check);
      $groups = mysqli_query($connect, "SELECT * FROM vote WHERE role =2 ");
      $groupsdata = mysqli_fetch_all($groups, MYSQLI_ASSOC);
      $_SESSION['userdata'] = $userdata;
      $_SESSION['groupsdata'] = $groupsdata;

      echo '
          <script>
            window.location = "../routes/dashboard.php";
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