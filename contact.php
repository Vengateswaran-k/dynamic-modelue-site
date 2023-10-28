<?php 
include('connect.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Grocery</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/contact.css">
	</head>
  <?php
  if(isset($_POST['submit'])){
    echo  $name=$_POST["username"];
          $mail=$_POST["email"];
          $compname=$_POST["companyname"];
          $usermessage=$_POST["message"];
          $checkbox=$_POST["checkbox"];
          $sql=mysqli_query($con,"INSERT INTO table_contact(user_name,email,company_name,user_message,checkbox)values('$name','$mail','$compname','$usermessage','$checkbox')");
          echo "<script>alert('your message has been send!');document.location='contact.php'</script>";
          
  } 
  ?>
	<body style="background-image: url('image/imgcontact/bodyimage2.jpg');  background-repeat: no-repeat;background-size: cover;">	
	<h2 style="text-align: center;color: green;text-overflow: ellipsis;">CONTACT US</h2>	
	</div> <div class="contain">
  <div class="wrapper">

    <div class="form">
      <h4>GET IN TOUCH</h4>
      <h2 class="form-headline">Send us a message</h2>
      <form id="submit-form" action="" method="post" enctype="multipart/form-data">
        <p>
          <input id="name" class="form-input" type="text" placeholder="Your Name*" name="username">
          <small class="name-error"></small>
        </p>
        <p>
          <input id="email" class="form-input" type="email" placeholder="Your Email*" name="email">
          <small class="name-error"></small>
        </p>
        <p class="full-width">
          <input id="company-name" class="form-input" type="text" placeholder="Company Name*" required  name="companyname">
          <small></small>
        </p>
        <p class="full-width">
          <textarea  minlength="20" id="message" cols="30" rows="7" placeholder="Your Message*" required name="message"></textarea>
          <small></small>
        </p>
        <p class="full-width">
          <input type="checkbox" id="checkbox" name="checkbox"> Yes, I would like to receive communications by call / email about Company's services.
        </p>
        <p class="full-width">
          <input type="submit" class="submit-btn" name="submit" value="Submit" onclick="checkValidations()">
          <button class="reset-btn" onclick="reset()">Reset</button>
        </p>
      </form>
    </div>

    <div class="contacts contact-wrapper">

      <ul>
        <li>We've driven online revenues of over <span class="highlight-text-grey">$2
            billion</span> for our clients. Ready to know
          how we can help you?</li>
        <span class="hightlight-contact-info">
          <li class="email-info"><i class="fa fa-envelope" aria-hidden="true"></i> smartgrocery.com</li>
          <li><i class="fa fa-phone" aria-hidden="true"></i> <span class="highlight-text">+91 9597338424</span></li>
        </span>
      </ul>
    </div>
  </div>
</div>
    <section class="map_sec">
    	<h4 style="text-align:center;">Find Us on Google Map</h4>
        <div class="container">
            <div class="row">
                <div class="col-md-7 offset-md-1">
                    <div class="map_inner">
                        <div class="map_bind">
                             <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d62190.69243049563!2d80.11315450088897!3d13.040873713458382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3a5261dfe905af6f%3A0x7d5650f588523911!2sD-Mart%2C%20Mount%20Poonamallee%20Road%2C%20Kamatchi%20Nagar%2C%20Mahalakshmi%20Nagar%2C%20Kattupakkam%2C%20Chennai%2C%20Tamil%20Nadu!3m2!1d13.0451774!2d80.1181996!4m5!1s0x3a5266cda7aee4af%3A0xa530193919b8c417!2sD-Mart%2C%20Chandra%20Metro%20Mall%2C%20Arcot%20Rd%2C%20Rajeswari%20Colony%2C%20Virugambakkam%2C%20Chennai%2C%20Tamil%20Nadu%20600092!3m2!1d13.0467143!2d80.19037929999999!5e0!3m2!1sen!2sin!4v1691733111452!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-md-5"><br><br>
				  	<img  class="conimage1"style="vertical-align: middle;border: 1px solid;margin: 17px 9px;width: 423px;height: 402px;" src="image/imgcontact/imgback8.jpg" width="80%" height="100%" >
				  </div>
            </div>
        </div>    
        
    </section>

 	<script type="text/javascript" src="js/contact.js"></script>
	</body>
</html>