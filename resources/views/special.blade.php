<!DOCTYPE html>
<html>
<head>
	<title>ENEST-5</title>
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
				@if(session()->get('user_session'))
				
				<form method="post" action="{{url('logout')}}" > 
                    {{csrf_field()}}
                      
                         <input type="submit" name="logout" value="Log Out" >
                         <input type="button" name="" value="<?php $name = session()->get('user_session'); echo $name;?>" >
				</form>
				@else
				
					<a href="{{url('/form')}}"><input type="submit" name="login" value="Log In" ></a>
                
				@endif
				
                </div>
               
				</div>
		
			</div>
		</div>
		<div class="home-page">
		 	<div class="pagnation">
				<div class="list">
					<ul  >
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
				<div class="main-img">
					<img src="images/16.png">
				</div>
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
				<div class="contact" >
					<div class="contact-us">
						<p>FEATURED PRODUCTS</p>
					</div>
					
					@foreach($product as $row)
					<form action="{{url('cart-form/'.$row->id)}}" method="post" > 
					{{csrf_field()}}
					<div class="Camera-info" >
						<div class="samsung-cam" >
							<div class="cam-info"  >
								<img src="images/{{$row->image}}">
								<div class="sam-prc" >
									<span>{{$row->model}}</span>
									<p>Rs.{{$row->price}}</p>
									
										
											<td class="qty">Enter quantity</td>
											<td><select name="quantity">
                                               
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
										
                                            </select>
										
								</div>
								<br/><br/>
								<div class="cart-btn">
								<input type="submit" name="" value="Add to cart">
								</div>
								<br/>
									<input type="hidden" name="name" value="{{$row->name}}">
									<input type="hidden" name="price" value="{{$row->price}}">
									<input type="hidden" name="product_id" value="{{$row->id}}">
									<input type="hidden" name="total" value="{{$row->price}}">
								
									

									<input type="hidden" name="user" value= "<?php echo session()->get('user_session'); ?>"/>
									
								
							</div>
						</div>
					</div>
					

</form>

                    @endforeach

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