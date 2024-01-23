<?php

    error_reporting(0);
    session_start();
    session_destroy();

if($_SESSION['message'])
{
    $message=$_SESSION['message'];

    echo "<script type='text/javascript'>
        
    alert('$message');
    
    </script>";
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>STUDENT MANAGEMENT SYSTEM</title>
        <link rel="stylesheet" type="text/css" href="style.css">

        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    </head>
    <body>
        
        <nav>
            <label class="logo">Anits College</label>
            <ul>
                <li><a href="">Home </a></li>
                <li><a href="">Contact </a></li>
                <li><a href="">Admission</a></li>
                <li><a href="" class="btn btn-success">Login</a></li>
            </ul>
        </nav>


        <div class="section1">
            <label class="img_text">We Teach Students With Care</label>
            <img  class = "main_img" src="school_management.jpg">

        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img class="welcome_img" src="school2.jpg">
                </div>

                <div class="col-md-8">
                    <h1>welcome to Anits College</h1>
                    <p>Nestled within the heart of our vibrant community, 
                        XYZ School stands as a beacon of academic excellence and personal growth. 
                        Our school, guided by a steadfast commitment to nurturing young minds, 
                        is dedicated to fostering an environment where students thrive intellectually, socially, and emotionally. 
                        Our dynamic curriculum, crafted to inspire curiosity and critical thinking, 
                        prepares students for the challenges of an ever-evolving world. 
                        With a team of dedicated educators who bring a wealth of knowledge and passion to the classroom, 
                        our students benefit from a rich tapestry of learning experiences</p>
                </div>

            </div>

        </div>
        <center>
            <h1>
                Our Lectureres
            </h1>
        </center>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img class="teacher" src="teacher1.jpg">
                    <p>Nestled within the heart of our vibrant community, 
                        XYZ School stands as a beacon of academic excellence and personal growth.</p>
                </div>
                <div class="col-md-4">
                    <img class="teacher" src="teacher2.jpg">
                    <p>Nestled within the heart of our vibrant community,
                         XYZ School stands as a beacon of academic excellence and personal growth.</p>
                </div>
                <div class="col-md-4">
                    <img class="teacher" src="teacher3.jpg">
                    <p>Nestled within the heart of our vibrant community, 
                        XYZ School stands as a beacon of academic excellence and personal growth.</p>
                </div>
            </div>
        </div>
        <center>
            <h1>
                Our Courses
            </h1>
        </center>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img class="teacher" src="web.jpg">
                     <h1>Web Development</h1>
                </div>
                <div class="col-md-4">
                    <img class="teacher" src="graphic.jpg">
                    <h1>Graphic Design</h1>
                </div>
                <div class="col-md-4">
                    <img class="teacher" src="marketing.png">
                    <h1>Marketing</h1>
                </div>
            </div>
        </div>
        <center>
            <h1 class="adm">Admisssion Form</h1>
        </center>
        <div align="center" class="admission_form">
        <form action="datacheck.php" method="POST">
<div class="form-group">
    <label for="exampleInputEmail1">Roll No</label>
    <input type="text" class="form-control" name="rollno" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Roll No">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" name="name"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Course</label>
    <input type="text" class="form-control" name="course" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter course">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">phone</label>
    <input type="tel" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Phone">
  
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Additional details</label>
    <br>
    <!-- <input type="textarea" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"> -->
    <textarea id="w3review" name="message" rows="4" cols="50">
</textarea>
  </div>
  <button type="submit" name="apply" class="btn btn-primary">Submit</button>
</form>
            </form>
        </div>

        <footer>
          <h3 class="footer_text">All @copyright reserved by web tech knowledge</h2>
        </footer>
    </body>
</html>