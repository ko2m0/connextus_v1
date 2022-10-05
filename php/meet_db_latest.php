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

    $meeting_name = $_POST['meetingNameField'];
    $meeting_email = $_POST['meetingEmailField'];
    $meeting_phone = $_POST['meetingPhoneField'];
    $meeting_date = $_POST['meetingDateField'];
    $meeting_msg = $_POST['meetingMsg'];
    $user_url = $_POST['txtUrl'];

// sql to create table

$sql = "INSERT INTO connextus_meeting_db (meeting_name, meeting_email, meeting_phone, meeting_date, meeting_msg, user_url)
VALUES ('$meeting_name', '$meeting_email', '$meeting_phone', '$meeting_date', '$meeting_msg', '$user_url')";

if ($conn->query($sql) === TRUE) {
  echo '
  
  <!-- HTML/MEETINGFORM -->
  
<!DOCTYPE HTML>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/splash/splash-icon.png">
    <link rel="apple-touch-startup-image" href="images/splash/splash-screen.png"
        media="screen and (max-device-width: 320px)" />
    <link rel="apple-touch-startup-image" href="images/splash/splash-screen@2x.png"
        media="(max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2)" />
    <link rel="apple-touch-startup-image" sizes="640x1096" href="images/splash/splash-screen@3x.png" />

    <title>ConneXtus :: Professional Business Card Binder</title>


    <link href="../styles/color-default.css" rel="stylesheet" type="text/css" id="pagestyle">
    <link href="../styles/framework.css" rel="stylesheet" type="text/css">
    <link href="../styles/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="../styles/owl.theme.css" rel="stylesheet" type="text/css">
    <link href="../styles/swipebox.css" rel="stylesheet" type="text/css">
    <link href="../styles/colorbox.css" rel="stylesheet" type="text/css">
    <link href="../styles/style.css" rel="stylesheet" type="text/css">


    <script type="text/javascript" src="../scripts/jquery.js"></script>
    <script type="text/javascript" src="../scripts/jqueryui.js"></script>
    <script type="text/javascript" src="../scripts/owl.carousel.min.js"></script>
    <script type="text/javascript" src="../scripts/jquery.swipebox.js"></script>
    <script type="text/javascript" src="../scripts/colorbox.js"></script>
    <script type="text/javascript" src="../scripts/snap.js"></script>
    <script type="text/javascript" src="../scripts/contact.js"></script>
    <script type="text/javascript" src="../scripts/custom.js"></script>
    <script type="text/javascript" src="../scripts/framework.js"></script>
    <script type="text/javascript" src="../scripts/framework.launcher.js"></script>

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

    <div class="content">
    <div class="container" style="text-align: center">
                <div class="meetingResponse flexxer flexxer-column align-center just-center">
                     <span style="background-color: #ffffff; padding: 10px; margin: 10px; border-radius:8px">
                        <img src="http://www.connextusnow.com/connextus_app/img/Connextus_logoSmall.svg" alt="ConneXtus" width="200px">
                     </span>
                        <h2 style="color: #ffffff;">Thank you for reaching me! <br> You will hear from me pretty soon!</h2>

                        <h3 style="color: #ff9900;">Redirecting...</h3>
                </div>



        <div class="clear"></div>
    </div>

    <!-- -->


</div>


    <!-- Meeting Modal -->
    

    <!-- Refer Modal -->
    
</body>

</html>

  <!-- HTML/MEETINGFORM -->

';


$template_meeting = "../mailing/meeting/meeting_form.php";

$emailto_1 = "wendy@online4color.com";
$subject_1 = "ConneXtus Submitted Meeting form";

$swap_var = array(
    "{EMAIL_LOGO}" => "http://www.connextusnow.com/connextus_app/img/Connextus_LogoSmall4web.png",
    "{NAME}" => "Wendy",
    "{MEETINGWITH_NAME}" => "$meeting_name",
    "{MEETINGWITH_EMAIL}" => "$meeting_email",
    "{MEETINGWITH_PHONE}" => "$meeting_phone",
    "{MEETINGWITH_DATE}" => "$meeting_date",
    "{MEETINGWITH_COMMENT}" => "$meeting_msg", 
);

$headers = "From: ConneXtus Team <info@connextusnow.com>\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

if(file_exists($template_meeting))
    $message_1 = file_get_contents($template_meeting);
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

$template_meeting2 = "../mailing/meeting/meeting2_form.php";

$emailto_2 = "$meeting_email";
$subject_2 = "ConneXtus Submitted Meeting form";

$swap_var2 = array(
    "{EMAIL_LOGO}" => "http://www.connextusnow.com/connextus_app/img/Connextus_LogoSmall4web.png",
    "{NAME2}" => "Wendy Torres",
    "{MEETINGWITH_NAME2}" => "$meeting_name",
    "{MEETINGWITH_EMAIL2}" => "$meeting_email",
    "{MEETINGWITH_PHONE2}" => "$meeting_phone",
    "{MEETINGWITH_DATE2}" => "$meeting_date",
    "{MEETINGWITH_COMMENT2}" => "$meeting_msg",
);

$headers = "From: ConneXtus Team <info@connextusnow.com>\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

if(file_exists($template_meeting2))
    $message_2 = file_get_contents($template_meeting2);
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



        /*
$from = "info@connextusnow.com";

// vars
$meetingToEmail = "SELECT user_email FROM connextus_demo_data WHERE user_id='6'";
$meetingFromEmail = trim($_POST['meetingEmailField']);
/* send to 1st recipient 
$to_1 = "$meetingToEmail";
$from = "info@connextusnow.com";
$subject_1 = "ConneXtus Submitted Meeting form";
$message_1 = "ConneXtus just got you a meeting!";

// Get HTML contents from file 
$meetingToMailContent = file_get_contents("../mailing/meeting/meeting_form.php");




mail($to_1,$subject_1,$message_1,$meetingToMailContent,$headers_1);
*/

  echo "<meta http-equiv=\"refresh\" content=\"3;URL=http://card.connextusnow.com\">";

} else {
  echo "Error registrando datos: " . $conn->error;
}

$conn->close();

?>
