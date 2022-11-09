<!DOCTYPE html>
<html>
<head>
	<title>ENEST-1</title>
    <link rel="stylesheet" type="text/css" href="{{asset('http://localhost/laravel/work/ecommerce1/resources/css/style.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC|Catamaran&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="main-div">
		<div class="head-div">
			<div class="main">
				<div class="head">
					<span>EVEST</span>
					<p>THE BIGGEST CHOICE OF THE WEB</p>
				</div>
				<div class="btn" style="color:white">
				<form method="post" action="{{url('logout')}}" > 
                    {{csrf_field()}}
                       @if(session()->get('user_session'))
				
                         <input type="submit" name="logout" value="Log Out" >
                         <input type="button" name="" value="<?php $name = session()->get('user_session'); echo $name;?>" >
				</form>
				@else
				
					<a href="{{url('/form')}}"><input type="submit" name="login" value="Log In" ></a>
                
                @endif
				</div>
			</div>
		</div>
		<div class="home-page">
		 	<div class="pagnation">
				<div class="list">
				<ul>
				<a href="{{url('/home')}}"><li>HOME</li></a>
						<li>NEW PRODUCTS</li>
						<li>SPECIAL</li>
						<li>ALL PRODUCTS</li>
						<li ><a href="{{url('/contact')}}">CONTACT</a></li>
						<li><a href="{{url('/cart1/'.session()->get('user_session'))}}">MY CART</a></li>&nbsp;
				</ul>
				</div>
				<div class="search">
					<div class="search-1">
						<div class="input">
							<input type="text" name="">
						</div>
						<div class="btnn">
							<input type="button" name="" value="Search">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="null">
			
		</div>
		<div class="main-categorious">
			<div class="footer">
				<div class="categorious">
					<div class="cate-heading">
						<p>CATEGORIES</p>
					</div>
					<div class="items">
					<ul>
						<a href="{{url('/dishwasher')}}"><li>Dishwasher</li></a>
						<a href="{{url('/tv')}}"><li>tvs</li></a>
						<a href="{{url('/dishwasher')}}"><li>Ranges</li></a>
						<a href="{{url('/dishwasher')}}"><li>Computer</li></a>
						<a href="{{url('/dishwasher')}}"><li>Blue Ray and DVD Player</li></a>
					    <a href="{{url('/dishwasher')}}"><li>Projectors</li></a>
						<a href="{{url('/dishwasher')}}"><li>Hometheater System</li></a>
						<a href="{{url('/camera')}}"><li>Camera</li></a>
					    <a href="{{url('/dishwasher')}}"><li>Camcorders</li></a>
					    <a href="{{url('/dishwasher')}}"><li>Washer & Dryers</li></a>
						<a href="{{url('/dishwasher')}}"><li>Refrigerators</li></a>
						<a href="{{url('/dishwasher')}}"><li>Microwaves</li></a>
						</ul>
					</div>
				</div>
				<div class="contact">
					<div class="contact-us">
						<p>CONTACT US</p>
					</div>
					<div class="costomer-info">
						<div class="costomer-service">
							<br/>
							<br/>
							<br/>
							<p>Customer Service:91 7508115758</p>
							<p>Ludhiana,Punjab,INDIA</p>
							<p>Yorex Infotec.</p>
						</div>
						<hr class="hr">
						<!-- <div class="info">
						    <div class="required-info" width="80%"	>
								<h4>Contact Us</h4>
								<p>Have a question? We have 24x7 Costomer Service.</p>
								<p>Befor you contact us,skim through our self Serve opton and Frequently Asked Question for Quicker answer.</p>
								<p>Want to know more about the status of the orders?</p>
								<p>Login to view our order.</p>
							</div> 
						</div> -->
						<div class="border">
							<div class="border-1">
								<div class="border-2">
									<p>Contact Us</p>
								</div>
								<div class="requir-info">
									<span>*Required information</span>
								</div>
								<div class="input-info">
									<div class="input-information">
								
									<form method="post" action="{{url('contact-form')}}" > 
                        {{csrf_field()}}
											<table class=" form">
												<tr>
													<td ><p>full Name* </p></td>
													<td><input type="text" name="name"></td>
												</tr>
												<tr>
													<td > <p>E-mail Address </p></td>
													<td><input type="text" name="email"></td>
												</tr>
												<tr>
													<td> <p>Message</p></td>
													<td><textarea name="message"></textarea></td>
												</tr>
												
											</table>
											<div class="snd-btn">
							<button>Send Now</button>
						</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				<!-- <div class="list-1">
					<ul>
						<li>HOME</li>
						<li>NEW PROJECT</li>
						<li>SPECIAL</li>
						<li>ALL PRODUCTS</li>
						<li>REVIEWS</li>
						<li>CONTACT</li>
						<li>FAQS</li>
					</ul>
				</div>
				<div class="footer-2">
					<p>Copyright <i class="fa fa-copyright" aria-hidden="true"></i>2013 Enest.Privacy Notice</p>
				</div> -->
			</div>
		</div>
	</div>
</body>
</html>