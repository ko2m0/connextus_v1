<?php
    ini_set('display_errors', 1); error_reporting(-1);
    
$servername = "72.167.84.16";
$username = "ko2m0";
$password = "info4ko2m0";
$dbname = "connextus_demo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//VALUES

$referralToName = $_POST['referralToNameField'];
$referralToEmail = $_POST['referralToEmailField'];
$referralToPhone = $_POST['referralToPhoneField'];
$referralFromName = $_POST['referralFromNameField'];
$referralFromEmail = $_POST['referralFromEmailField'];
$referralComment = $_POST['referralMsgField'];
$referralPriority = $_POST['referralPriority'];
$referralUserUrl = $_POST['txtUrl2'];
    

// sql to create table

$sql = "INSERT INTO connextus_referral_db (referralto_name, referralto_email, referralto_phone, referralfrom_name, referralfrom_email, referral_comment, referral_priority, user_url)
VALUES ('$referralToName', '$referralToEmail', '$referralToPhone', '$referralFromName', '$referralFromEmail', '$referralComment', '$referralPriority', '$referralUserUrl')";

if ($conn->query($sql) === TRUE) {
  echo '
  
  <!-- HTML/REFERRALFORM -->
  
  <!DOCTYPE HTML>
    <html lang="en">
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="apple-mobile-web-app-status-bar-style" content="black">
  
      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/splash/splash-icon.png">
      <link rel="apple-touch-startup-image" href="images/splash/splash-screen.png"
          media="screen and (max-device-width: 320px)">
      <link rel="apple-touch-startup-image" href="images/splash/splash-screen@2x.png"
          media="(max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2)">
      <link rel="apple-touch-startup-image" sizes="640x1096" href="images/splash/splash-screen@3x.png">
  
      <title>ConneXtus :: Professional Business Card Binder</title>
  
  
      <link href="../styles/color-default.css" rel="stylesheet" type="text/css" id="pagestyle">
      <link href="../styles/framework.css" rel="stylesheet" type="text/css">
      <link href="../styles/owl.carousel.css" rel="stylesheet" type="text/css">
      <link href="../styles/owl.theme.css" rel="stylesheet" type="text/css">
      <link href="../styles/swipebox.css" rel="stylesheet" type="text/css">
      <link href="../styles/colorbox.css" rel="stylesheet" type="text/css">
      <link href="../styles/style.css" rel="stylesheet" type="text/css">
  
  
      <script  src="../scripts/jquery.js"></script>
      <script  src="../scripts/jqueryui.js"></script>
      <script  src="../scripts/owl.carousel.min.js"></script>
      <script  src="../scripts/jquery.swipebox.js"></script>
      <script  src="../scripts/colorbox.js"></script>
      <script  src="../scripts/snap.js"></script>
      <script  src="../scripts/contact.js"></script>
      <script  src="../scripts/custom.js"></script>
      <script  src="../scripts/framework.js"></script>
      <script  src="../scripts/framework.launcher.js"></script>
  
      <style>
          
          .meetingResponse {
              position: fixed;
              /* Stay in place */
              z-index: 1;
              /* Sit on top */
              left: 0;
              top: 0;
              width: 100%;
              /* Full width */
              height: 100%;
              /* Full height */
              overflow: auto;
              /* Enable scroll if needed */
              background-color: rgb(1, 68, 121);
              /* Fallback color */
              background-color: rgba(1, 68, 121, 0.99);
              /* Black w/ opacity */
          }
      </style>
  </head>
  
  <body>
  
      <div id="preloader">
          <div id="status">
              <p class="center-text">
                  Loading the content...
                  <em>Loading depends on your connection speed!</em>
              </p>
          </div>
      </div>
      <!-- 
  <div class="header">
      <div id="menu">
          <div id="menu-deploy">
              <a class="hide-menu" href="#"></a>
              <a class="show-menu" href="#"></a>
          </div>
          
          <em class="header-message">
          
          </em>
      
          <a href="contact.php" class="contact-header"></a>        
          
          <div id="box">  
                  <div class="box-deco"></div>  
              <a class="nav-item home-icon" href="index.php">Home</a>
              <a class="nav-item type-icon" href="about.php">About ConneXtus</a>
              <a class="nav-item mail-icon" href="contact.php">Contact ConneXtus</a>
              <a class="nav-item clos-icon" href="#">Close</a>
          </div>
      </div>
  </div>
  -->
  
      
  
      <div class="content">
          <div class="container" style="text-align: center">
                      <div class="meetingResponse flexxer flexxer-column align-center just-center">
                           <span style="background-color: #ffffff; padding: 10px; margin: 10px; border-radius:8px">
                              <img src="http://www.connextusnow.com/connextus_app/img/Connextus_logoSmall.svg" alt="ConneXtus" width="200">
                           </span>
                              <h2 style="color: #ffffff;">Thank you for reaching me! <br> You will hear from me pretty soon!</h2>
  
                              <h3 style="color: #ff9900;">Redirecting...</h3>
                      </div>
  
  
  
              <div class="clear"></div>
          </div>
  
          <!-- -->
  
  
      </div>
      
  </body>
  
  </html>
  
    <!-- HTML/REFERRALFORM -->
  
  ';

  
$template_referral = "../mailing/referral/referral_form.php";

$emailto_1 = "info@online4color.com";
$subject_1 = "ConneXtus Submitted Referral form";

$swap_var = array(
    "{EMAIL_LOGO}" => "http://www.connextusnow.com/connextus_app/img/Connextus_LogoSmall4web.png",
    "{NAME}" => "Rolando",
    "{REFERRALTONAME}" => "$referralToName",
    "{REFERRALTOEMAIL}" => "$referralToEmail",
    "{REFERRALTOPHONE}" => "$referralToPhone",
    "{REFERRALFROMNAME}" => "$referralFromName",
    "{REFERRALFROMEMAIL}" => "$referralFromEmail",
    "{REFERRALPRIORITY}" => "$referralPriority", 
    "{REFERRALCOMMENT}" => "$referralComment",
);

$headers = "From: ConneXtus Team <info@connextusnow.com>\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";



if(file_exists($template_referral))
    $message_1 = file_get_contents($template_referral);
    else
    die("unable to locate the template file");

foreach(array_keys($swap_var) as $key){
    if (strlen($key) > 2 && trim($key) != "" )
        $message_1 = str_replace($key, $swap_var[$key], $message_1);
}

echo $message_1;


if (mail($emailto_1, $subject_1, $message_1, $headers))
        echo 'success';
        else
        echo 'not sent';
  
//

$template_referral2 = "../mailing/referral/referral2_form.php";

$emailto_2 = "$referralFromEmail";
$subject_2 = "ConneXtus Submitted Referral form";

$swap_var2 = array(
    "{EMAIL_LOGO}" => "http://www.connextusnow.com/connextus_app/img/Connextus_LogoSmall4web.png",
    "{NAME2}" => "$referralFromName",
    "{REFERRALTONAME4}" => "$referralToName",
    "{REFERRALTOEMAIL4}" => "$referralToEmail",
    "{REFERRALFROMNAME4}" => "$referralFromName",
    "{REFERRALFROMEMAIL4}" => "$referralFromEmail",
    "{REFERRALPRIORITY4}" => "$referralPriority", 
    "{REFERRALCOMMENT4}" => "$referralComment",
    "{WENDYCONNEXTUS}" => "http://dev.connextusnow.com/",
);

$headers = "From: ConneXtus Team <info@connextusnow.com>\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

if(file_exists($template_referral2))
    $message_2 = file_get_contents($template_referral2);
    else
    die("unable to locate the template file");

foreach(array_keys($swap_var2) as $key){
    if (strlen($key) > 2 && trim($key) != "" )
        $message_2 = str_replace($key, $swap_var2[$key], $message_2);
}

echo $message_2;


if (mail($emailto_2, $subject_2, $message_2, $headers))
        echo 'success';
        else
        echo 'not sent';
  


//

$template_referral3 = "../mailing/referral/referral3_form.php";

$emailto_3 = "$referralToEmail";
$subject_3 = "ConneXtus Submitted Referral form";

$swap_var3 = array(
    "{EMAIL_LOGO}" => "http://www.connextusnow.com/connextus_app/img/Connextus_LogoSmall4web.png",
    "{NAME3}" => "$referralFromName",
    "{REFERRALTONAME3}" => "$referralToName",
    "{REFERRALTOEMAIL3}" => "$referralToEmail",
    "{REFERRALFROMNAME3}" => "$referralFromName",
    "{REFERRALFROMEMAIL3}" => "$referralFromEmail",
    "{REFERRALPRIORITY3}" => "$referralPriority", 
    "{REFERRALCOMMENT3}" => "$referralComment",
    "{WENDYCONNEXTUS}" => "http://dev.connextusnow.com/",
);

$headers = "From: ConneXtus Team <info@connextusnow.com>\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

if(file_exists($template_referral3))
    $message_3 = file_get_contents($template_referral3);
    else
    die("unable to locate the template file");

foreach(array_keys($swap_var3) as $key){
    if (strlen($key) > 2 && trim($key) != "" )
        $message_3 = str_replace($key, $swap_var3[$key], $message_3);
}

echo $message_3;


if (mail($emailto_3, $subject_3, $message_3, $headers))
        echo 'success';
        else
        echo 'not sent';
  

/*
  |header("refresh: 2; url = http://alt.connextusnow.com");
*/

  echo "<meta http-equiv=\"refresh\" content=\"3;URL=http://dev.connextusnow.com\">";

} else {
  echo "Error registrando datos: " . $conn->error;
}

$conn->close();

?>
