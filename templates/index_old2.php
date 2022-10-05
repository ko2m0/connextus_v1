<?php
$mysqli = new mysqli("72.167.84.16","ko2m0","info4ko2m0","connextus_demo");
/*$mysqli = new mysqli("localhost","root","","connextus_demo");*/


if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }
  
  $sql = "SELECT * FROM connextus_demo_data";
  $result = $mysqli -> query($sql);
  
  // Associative array
  $row = $result -> fetch_assoc();
  printf ("",
  $row["profile_name"],
  $row["profile_job"],
  $row['profile_ws'],
  $row['profile_about'],
  $row['profile_client1'],
  $row['profile_client2'],
  $row['profile_client3'],
  $row['profile_client4'],
  $row['profile_sm1'],
  $row['profile_sm2'],
  $row['profile_sm3'],
  $row['profile_sm4'],)
  ;
  
  // Free result set
  $result -> free_result();
  
  $mysqli -> close();

 ?>
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


    <link href="styles/color-default.css" rel="stylesheet" type="text/css" id="pagestyle">
    <link href="styles/framework.css" rel="stylesheet" type="text/css">
    <link href="styles/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="styles/owl.theme.css" rel="stylesheet" type="text/css">
    <link href="styles/swipebox.css" rel="stylesheet" type="text/css">
    <link href="styles/colorbox.css" rel="stylesheet" type="text/css">
    <link href="styles/style.css" rel="stylesheet" type="text/css">


    <script type="text/javascript" src="scripts/jquery.js"></script>
    <script type="text/javascript" src="scripts/jqueryui.js"></script>
    <script type="text/javascript" src="scripts/owl.carousel.min.js"></script>
    <script type="text/javascript" src="scripts/jquery.swipebox.js"></script>
    <script type="text/javascript" src="scripts/colorbox.js"></script>
    <script type="text/javascript" src="scripts/snap.js"></script>
    <script type="text/javascript" src="scripts/contact.js"></script>
    <script type="text/javascript" src="scripts/custom.js"></script>
    <script type="text/javascript" src="scripts/framework.js"></script>
    <script type="text/javascript" src="scripts/framework.launcher.js"></script>

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

    <!-- Video Section -->
    <div class="container">
        <div class="container_iframe_video">
            <iframe class="responsive-iframe"
                src="http://www.connextusnow.com/connextus_app/video/profile_video/wendyTorres.MP4"></iframe>
        </div>
    </div>
    <!-- -->

    <div class="content">
        <div class="container">
            <div class="container-flex">
                <div class="svgProfileMask">
                    <svg viewBox="0 0 200 300" width="70" height="100">
                        <defs>
                            <clipPath id="clip">
                                <circle cx="100" cy="100" r="100" />
                            </clipPath>
                        </defs>
                        <image height="70%" preserveAspectRatio="xMinYMin slice" width="100%"
                            xlink:href="http://www.connextusnow.com/connextus_app/img/users_demo/wendyTorres.jpg"
                            clip-path="url(#clip)" />
                    </svg>
                    <!--    
                <svg width="60" height="60">
                    <circle fill="#E5E4E2" stroke="#ff9900" strokeWidth="2" cx="30" cy="30" r="28"></circle>  
                      <mask id="svgMask">
                        <circle fill="#ffffff" cx="30" cy="30" r="25"></circle>  
                        <img src="http://www.connextusnow.com/connextus_app/img/users_demo/wendyTorres.jpg" 
                       height="95%" width="100%"/>
                      </mask>
                      
                    </svg>
                -->
                </div>
                <div class="flexxer flexxer-column align-start just-start" style="padding: 0 10px">
                    <h3 class="unuscolor-txt"><?php echo $row["profile_name"]; ?></h3>
                    <h5 class="trescolor-txt"><?php echo $row["profile_job"]; ?></h5>
                </div>
                <div class="flexxer wrapit align-center just-center" style="padding: 10px 0">
                    <a href="<?php echo $profile_ws; ?>" class="ws-header2" target="_blank"></a>
                    <!--
                <a href="<?php echo $profile_sm2; ?>" class="facebook-header2" target="_blank"></a>
                <a href="<?php echo $profile_sm3; ?>" class="instagram-header2" target="_blank"></a>
                <a href="<?php echo $profile_sm4; ?>" class="twitter-header2" target="_blank"></a>
                -->
                    <div class="clear"></div>
                </div>

            </div>


            <div class="clear"></div>
        </div>

        <div class="decoration"></div>
        <!-- -->
        <div class="container">
            <div class="one-third">
                <a href="">
                    <div class="k-btn">
                        <img src="/images/svg/msg_icon.svg" alt="Message">
                    </div>
                    <p class="center-text uppercase unuscolor-txt bold">Message</p>
                </a>
            </div>
            <div class="one-third">
                <div class="k-btn" id="MeetBtn">
                    <img src="/images/svg/meet_icon.svg" alt="Meeting" style="width: 80px;">
                </div>
                <p class="center-text uppercase unuscolor-txt bold">Meeting</p>
            </div>
            <div class="one-third last-column">
                    <div class="k-btn" id="ReferBtn">
                        <img src="/images/svg/refer_icon.svg" alt="Referral">
                    </div>
                <p class="center-text uppercase unuscolor-txt bold">Referral</p>
            </div>
            <div class="clear"></div>
        </div>

        <!-- -->
        <div class="container">
            <div class="tabs">
                <a href="#" class="tab-but tab-but-1 tab-active">Info</a>
                <a href="#" class="tab-but tab-but-2">Clients</a>
            </div>
            <div class="tab-content tab-content-1">
                <p>
                    <?php echo $row["profile_about"]; ?>
                </p>
            </div>
            <div class="tab-content tab-content-2">
                <ul class="gallery">
                    <li><a class="" title="Client1"><img src="<?php echo $row["profile_client1"]; ?>" alt="img" /></a>
                    </li>
                    <li><a class="" title="Client2"><img src="<?php echo $row["profile_client2"]; ?>" alt="img" /></a>
                    </li>
                    <li><a class="" title="Client3"><img src="<?php echo $row["profile_client3"]; ?>" alt="img" /></a>
                    </li>
                    <li><a class="" title="Client4"><img src="<?php echo $row["profile_client4"]; ?>" alt="img" /></a>
                    </li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>




        <!-- -->

        <div class="decoration"></div>

        <div class="container ">
            <div class="flexxer just-around align-center">
                <a href="https://www.linkedin.com/sharing/share-offsite/?url=alt.connextus.com" target="_blank"
                    class="">
                    <img src="http://www.connextusnow.com/connextus_app/img/SM/Connextus_linkedinLogo.svg"
                        alt="Linkedin" width="20px">
                </a>
                <a href="<?php echo $row["profile_sm2"]; ?>" target="_blank" class="">
                    <img src="http://www.connextusnow.com/connextus_app/img/SM/Connextus_instagramLogo.svg" alt=""
                        width="20px">
                </a>
                <a href="https://www.facebook.com/sharer/sharer.php?u=alt.connextusnow.com&quote=Connextusmakesgreatbusinessconnections"
                    target="_blank" class="">
                    <img src="http://www.connextusnow.com/connextus_app/img/SM/Connextus_facebookLogo.svg" alt=""
                        width="20px">
                </a>
                <a href="https://twitter.com/intent/tweet?text=ConneXtusisagreattooltomeetbusinessaquantancies!&url=alt.connextusnow.com"
                    target="_blank" class="">
                    <img src="http://www.connextusnow.com/connextus_app/img/SM/Connextus_twitterLogo.svg" alt=""
                        width="20px">
                </a>
            </div>
            <div class="clear"></div>
        </div>
        <div class="container">
            <div class="flexxer just-center align-center">
                <img src="http://www.connextusnow.com/connextus_app/img/Connextus_logoSmall.svg" alt="ConneXtus"
                    width="80px">
            </div>
            <div class="clear"></div>
        </div>




    </div>
    <style>
        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
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
            background-color: rgba(1, 68, 121, 0.9);
            /* Black w/ opacity */
        }

        /* The Close Button */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .close2 {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close2:hover,
        .close2:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        /* Modal Header */
        .modal-header {
            padding: 16px;
            color: white;
        }

        /* Modal Body */
        .modal-body {
            padding: 2px 16px;
        }

        /* Modal Footer */
        .modal-footer {
            padding: 2px 16px;
            color: white;
        }

        /* Modal Content */
        .modal-content {
            position: relative;
            background-color: #fefefe;
            margin: 15% auto;
            /* 15% from the top and centered */
            padding: 0;
            border: 1px solid #888;
            width: 80%;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            animation-name: animatetop;
            animation-duration: 0.4s
        }


        /* Add Animation */
        @keyframes animatetop {
            from {
                top: -300px;
                opacity: 0
            }

            to {
                top: 0;
                opacity: 1
            }
        }
    </style>



    <!-- Meeting Modal -->
    <div id="ModalMeet" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>
                <h2>Meeting</h2>
            </div>
            <hr>
            <div class="modal-body">
                <div class="contact-form no-bottom">
                    <div class="formSuccessMessageWrap" id="formSuccessMessageWrap">
                        <div class="big-notification green-notification">
                            <h3 class="uppercase">Message Sent </h3>
                            <a href="#" class="close-big-notification">x</a>
                            <p>Your message has been successfuly sent. Please allow up to 48 hours for a reply! Thank
                                you!</p>
                        </div>
                    </div>

                    <form action="meet_db.php" method="post" class="meetingForm" id="meetingForm">
                        <fieldset>
                            <!--
                            <div class="formValidationError" id="contactNameFieldError">
                                <div class="static-notification-red tap-dismiss-notification">
                                    <p class="center-text uppercase">Name is required!</p>
                                </div>
                            </div>
                            <div class="formValidationError" id="contactEmailFieldError">
                                <div class="static-notification-red tap-dismiss-notification">
                                    <p class="center-text uppercase">Mail address required!</p>
                                </div>
                            </div>
                            <div class="formValidationError" id="contactEmailFieldError2">
                                <div class="static-notification-red tap-dismiss-notification">
                                    <p class="center-text uppercase">Mail address must be valid!</p>
                                </div>
                            </div>
                            <div class="formValidationError" id="contactMessageTextareaError">
                                <div class="static-notification-red tap-dismiss-notification">
                                    <p class="center-text uppercase">Message field is empty!</p>
                                </div>
                            </div>
                            -->
                            <div class="formFieldWrap">
                                <label class="field-title meetingNameField" for="meetingNameField">Enter your
                                    Name:<span>(required)</span></label>
                                <input type="text" name="meetingNameField" value="" placeholder="John Smith" class="contactField requiredField"
                                    id="meetingNameField" />
                            </div>
                            <div class="formFieldWrap">
                                <label class="field-title meetingEmailField" for="meetingEmailField">Enter your Email:
                                    <span>(required)</span></label>
                                <input type="email" name="meetingEmailField" value="" placeholder="joe@mycompany.com"
                                    class="contactField requiredField requiredEmailField" id="meetingEmailField" />
                            </div>
                            <div class="formFieldWrap">
                                <label class="field-title meetingPhoneField" for="meetingPhoneField">Enter your Phone
                                    Number: </label>
                                <input type="phone" name="meetingPhoneField" value="" placeholder="XXX XXX XX XX"
                                    class="contactField requiredField requiredEmailField" id="meetingPhoneField" />
                            </div>
                            <div class="formFieldWrap">
                                <label class="field-title meetingDateField" for="meetingDateField">Enter the Date you'd
                                    like to meet me: <span>(required)</span></label>
                                <input type="datetime-local" name="meetingDateField" value=""
                                    class="contactField requiredField meetingDateField" id="meetingDateField" />
                            </div>
                            <div class="formTextareaWrap">
                                <label class="field-title meetingMsg" for="meetingMsg">Message:
                                    </label>
                                <textarea name="meetingMsg" class="contactTextarea requiredField"
                                    id="meetingMsg"></textarea>
                            </div>
                            <div class="formSubmitButtonErrorsWrap">
                                <input type="submit" class="buttonWrap button button-green contactSubmitButton"
                                    id="meetingSubmitButton" value="SUBMIT" data-formId="meetingForm" />
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <h3>&nbsp;</h3>
            </div>
        </div>

    </div>

    <!-- Refer Modal -->
    <div id="ModalRefer" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <span class="close2">&times;</span>
                <h2>Referral</h2>
            </div>
            <div class="decoration"></div>
            <div class="modal-body">
                <div class="container no-bottom">
                    <div class="contact-form no-bottom"> 
                        <div class="formSuccessMessageWrap" id="formSuccessMessageWrap">
                            <div class="big-notification green-notification">
                                <h3 class="uppercase">Message Sent </h3>
                                <a href="#" class="close-big-notification">x</a>
                                <p>Your message has been successfuly sent. Please allow up to 48 hours for a reply! Thank you!</p>
                            </div>
                        </div>
                    
                        <form action="" method="post" class="contactForm" id="contactForm">
                            <fieldset>
                                <div class="formValidationError" id="contactNameFieldError">
                                    <div class="static-notification-red tap-dismiss-notification">
                                        <p class="center-text uppercase">Name is required!</p>
                                    </div>
                                </div>             
                                <div class="formValidationError" id="contactEmailFieldError">
                                    <div class="static-notification-red tap-dismiss-notification">
                                        <p class="center-text uppercase">Mail address required!</p>
                                    </div>
                                </div> 
                                <div class="formValidationError" id="contactEmailFieldError2">
                                    <div class="static-notification-red tap-dismiss-notification">
                                        <p class="center-text uppercase">Mail address must be valid!</p>
                                    </div>
                                </div> 
                                <div class="formValidationError" id="contactMessageTextareaError">
                                    <div class="static-notification-red tap-dismiss-notification">
                                        <p class="center-text uppercase">Message field is empty!</p>
                                    </div>
                                </div>   
                                <div class="formFieldWrap">
                                    <label class="field-title contactRefNameField" for="contactRefNameField">Enter Referral Name:<span>(required)</span></label>
                                    <input type="text" name="contactRefNameField" value="" class="contactField requiredField" id="contactNameField"/>
                                </div>
                                <div class="formFieldWrap">
                                    <label class="field-title contactRefEmailField" for="contactRefEmailField">Enter Referral Email: <span>(required)</span></label>
                                    <input type="email" name="contactRefEmailField" value="" class="contactField requiredField requiredEmailField" id="contactEmailField"/>
                                </div>
                                <div class="formFieldWrap">
                                    <label class="field-title contactRefFromField" for="contactRefFromField">Referral from: </label>
                                    <input type="text" name="contactRefFromField" value="" class="contactField requiredField requiredEmailField" id="contactEmailField"/>
                                </div>
                                <div class="formTextareaWrap">
                                    <label class="field-title contactRefMessageTextarea" for="contactRefMessageTextarea">Message: <span>(required)</span></label>
                                    <textarea name="contactRefMessageTextarea" class="contactTextarea requiredField" id="contactMessageTextarea"></textarea>
                                </div>
                                <div class="formSubmitButtonErrorsWrap">
                                    <input type="submit" class="buttonWrap button button-green contactSubmitButton" id="contactSubmitButton" value="SUBMIT" data-formId="contactForm"/>
                                </div>
                            </fieldset>
                        </form>       
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <h3>&nbsp;</h3>
            </div>
        </div>

    </div>



    <div class="footer">
        <p>Copyright 2022 ConneXtus</p>
        <a href="#" class="go-up"></a>
    </div>

    <script>
        // Get the modal
        var modalMeet = document.getElementById("ModalMeet");
        var modalRefer = document.getElementById("ModalRefer");

        // Get the button that opens the modal
        var btn = document.getElementById("MeetBtn");
        var btn2 = document.getElementById("ReferBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
        var span2 = document.getElementsByClassName("close2")[0];

        // When the user clicks on the button, open the modal
        btn.onclick = function () {
            modalMeet.style.display = "block";
        }
        btn2.onclick = function () {
            modalRefer.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modalMeet.style.display = "none";
        }

        span2.onclick = function () {
            modalRefer.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modalMeet) {
                modalMeet.style.display = "none";
            }
        }

        window.onclick = function (event) {
            if (event.target == modalRefer) {
                modalRefer.style.display = "none";
            }
        }
    </script>

</body>

</html>