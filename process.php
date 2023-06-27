<!-- ****************************************
// Name: Fred butoma
// Assignment 3
// File: process.php
// Purpose: This website takes input from 
//          from the user, then generates
//          a title using their inputs.
//          this file does the processing 
//          for the html form once submitted.
********************************************** -->

<!DOCTYPE html>
    <html lang="en-US">
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta charset="utf-8">
            <meta name="keywords" content="Your Key Words Here">
            <meta name="description" content="Your Description Here">
            <meta name="Author" content="Fred Butoma">
            <title>Assignment 3: Server Side Introduction</title>
            <img src="images/php-logo.png" alt="php-logo" size="50%">

            <link rel="stylesheet" type="text/css" href="css/main.css">
            <link rel="icon" href="favicon.ico" type="image/ico">
        </head>
        <header id="header"> 
            <h2>Assignment 3: Server-Side Intro</h2>
         </header>

        <body>
            <nav class="horizontal">
      
                <div class="text-large menu-padding">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#">Page 2</a></li>
                        <li><a href="#">Page 3</a></li>
                    </ul>
                </div>
            </nav>
                <!-- <h2 class="main-title" id="main-title">Assignment 3: Server Side Introduction</h2> -->
                <hr>
            </div>
<br><br>

<?php 

 /* * *********************************************
  * STEP 1: INPUT: Do NOT process, just get the data.
  * Do not delete this comment,
  * ********************************************** */

 if (
    !empty($_POST['fave_drink']) 
    && !empty($_POST['pet_name']) 
    && !empty($_POST['fave_fictional_place'])
    && !empty($_POST['fave_real_place'])
    ) {


     $title = $_POST['title'];
     $fave_drink = $_POST['fave_drink'];
     $pet_name = $_POST['pet_name'];
     $fave_fictional_place = $_POST['fave_fictional_place'];
     $fave_real_place = $_POST['fave_real_place'];  

 } else {
     $fave_drink = "";
     $pet_name = "";
     $fave_fictional_place = "";
     $fave_real_place = "";
 }

 /* * ******************************************************
  * STEP 2: VALIDATION: Always clean your input first!!!!
  * Do NOT process, only CLEAN and VALIDATE.
  * Do not delete this comment.
  * ****************************************************** */

 // clean up the variables

 $fave_drink = substr(trim(strip_tags($fave_drink)), 0 , 64);
 $pet_name = substr(trim(strip_tags($pet_name)), 0, 64);
 $fave_fictional_place = substr(trim(strip_tags($fave_fictional_place)), 0, 64);
 $fave_real_place = substr(trim(strip_tags($fave_real_place)), 0, 64);
 


 if (
    !empty($fave_drink) 
    && !empty($pet_name)
    && !empty($fave_fictional_place)
    && !empty($fave_real_place)
    ) {

     /*     * *************************************************************************
      * STEP 3 and 4: PROCESSING and OUTPUT: Notice this code only executes
      * if you have valid data from steps 1 and 2. Your code must always have
      * a saftey feature similar to this.
      * Do not delete this comment.
      * ************************************************************************ */

     // the following code shows how you can access parts of the $_POST array
     
     $result = "<br> You are " . $title . " " . $fave_drink . " " . $pet_name . " of " . $fave_fictional_place . " and " . $fave_real_place . "<br>";

     echo "Result: <br>" . $result . "<br>"; 

     $result_length = strlen(trim(strip_tags($result)));


     echo "The length of your title is " . $result_length . "<br>";

     if ($result_length < 30 ){
        echo "That's a cute little title. <br>";
     }
     else if ($result_length >= 30 ){
        echo "That's a heck of a title! <br>";        
     }
     echo "<br>";
    
    //fave_drink
    echo "You entered: \"" . $fave_drink . "\" for your favorite drink.<br>";
    $drink_length = strlen($fave_drink);

    if ($drink_length > 0) {
        echo "The length of your favorite drink is: " . $drink_length . "<br>";
    }
    echo "<br>";
    //pet_name
    echo "You entered: \"" . $pet_name . "\" for your pet's name.<br>";
    $pet_length = strlen($pet_name);

    if ($pet_length > 0) {
        echo "The length of your pet's name is: " . $pet_length . "<br>";
    }
    echo "<br>";
    //fave_fictional_place
    echo "You entered: \"" . $fave_fictional_place . "\" for your favorite fictional place.<br>";
    $fictional_place_length = strlen($fave_fictional_place);

    if ($fictional_place_length > 0 ) {
        echo "the length of your favorite fictional place : " . $fictional_place_length . "<br>";
    }
    echo "<br>";
    //fave_real_place
    echo "You entered: \"" . $fave_real_place . "\" for your favorite real place.<br>";
    $real_place_length = strlen($fave_real_place);

    if ($real_place_length >0 ){
        echo "the length of your favorite real place is: " . $real_place_length . "<br>";
    }
     echo "<br>";

     echo '<a href="index.html">try again</a><br>';
    } 
    else {
        echo "Sorry, your input is invalid. Please try again.<br>";
        echo '<a href="index.html">try again</a><br>';
    }
    ?>
    </body>
    <footer>
        <h3>Assignment 3: Server Side Intro &emsp; freddybutoma.me &emsp; Austin, TX</h3>
     </footer>

     
 