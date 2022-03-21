<!doctype html>
<html lang="en">
<head>  
    <!-- Required meta tags -->             
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>SchemeBot</title>

    <!-- Title icon -->
    <link rel="shortcut icon" type="x-icon" href="./img/bot-logo.png">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <!-- cards -->
    <link rel="stylesheet" href="./card.css">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./dist/jquery.convform.css">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
	<!-- <link rel="stylesheet" type="text/css" href="demo.css"> -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
    <link rel="stylesheet" href="./style_home_responsive.css">

    <style>
		* {
			font-family: 'Roboto', sans-serif;
		}
		html, body {
			font-size: 16px;
		}
	</style>
</head>
<body>
    
    <!-- Navbar  -->
    <section class="bg-transparent">

        <!-- Navbar 1 -->
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(56, 54, 54);">
            <div class="container-fluid" style="height: 35px;" >
                <a class="navbar-brand" href="https://www.tn.gov.in/" style="font-size: 20px; color: rgb(235, 225, 225);">
                    <img src="./img/TN-Govt.png" alt="TN logo" width="35" class="d-inline-block align-text-top">
                    தமிழ்நாடு அரசு
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="left: 100px;">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link"  style="color: rgb(235, 225, 225);" href="https://tirunelveli.nic.in/"><u><i>Tirunelveli District</i></u></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"  style="color: rgb(235, 225, 225);" href="https://tirunelveli.nic.in/"><u><i>திருநெல்வேலி மாவட்டம்</i></u></a>
                        </li>
                    <li class="nav-item dropdown" style="left: 85%;">
                            <a class="nav-link dropdown-toggle"  style="color: rgb(235, 225, 225); font-size: 13px;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Language/மொழி
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="font-size: small;">
                                <li><a class="dropdown-item" href="./home_tam.php"><b>தமிழ்</b></a></li>
                                <!-- <li><hr class="dropdown-divider"></li> -->
                                <li><a class="dropdown-item" href="./index.php"><b>English</b></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End of Navbar 1 -->

        <!-- NAVBAR 2 -->
        <nav class="navbar navbar-expand-lg  navbar-dark py-3 shadow-lg " style="background: rgb(11, 24, 39);">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="./img/bot-logo.png" alt="bot logo" height="50">
                </a>
                <a href="#" class="navbar-brand">SCHEMEBOT</a>

                <button 
                    class="navbar-toggler" 
                    type="button" 
                    data-bs-toggle="collapse" 
                    data-bs-target="#navmenu">
                    <span class="navbar-toggler-icon"></span>
                </button>
            

                <div class="collapse navbar-collapse" id="navmenu">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            புதுப்பித்தலுக்கு உள்நுழைக
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" style="color: rgb(40, 40, 138);" href="./login.php"><b>நிர்வாக உள்நுழைவு</b></a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                FAQ's
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" style="color: rgb(40, 40, 138);" href="#"><b>where should i go?</b></a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            எங்கள் சேவைகள்
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" style="color: rgb(40, 40, 138);" href="#"><b>மாநில அரசின் திட்டங்கள்</b></a></li>
                                <li><a class="dropdown-item" style="color: rgb(40, 40, 138);" href="#"><b>மத்திய அரசின் திட்டங்கள்</b></a></li>
                                <li><a class="dropdown-item" style="color: rgb(40, 40, 138);" href="#"><b>PDF பதிவிறக்கம்</b></a></li>
                                <li><a class="dropdown-item" style="color: rgb(40, 40, 138);" href="#"><b>தொடர்புகள் திசைகள்</b></a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            எங்களை பற்றி
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" style="color: rgb(40, 40, 138);" href="https://tirunelveli.nic.in/history/"><b>வரலாறு</b></a></li>
                                <li><a class="dropdown-item" style="color: rgb(40, 40, 138);" href="https://tirunelveli.nic.in/list-of-collectors/"><b>ஆட்சியர்களின் பட்டியல்</b></a></li>
                                <li><a class="dropdown-item" style="color: rgb(40, 40, 138);" href="https://tirunelveli.nic.in/about-district/whos-who/"><b>யார் யார்</b></a></li>
                                <li><a class="dropdown-item" style="color: rgb(40, 40, 138);" href="https://tirunelveli.nic.in/maps/"><b>வரைபடங்கள்</b></a></li>
                                <li><a class="dropdown-item" style="color: rgb(40, 40, 138);" href="https://tirunelveli.nic.in/waterbody/"><b>நீர் நிலை</b></a></li>
                                
                            </ul>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                தொடர்புகள்
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="font-size: 11px;">
                                    <li><a class="dropdown-item" style="color: rgb(40, 40, 138);" href="#"><b>போன் :</b> +91-0462-2501033<br>+91-0462-2501034<br>+91-0462-2501035</a></li>
                                    <li><a class="dropdown-item" style="color: rgb(40, 40, 138);" href="#"><b>மின்னஞ்சல் :</b> collrtnv@nic.in</a></li>
                                </ul>
                            </li>
                        </li>
                    </ul>
                </div>
            
            </div>
        </nav>
        <!-- End of NAVBAR 2 -->
        
        <!-- ALERT/UPDATES BOX-->
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
            </symbol>
        </svg>
        <div class="alert alert-primary d-flex align-items-center" role="alert" style="position: absolute; width: 100%; height: 20px; ">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
            <div>
            திருநெல்வேலி மாவட்டத்தின் கோவிட்-19 புதுப்பிப்புகள் (கோவிட் கேர் திருநெல்வேலி)    -
            </div>
            <a href="https://covidcaretirunelveli.in/english/">
                <i>விவரங்களுக்கு இணைப்பு</i>
            </a>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="position: absolute; right: 2%;"></button>
        </div>
        <!-- End of ALERT/UPDATES BOX-->

        <!-- BACKGROUND IMAGE TN-->
        <img src="./img/home.png" class="image-fluid" style="position: fixed;top: 30%; right: 35%; height: 400px; width: 350px; opacity: 0.2; z-index:-1;" alt="">
        
    </section>
    <!-- End of navbar -->
    
    <!-- Bot and Search bar -->>
    <section class="bg-transparent" style="height: 100px;">

        <!-- Search bar -->
        <label for="exampleDataList" class="form-label"  style="color: red; top: 185px; position:absolute; right:7%;">
            <b>திட்டங்களை அவற்றின் திட்டத்தின் பெயருடன் தேடவும்:</b> 
        </label>
        <form class="row g-3" method="POST" style="position:absolute; top:35%; right:3%;">

            <div class="col-auto">
                <input type="text" class="form-control" id="inputPassword2" name="schemedes" list="datalistOptions" placeholder="Search here..." style="width:300px;">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3" name="sh" value="sh">தேடு</button>
                <datalist id="datalistOptions">                   
                    <?php
                        include "config.php"; // Using database connection file here
                        $records = mysqli_query($conn,"SELECT nameEng from records ");
                        while($data = mysqli_fetch_array($records))
                        {
                    ?>
                        <option value="<?php echo $data['nameEng']; ?>"><?php echo $data['nameEng']; ?></option> 
                        <?php
                        }

                    ?>
                </datalist>
            </div>
        </form>
        <!-- End of Search bar -->
        
        <!-- Bot -->
        <div class="bot">
            <section id="demo" style="width:200px; left:100px; background: transparent; position: relative; padding: 0; min-height:100vh; transition: height 9999s;">
                <div class="bg-transparent">
                    <div class="vertical-align " style="position: absolute; top: 50%; transform: translateY(-50%); left: 0; width: 100%;">
                        <div class="container" style="position:relative; width: 400px; left:-30%; bottom:-10px;">
                            <div class="row">
                                <div class="">
                                    <div class="card " style="background: #fff; box-shadow: 13px 13px 28px 2px rgba(0, 0, 0, 0.035); padding: 7px 15px;">
                                        <div id="chat" class="conv-form-wrapper" >
                                            <form action="" method="GET" class="hidden">
                                                <select data-conv-question="வணக்கம்! நான் உங்கள் உதவியாளர். நான் உனக்கு எப்படி உதவ வேண்டும்?" name="first-question">
                                                    <option value="yes">ஆம்</option>
                                                    <option value="no">இல்லை</option>
                                                </select>
                                                <div data-conv-fork="first-question">
                                                    <div data-conv-case="yes">
                                                        <input type="text" data-conv-question="கேட்கவே இனிமையாக இருக்கிறது!" data-no-answer="true">
                                                        <audio src=""></audio>
                                                    </div>
                                    
                                                    <div data-conv-case="no">
                                                            <input type="text" name="name" data-conv-question="சரி நல்லது. இனிய நாள்!" data-no-answer="true">
                                                            <select data-conv-question="உங்களுக்கு ஏதேனும் கேள்விகள் இருந்தால் 'ஆம்' அழுத்தவும்." name="sub" id="">
                                                                <option value="yes">ஆம்</option>
                                                            </select>
                                                            <div data-conv-question="sub">
                                                                <div data-conv-case="yes">
                                                                    <select data-conv-question="வணக்கம்! நான் உங்கள் உதவியாளர். நான் உனக்கு எப்படி உதவ வேண்டும்?" name="first-question">
                                                                        <option value="yes">ஆம்</option>
                                                                        <option value="no">இல்லை</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                    </div>
                                                </div>
                                                <select data-conv-question="நான் உனக்கு எப்படி உதவ வேண்டும்?" name="second-question">
                                                    
                                                    <option value="view-categories">வகைகளைக் காண்க</option>
                                                </select>
                                                <div data-conv-fork="second-question">
                                                    <div data-conv-case="view-categories">
                                                        <select data-conv-question="This are all the categories :" onchange="this.options[this.selectedIndex].value&&(window.location = this.options[this.selectedIndex].value);">
                                                            <option value="http://localhost/SchemeBot/women.php">பெண்கள்</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <input type="text" name="name" data-conv-question="Alright! First, tell me your full name, please.|Okay! Please, tell me your name first.">
                                                <input type="text" data-conv-question="Howdy, {name}:0! It's a pleasure to meet you." data-no-answer="true">
                                                <select name="multi[]" data-conv-question="What kind of details you want?" multiple>
                                                    <option value="scheme details">scheme details</option>
                                                    <option value="contacts">contacts</option>
                                                    <option value="direction">direction</option>
                                                    <option value="list of scheme">list of scheme</option>
                                                </select>
                                                <select name="programmer" data-callback="storeState" data-conv-question="do you want mail copy?">
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                                <div data-conv-fork="programmer">
                                                    <div data-conv-case="yes">
                                                        <input type="text" data-conv-question="That's cool." data-no-answer="true">
                                                    </div>
                                                    <div data-conv-case="no">
                                                        <input type="text" data-conv-question="Okay fine! thank you for contacting us." data-no-answer="true">
                                                    </div>
                                                </div>
                                                <input type="text" data-conv-question="We will help you" data-no-answer="true">
                                                <input data-conv-question="Type in your e-mail" data-pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" id="email" type="email" name="email" required placeholder="What's your e-mail?">
                                                <!-- <input data-conv-question="Now tell me a secret (like a password)" type="password" data-minlength="6" id="senha" name="password" required placeholder="password">
                                                <select data-conv-question="Selects also support callback functions. For example, try one of these:">
                                                        <option value="google" data-callback="google">Google</option>
                                                        <option value="bing" data-callback="bing">Bing</option>
                                                </select>
                                                <select name="callbackTest" data-conv-question="You can do some cool things with callback functions. Want to rollback to the 'programmer' question before?">
                                                    <option value="yes" data-callback="rollback">Yes</option>
                                                    <option value="no" data-callback="restore">No</option>
                                                </select>
                                                <select data-conv-question="This is it! If you like me, consider donating! If you need support, contact me. When the form gets to the end, the plugin submits it normally, like you had filled it." id="">
                                                    <option value="">Awesome!</option>
                                                </select> -->
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- End of Bot -->
    </section>

	<script type="text/javascript" src="jquery-1.12.3.min.js"></script>
	<script type="text/javascript" src="dist/autosize.min.js"></script>
	<script type="text/javascript" src="dist/jquery.convform.js"></script>

	<script>
		function google(stateWrapper, ready) {
			window.open("https://google.com");
			ready();
		}
		function bing(stateWrapper, ready) {
			window.open("https://bing.com");
			ready();
		}
		var rollbackTo = false;
		var originalState = false;
		function storeState(stateWrapper, ready) {
			rollbackTo = stateWrapper.current;
			console.log("storeState called: ",rollbackTo);
			ready();
		}
		function rollback(stateWrapper, ready) {
			console.log("rollback called: ", rollbackTo, originalState);
			console.log("answers at the time of user input: ", stateWrapper.answers);
			if(rollbackTo!=false) {
				if(originalState==false) {
					originalState = stateWrapper.current.next;
						console.log('stored original state');
				}
				stateWrapper.current.next = rollbackTo;
				console.log('changed current.next to rollbackTo');
			}
			ready();
		}
		function restore(stateWrapper, ready) {
			if(originalState != false) {
				stateWrapper.current.next = originalState;
				console.log('changed current.next to originalState');
			}
			ready();
		}
	</script>
	<script>
		jQuery(function($){
			convForm = $('#chat').convform({selectInputStyle: 'disable'});
			console.log(convForm);
		});
	</script>
    <!-- End of Bot and Search bar -->

    <!-- PRINT DETAILS -->
    <section class="bd-transparent print" style=" height: 500px;">

        <!-- PRINT BUTTON -->

        <style>
                @media print{
                    body *:not(#to-print):not(#to-print *){
                        visibility: hidden;
                        
                    }
                    #to-print{
                        position: absolute;
                        left: 0%;
                        width: 800px;
                        top: 0px;
                        
                    }
                    datalist{
                        background: transparent;
                    }
                }
        </style>
        <?php
            $s1="hello";
            if(isset($_POST['sh']))
            {
                $s1 = $_POST['schemedes'];
            }
        ?>

        <div class="card text-center " style="width: 400px; background-color: rgba(252, 252, 252, 0.76); top: 43px; left: 66%; height: 400px;">
            <div class="card-header" style="color: tomato; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: rgba(171, 200, 219, 0.562);" >
                <b>நீங்கள் தேடும் உள்ளடக்கங்கள் இங்கே தோன்றும்!</b> 
            </div>
            <div class="print-container card-body" id="to-print" style="overflow: visible; overflow-y: scroll; background-color: rgba(209, 215, 219, 0.562);">
                <?php
                    include "config.php"; // Using database connection file here 
                    if($records->num_rows>0){ 
                        $records = mysqli_query($conn,"SELECT nameEng,bcEng,amountEng,ecEng,deptEng from records WHERE nameEng='" . $s1 . "'"); // fetch data from database
                        
                    while($data = mysqli_fetch_array($records))
                    {
                ?>
                <h5 class="card-title">திட்டத்தின் விவரங்கள்</h5>
                <p class="card-text text-start"><b>திட்டத்தின் பெயர் :</b> <!--Awards to Bright students.--><?php echo $data['nameEng']; ?></p>
                <p class="card-text text-start"><b>சம்பந்தப்பட்ட துறை :</b> <!--Adi Dravidar and Tribal Welfare Department--><?php echo $data['deptEng']; ?></p>
                <p class="card-text text-start"><b>பயனாளிகள் :</b><!--Students--><?php echo $data['bcEng']; ?></p>
                <p class="card-text text-start"><b>தொகை :</b> <?php echo $data['bcEng']; ?></p>
                <p class="card-text text-start"><b>விளக்கம் :</b> <!--Awards to Bright Students - First two boys and two girls in each district from each community viz., Adi Dravidar/ Tribal / Adi Dravidar Converted to Christianity who have passed 10th std., Public Examinations and continue their studies are given a sum of Rs.800/- for the first year and Rs.960/- for the next 5 years. Should have secured first and second place in the 10th Std, in the district. Continue their studies. No income limits .--><?php echo $data['ecEng']; ?></p>
                <p class="card-text text-start"><b>தொடர்பு முகவரி :</b> <br>ஆதி திராவிடர் நலத்துறை இயக்குனர் ,<br> சென்னை-5. <br>கல்வி நிறுவனங்கள் மூலம்.</p>
                <a href="https://www.google.com/maps/place/Directorate+of+Adi+Dravidar+Welfare/@10.7611317,77.1868538,8z/data=!4m9!1m2!2m1!1sadi+dravidar+and+tribal+welfare+department!3m5!1s0x3baa401c55711f69:0x1f40d272b79b85a6!8m2!3d10.7611317!4d78.3074593!15sCiphZGkgZHJhdmlkYXIgYW5kIHRyaWJhbCB3ZWxmYXJlIGRlcGFydG1lbnSSARFnb3Zlcm5tZW50X29mZmljZQ"><i class="fas fa-map-marker-alt"></i> Google Map Direction</a>
                <p class="card-text text-start"><b>கமிஷனர் (ADW) :</b> Tmt S. மதுமதி IAS., Direct - 28589855</p>
                <p class="card-text text-start"><b>FA and CAO :</b> Thiru K. ஸ்ரீராமுலு Direct - 28419613</p>
                <p class="card-text text-start"><b>சம்பந்தப்பட்ட மாவட்டம் :</b> அனைத்து மாவட்டங்களும்</p>
                <p class="card-text text-start"><b>FAX :</b> 044-28419612</p>
                
            </div>
            <div class="card-footer text-muted" style="height: 79px; background-color: rgba(171, 200, 219, 0.562);">
                <p style="position: absolute; top: 91%; right: 30%; color: tomato;"><i> தேவையான திட்டத்தின் விவரங்கள்:</i></p>

                 <?php
                } }
                else{
                    
                //preview image
                    echo "<p>preview here</p><style>p{text-align:center}</style>";
                }

                ?>
                <button onclick="window.print();" class="btn btn-primary btn-sm" type="submit" data-bs-toggle="button" autocomplete="off" style="position: absolute; top: 91%; right: 2%;">Export PDF</button>
            </div>
        </div>

    </section>
    <!-- End of PRINT DETAILS -->


    <div class="group2">
    <!-- Cards for schemes -->
    <section style="margin-top: 5em;">
        <div class="containers">
            <div class="cards">

                <a href="./women.php"><img style="position: absolute; top: 0; height: 110%; width: 100%; z-index: -1;
                transition: 0.8s cubic-bezier(0.2, 0.8, 0.2, 1);" src="./img/women.png" />

                <h3 style=" color: whitesmoke; font-size: 24px; margin: 20px 0 0 20px;"><b>பெண்கள்</b></h3></a>

            </div>

            <div class="cards">

                <a href="./agriculture.html"><img style="position: absolute; top: 0; height: 110%; width: 100%; z-index: -1;
                transition: 0.8s cubic-bezier(0.2, 0.8, 0.2, 1);" src="./img/agri.png" />

                <h3 style="  color: whitesmoke; font-size: 24px; margin: 20px 0 0 20px;"><b>வேளாண்மை</b></h3></a>

            </div>

            <div class="cards">

                <a href="./education.html"><img style="position: absolute; top: 0; height: 110%; width: 100%; z-index: -1;
                transition: 0.8s cubic-bezier(0.2, 0.8, 0.2, 1);" src="./img/education.png" />

                <h3 style="  color: whitesmoke; font-size: 24px; margin: 20px 0 0 20px;"><b>கல்வி</b></h3></a>

            </div>

            <div class="cards">

                <a href="./health.html"><img style="position: absolute; top: 0; height: 110%; width: 100%; z-index: -1;
                transition: 0.8s cubic-bezier(0.2, 0.8, 0.2, 1);" src="./img/health.png" />

                <h3 style="  color: whitesmoke; font-size: 24px; margin: 20px 0 0 20px;"><b>ஆரோக்கியம்</b></h3></a>

            </div>

            <div class="cards">

                <a href="./child_care.html"><img style="position: absolute; top: 0; height: 110%; width: 100%; z-index: -1;
                transition: 0.8s cubic-bezier(0.2, 0.8, 0.2, 1);" src="./img/child.png" />

                <h3 style=" color: whitesmoke; font-size: 24px; margin: 20px 0 0 20px;"><b>குழந்தை பராமரிப்பு</b></h3></a>

            </div>

            <div class="cards">

                <a href="./insurance.html"><img style="position: absolute; top: 0; height: 110%; width: 100%; z-index: -1;
                transition: 0.8s cubic-bezier(0.2, 0.8, 0.2, 1);" src="./img/insurance.png" />

                <h3 style="  color: whitesmoke; font-size: 24px; margin: 20px 0 0 20px;"><b>காப்பீடு</b></h3></a>

            </div>

            <div class="cards">

                <a href="./old_age.html"><img style="position: absolute; top: 0; height: 110%; width: 100%; z-index: -1;
                transition: 0.8s cubic-bezier(0.2, 0.8, 0.2, 1);" src="./img/oldage.png" />

                <h3 style="  color: whitesmoke; font-size: 24px; margin: 20px 0 0 20px;"><b>முதுமை</b></h3></a>

            </div>

            <div class="cards">

                <a href="./phy_challenge.html"><img style="position: absolute; top: 0; height: 110%; width: 100%; z-index: -1;
                transition: 0.8s cubic-bezier(0.2, 0.8, 0.2, 1);" src="./img/disabled.png" />

                <h3 style="  color: whitesmoke; font-size: 18px; margin: 20px 0 0 20px;"><b>மாற்றுத் திறனாளிகள்</b></h3></a>

            </div>

            <div class="cards">

                <a href="./homeless.html"><img style="position: absolute; top: 0; height: 110%; width: 100%; z-index: -1;
                transition: 0.8s cubic-bezier(0.2, 0.8, 0.2, 1);" src="./img/homeless.png" />

                <h3 style="  color: whitesmoke; font-size: 24px; margin: 20px 0 0 20px;"><b>வீடற்றவர்</b></h3></a>

            </div>

            <div class="cards">

                <a href="./minorities.html"><img style="position: absolute; top: 0; height: 110%; width: 100%; z-index: -1;
                transition: 0.8s cubic-bezier(0.2, 0.8, 0.2, 1);" src="./img/minority.png" />

                <h3 style="  color: whitesmoke; font-size: 18px; margin: 20px 0 0 20px;"><b>SC/ST/OBC/<br>சிறுபான்மையினர்</b></h3></a>

                <!-- <p style="color: rgb(78, 74, 74);
                font-weight: 400;
                font-size: 16px;
                align-self: end;
                margin: 0 0 20px 20px;
                letter-spacing: 0.5px;">Card description</p> -->

            </div>

        </div>
    </section>
    <!-- End of cards for schemes -->



    <!-- cards hover style -->
    <style>
        .card-p:hover {
            transform: scale(1.15);
            box-shadow: 5px 5px 15px rgba(0,0,0,0.6);
        }
    </style>

    <!-- cards for tourist spots -->
    <section class="bg-transparent" style="position: relative; width: 100%; bottom: -400%; height: 500px; background: rgb(255, 255, 255);">
        <div class="card-p shadow-lg" style="background-color: rgba(166, 198, 224, 0.562); position: absolute; height: 400px; width: 250px; bottom: 8%; right: 75%; transition: 0.5s ease; cursor: pointer;">
            <img src="./img/manjolai.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">மாஞ்சோலை</h5>
                <p class="card-text" style="font-size: 14px;">களக்காடு முண்டந்துறை புலிகள் காப்பகத்தில் அமைந்துள்ள அழகிய மலைவாசஸ்தலம் மாஞ்சோலை.</p>
            </div>
            <p class="card-footer bg-transparent"><small class="text-muted" style="font-size: smaller;">Last updated 3 mins ago</small></p>
        </div>

        <div class="card-p shadow-lg" style="background-color: rgba(166, 198, 224, 0.562);position: absolute; height: 400px; width: 250px; bottom: 8%; right: 52%; transition: 0.5s ease; cursor: pointer;">
            <img src="./img/thamirabarani.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">தாம்பரபரணி ஆறு</h5>
                <p class="card-text" style="font-size: 14px;">தாம்பரபரணி ஆறு தமிழ்நாட்டின் திருநெல்வேலி மாவட்டத்தில் மேற்கு தொடர்ச்சி மலையின் கிழக்கு சரிவுகளில் உற்பத்தியாகிறது.</p>
            </div>
            <p class="card-footer bg-transparent"><small class="text-muted" style="font-size: smaller;">Last updated 3 mins ago</small></p>
        </div>

        <div class="card-p shadow-lg" style="background-color: rgba(166, 198, 224, 0.562);position: absolute; height: 400px; width: 250px; bottom: 8%; right: 29%; transition: 0.5s ease; cursor: pointer;">
            <img src="./img/uvari.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">கப்பல் மாதா தேவாலயம்</h5>
                <p class="card-text" style="font-size: 14px;">கப்பல் மாதா தேவாலயம் தமிழ்நாட்டின் திருநெல்வேலியில் பார்க்க வேண்டிய சிறந்த சுற்றுலாத் தலங்களில் ஒன்றாகும்.</p>
            </div>
            <p class="card-footer bg-transparent"><small class="text-muted" style="font-size: smaller;">Last updated 3 mins ago</small></p>
        </div>

        <div class="card-p shadow-lg" style="background-color: rgba(166, 198, 224, 0.562);position: absolute; height: 400px; width: 250px; bottom: 8%; right: 6%; transition: 0.5s ease; cursor: pointer;">
            <img src="./img/manimuthar.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">மணிமுத்தாறு அணை</h5>
                <p class="card-text" style="font-size: 14px;">இயற்கை எழில் கொஞ்சும் பொதிகை மலையின் அடிவாரத்தில் மணிமுத்தாறு அணை அமைந்துள்ளது. இது தாமிரபரணி ஆற்றின் மீது கட்டப்பட்டுள்ளது.</p>
            </div>
            <p class="card-footer bg-transparent"><small class="text-muted" style="font-size: smaller;">Last updated 3 mins ago</small></p>
        </div>
    </section>
    <!-- End of cards for tourist spots -->

    <section>
        <div style="margin: 80px; justify-content: center; align-items: center; overflow:hidden;">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/UBuMCuxvnI0" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </section>

    <!-- Footer -->
    <section style="height: 100px; background-color: rgba(4, 7, 29, 0.877); ">
        <div>
            <div>
                <style>
                    .footer1 li
                    {
                        position: relative;
                        margin: 15px;
                        font-size: 15px;
                    }
                </style>
                <ul class="footer1" style="display: flex; left:450px; flex-direction: row; position: absolute; color: white; list-style: none;">
                    <li>Connect & Follow</li>
                    <li><a href="https://www.facebook.com/collectortnv/"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/></svg></a></li>
                    <li><a href="https://twitter.com/Collectortnv?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/></svg></a></li>
                    <li> <a href="https://in.linkedin.com/in/vishnu-venugopalan-3b1a58174"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/></svg></a></li>
                </ul>
            </div>
            <div>
                <style>
                    .footer2 li
                    {
                        position: relative;
                        margin: 15px;
                        margin-top: 55px;
                        font-size: 15px;
                    }
                </style>
                <ul class="footer2" style="display: flex; left:150px; flex-direction: row; position: absolute; color: white; list-style: none;">
                    <li>Copyright @ 2022</li>
                    <li>Tirunelveli District</li>
                    <li>Privacy policy</li>
                    <li>Terms of use</li>
                    <li>Affiliated programs</li>
                    <li>services</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End of Footer -->
    </div>


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- Button hover -->
    <script src="./button_hover.js"></script>
      
</body>
</html>