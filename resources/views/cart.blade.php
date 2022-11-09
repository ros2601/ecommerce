<!DOCTYPE html>
<html>
<head>
	<title>ENEST-5</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
				
				
			<table class="table table-hover">
						<thead>
                           <tr>
                            <h1 align=center>My Cart</h1>
                          </tr>
                        </thead>
</table>
						<table class="table table-hover">
                        <thead>
                           <tr>
                           <th scope="col">Name</th>
                           <th scope="col">Individual Price</th>
                           <th scope="col">Quanity</th>
                           <th scope="col">Total</th>
	                       <th scope="col">Remove</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($cart as $row)
                          <tr>
                          <th scope="row">{{$row->name}}</th>
                          <td>{{$row->price}}</td>
	                      <td>{{$row->quantity}}</td>
                          <td>{{$row->total}}</td>
	                      <td><button style=" text-decoration:none; color:white;"><a href="{{url('/remove-item/'.$row->id)}}">Remove</a></button></td>
	                    @endforeach
                         </tr>
                        </tbody>
                        </table>
                      

						<!-- <table>
						<
						$sum=0;
					    
							$total=$sum+$row->total;

                       
						echo "Total="; echo $total;
					
                       </table> -->

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