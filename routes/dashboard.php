<?php
    session_start();
    if(!isset($_SESSION["userdata"])){
     header("location: ../");
    }
    $userdata = $_SESSION["userdata"];
    //$groupsdata = $_SESSION["groupsdata"];

    /*if($_SESSION["userdata"]['status']==0){
        $status = '<b style="color:red;">not voted</b>';
    }
    else{
        $status = '<b style="color:green;">voted</b>';
    }*/
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System - Dashboard</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/inside.css">
    <link rel="stylesheet" href="../css/dashboard.css">

</head>

<body>

    <a href="../">
        <button style="float: left; 
                margin-top: 11px;
                padding: 10px; 
                border-radius: 15px;
                background-color: #079992;
                color: white;
                border-radius: 5px;">Back</button></a>
    <a href="../api/logout.php">
        <button style="
                margin-top: 11px;
                margin-left: 1220px;
                padding: 10px; 
                border-radius: 15px;
                background-color: #079992;
                color: white;
                border-radius: 5px;">Logout</button></a>

    <div id="mainsection">

        <div id="headerSection">
            <h1 class="heading">Online <span>Voting System</span></h1>
        </div>

        <div class="flex-container">
    
            <div id="Profile">
                <img src="../uploads/<?php echo $userdata['photo']?>" height="100" width="100" class="Pdata"><br><br>
                <b class="Pdata">Name : </b>
               <?php echo $userdata['name']?><br>
               <b class="Pdata">Matric ID : </b>
               <?php echo $userdata['s_id']?><br>
               <b class="Pdata">Department : </b>
               <?php echo $userdata['dept']?><br>
               <b class="Pdata">Gender : </b>
               <?php// echo $userdata['gender']?><br>
                <b class="Pdata">Mobile: </b>+880
                <?php echo $userdata['mobile']?><br>
                <b class="Pdata">Address : </b>
                <?php echo $userdata['address']?><br>
                <b class="Pdata">Status : </b>
                <?php// echo $status ?><br>
            </div>
            
            <div id="Group">

            <?php
                /*if($_SESSION["groupsdata"]){
                    for($i=0; $i<count($groupsdata); $i++)
                    {
                        ?>
                        <div>
                            <div >
                            <img src="../uploads/<?php echo $groupsdata[$i]['photo']?>" id="Gimg">
                            </div>
                            <br>
                            <div id="Gdata">
                            <b>Groups Name : </b><?php echo $groupsdata[$i]['name']?><br><br>
                            <b>Votes : </b><?php echo $groupsdata[$i]['vote']?><br><br>
                            <form action="../api/vote.php" method="POST">
                                <input type="hidden" name="gvotes" value="<?php echo $groupsdata[$i]['votes'] ?>">
                                <input type="hidden" name="gid" value="<?php echo $groupsdata[$i]['id'] ?>">
                                <?php
                                   if($_SESSION['userdata']['status']==0){
                                       ?>
                                       <input type="submit" name="valuebtn" value="vote" id="valuebtn">
                                       <?php
                                   }
                                   else{
                                       ?>
                                       <button disable type="button" name="valuebtn" value="vote" id="voted">Voted</button>
                                       <?php
                                   }
                                ?>
                            </form>
                            </div>
                            <hr>
                        </div>
                        <?php
                    }
                }
                else{

                }*/
            ?>
            
            </div>
    
        </div>
    </div>




    <!-- theme toggler  -->

    <div id="theme-toggler" class="fas fa-moon"></div>

    <!-- custom js file link  -->
    <script src="../js/script.js"></script>

    <script>

        if (localStorage.getItem('active')) {
            document.body.classList.add('active');
        }
        else {
            document.body.classList.remove('active');
        }

    </script>


</body>

</html>