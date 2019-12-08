<?php
session_start();
$_SESSION['picture'] = $_FILES['photo']['name'];
$destination = './image/';
move_uploaded_file($_FILES['photo']['tmp_name'], $destination.$_FILES['photo']['name']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<form action="cvform.php" method="post" enctype="multipart/form-data">
        <input type="file" name="photo" id="">
           </form>
    <div class="wrapper">
        <!-- <form action="cv.php" method="post"> -->
        <img src="image/<?=$_SESSION['picture']?>" alt="" id="test">
            <div class="divide">
                <div class="box">
                    <h1>Personal Information</h1>
                    <div class="inner">
                        <div class="name">
                            <div>
                                <h3>Surname</h3>
                                <h3><?=$_POST['surname'];?></h3>
                            </div>
                            <div>
                                <h3>Other Name</h3>
                                <h3><?=$_POST['others'];?></h3>
                            </div>
                        </div>
                        <div class="name">
                            <div>
                                <h3>Email</h3>
                                <h3><?=$_POST['email'];?></h3>
                            </div>
                            <div>
                                <h3>age</h3>
                                <h3><?=$_POST['age'];?></h3>
                            </div>
                        </div>
                        <div class="name">
                            <div>
                                <h3>Phone</h3>
                                <h3><?=$_POST['phone'];?></h3>
                            </div>
                            <div>
                                <h3>Gender</h3>
                                <h3><?=$_POST['gender'];?></h3>
                            </div>
                        </div>
                        <div class="name">
                            <div>
                                <h3>Marital status</h3>
                                <h3><?=$_POST['status'];?></h3>
                            </div>
                            <div>
                                <h3>Hobbies</h3>
                                <?php foreach($_POST['hobbies'] as $hobby) {?>
                                    <h3><?=$hobby?></h3>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <h1>Educational Information</h1>
                    <div class="inner">
                        <div class="name">
                            <div>
                                <h3>Primary</h3>
                                <h3><?=$_POST['pry'];?></h3>
                            </div>
                            <div>
                                <h3>Secondary</h3>
                                <h3><?=$_POST['sec'];?></h3>
                            </div>
                        </div>
                        <div class="name">
                            <div>
                                <h3>Polytechnic</h3>
                                <h3><?=$_POST['poly'];?></h3>
                            </div>
                            <div>
                                <h3>University</h3>
                                <h3><?=$_POST['uni'];?></h3>
                            </div>
                        </div>
                        <div class="name">
                            <div>
                                <h3>Post Graduate</h3>
                                <h3><?=$_POST['pstgrd'];?></h3>
                            </div>
                            <div>
                                <h3>Other</h3>
                                <h3><?=$_POST['other'];?></h3>
                            </div>
                        </div>
                        <!-- <div class="name">
                            <div>
                                <h3>Surname</h3>
                                <input type="text" name="" id="">
                            </div>
                            <div>
                                <h3>Other Name</h3>
                                <input type="text" name="" id="">
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="divide">
                <div class="box">
                    <h1>Objectives</h1>
                    <div class="inner">
                        <div class="obj">
                            <h3>objective 1</h3>
                            <h3><?=$_POST['obj1'];?></h3>
                        </div>
                        <div class="obj">
                            <h3>objective 2</h3>
                            <h3><?=$_POST['obj1'];?></h3>
                        </div>
                        
                    </div>
                </div>
                <div class="box">
                    <h1>Skills</h1>
                    <div class="inner">
                        <div>
                            <h3>Skills</h3>
                            <?php foreach($_POST['skills'] as $skill) {?>
                                <h3><?=$skill?></h3>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
            <button id="btn" type="submit">Save</button>
        <!-- </form> -->
    </div>
</body>
</html>