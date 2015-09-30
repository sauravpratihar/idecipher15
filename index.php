<?php
 
// grab recaptcha library
require_once "captcha.php";
 
?>

<!DOCTYPE html>

<html lang="en">

    <head>


        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Index Page</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">



        <script src='https://www.google.com/recaptcha/api.js'></script>

        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <script type="text/javascript">
                    function checkpass() {
                        var pass1 = document.getElementById("psw").value;
                        var pass2 = document.getElementById("apsw").value;
                        var ok = true;
                        if (pass1 != pass2) {
                            //alert("Passwords Do not match");
                            document.getElementById("psw").style.borderColor = "#E34234";
                            document.getElementById("apsw").style.borderColor = "#E34234";
                            ok = false;
                            document.getElementById("error").innerHTML="Passwords not match";
                        }
                
                        return ok;
                    }

                
            </script>


            <script type="text/javascript">
                function captcha(){
                     if(grecaptcha.getResponse() == '') {
                         return true;
                    } 
                    else {
                        return false;
                    }
                 }
              }
            </script>

    </head>

    <body>
    	 <div class="row">
		    <div class="col-md-6 left"><a href="http://www.daiict.ac.in" target="_blank"><img src="../idecipher/assets/img/da.png" alt="DAIICT Logo" width="20%" style="padding:10x 0px 0px 0px"></a></div>

		    		


		    <div class="col-md-6 right"><a href="http://ieee.daiict.ac.in" target="_blank"><img src="../idecipher/assets/img/ieee.jpg" alt="IEEE Logo" width="25%" style="padding:25px 0px 0px 0px"></a></div>
 		 </div>

 		 <div style="color:white" class="col-md-offset-3 col-md-6">
						<h1 style="color:white" ><strong>i</strong>.decipher 2015</h1>
                            <div class="description">
                            	<p>
	                            	Text is here !
                            	</p>
                            </div>

                    </div>


        <!-- Top content -->
      
        	
            
                <div class="container">
                    
                        
                    
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	
                            <div class="form-bottom">
			                    <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Login</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body"><form action="" method="post" class="login-form">
			                    	<div class="form-group">
			                    		
			                        	<input style="border:1px solid grey" type="text" name="form-username" placeholder="Email..." class="form-username form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
			                        	
			                        	<input style="border:1px solid grey" type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
			                        </div>
			                        <button type="submit" class="btn">Log in</button>
			                    </form></div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Register</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
        	<!-- register part -->
        	<form id="myform" onsubmit="return checkpass() && captcha()"  method="post" action="function.php">
                                   
                                    <div class="form-group">
                                    	 <label for="textField">Participant 1</label>
                                        <input style="border:1px solid grey" type="text" name="name1" class="form-control" id="name1" placeholder="Participant 1" required>
                                    </div> 

                                     <div class="form-group">
                                        <label for="textField">Participant 2</label>
                                        <input style="border:1px solid grey" type="text" name="name2" class="form-control" id="name2" placeholder="Participant 2" required>
                                    </div> 

                                   <div class="form-group">
                                        <label for="emailField">Email Address</label>
                                        <input style="border:1px solid grey" type="email" name="email" class="form-control" id="email" placeholder="Enter Email Address" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="textField">Mobile No</label>
                                        <input style="border:1px solid grey" type="text" name="mobile" class="form-control" id="mobile" placeholder="Enter Mobile Number" required>
                                    </div>

                                     <div class="form-group">
                                        <label for="textField">College Name</label>
                                        <input style="border:1px solid grey" type="text" name="college"class="form-control" id="college" placeholder="College Name" required>
                                    </div>  

                                    <div class="form-group">
                                         <label for="passwordField">Create a Password</label>
                                         <input style="border:1px solid grey" type="password" name="password" class="form-control" id="psw" placeholder="Create a password" required>
                                    </div> 

                                    <div class="form-group">
                                         <label for="AgainpasswordField">Confirm your Password</label>
                                         <input style="border:1px solid grey" type="password" class="form-control" id="apsw" placeholder="Confirm your password" required>
                                    </div> 

                                    
                                 
                                    	<p id="error"></p>

                                    <div class="g-recaptcha" data-sitekey="6LdhmwsTAAAAAAPn5R0ptqLiKHiXSxKa_1HwfvLs"></div><br>

                                    <button type="submit"  class="btn btn-success">Register</button>     
                                </form>



        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Instruction</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
        	<ul>
        		<li>text1</li>
        		<li>text2</li>
        		<li>text3</li>
        	</ul>

        </div>
      </div>
    </div>
  </div> 
		                    </div>
                        </div>
                    </div>
                    <br>
		                   
		                        <div class="btn azm-social azm-size-48 azm-r-square azm-android">
		                        	
		                        	
			                        	<a class="tn btn-primary btn-lg" href="http://www.facebook.com/">
			                        		<i class="fa fa-facebook"></i>
			                        
			                        	</a>
		                        
		                        </div>
		                   
          


        <div class="footer">
        	<div class="row">
        		<br>
        			<p><strong>Coordinators:</strong><br>
        			<p>Saurav Pratihar : 903399314<br>
        			Dhaval Panjwani : 9XXXXXXXX</p>
        		

        		
        	</div>
        </div>

</div>
        <!-- Javascript -->

       
       
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>