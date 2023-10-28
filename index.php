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
		<link rel="stylesheet" type="text/css" href="css/index.css">
	</head>
	<body style="background-image: url('image/imgback6.jpg');  background-repeat: no-repeat;background-size: cover;">
		<nav class="navbar sticky-top navbar-expand-lg bg-dark"  id="NavBar">
    <div class="container">
     <img id="logo" src="image/logo1.jpg">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto w-100 justify-content-end" class="text-white">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
            <li class="nav-item">
              <a class="nav-link" href="product.php">Product</a>
              <li class="nav-item">
                <a class="nav-link" href="#">Services</a>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact</a>
                </li>
        </ul>
      </div>
    </div>
  </nav>
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li> 

    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
             
        <img src="image/shop1.jpg" alt="Los Angeles" class="responsive" style="width:100%;">
       
      </div>

      <div class="item">
        <img src="image/shop2.jpg" alt="Chicago" class="responsive" style="width:100%;">
        
      </div>
    
      <div class="item">
        <img src="image/shop3.jpg" alt="New york" class="responsive" style="width:100%;">
         
      </div>
      <div class="item">
        <img src="image/shop4.jpg" alt="New york" class="responsive" style="width:100%;">
        
      </div>
      <div class="item">
        <img src="image/shop5.jpg" alt="New york" class="responsive" style="width:100%;">
        
      </div>
    </div>
  

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  	<div class="container-fluid" style="#" >
	  	<h2 style="color: white;">Product Categories</h2><hr>
	  	<div class="row">
	  		<div class="col-md-3">
	  			<img class="img1" src="image/seasonings.jpg" width="200px" height="200px">
	  			<h4>Seasonings</h4>
	  		</div>
	  		<div class="col-md-3">
	  			<img class="img1" src="image/grains.jpg" width="200px" height="200px">
	  			<h4>Grains</h4>
	  		</div>
	  		<div class="col-md-3">
	  			<img class="img1" src="image/flour.jpg" width="200px" height="200px">
	  			<h4>Flour</h4>
	  		</div>
	  		<div class="col-md-3">
	  			<img class="img1" src="image/dry.jpg" width="200px" height="200px">
	  			<h4>Dry fruits</h4>
	  		</div>
	  	</div>
	  	<div class="row">
	  		<div class="col-md-3">
	  			<img class="img1" src="image/dals.jpg" width="200px" height="200px">
	  			<h4>Dals</h4>
	  		</div>
	  		<div class="col-md-3">
	  			<img class="img1" src="image/oil.jpg" width="200px" height="200px">
	  			<h4>Oils</h4>
	  		</div>
	  		<div class="col-md-3">
	  			<img class="img1" src="image/spices.jpg" width="200px" height="200px">
	  			<h4>Spices</h4>
	  		</div>
	  		<div class="col-md-3">
	  			<img class="img1" src="image/sugar.jpg" width="200px" height="200px">
	  			<h4>Sugar </h4>
	  		</div>
	  	</div>
  	</div><br>
  	<div class="container-fluid">
  		<div class="row">
  			<h2 style="color: white;">Latest Products</h2><hr>
  			<div class="col-md-3">
  				<img  class="img2" src="image/chakki.jpg" width="250px" height="200px">
  				<h4>chakki fresh atta 5 k.g<br>$350.00</h4>
  				<button type="button" class="btn btn-success">Add to Card</button>
  			</div>
  			<div class="col-md-3">
  				<img  class="img2" src="image/st.jpg" width="250px" height="200px">
  				<h4>ST Hind gold moong Dall 1 kg<br>$180.00</h4>
  				<button type="button" class="btn btn-success">Add to Card</button>
  			</div>
  			<div class="col-md-3">
  				<img  class="img2" src="image/sthind.jpg" width="250px" height="200px">
  				<h4>ST Hind Gold Black masoor 1 kg<br>$172</h4>
  				<button type="button" class="btn btn-success">Add to Card</button>
  			</div>
  			<div class="col-md-3">
  				<img  class="img2" src="image/redsplit.jpg" width="250px" height="200px">
  				<h4> Gold Red split 1 kg<br>$135.00</h4>
  				<button type="button" class="btn btn-success">Add to Card</button>
  			</div>
  		</div><br>
  		<div class="row">
  			<div class="col-md-3">
  				<img  class="img2" src="image/deccan.jpg" width="250px" height="200px">
  				<h4>Masoor Dall red 500 Gms<br>$85.00</h4>
  				<button type="button" class="btn btn-success">Add to Card</button>
  			</div>
  			<div class="col-md-3">
  				<img  class="img2" src="image/deccan2.jpg" width="250px" height="200px">
  				<h4>Moong Dall Split 500Gms<br>$90.00</h4>
  				<button type="button" class="btn btn-success">Add to Card</button>
  			</div>
  			<div class="col-md-3">
  				<img  class="img2" src="image/deccan3.jpg" width="250px" height="200px">
  				<h4>Gold black Urad Whole 1kg<br>$149</h4>
  				<button type="button" class="btn btn-success">Add to Card</button>
  			</div>
  			<div class="col-md-3">
  				<img  class="img2" src="image/deccan4.jpg" width="250px" height="200px">
  				<h4>urid Dall(chilkka) 1kg<br>$149.00</h4>
  				<button type="button" class="btn btn-success">Add to Card</button>
  			</div>
  		</div>
  		<div class="row">
  			<div class="col-md-3">
  				<img  class="img2" src="image/gram1.jpg" width="250px" height="200px">
  				<h4>Gold Fride Gram 1kg<br>$85.00</h4>
  				<button type="button" class="btn btn-success">Add to Card</button>
  			</div>
  			<div class="col-md-3">
  				<img  class="img2" src="image/gram2.jpg" width="250px" height="200px">
  				<h4>Masoor Gola Whole 5Gms<br>$120.00</h4>
  				<button type="button" class="btn btn-success">Add to Card</button>
  			</div>
  			<div class="col-md-3">
  				<img  class="img2" src="image/gram3.jpg" width="250px" height="200px">
  				<h4>Poppoyee Seeds 1kg<br>$150.00</h4>
  				<button type="button" class="btn btn-success">Add to Card</button>
  			</div>
  			<div class="col-md-3">
  				<img  class="img2" src="image/gram4.jpg" width="250px" height="200px">
  				<h4>urid Dall(chilkka) 1kg<br>$149.00</h4>
  				<button type="button" class="btn btn-success">Add to Card</button>
  			</div>
  		</div>
  		<div class="row">
  			<div class="col-md-3">
  				<img  class="img2" src="image/bengal1.jpg" width="250px" height="200px">
  				<h4>Bengal Gram dall 1kg<br>$180.00</h4>
  				<button type="button" class="btn btn-success">Add to Card</button>
  			</div>
  			<div class="col-md-3">
  				<img  class="img2" src="image/bengal2.jpg" width="250px" height="200px">
  				<h4>Toor Dall 5Gms<br>$135.00</h4>
  				<button type="button" class="btn btn-success">Add to Card</button>
  			</div>
  			<div class="col-md-3">
  				<img  class="img2" src="image/bengal3.jpg" width="250px" height="200px">
  				<h4>Masoor Gola 1kg<br>$250.00</h4>
  				<button type="button" class="btn btn-success">Add to Card</button>
  			</div>
  			<div class="col-md-3">
  				<img  class="img2" src="image/bengal4.jpg" width="250px" height="200px">
  				<h4>Black Masoor 1kg<br>$300.00</h4>
  				<button type="button" class="btn btn-success">Add to Card</button>
  			</div>
  		</div><br>
  		<div class="container" style="background-image: url('image/imgback2.jpg');  background-repeat: no-repeat;background-size: cover;">
  			<h2>Why Online Grocery Shopping is better?</h2><hr>
  				<p class="para1">
  					With everything getting smarter by the day, how can groceries and grocery shopping stay behind? The supermarket and grocery sector is one of the most competitive in the Indian food and beverage industry. We have seen it flourish over the years – with more low-cost retailers popping up everywhere and with unique technologies being introduced.<br>

							Online grocery shopping is a dream come true for today’s generation. Especially for all those women/men who always wanted to do grocery shopping on a budget. The landscape of grocery fulfillment has changed greatly due to this and Smart Groceries are doing just that by providing you everything at the comfort of your home.<br>

							The best part about buying groceries online is that it is delivered at the doorstep of the house. The effort of carrying heavy bags from the store is definitely not a part of this smart shopping choice. With the young, old are also becoming used to the technology and therefore, without worrying about anything, they too can shop from the comfort of their couch.<br>

							This not only vouches on saving money but also time. Instead of wasting time stuck in traffic, in long billing queues in the supermarket, parking headaches etc., one can choose to stay at home and opt for an easy checkout saving a whole lot of time for something productive. No matter the weather or traffic conditions outside, online grocery shopping can be done irrespective of that.<br>

							The best part is anyone can place an order at any time. Odd hours, Sundays etc. don’t matter because here, one has easy access to the whole supermarket day and night. One click and the supermarket would appear on the screen. This benefit allows shopping when one is free and therefore does not have to rush to the store before it closes.<br>

							Overall Smart Groceries are not just convenient but also encourage savings. Everyone is busy nowadays with their work and responsibilities and this sure helps in solving a big-time problem.<br>
  				</p>
  		</div>
  		<div class="container-fluid">
  			<div class="row">
  				<div class="col-md-12">
  					<img src="image/store.jpg" alt="Responsive image" width="100%" height="50%">
					</div>
				</div>
			</div>
			<div class="container-fluid"  style="background-image: url('image/imgback7.jpg'); background-repeat: no-repeat;background-size: cover;"><br>
				<div class="row">
				  <div class="col-md-5">
				  	<h3 style=" color: white;padding: 0 151px;"><b>Our History</b></h3><br>
				  	<p class="para2" style="text-transform: none;font-size: large;font-style: oblique;font-family: auto;color: white;padding: 0 22px;">Super Traders is an organization that was started in 1997 by Mr.Haji Saleem Sharif( Popat ) to serve the market with the best of grocery products at very reasonable rates. Super traders now deal in over 1000+ SKUs and have everything a household will need in terms of Grocery products and source these directly from the farmers at the APMC. Thereby ensuring the genuine quality of products sourced.<br><br>
				  	A trusted product of purity and quality. All kinds of food grains, spices, dry fruits and flour products are available. S T Products are sourced from the finest farms and processed at the state of art facilities. They strive to continually raise our benchmark to provide services of the highest quality and excellence. The products guarantee fresh and high quality in each and every pack.</p>
				  </div>
				  <div class="col-md-3"><br><br><br><br>
				  	<img src="image/logo2.jpg" width="40%" height="20%">
				  	<h3 style=" color: white;padding: 0 20px;">Stay In Touch</h3>
				  	<address>
				  		SUPER TRADERS<br>
							#185/19/1, 6th Main,<br>
							APMC Yard, Chennai,<br>
							Tamilnadu – 560022<br>
							Phone: 9597338424<br>
							supertraders2023st@gmail.com<br>
				  	</address>
				  </div>
				  <div class="col-md-4"><br><br>
				  	<img src="image/imgback8.jpg" width="80%" height="100%" >
				  </div>
				</div>
			</div>
		</div>
		<div class="container-fluid"> 
				<footer  style="text-align: center;background: lavender; width: 100%; height: 100%; color: black;">22 Smart Groceries. All Rights Reserved | Managed By-<i>vengat</i><p>Terms & Conditions</p></footer>
			</div>

	</body>
</html>
