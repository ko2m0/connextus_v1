<?php
$mysqli = new mysqli("72.167.84.16","ko2m0","info4ko2m0","connextus_demo");
/*$mysqli = new mysqli("localhost","root","","connextus_demo");*/


if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }
  
  $sql = "SELECT * FROM connextus_demo_data WHERE user_id='1'";
  $result = $mysqli -> query($sql);
  
  // Associative array
  $row = $result -> fetch_assoc();
  printf ("",
  $row["profile_video"],
  $row['profile_pic'],
  $row['profile_name'],
  $row['profile_job'],
  $row['profile_ws'],
  $row['profile_about'],
  $row['profile_client1'],
  $row['profile_client2'],
  $row['profile_client3'],
  $row['profile_client4'],
  $row['profile_sm1'],
  $row['profile_sm2'],
  $row['profile_sm3'],
  $row['profile_sm4'],
  $row['user_phonenumber'])
  ;
  
  // Free result set
  $result -> free_result();
  
  $mysqli -> close();

 ?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, viewport-fit=cover">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/splash/splash-icon.png">
    <link rel="apple-touch-startup-image" href="images/splash/splash-screen.png"
        media="screen and (max-device-width: 320px)">
    <link rel="apple-touch-startup-image" href="images/splash/splash-screen@2x.png"
        media="(max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2)">
    <link rel="apple-touch-startup-image" sizes="640x1096" href="images/splash/splash-screen@3x.png">

    <title>ConneXtus :: Professional Business Card Binder</title>


    <link href="styles/color-default.css" rel="stylesheet" type="text/css" id="pagestyle">
    <link href="styles/framework.css" rel="stylesheet" type="text/css">
    <link href="styles/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="styles/owl.theme.css" rel="stylesheet" type="text/css">
    <link href="styles/swipebox.css" rel="stylesheet" type="text/css">
    <link href="styles/colorbox.css" rel="stylesheet" type="text/css">
    <link href="styles/style.css" rel="stylesheet" type="text/css">
    <link href="styles/modals.css" rel="stylesheet" type="text/css">
    <link href="styles/media-queries.css" rel="stylesheet" type="text/css">
    


    <script  src="scripts/jquery.js"></script>
    <script  src="scripts/jqueryui.js"></script>
    <script  src="scripts/owl.carousel.min.js"></script>
    <script  src="scripts/jquery.swipebox.js"></script>
    <script  src="scripts/colorbox.js"></script>
    <script  src="scripts/snap.js"></script>
    <script  src="scripts/contact.js"></script>
    <script  src="scripts/custom.js"></script>
    <script  src="scripts/framework.js"></script>
    <script  src="scripts/framework.launcher.js"></script>

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

  <div class="mainWrapper">

  <!-- Video Section -->
 <section class="videoSection">
    <div class="container videocontainer">
    <video playsinline controls class="responsive-video"  
        poster="http://www.connextusnow.com/connextus_app/img/connextus_thumbnail2.jpg">
        <source src="<?php echo $row["profile_video"]; ?>" type="video/mp4">
    Your browser does not support the video tag.
    </video>
    </div>
 </section>
    <main class="mainSection">
        <div class="content p-hck">
            <div class="container">
                <div class="container-flex">
                    <div class="svgProfileMask" id="InfoBtn">
                        <svg viewBox="0 0 200 300" width="70" height="100">
                        <defs>
                            <clipPath id="clip">
                                <circle cx="100" cy="100" r="100" />
                            </clipPath>
                        </defs>
                        <image height="70%" preserveAspectRatio="xMinYMin slice" width="100%"
                            xlink:href="<?php echo $row["profile_pic"]; ?>"
                            clip-path="url(#clip)" />
                    </svg>
                    <svg width="24px" height="24px" viewBox="0 0 24 24" style="position:absolute; top: 0;"  xmlns="http://www.w3.org/2000/svg"><rect x="0" fill="none" width="24" height="24"/><g fill="#ff9900"><path d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/></g></svg>
    
                </div>
                <div class="flexxer flexxer-column align-start just-start" style="padding: 0 10px">
                    <h3 class="unuscolor-txt" style="margin-bottom: 2px"><?php echo $row["profile_name"]; ?></h3>
                    <h5 class="trescolor-txt"><?php echo $row["profile_job"]; ?></h5>
                </div>
                <div class="flexxer wrapit align-center just-center" style="padding: 10px 0">
                    <a href="<?php echo $row["profile_ws"]; ?>" class="ws-header2" target="_blank"></a>
                    <div class="clear"></div>
                </div>

            </div>

            <div class="clear"></div>
        </div>
            <div class="decoration"></div>
        <!-- -->
        <div class="container P-2vh">
            <div class="one-third">
            <a href="sms:<?php echo $row['user_phonenumber']; ?>">   
            <!--<a href="https://wa.me//?text=Hello%20I%20would%20like%20to%20contact%20you">-->
                    <div class="k-btn">
                        <img src="/images/svg/msg_icon.svg" alt="Message">
                    </div>
                    <p class="center-text uppercase unuscolor-txt bold">Message</p>
                </a>
            </div>
            <div class="one-third">
                <div class="k-btn" id="MeetBtn">
                    <img src="/images/svg/meet_icon.svg" alt="Meeting">
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
        <div class="container flexxer align-center just-center">
            <div>
        <a href="tel:<?php echo $row["user_phonenumber"]; ?>" class="button-big duo-bg phone-btn">
            <div class="flexxer just-center">
                <div class="callbtn_icon">
                    <img src="http://www.connextusnow.com/connextus_app/img/Connextus_call_phoneIcon1.svg" alt="Call" width="30">
                </div>
                <div class="callbtn_icon">
                    <img src="http://www.connextusnow.com/connextus_app/img/connextus_textlogoW.svg" alt="ConneXtus" width="150">
                </div>
                <div class="callbtn_icon">
                    <img src="http://www.connextusnow.com/connextus_app/img/Connextus_logoSmall_whiteborder1.svg" alt="Logo" width="30" style="border: 2px solid #ffffff; border-radius:5px">
                </div>
            </div>
        </a>
        </div>
            <div class="clear"></div>
        </div>
        

        <!-- 
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
        -->
        <div class="decoration"></div>

        

        <div class="container P-2vh">
            <div class="flexxer just-around align-center">
                <a href="https://www.linkedin.com/shareArticle?mini=true&url=card.connextusnow.com%2F" target="_blank"
                    class="">
                    <img src="http://www.connextusnow.com/connextus_app/img/SM/Connextus_linkedinLogo.svg"
                        alt="Linkedin" width="20px">
                </a>
                <a href="<?php echo $row["profile_sm2"]; ?>" target="_blank" class="">
                    <img src="http://www.connextusnow.com/connextus_app/img/SM/Connextus_instagramLogo.svg" alt=""
                        width="20px">
                </a>
                <a href="https://www.facebook.com/sharer.php?u=card.connextusnow.com%2F"
                    target="_blank" class="">
                    <img src="http://www.connextusnow.com/connextus_app/img/SM/Connextus_facebookLogo.svg" alt=""
                        width="20px">
                </a>
                <a href="https://twitter.com/intent/tweet?text=ConneXtusisagreattooltomeetbusinessaquantancies!&url=alt.connextusnow.com" target="_blank">
                    <img src="http://www.connextusnow.com/connextus_app/img/SM/Connextus_twitterLogo.svg" alt=""
                        width="25px">
                </a>
                <!-- <input type="text" value="http://www.connextusnow.com/" id="urlLink" style="display:none">
                <a onclick="copyUrl2clipboard()" style="cursor:pointer"></a>
                <script>
                   function copyUrl2clipboard() {
                // Get the text field
                var copyText = document.getElementById("urlLink");

                // Select the text field
                    copyText.select();
                    copyText.setSelectionRange(0, 99999); // For mobile devices

                // Copy the text inside the text field
                    navigator.clipboard.writeText(copyText.value);

                // Alert the copied text
                    alert("Copied the text: " + copyText.value);
                    }

                </script>
                    -->
            </div>
            <div class="clear"></div>
          </div>
         <!--
         <div class="container">
            <div class="flexxer just-center align-center">
                <img src="http://www.connextusnow.com/connextus_app/img/Connextus_logoSmall.svg" alt="ConneXtus"
                    width="80px">
            </div>
            <div class="clear"></div>
         </div>
          -->
         </div>
    
                </main>
    <footer class="footerSection">
    <div class="footer">
        <p>Copyright &copy; 2022 ConneXtus</p>
        <!--<small>Privacy Policy</small>
        <small>Terms & Conditions</small>
        
        <a href="#" class="go-up"></a>-->
    </div>
                </footer>

    </div>
    
    
<!-- ////// MODALS -->


 <!-- INFO & CLIENTS Modal -->
 <div id="ModalInfo" class="modal">

<!-- Modal content -->
<div class="modal-content">
    <div class="modal-header">
        <span class="close3 close">&times;</span>
        <h2 class="unuscolor-txt">About Me</h2>
    </div>
    <div class="decoration"></div>
    <div class="modal-body">
        <div class="container">
            <h4>
                <?php echo $row['profile_about']; ?>
            </h4>
            <div class="clear"></div>
        </div>
        <div class="decoration"></div>
        <div class="container">
            <h4 class="caps unuscolor-txt">Some of my Clients</h4>
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
        <div class="clear"></div>
        </div> 
    </div>
    <div class="modal-footer">
        <h3>&nbsp;</h3>
    </div>
</div>

</div>
    
<!-- Meeting Modal -->
<div id="ModalMeet" class="modal">

<!-- Modal content -->
<div class="modal-content">
    <div class="modal-header">
        <span class="close1 close">&times;</span>
        <h2 class="unuscolor-txt">Meeting</h2>
    </div>
    <div class="decoration"></div>
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

            <form action="/php/meet_db.php" method="post" class="meetingForm" id="meetingForm">
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
                        <label class="field-title meetingNameField" for="meetingNameField">
                            First and last name:<span> (required)</span></label>
                        <input type="text" name="meetingNameField" value="" placeholder="John Smith" class="contactField requiredField"
                            id="meetingNameField" />
                    </div>
                    <div class="formFieldWrap">
                        <label class="field-title meetingEmailField" for="meetingEmailField">Email:
                            <span> (required)</span></label>
                        <input type="email" name="meetingEmailField" value="" placeholder="joe@mycompany.com"
                            class="contactField requiredField requiredEmailField" id="meetingEmailField" />
                    </div>
                    <div class="formFieldWrap">
                        <label class="field-title meetingPhoneField" for="meetingPhoneField">Phone
                            Number: </label>
                        <input type="tel" name="meetingPhoneField" value="" placeholder="XXX XXX XX XX"
                            class="contactField requiredField requiredEmailField" id="meetingPhoneField" />
                    </div>
                    <div class="formFieldWrap">
                        <label class="field-title meetingDateField" for="meetingDateField">Date you&apos;d like to meet:
                            <span>(required)</span></label>
                        <input type="datetime-local" name="meetingDateField" value=""
                            class="contactField requiredField meetingDateField" id="meetingDateField" />
                    </div>
                    <div class="formTextareaWrap">
                        <label class="field-title meetingMsg" for="meetingMsg">Comment:
                            </label>
                        <textarea name="meetingMsg" class="contactTextarea requiredField"
                            id="meetingMsg"></textarea>
                    </div>
                    <input type="hidden" id="txtUrl" name="txtUrl" value="" />
                    <script>document.getElementById('txtUrl').value = window.location.href;</script>
                    <div class="formSubmitButtonErrorsWrap">
                        <input type="submit" class="buttonWrap button unus-bg contactSubmitButton"
                            id="meetingSubmitButton" value="SUBMIT" data-formId="meetingForm"/>
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
        <span class="close2 close">&times;</span>
        <h2 class="unuscolor-txt">Referral</h2>
    </div>
    <div class="decoration"></div>
    <div class="modal-body">
        <div class="container no-bottom">
            <div class="contact-form no-bottom"> 
                <!--
                <div class="formSuccessMessageWrap" id="formSuccessMessageWrap">
                    <div class="big-notification green-notification">
                        <h3 class="uppercase">Message Sent </h3>
                        <a href="#" class="close-big-notification">x</a>
                        <p>Your message has been successfuly sent. Please allow up to 48 hours for a reply! Thank you!</p>
                    </div>
                </div>
                        -->
            
                <form action="/php/refer_db.php" method="post" class="referralForm" id="referralForm">
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
                            <label class="field-title referralToNameField" for="referraltoNameField">Referral to First and Last Name:<span> (required)</span></label>
                            <input type="text" name="referralToNameField" value="" class="contactField requiredField" id="referralToNameField"/>
                        </div>
                        <div class="formFieldWrap">
                            <label class="field-title referralToEmailField" for="referralToEmailField">Referral to Email: <span> (required)</span></label>
                            <input type="email" name="referralToEmailField" value="" class="contactField requiredField referralEmailField" id="referralToEmailField"/>
                        </div>
                        <div class="formFieldWrap">
                            <label class="field-title referralToPhoneField" for="referralToPhoneField">Referral to Phone number:</label>
                            <input type="tel" name="referralToPhoneField" value="" class="contactField requiredField referralToPhoneField" id="referralToPhoneField"/>
                        </div>
                        <div class="formFieldWrap">
                            <label class="field-title referralfromNameField" for="referralFromNameField">Referral from First and Last Name: </label>
                            <input type="text" name="referralFromNameField" value="" class="contactField requiredField" id="referralFromNameField"/>
                        </div>
                        <div class="formFieldWrap">
                            <label class="field-title referralFromEmailField" for="referralFromEmailField">Referral from Email: </label>
                            <input type="text" name="referralFromEmailField" value="" class="contactField requiredField" id="referralFromEmailField"/>
                        </div>
                        <div class="formFieldWrap">
                            <label class="field-title referralPriority" for="referralPriority">Choose priority:</label>
                                <select class="contactField" name="referralPriority" id="referralPriority">
                                    <option value="High Priority">High</option>
                                    <option value="Medium Priority">Medium</option>
                                    <option value="Low Priority">Low</option>    
                                </select>
                        </div>
                        
                        <div class="formTextareaWrap">
                            <label class="field-title referralMsgField" for="referralMsgField">Comment: <span>(required)</span></label>
                            <textarea name="referralMsgField" class="contactTextarea requiredField" id="referralMsgField"></textarea>
                        </div>
                        <input type="hidden" id="txtUrl2" name="txtUrl2" value="" />
                        <script>document.getElementById('txtUrl2').value = window.location.href;</script>
                        <div class="formSubmitButtonErrorsWrap">
                            <input type="submit" class="buttonWrap button unus-bg contactSubmitButton" id="referralSubmitButton" value="SUBMIT" data-formId="referralForm"/>
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
    

    <script>
        // Get the modal
        var modalMeet = document.getElementById("ModalMeet");
        var modalRefer = document.getElementById("ModalRefer");
        var modalInfo = document.getElementById("ModalInfo");

        // Get the button that opens the modal
        var btn = document.getElementById("MeetBtn");
        var btn2 = document.getElementById("ReferBtn");
        var btn3 = document.getElementById("InfoBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close1")[0];
        var span2 = document.getElementsByClassName("close2")[0];
        var span3 = document.getElementsByClassName("close3")[0];

        // When the user clicks on the button, open the modal
        btn.onclick = function () {
            modalMeet.style.display = "block";
        }
        btn2.onclick = function () {
            modalRefer.style.display = "block";
        }
        btn3.onclick = function () {
            modalInfo.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modalMeet.style.display = "none";
        }

        span2.onclick = function () {
            modalRefer.style.display = "none";
        }
        span3.onclick = function () {
            modalInfo.style.display = "none";
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
        
        window.onclick = function (event) {
            if (event.target == modalInfo) {
                modalInfo.style.display = "none";
            }
        }
    </script>

</body>

</html>