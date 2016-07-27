<html ng-app="matrimonialApp" >
    <head>
    <title>Marital an Wedding Category Flat Bootstarp Resposive Website Template | Login :: w3layouts</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Marital Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<link href="public/css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

		<!-- Custom Theme files -->
		<link href="public/css/style.css" rel='stylesheet' type='text/css' />
		<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
		<link href="public/css/font-awesome.css" rel="stylesheet"> 
		</head>
<body ng-controller="mainController">
<div class="navbar navbar-inverse-blue navbar">
			<!--<div class="navbar navbar-inverse-blue navbar-fixed-top">-->
			<div class="navbar-inner navbar-inner_1">
				<div class="container">
						
						<a class="brand" href="index.html"><img src="public/images/logo.png" alt="logo"></a>
						<div class="pull-right">
							<nav class="navbar nav_bottom" role="navigation">
								
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header nav_2">
									<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">Menu
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									<a class="navbar-brand" href="#"></a>
								</div> 
							</nav>
						</div> <!-- end pull-right -->
						
					</div>
			</div>
		</div>
	<div class="grid_3">
        <div ng-view></div>
	</div>
	
	<div class="footer">
	<div class="container">
		<div class="col-md-4 col_2">
			<h4>About Us</h4>
			<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris."</p>
		</div>
		<div class="col-md-2 col_2">
			<h4>Help & Support</h4>
			<ul class="footer_links">
				<li><a href="#">24x7 Live help</a></li>
				<li><a href="contact.html">Contact us</a></li>
			<li><a href="#">Feedback</a></li>
			<li><a href="faq.html">FAQs</a></li>
		</ul>
		</div>
		<div class="col-md-2 col_2">
			<h4>Quick Links</h4>
			<ul class="footer_links">
				<li><a href="privacy.html">Privacy Policy</a></li>
				<li><a href="terms.html">Terms and Conditions</a></li>
				<li><a href="services.html">Services</a></li>
			</ul>
		</div>
		<div class="col-md-2 col_2">
			<h4>Social</h4>
			<ul class="footer_social">
				<li><a href="#"><i class="fa fa-facebook fa1"> </i></a></li>
				<li><a href="#"><i class="fa fa-twitter fa1"> </i></a></li>
				<li><a href="#"><i class="fa fa-google-plus fa1"> </i></a></li>
				<li><a href="#"><i class="fa fa-youtube fa1"> </i></a></li>
			</ul>
		</div>
		<div class="clearfix"> </div>
		<div class="copy">
			<p>Copyright © 2015 Marital . All Rights Reserved  | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
		</div>
	</div>
</div>
    
<script src="public/js/jquery.min.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<script src="public/js/angular.min.js"></script>
<script src="public/js/angular-route.js"></script>
<script src="public/js/toaster.js"></script>
<script src="public/js/ui-bootstrap-angular.js"></script>
<script src="app/app.js"></script>
<!--All Services-->
<script src="app/services/dataService.js"></script>

<!--All controllers and dependency -->
<script src="app/controllers/mainController.js"></script>
<script src="app/controllers/loginController.js"></script>
<script src="app/controllers/matchesController.js"></script>
<script src="app/controllers/notContactedController.js"></script>
<script src="app/controllers/viewedProfileController.js"></script>
<script src="app/controllers/profileDetailController.js"></script>

    <script>
    
    $(function() {

    $('body').on('click' ,'#login-form-link',function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('body').on('click','#register-form-link',function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});

        function login(){
        //login code here
    var username = $('#username1').val();
    var password = $('#password1').val();
            
    alert(username+'hi i am the username login');
        alert(password+'hi i am the password login');
            
        alert('login function is called!');
       var url = 'http://localhost/login/webservices/login.php?username='+username+'&password='+password;
            
            alert(url);
            console.log(url);
            $.post(url,
    function(data, status){
                
                alert(JSON.stringify(data));
                var status = data[0].status;
                
                if(status == 1){
                    //this is the sucess code
                    window.location.href ='http://localhost/login/create_2.html';
                }
                
                if(status != 1){
                    alert('login failed');
                }
                alert(status+'i am the status test');
        alert("Data: " + data + "\nStatus: " + status);
    });
        
        }


        function register(){
    var email = $('#email').val();
    var username = $('#username').val();
	  
	
    var confirmpassword =$('#confirm-password').val();
      
            
            $.post("http://localhost/login/webservices/register.php",
    {
        password: confirmpassword,
        email: email,
        username: username
    },
    function(data, status){
        alert("Data: " + data + "\nStatus: " + status);
    });
        }
        
    </script>
    </body>

</html>