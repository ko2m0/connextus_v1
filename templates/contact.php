<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/splash/splash-icon.png">
<link rel="apple-touch-startup-image" href="images/splash/splash-screen.png" 			media="screen and (max-device-width: 320px)" />  
<link rel="apple-touch-startup-image" href="images/splash/splash-screen@2x.png" 		media="(max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2)" /> 
<link rel="apple-touch-startup-image" sizes="640x1096" href="images/splash/splash-screen@3x.png" />

<title>ConneXtus :: Professional Business Card Binder</title>

<link href="styles/style.css"     		rel="stylesheet" type="text/css">
<link href="styles/color-default.css"	rel="stylesheet" type="text/css"	id="pagestyle">
<link href="styles/framework.css" 		rel="stylesheet" type="text/css">
<link href="styles/owl.carousel.css" 	 rel="stylesheet" type="text/css">
<link href="styles/owl.theme.css" 		rel="stylesheet" type="text/css">
<link href="styles/swipebox.css"		 rel="stylesheet" type="text/css">
<link href="styles/colorbox.css"		 rel="stylesheet" type="text/css">


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

<div class="header">
    <div id="menu">
        <div id="menu-deploy">
            <a class="hide-menu" href="#"></a>
            <a class="show-menu" href="#"></a>
        </div>
        
        <em class="header-message">
            Contact Us
        </em>
    
    	<a href="index.php" class="home-header"></a>        
        
        <div id="box">  
       	 	<div class="box-deco"></div>  
			<a class="nav-item home-icon" href="index.php">Home</a>
            <a class="nav-item type-icon" href="about.php">About ConneXtus</a>
            <a class="nav-item mail-icon" href="contact.php">Contact ConneXtus</a>
            <a class="nav-item clos-icon" href="#">Close</a>
            <div class="clear"></div>
        </div>
    </div>
</div>

<div class="content">

    <div class="container header-under">
        <div class="logo-container">
            <img src="http://www.connextusnow.com/connextus_app/img/Connextus_logoSmall.svg" width="85">
            
        </div>
        <!--
        <div class="social-container">
            <a href="#" class="twitter-header"></a>
            <a href="#" class="facebook-header"></a>
            <div class="clear"></div>
            <strong>Just Socials</strong>
        </div>
        -->
        <div class="clear"></div>
    </div>
    
    <div class="decoration"></div>
    
    <div class="container no-bottom">
        <h4>Fill the form below and we'll contact you ASAP.</h4>    
    </div>
    
    
    
    <div class="decoration"></div>
    <div class="container no-bottom">
        <div class="contact-form no-bottom"> 
            <div class="formSuccessMessageWrap" id="formSuccessMessageWrap">
                <div class="big-notification green-notification">
                    <h3 class="uppercase">Message Sent </h3>
                    <a href="#" class="close-big-notification">x</a>
                    <p>Your message has been successfuly sent. Please allow up to 48 hours for a reply! Thank you!</p>
                </div>
            </div>
        
            <form action="php/contact.php" method="post" class="contactForm" id="contactForm">
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
                        <label class="field-title contactNameField" for="contactNameField">Name:<span>(required)</span></label>
                        <input type="text" name="contactNameField" value="" class="contactField requiredField" id="contactNameField"/>
                    </div>
                    <div class="formFieldWrap">
                        <label class="field-title contactEmailField" for="contactEmailField">Email: <span>(required)</span></label>
                        <input type="text" name="contactEmailField" value="" class="contactField requiredField requiredEmailField" id="contactEmailField"/>
                    </div>
                    <div class="formTextareaWrap">
                        <label class="field-title contactMessageTextarea" for="contactMessageTextarea">Message: <span>(required)</span></label>
                        <textarea name="contactMessageTextarea" class="contactTextarea requiredField" id="contactMessageTextarea"></textarea>
                    </div>
                    <div class="formSubmitButtonErrorsWrap">
                        <input type="submit" class="buttonWrap button button-green contactSubmitButton" id="contactSubmitButton" value="SUBMIT" data-formId="contactForm"/>
                    </div>
                </fieldset>
            </form>       
        </div>
    </div>
    
    <div class="decoration"></div>   
           
    
</div>

    
<div class="footer">
	<p>Copyright 2022 Connextus</p>
	<a href="#" class="go-up"></a>
</div>


</body>
</html>

























