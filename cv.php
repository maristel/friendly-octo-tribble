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
    <div class="wrapper">
        <form action="cvform.php" method="post" enctype="multipart/form-data">
        <input type="file" name="photo" id="">
            <div class="divide">
                <div class="box">
                    <h1>Personal Information</h1>
                    <div class="inner">
                        <div class="name">
                            <div>
                                <h3>Surname</h3>
                                <input type="text" name="surname" id="">
                            </div>
                            <div>
                                <h3>Other Name</h3>
                                <input type="text" name="others" id="">
                            </div>
                        </div>
                        <div class="name">
                            <div>
                                <h3>Email</h3>
                                <input type="text" name="email" id="">
                            </div>
                            <div>
                                <h3>age</h3>
                                <input type="date" name="age" id="">
                            </div>
                        </div>
                        <div class="name">
                            <div>
                                <h3>Phone</h3>
                                <input type="number" name="phone" id="">
                            </div>
                            <div>
                                <h3>Gender</h3>
                                <input type="radio" value="male" name="gender" id=""> Male
                                <input type="radio" value="female" name="gender" id=""> Female
                            </div>
                        </div>
                        <div class="name">
                            <div>
                                <h3>Marital status</h3>
                                <select name="status" id="">
                                    <option value="single">single</option>
                                    <option value="married">married</option>
                                    <option value="divorced">divorced</option>
                                </select>
                            </div>
                            <div>
                                <h3>Hobbies</h3>
                                <input type="checkbox" value="playing" name="hobbies[]" id=""> Playing 
                                <input type="checkbox" value="singing" name="hobbies[]" id=""> Singing 
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
                                <input type="text" name="pry" id="">
                            </div>
                            <div>
                                <h3>Secondary</h3>
                                <input type="text" name="sec" id="">
                            </div>
                        </div>
                        <div class="name">
                            <div>
                                <h3>Polytechnic</h3>
                                <input type="text" name="poly" id="">
                            </div>
                            <div>
                                <h3>University</h3>
                                <input type="text" name="uni" id="">
                            </div>
                        </div>
                        <div class="name">
                            <div>
                                <h3>Post Graduate</h3>
                                <input type="text" name="pstgrd" id="">
                            </div>
                            <div>
                                <h3>Other</h3>
                                <input type="text" name="other" id="">
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
                            <textarea name="obj1" id="" cols="62" rows="5"></textarea>
                        </div>
                        <div class="obj">
                            <h3>objective 2</h3>
                            <textarea name="obj2" id="" cols="62" rows="5"></textarea>
                        </div>
                        
                    </div>
                </div>
                <div class="box">
                    <h1>Skills</h1>
                    <div class="inner">
                        <div class="name">
                            <div>
                            <h3><input type="checkbox" name="skills[]" value="HTML"> HTML</h3>
                                <h3><input type="checkbox" name="skills[]" value="CSS"> CSS</h3>
                                <h3><input type="checkbox" name="skills[]" value="Javascript"> Javascript</h3>
                                <h3><input type="checkbox" name="skills[]" value="Bootstrap"> Bootstrap</h3>
                                <h3><input type="checkbox" name="skills[]" value="Php"> Php</h3>
                                <h3><input type="checkbox" name="skills[]" value="NodeJs"> NodeJs</h3>
                                <h3><input type="checkbox" name="skills[]" value="VueJs"> VueJs</h3>
                                <h3><input type="checkbox" name="skills[]" value="AngularJs"> AngularJs</h3>
                            </div>
                            <div>
                                <h3><input type="checkbox" name="skills[]" value="Laravel"> Laravel</h3>
                                <h3><input type="checkbox" name="skills[]" value="ExpressJs"> ExpressJs</h3>
                                <h3><input type="checkbox" name="skills[]" value="Git"> Git</h3>
                                <h3><input type="checkbox" name="skills[]" value="AWS"> AWS</h3>
                                <h3><input type="checkbox" name="skills[]" value="Docker"> Docker</h3>
                                <h3><input type="checkbox" name="skills[]" value="Forge"> Forge</h3>
                                <h3><input type="checkbox" name="skills[]" value="Codeigniter"> Codeigniter</h3>
                                <h3><input type="checkbox" name="skills[]" value="Lumen"> Lumen</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button id="btn" type="submit">Save</button>
        </form>
    </div>
</body>
</html>