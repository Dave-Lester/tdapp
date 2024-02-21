<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <!---Custom Css File!--->
			<style>
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
.about-us{
  height: 100vh;
  width: 100%;
  padding: 70px 0;
  
}
.pic{
	width:100%;
	max-height:350px;
	object-fit:cover;
}
.about{
  width: 1130px;
  max-width: 85%;
  margin: 0 auto;
  display: flex;
  align-items: center;
  justify-content: space-around;
}
.text{
  width: 540px;
}
.text h2{
  font-size: 90px;
  font-weight: 600;
  margin-bottom: 10px;

}

.text p{
  font-size: 18px;
  line-height: 25px;
  letter-spacing: 1px;
  text-align: justify;
  color: #4d4d4d;
}
.data{
  margin-top: 30px;
}
.hire{
  font-size: 18px;
  background: #ff7b00;
  color: #fff;
  text-decoration: none;
  border: none;
  padding: 8px 25px;
  border-radius: 20px;
  transition: 0.5s;
}
.hire:hover{
  background: #ff7b00;
  
}

	</style>
</head>





<style>
	header.masthead{
		background-image: url('<?php echo validate_image($_settings->info('cover')) ?>') !important;
	}
	
	/* Additional CSS to add a border to the button */
	.btn-outline-primary {
  		border: 3px solid #ffc800; /* Adjust the border width and color as needed */
		margin-top: -10px
	}

	.services-section .container {
		margin-top: -100px;
		z-index: 2;
		position: relative;
		justify-content: center;
		}

.services {
  background: #fff;
  -webkit-box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.03);
  -moz-box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.03);
  box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.03);
  padding: 25px;
  -moz-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  -webkit-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  transition: all 0.3s ease;
  -webkit-border-radius: 2px;
  -moz-border-radius: 2px;
  -ms-border-radius: 2px;
  border-radius: 4px; }
.services .icon {
    line-height: 1.3;
    position: relative; 
}
.services .icon span {
    font-size: 60px;
    color: #007bff; 
}
.services .media-body h3 {
    font-size: 20px; 
}
.services:hover {
    background: #007bff;
    color: #fff; 
}
.services:hover .icon span {
    color: #fff; 
}
.h3 {
	color: #4d4d4d;
	}
.services:hover h3 {
    color: #fff; 
}

.list-services {
	margin-top: 60px;
  	padding: 0; 
}
.list-services li {
    font-size: 18px;
    list-style: none; 
}
.list-services li a {
    color: #4d4d4d; 
}

p {
	text-align: start;
	letter-spacing: 1px;
		
}


	
	
</style>
<!-- Masthead-->
<header class="masthead">
	<div class="container">
		<div class="masthead-subheading" data-aos="fade-up" data-aos-duration="800">WELCOME TO PRESENTACION, CAMARINES SUR</div>
		<div class="masthead-heading text-uppercase" data-aos="fade-up" data-aos-duration="800">Explore our Tourism Attraction</div>
		<a class="btn btn-outline-primary rounded-pill btn-xl text-uppercase" href="#home" data-aos="fade-left" data-aos-duration="800">View Tourist Spots &nbsp;&nbsp;<i class="fa fa-arrow-right"></i></a>
	</div>
</header>

<section class="ftco-section services-section bg-light">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex p-4 align-self-stretch ftco-animate" data-aos="fade-up" data-aos-duration="300">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="fas fa-wallet"></span></div></div>
              <div class="media-body p-6 mt-2">
                <h3 class="heading mb-3"><br>Best Price Guarantee</h3><br>
                <p>We match any competitor's price, ensuring you always get the best deal.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex p-4 align-self-stretch ftco-animate" data-aos="fade-up" data-aos-duration="600">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="far fa-heart"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3"><br>Travelers Love Us</h3><br>
                <p>Travelers love us for unforgettable adventures and exceptional service.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex p-4 align-self-stretch ftco-animate" data-aos="fade-up" data-aos-duration="800">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="far fa-handshake"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3"><br>Best Travel Agent</h3><br>
                <p>Our team of experts listens to your desires and designs tailor-made itineraries.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex p-4 align-self-stretch ftco-animate" data-aos="fade-up" data-aos-duration="900">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="far fa-comments"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3"><br>Our Dedicated Support</h3><br>
                <p>Our commitment to your travel doesn't end after booking. Enjoy around-the-clock support.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
	</section>

<!-- Services-->
<section class="page-section bg-dark" id="home">
	<div class="container">
		<h2 class="text-left text-dark">Featured Destination</h2>
	<div class="d-flex w-100 justify-content-left">
		<hr class="border-warning" style="border:1px solid" width="100%">
	</div>
	<div class="row" data-aos="fade-up" data-aos-duration="800">
		<?php
		$packages = $conn->query("SELECT * FROM `destinations` order by rand() limit 3");
			while($row = $packages->fetch_assoc() ):
				$cover='';
				if(is_dir(base_app.'uploads/package_'.$row['id'])){
					$img = scandir(base_app.'uploads/package_'.$row['id']);
					$k = array_search('.',$img);
					if($k !== false)
						unset($img[$k]);
					$k = array_search('..',$img);
					if($k !== false)
						unset($img[$k]);
					$cover = isset($img[2]) ? 'uploads/package_'.$row['id'].'/'.$img[2] : "";
				}
				$row['description'] = strip_tags(stripslashes(html_entity_decode($row['description'])));

				$review = $conn->query("SELECT * FROM `rate_review` where package_id='{$row['id']}'");
				$review_count =$review->num_rows;
				$rate = 0;
				while($r= $review->fetch_assoc()){
					$rate += $r['rate'];
				}
                //if($rate > 0 && $review_count > 0)
                //$rate = number_format($rate/$review_count,0,"");
		?>
			<div class="col-md-4 p-4 ">
				<div class="card w-100 rounded-0">
					<img class="card-img-top" src="<?php echo validate_image($cover) ?>" alt="<?php echo $row['title'] ?>" height="200rem" style="object-fit:cover">
					<div class="card-body">
					<h5 class="card-title truncate-1 w-100"><?php echo $row['title'] ?></h5><br>
					<div class=" w-100 d-flex justify-content-start">
						<div class="stars stars-small">
								<input disabled class="star star-5" id="star-5" type="radio" name="star" <?php echo $rate == 5 ? "checked" : '' ?>/> <label class="star star-5" for="star-5"></label> 
								<input disabled class="star star-4" id="star-4" type="radio" name="star" <?php echo $rate == 4 ? "checked" : '' ?>/> <label class="star star-4" for="star-4"></label> 
								<input disabled class="star star-3" id="star-3" type="radio" name="star" <?php echo $rate == 3 ? "checked" : '' ?>/> <label class="star star-3" for="star-3"></label> 
								<input disabled class="star star-2" id="star-2" type="radio" name="star" <?php echo $rate == 2 ? "checked" : '' ?>/> <label class="star star-2" for="star-2"></label> 
								<input disabled class="star star-1" id="star-1" type="radio" name="star" <?php echo $rate == 1 ? "checked" : '' ?>/> <label class="star star-1" for="star-1"></label> 
						</div>
                    </div>
    				<p class="card-text truncate"><?php echo $row['description'] ?></p>
					<div class="w-100 d-flex justify-content-end">
						<a href="./?page=view_package&id=<?php echo md5($row['id']) ?>" class="btn btn-sm btn-flat btn-success">&nbsp;&nbsp;View Details &nbsp; <i class="fa fa-arrow-right"></i></a>
					</div>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
	</div>
	<div class="d-flex w-100 justify-content-end">
		<a href="./?page=packages" class="btn btn-flat btn-success mr-2">&nbsp;View All &nbsp; <i class="fa fa-arrow-right"></i></a>
	</div>
	</div>
</section>
<!-- Map-->
<section class="page-section bg-dark" id="map" style="margin-top:-70px">
	<div class="container">
		<h2 class="text-left text-dark"> Tourist Guide Map</h2>
			<div class="d-flex w-100 justify-content-left">
			<hr class="border-warning" style="border:1px solid" width="100%">
			</div>
			
		<div class="row">
			<div class="col-lg-8">
				<div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">	
				 <iframe id="myMap" src="http://maps.google.com/maps?q=Coastline+Nature+Resort+PP5Q%2B4C5+Presentacion+Camarines+Sur&z=14&output=embed" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
			</div>
			<div class="col-lg-4">
				<div class="row">
						<div class="col-lg-12 pt-2" data-aos="fade-left" data-aos-duration="800">
								<a onclick="setMap('13.707945770702281, 123.73861662854956')" class="btn btn-info w-100">
				Coastline Nature Resort
									
			</a>
				</div>
				<div class="col-lg-12 pt-2" data-aos="fade-left" data-aos-duration="700">
					<a onclick="setMap('13.698339441125096, 123.79763925468927')" class="btn btn-info w-100">
				BA'HAW Falls
			</a>
				</div>
				<div class="col-lg-12 pt-2" data-aos="fade-left" data-aos-duration="600">
					<a onclick="setMap('13.703258739791492, 123.67034963812073')" class="btn btn-info w-100">
				Aguirangan Rose Island
			</a>
				</div>
				<div class="col-lg-12 pt-2" data-aos="fade-left" data-aos-duration="500">
					<a onclick="setMap('13.707615700435642, 123.73543075811337')" class="btn btn-info w-100">
				Cesarz Ville Farm & Resort
			</a>
				</div>
				<div class="col-lg-12 pt-2" data-aos="fade-left" data-aos-duration="400">
					<a onclick="setMap('13.71250615243364, 123.66179615668597')" class="btn btn-info w-100">
				Aguirangan View Hotel
			</a>
				</div>
				<div class="col-lg-12 pt-2" data-aos="fade-left" data-aos-duration="300">
					<a onclick="setMap('13.70678164010091, 123.74233882463065')" class="btn btn-info w-100">
				Presentacion View Deck
			</a>
				</div>
				</div>
			</div>	
			
		</div>

			



		<script>
			function setMap(url) {
				document.getElementById('myMap').src = 'http://maps.google.com/maps?q='+url+'&z=15&output=embed';
            }
		</script>

<style>
	.map-container{
	overflow:hidden;
	padding-bottom:40%;
	position:relative;
	height:0;
	border: 2px solid #fff;

	}
	.map-container iframe{
	left:0;
	top:0;
	height:100%;
	width:100%;
	position:absolute;
	}
	
</style>

		</div>	
</section>
	
<!-- About-->
<section class="page-section bg-dark" id="about">

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
					<h2 class="section-heading text-left text-dark">About Us</h2>
				<hr class="border-warning" style="border:1px solid" width="100%">
			</div>
			<div class="col-lg-6 pt-4">
				 <img src="pexels-taryn-elliott-4253835.jpg" class="pic">
			</div>
			<div class="col-lg-6 text-dark text-justify" >
				 <div class="row pt-3">
					 <div class="col-lg-10 m-auto" data-aos="fade-left" data-aos-duration="800">
						 <p>Although many of us have been “tourists” at some point in our lives, defining what tourism actually is can be difficult. Tourism is the activities of people traveling to and staying in places outside their usual environment for leisure, business or other purposes for not more than one consecutive year. Tourism is a dynamic and competitive industry that requires the ability to adapt constantly to customers’ changing needs and desires, as the customer’s satisfaction, safety and enjoyment are particularly the focus of tourism businesses. There are different ways to measure the size of the tourism industry, as tourism does not conform to the usual ways that industries are defined, such as manufacturing, forestry and other industries.</p>
					 </div>
				 </div>
			</div>
		</div>
	</div>







</section>








	

</section>
<!-- Contact-->
<section class="page-section bg-dark" id="contact" style="margin-top:-100px">
	<div class="container">
		<div class="text-center ">
			<h2 class="section-heading text-dark">Contact Us</h2>
			<h3 class="section-subheading text-dark">Send us a message for inquiries.</h3>
		</div>
		<!-- * * * * * * * * * * * * * * *-->
		<!-- * * SB Forms Contact Form * *-->
		<!-- * * * * * * * * * * * * * * *-->
		<!-- This form is pre-integrated with SB Forms.-->
		<!-- To make this form functional, sign up at-->
		<!-- https://startbootstrap.com/solution/contact-forms-->
		<!-- to get an API token!-->
		<form id="contactForm" >
			<div class="row align-items-stretch mb-5">
				<div class="col-md-6">
					<div class="form-group" data-aos="fade-right" data-aos-duration="800">
						<!-- Name input-->
						<input class="form-control" id="name" name="name" type="text" placeholder="Your Name *" required />
					</div>
					<div class="form-group" data-aos="fade-right" data-aos-duration="800">
						<!-- Email address input-->
						<input class="form-control" id="email" name="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
					</div>
					<div class="form-group mb-md-0" data-aos="fade-right" data-aos-duration="800">
						<input class="form-control" id="subject" name="subject" type="subject" placeholder="Subject *" required />
					</div>
				</div>
				<div class="col-md-6" data-aos="fade-left" data-aos-duration="800">
					<div class="form-group form-group-textarea mb-md-0">
						<!-- Message input-->
						<textarea class="form-control" id="message" name="message" placeholder="Your Message *" required></textarea>
					</div>
				</div>
			</div>
			<div class="text-center"><button class="btn btn-success rounded-pill btn-xl" id="submitButton" type="submit">Send Message &nbsp;<i class="fas fa-paper-plane"></i></button></div>
		</form>
	</div>
</section>
<script>
$(function(){
	$('#contactForm').submit(function(e){
		e.preventDefault()
		$.ajax({
			url:_base_url_+"classes/Master.php?f=save_inquiry",
			method:"POST",
			data:$(this).serialize(),
			dataType:"json",
			error:err=>{
				console.log(err)
				alert_toast("an error occured",'error')
				end_loader()
			},
			success:function(resp){
				if(typeof resp == 'object' && resp.status == 'success'){
					alert_toast("Inquiry sent",'success')
					$('#contactForm').get(0).reset()
				}else{
					console.log(resp)
					alert_toast("an error occured",'error')
					end_loader()
				}
			}
		})
	})
})
</script>