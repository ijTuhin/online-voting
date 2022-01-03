<?php
    session_start();
    include("connect.php");

    $topic = $_POST['topic'];
    $category_A = $_POST['category_A'];
    $category_B = $_POST['category_B'];

    $pole = mysqli_query($connect, "INSERT INTO v_topic(topic, category_A, category_B) VALUES('$topic', '$category_A', '$category_B')");
    if($pole){

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
            alert("Failed to Create Pole!!");
            window.location = "../routes/a-dash.html";
          </script>
        ';
    }

?>