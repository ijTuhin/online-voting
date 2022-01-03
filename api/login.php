<?php
    session_start();
    include("connect.php");

    $s_id = $_POST['s_id'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $check = mysqli_query($connect, "SELECT * FROM vote WHERE s_id='$s_id' AND email='$email' AND password='$password'");
    if(mysqli_num_rows($check) > 0){
      $userdata = mysqli_fetch_array($check);
      $groups = mysqli_query($connect, "SELECT * FROM v_topic WHERE id =1 ");
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