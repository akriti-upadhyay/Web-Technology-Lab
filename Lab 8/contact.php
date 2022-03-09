<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title> Contact Form</title>
   <style>
      body {
         background-color: bisque;
         font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
      }

      h1 {
         background-color: brown;
         color: azure;
         text-align: center;
         font-size: 40px;
      }

      input,
      textarea {
         padding: 5px;
      }

      .button {
         margin-top: 20px;
         background-color: brown;
         font-size: 20px;
         color: azure;
      }
   </style>
</head>

<body>
   <?php
   $nameErr = "";
   $emailErr = "";
   $genderErr = "";
   $websiteErr = "";
   $name = "";
   $email = "";
   $gender = "";
   $Number = "";
   $message = "";
   $subject = "";

   if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["name"])) {
         $nameErr = "Name is required";
      } else {
         $name = test_input($_POST["name"]);
      }
      if (empty($_POST["email"])) {
         $emailErr = "Email is required";
      } else {
         $email = test_input($_POST["email"]);
         if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
         }
      }
      if (empty($_POST["course"])) {
         $Number = "";
      } else {
         $Number = test_input($_POST["course"]);
      }
      if (empty($_POST["class"])) {
         $message = "";
      } else {
         $message = test_input($_POST["class"]);
      }
      if (empty($_POST["gender"])) {
         $genderErr = "Gender is required";
      } else {
         $gender = test_input($_POST["gender"]);
      }
      if (empty($_POST["subject"])) {
         $subjectErr = "You must select 1 or more";
      } else {
         $subject = $_POST["subject"];
      }
   }
   function test_input($data)
   {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
   }
   ?>
   <form method="POST" align="center" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <h1> Contact Form </h1> <br><br>
      <table align="center">
         <tr>
            <td> <b> Enter Name: </b> </td>
            <td> <input type="text" name="name" placeholder="Full Name">
               <span> <?php echo $nameErr; ?> </span>
            </td>
         </tr>
         <tr>
            <td> <b> Enter Email Address: </b> </td>
            <td> <input type="text" name="email" placeholder="E-mail">
               <span> <?php echo $emailErr; ?> </span>
            </td>
         </tr>
         <tr>
            <td> <b> Enter Phone Number: </b> </td>
            <td> <input type="text" name="course" placeholder="Phone Number">
               <span> <?php echo $websiteErr; ?> </span>
            </td>
         </tr>
         <tr>
            <td> <b> Enter Message: </b> </td>
            <td> <textarea name="class" rows="5" cols="40" placeholder="Message"></textarea> </td>
         </tr>
         <tr>
            <td> <b> Gender: </b> </td>
            <td>
               <input type="radio" name="gender" value="yes"> <label for="gender"> Male
               </label> <br>
               <input type="radio" name="gender" value="no"> <label for="gender"> Female
               </label> <br>
               <span> <?php echo $genderErr; ?> </span>
            </td>
         </tr>

         <tr>
            <td> <b> I agree to the terms and conditions* </b> </td>
            <td> <input type="checkbox" name="checked" value="1" required> </td>
            <?php if (!isset($_POST['checked'])) { ?>
            <?php } ?>
         </tr>
         <tr>
            <td colspan="2" align="center">
               <input class="button" type="submit" name="submit" value="Submit">
            </td>
         </tr>
      </table>
   </form>
   <?php
   echo "<hr>";
   echo "<h2> Thank you for contacting us!</h2>";
   echo ("<p><b>Your name:</b>  $name </p>");
   echo ("<p><b>Your email address:</b>  $email </p>");
   echo ("<p><b>Your Phone Number:</b>  $Number </p>");
   echo ("<p><b>Your message:</b> $message </p>");
   ?>
</body>

</html>