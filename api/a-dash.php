<?php
    session_start();
    include("connect.php");

    $topic = $_POST['topic'];
    $category_A = $_POST['category_A'];
    $category_B = $_POST['category_B'];

    $insert = mysqli_query($connect, "INSERT INTO v_topic(topic, category_A, category_B) VALUES('$topic' '$category_A' '$category_B')";
    if($insert){

      echo '
          <script>
          alert("Pole Uploaded!!");
            window.location = "../routes/pole.html";
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