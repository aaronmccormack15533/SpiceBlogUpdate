<?php  
 $message = '';  
 $error = '';  
 if(isset($_POST["hit"]))  
 {  
      if(empty($_POST["name"]))  
      {  
           $error = "<label class='text-danger'>Enter Name</label>";  
      }  
      else if(empty($_POST["email"]))  
      {  
           $error = "<label class='text-danger'>Enter Email</label>";  
      }  

      else if(empty($_POST["comment"]))  
      {  
           $error = "<label class='text-danger'>Enter Comment</label>";  
      }   
      else  
      {  
           if(file_exists('c_data.json'))  
           {  
                $current_data = file_get_contents('c_data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'name'               =>     $_POST['name'],  
                     'email'          =>     $_POST["email"],
                     'comment'          =>     $_POST["comment"],   
                      
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('c_data.json', $final_data))  
                {  
                     $message = "<label class='text-success'>File Appended Successfully</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      }  
 } 
?>

<?php
  // init variables
  $min_number = 1;
  $max_number = 15;

  // generating random numbers
  $random_number1 = mt_rand($min_number, $max_number);
  $random_number2 = mt_rand($min_number, $max_number);

  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<!DOCTYPE html>

<html>


	<head>
	
		<title>New Szn | Contact</title>
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
		<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
		<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<link rel="apple-touch-icon-precomposed" sizes="57x57" href="apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x144.png" />
		<link rel="apple-touch-icon-precomposed" sizes="60x60" href="apple-touch-icon-60x60.png" />
		<link rel="apple-touch-icon-precomposed" sizes="120x120" href="apple-touch-icon-120x120.png" />
		<link rel="apple-touch-icon-precomposed" sizes="76x76" href="apple-touch-icon-76x76.png" />
		<link rel="apple-touch-icon-precomposed" sizes="152x152" href="apple-touch-icon-152x152.png" />
		<link rel="icon" type="image/png" href="favicon-196x196.png" sizes="196x196" />
		<link rel="icon" type="image/png" href="favicon-96x96.png" sizes="96x96" />
		<link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
		<link rel="icon" type="image/png" href="favicon-128.png" sizes="128x128" />
		<meta name="application-name" content="&nbsp;"/>
		<meta name="msapplication-TileColor" content="#FFFFFF" />
		<meta name="msapplication-TileImage" content="mstile-144x144.png" />
		<meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
		<meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
		<meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
		<meta name="msapplication-square310x310logo" content="mstile-310x310.png" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="text/javascript">


		</script>

					<style>
.error {color: #FF0000;}
.green {color: green;}
.red {color: red;}
.center { margin: 0 auto; max-width: 900px; }
</style>
	
	
	
	
	
	
	
	</head>
	
	<body>

	<nav class="navbar navbar-default navbar-fixed-top" >
   	 <div class="container" >
   		 <div class="navbar-header">
    		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            
          </button>
          
          <a class="navbar-brand" href="index.html"><img  id="brand-image" src="NSNAV.png" alt="new szn logo"/></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
          
           	<li><a href="index.html">Home</a></li>
            <li><a href="page2.html">Fashion</a></li>
            <li><a href="page3.html">Stuff</a></li>
            <li class="active"><a href="page4.html">Contact</a></li>
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    
    <div>
    
    	<div class="bg" id="home">
	<br><br><br>
		<img src="contact.png" class="img-responsive center-block" alt="holding rectangleimage that says call me on my cellphone" />
		

	
	</div>
	</div>
	
	<div class="alt1" id="fashion">
		<div class="container">
	
			<div class="row">
			
			
			<div class="col-md-6">
			
				<h2 class="text-center"><u>About</u></h2>
				
				<p class="text-justify">New szn is a Mens fashion and miscellaneous blog where the current direction of trends gets discussed and reviewed. The site focuses mainly on the ethnology on the elegance and style of todays youth. New Szn hopes to bring you cheaper and more economical focused clothes and products (as well as some hyped ass shit) that meets the needs of you guys. </p>
				<p class="text-justify">The stuff section of this site offers just about anything, From male grooming to exam tips to help you perform your best. 	New Szn hopes to cater for a wide variety of different topics to suit whatever demand you are calling for.</p>
				<p class="text-justify">Have a query or want to write an article for the blog, contact New Szn on our social media platforms or fill out the contact form below.</p>
				<p class="text-center"><i class="em em-wave"></i></p>
				
			</div>
			<div class="col-md-6">
			<div class="twitter padding">
		<a class="twitter-timeline" href="https://twitter.com/google" data-widget-id="663793932497723392">Tweets by @google</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		</div> 
			
			
			</div>
			</div>
		
		</div>

	
	</div>
	
	
	<h2 class="text-center">GET SOCIAL</h2>
		<div class="alt2">
 		<div class="container">
		
		
 			<br>
 			<a id="s1" title="Facebook" href="#"  target="_blank"><span><i class="fa fa-facebook fa-5x"></i></span></a>
 			<a id="s2" title="Follow Our Twitter" href="#"  target="_blank"><span><i class="fa fa-twitter fa-5x"></i></span></a>
 			<a id="s3" title="Follow Our Instagram" href="#"  target="_blank"><span><i class="fa fa-instagram fa-5x"></i></span></a>
 			
			<a id="s6" title="Mail Us" href="mailto:thenewszn@gmail.com?Subject=Whats%20Up?" target="_top"  ><span><i class="fa fa-envelope fa-5x"></i></span></a>
 			
 			
 			</div>
 			</div>
	
	<div class="container">
		<div class="row">
		
		
		<div class="col-md-4"></div>
		
		
		<div class="col-md-4">
		
		
		
		
		</div>
		
		
		<div class="col-md-4"></div>
		
		
		
		
		
		</div>
	
	
	
	
	
	</div>	
	
			
		
 
		
		
	
	<div class="container padding" id="contact">
	
	<hr />
	<br>
		
		<h1 class="text-center"><u>Contact</u></h1>
		
		
		<form method="post">
           	  <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
              ?> 
    		<div class="form-group">
     			 <label for="name">Name:</label>
      			 <input type="text" class="form-control" name="name" placeholder="Enter Name">
    		</div>
    		<div class="form-group">
     			 <label for="location">Email:</label>
     			 <input type="email" class="form-control" name="email" placeholder="Enter Email">
    		</div>

    		<div class="form-group">
      			<label for="comment">Comment:</label>
 
     			 <input type="text" class="form-control" name="comment" placeholder="Enter Comment">
  			</div>

  			  <form id="cap" action="" method="POST">
    <p>
      Resolve the simple captcha below: <br />
      <?php
        echo $random_number1 . ' + ' . $random_number2 . ' = ';
      ?>
      <input name="captchaResult" type="text" size="2" />

      <input name="firstNumber" type="hidden" value="<?php echo $random_number1; ?>" />
      <input name="secondNumber" type="hidden" value="<?php echo $random_number2; ?>" />
    </p>

    <p>
      <input type='submit' onclick="return checkfunction(this)" />
    </p>
  </form>
    	
    			<button type="hit" name="hit" value="Append"class="btn btn-default">Submit</button>
    			 <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?> 
  			</form>


 
  </form>

  <div class="container">

  	 <?php
    $captchaResult = $_POST["captchaResult"];
    $firstNumber = $_POST["firstNumber"];
    $secondNumber = $_POST["secondNumber"];

    $checkTotal = $firstNumber + $secondNumber;

    if ($captchaResult == $checkTotal) {
      echo '<h2 class="green">Captcha </h2>';
    } else {
      echo '<h2 class="red">Wrong Captcha. Try Again</h2>';
    }
  ?>

  </div>
					
</div>

			
	<div class="alt2">
 		<div class="container">
 			
 			<footer>
 			
 			&copy; New Szn<br ><a id="back" href="#home">Back Home</a>
 			
 			<br>
 			<a id="a" title="Facebook" href="#"  target="_blank"><span><i class="fa fa-facebook fa-3x"></i></span></a>
 			<a id="oo" title="Twitter" href="#"  target="_blank"><span><i class="fa fa-twitter fa-3x"></i></span></a>
 			<a id="b" title="Instagram" href="#"  target="_blank"><span><i class="fa fa-instagram fa-3x"></i></span></a>
			<a id="e" title="Mail" href="mailto:thenewszn@gmail.com?Subject=Whats%20Up?" target="_top"  ><span><i class="fa fa-envelope fa-3x"></i></span></a>
 			
 			
 			
 			</footer>
 			
 			
 		</div>
 	
 	
 	
 	
 	</div>
 	
 
	
			

	
			
			
			
		
		
		
		
	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script>
	$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
	</script> 
		
	

	</body>






</html>

