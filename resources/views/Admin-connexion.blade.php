<!DOCTYPE html>
<html>
<head>
      <meta charset="UTF-8">

	<title>Start & Go | Connexion</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="{{URL::to('login-admin/img/icon.ico')}}" />

    
    <!--Following CSS files are connected to this HTML file, externally.-->
	<link href="{{asset('login-admin/style/style.css')}}" type="text/css" rel="stylesheet">
    
	<link rel="stylesheet" type="text/css" href="{{asset('login-admin/style/util.css')}}">
    
	<link rel="stylesheet" type="text/css" href="{{asset('login-admin/fonts/iconic/css/material-design-iconic-font.min.css')}}">
    
	<link rel="stylesheet" type="text/css" href="{{asset('login-admin/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('login-admin/style/bootstrap.min.css')}}">
    <!--External CSS Files ends here-->
    
</head>
<body>
    <!--In case, if the user wanted to move all elements from one place to one place, then simply copy and past the limiter tag with elements inside. We also created the limiter div for responsive design or if the user wanted to set width or height optionally.-->
	<div class="limiter">
        <!--The side wallpaper (Bewasoft Logo and its description)-->
		<div class="sidewallpaper col-md-6">
            <div class="sidewallpaper-background">
    			<span class="p-t-30">
    				<img class="sideLogo" src="{{URL::to('login-admin/img/final.png')}}">
    			</span>

    			<p class="ptitle">Start & Go Coffee Shop est une chaîne digitale de distribution du café </p>
            </div>
        </div>
        <!--Side Wallpaper Structures ends here-->

        <!--Form-Container or all Elements covered in form (Elements after Sidewallpaper) Starts-->
		<div class="form-container col-md-6">

            <!--Signup/Login button in the corner structures starts here-->
            
            <!--Signup/Login button in the corner structures ends here-->

            <!--Title of Form Starts-->
            <span class="form-title p-b-30">Connexion</span>
            <!--Title of Form Ends-->

            <!--Logo as Title when the width is minimum than 768px. (Best for Mobiles, Tablets...) Starts-->
            <span class="title p-b-20 p-t-30">
        			   <img class="logo" src="{{URL::to('login-admin/img/final.png')}}">
            </span>
            <!--Logo as Title when the width is minimum than 768px. (Best for Mobiles, Tablets...) Ends-->
  <p class="alert-danger">
          <?php

        $message=Session::get('message');

          if($message){
            echo $message;
            Session::put('message',null);
          }
          ?>
        </p>
            <!--Form Structure Starts-->
            <form id="form"  action="{{url('admin-dashboard')}}" method="post">
                 {{csrf_field()}}
                <!--Username Input and It's Icons, Label...-->
                <div class="input-div validate-input" data-validate="Email required">
                    <span class="input-label">Email:</span>
                    <input id="emailaddress" class="input" type="text" name="admin_email" placeholder="Type your email:">
                    <span class="input-focus" data-symbol="&#xf15a;"></span>
                    <!--Remember: The data-symbol gets the label/input icon-->
                </div>

                <!--Password Input and It's Icons, Label...-->
      <div class="input-div validate-input" data-validate="Password required">
                    <span class="input-label">Password:</span>
                    <input id="password" class="input" type="Password" name="admin_password" placeholder="Type your password:">
                    <span id="passwordId" class="input-focus" data-symbol="&#xf190;"></span>
                    <!--Remember: The data-symbol gets the label/input icon-->
                </div>
                
                <!--Forgot Password Div and its link-->
                 <!--Forgot Password Div and its link-->
                <div class="text-right p-t-8 p-b-31" id="div-forgot-password">
                    <a href="forget.html" id="forgotpassword"><!--Remove "#" and past your link or page.-->
                        Forget Password?
                    </a>
                </div>


                <!--Log in button/submit and its containers...-->
                <div class="container-form-btn p-b-5">
                    <div class="wrap-form-btn">
                        <button id="submitBtn" class="form-btn" type="submit">
                           Login
                        </button>
                    </div>
                </div>
                <!--Log in Button structure ends here-->

                <!--Checkbox Input (Remember Me)--> 
                   

                <!--Sign in Or Sign up options header-->
            
                
                                    <!--Social Media Icons for signing up or signing in:-->
                <div class="flex-c-m smicons">
                    <a href="#" class="login100-social-item bg1">
                        <i class="fa fa-facebook"></i>
                    </a>

                    <a href="#" class="login100-social-item bg2">
                        <i class="fa fa-twitter"></i>
                    </a>

                    <a href="#" class="login100-social-item bg3">
                        <i class="fa fa-google"></i>
                    </a>
                </div>
                <!--Social Media Icons structres ends here-->
                    

            </form>
                <!--Form Structure Starts-->
        </div>
        <!--Form-Container or all Elements covered in form (Elements after Sidewallpaper) Starts-->
	</div>
    <!--Limiter Div structure ends.-->
<script src="{{asset('login-admin/script/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('login-admin/script/script.js')}}"></script><!--External JavaScript Files Connected with this HTML-->
</body>
</html>