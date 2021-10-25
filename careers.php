<?php
print <<< START
<html>
<head>
<title>ATX Nutrition: Careers</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<meta name="description" content="Index of ATX Nutrition"
<meta name="author" content="Zhiyong, Loren, Noah, Christian">
<link href="index.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="careers.css?v=<?php echo time(); ?>">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.19.1/jquery.validate.js"></script>
<script type = "text/javascript" src="careers.js"></script>
</head>
<body>
<div id="content">
<div id="Header">
<table id="mainMenu">
<tr>
<td width="300px"><a href="index.html"> 
<img src="https://bit.ly/3qjba39" width="125"> </a>       
</td>       
<td>      
<a href="menu.html">  
<h3> Our Menu </h3>   
</td>
<td>
<a href="hours_and_directions.html"> <h3> Hours and Directions </h3> </a>
</td>
<td> 
<a href="careers.html"> <h3> Careers </h3> </a>
</td>
<td> 
<a href="connect/connect.html"> <h3> Connect </h3> </a>
</td>
<td> 
<a href="about_us.html"> <h3> About Us </h3> </a>
</td>
<td>
<a href="CTC.html"> <h3> Contact the Creators </h3>
</td>
</tr>
</table>
</div>
</div>
START;
if (!isset ($_COOKIE["submitted"]))
{
print <<< CENTER
<div id="center_content">
<h1> Join our team! </h1>
      <img id="header_img" src="careers_images/atxnutrition_careers.jpg">
      <div id="content">
        <p><b>See what it's like at ATX Nutrition!</b></p>
        <p><a href="https://www.instagram.com/atxnutrition/">https://www.instagram.com/atxnutrition/</a></p>
      <b></b><p><b> Interested in working at ATX Nutrition? Apply here and we will reach out to you if we think you will be a good fit. </b></p>
      <form action="careers1.php" method="POST" id="application" novalidate="novalidate">
        <br>
        <label for="first"> First Name: <b style="color: red"> * </b> </label><br>
        <input type="text" id="first" name="first"> <br><br>
        <label for="last"> Last Name: <b style="color: red"> * </b> </label><br>
        <input type="text" id="last" name="last"> <br><br>
        <label for="email"> Email Address: <b style="color: red"> * </b> </label><br>
        <input type="email" id="email" name="email"> <br><br>
        <label for="phone"> Phone Number: <b style="color: red"> * </b> </label><br>
        <input type="phone" id="phone" name="phone"> <br><br>
        <label for="resume">Resume/CV: <b style="color: red"> * </b> </label> <br><br>
        <input type="file" id="resume" name="resume"><br><br>
        <p> How many hours per week do you plan on working? </p>
        <input type="checkbox" value="40" id="40" name="hours"> <label for="40"> 40 Hours </label><br>
        <input type="checkbox" value="30" id="30" name="hours"> <label for="30"> 30 Hours </label><br>
        <input type="checkbox" value="20" id="20" name="hours"> <label for="20"> 20 Hours </label><br>
        <input type="checkbox" value="10" id="10" name="hours"> <label for="10"> 10 Hours </label><br><br>
        <label for="interest"> Why do you want to work at ATX Nutrition? </label><br>
        <textarea rows="5" cols="40" id="interest" name="interest"></textarea><br><br>
        <label for="about"> Tell us a little about yourself! </label><br>
        <textarea rows="5" cols="40" id="about" name="about"></textarea><br><br>
        <p><b style="color: red"> * </b> Required Field </p>
        <hr><button type="submit" value="Submit Application">Submit Application</button>
        </form></div>
    </div>
</body>
</html>
CENTER;
}
else
{
  print <<< SUBMIT
<h2> Thank you for submitting your application! <h2>
<h2> We will reach out to you if we think you are a good fit. </h2>
<h2> In the meantime follow us on social media! </h2>
<table>
<tr>
<td><a href="https://www.facebook.com/theatxnutrition/?ref=page_internal"><img src="connect/facebook-512.webp" width="140" class="social"></a></td>
<td><a href="https://www.instagram.com/atxnutrition/?hl=en"> <img src="connect/instagram-removebg-preview.png"  width="150"class="social"></td>
</tr>
</table>
</div>
</body>
</html>
SUBMIT;
}
?>