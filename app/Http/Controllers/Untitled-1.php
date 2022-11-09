<div class="contact">
						<div class="contact-us" align="center" >
							<p>My Cart</p>
						</div>
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