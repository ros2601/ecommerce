<!DOCTYPE html>
<html>
<head>
	<title>ENEST-3</title>
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
					<div class="items" >
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
                @if(isset($findrec[0]))
				<form action="{{url('cart-form/'.$findrec[0]->id)}}"  method="post" > 
                {{csrf_field()}}
				
				<div class="contact">
					<div class="contact-us">

						<p>{{isset($findrec[0]->category) ? $findrec[0]->category:""}}</p>
					</div>
					<div class="dish-info">
						<div class="machine-pic">
							<div class="img">
					  
						<img name="image" src="{{asset('images/'. $findrec[0]->image)}}"/>
							</div>
							<div class="stock" style="border:none;">
								<h2>In Stock: <input type="text" name="stock" value="{{isset($findrec[0]->stock) ? $findrec[0]->stock:""}}" style="border:none;"/></h2>
							</div>

						</div>
						<div class="machine-info">
							<div class="washer">
								<p>	{{isset($findrec[0]->name) ? $findrec[0]->name:""}}</p>
							</div>
							<div class="model-info">
								<span>Model: <input type="text" name="name" value="{{isset($findrec[0]->model) ? $findrec[0]->model:""}}" style="border:none;"/></span>
								<p>Manufacturer: {{isset($findrec[0]->manufacturer) ? $findrec[0]->manufacturer:""}}</p>
							</div>
							<div class="quantity">

									<table>
										<tr>
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
										</td>
										</tr>
									</table>
			
								<div class="price">
									<span>Rs.<input type="text" name="price" value="{{isset($findrec[0]->price) ? $findrec[0]->price:""}}" style="border:none;"/></span>
								</div>
							</div>
				
					        <input type="hidden" name="user" value= "<?php echo session()->get('user_session'); ?>"/>
							
							<div class="cart">
								<input type="submit" name="cart" value="Add to Cart">
							</div> 
            
							<!-- <div class="checkout">
								<input type="submit" name="" value="checkout">
							</div> -->
						</div>
					</div>

                    </form>
					@endif

					<div class="info">

					<form method="post" action="{{url('query-form')}}" > 
                        {{csrf_field()}}
							<table class="table-info">
								<tr>
									<td class="nme">Enter name</td>
									<td><input type="text" name="name"></td>
								</tr>
								<tr>
									<td class="nme">Enter Email</td>
									<td><input type="email" name="email"></td>
								</tr>
								<tr>
									<td class="nme">Enter Review</td>
									<td><textarea name="review"></textarea></td>
								</tr>
								<tr>
									<td class="nme">Rating</td>
									<td><input type="rating" name="rating"></td>
								</tr>
								<tr>
									<td class="btnn-1">
										<input type="submit" name="" value="Submit query">
									</td>
								</tr>
							</table>
						</form>


					</div>
				</div>
				<div class="list-1">
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
				</div>
			</div>
		</div>
	</div>
</body>
</html>