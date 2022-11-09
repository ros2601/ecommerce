<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\Models\business;
use App\Models\product;
use App\Models\query;
use App\Models\cart;
use App\Models\contact;
class icontroller extends Controller
{
      //------------------------------------------------------------------------------------------

    //for logout
    public function logout()
    {
       Session::flush();
       return redirect('form');
    }
    //-------------------------------------------------------------------------------------

    //ok for registeration
    public function register(Request $request)
    {
    $add= new business;
    if($request->isMethod('post'))
    {
        $add->name=$request->get('name');
        $add->email=$request->get('email');
        $add->password=$request->get('password');
        $add->save();
    }
    return view("form");
    }
//ok for registeration
public function contact(Request $request)
{
$add= new contact;
if($request->isMethod('post'))
{
    $add->name=$request->get('name');
    $add->email=$request->get('email');
    $add->message=$request->get('message');
    $add->save();
}
return view("contact");
}
    //ok for login 
    public function login(Request $request)
    {
        $name = $request->get('name');
        $password = $request->get('password');

        $count = business::select('*')
            ->where('name', $name)
            ->where('password', $password)
            ->count();
        if ($count > 0) {
            session()->put("user_session", $name);
            return redirect("home");
        }
        return view("form");
    }
    //ok for query
    public function query(Request $request)
    {
        $add= new query;
        if($request->isMethod('post'))
        {
            $add->name=$request->get('name');
            $add->email=$request->get('email');
            $add->review=$request->get('review');
            $add->rating=$request->get('rating');
            $add->save();
        }
        return view("detail");
    }


    //for displaying dishwashers page
    public function dishwashers()
    {
    $product=product::where('category','dishwasher')->get();
    return view('dishwasher',compact('product'));
    }
    //for displaying tvs page
    public function tvs()
    {
    $product=product::where('category','TVs')->get();
    return view('dishwasher',compact('product'));
    }
    //for displaying on home page
    public function phome()
    {
        $product=product::all();
        return view('home',compact('product'));
    }
     //for displaying on camera page
     public function camera()
     {
         $product=product::where('category','Camera')->get();
         return view('dishwasher',compact('product'));
     }



    //for displaying a product
    public function showproduct($id)
    {
    $data=product::all();
    $findrec=product::where('id',$id)->get();
    return view('detail',compact('findrec','data'));
    }

    //for displaying products on homepage
    public function homeproduct()
    {
      $home=product::all()
      ->whereIn('id', [1,2,3,4])->get();
      return view('home',compact('home'));
    }

    //-------------------------------------------------------------------------------------

    //for add to cart
    public function addcart(Request $request, $id='')
    {     
        $add=product::find($id);
        echo $id;
        //$user=$name;
        //echo $user;
        if($request->isMethod('post'))
        {
        $add= new cart;

        $add->name=$request->get('name');
        $add->price=$request->get('price');
        $add->quantity=$request->get('quantity');
        $add->product_id=$request->get('id');
        $add->user=$request->get('user');

        $total=$request->get('price')*$request->get('quantity');

        if(!empty($request->file('image')))
        {
        $file=$request->file('image');
        $current=uniqid(Carbon::now()->format('Ymdhs'));
        $file->getClientOriginalName();
        $file->getClientOriginalExtension();
        $fullfilename=$current.".".$file->getClientOriginalExtension();

        $destinationPath=public_path('cart');
        $file->move($destinationPath,$fullfilename);
        $add->image=$fullfilename;
        }
        $add->total=$total;
        $add->save();
       }
       return view("detail");
  }
  
    //for displaying products on cartpage
    public function cartproduct(Request $request,$user='')
    {
        echo $user;
        //$user->user=$request->get($user);
        //  print_r($user);
        $cart=cart::all()->where('user',$user);
        if($cart)
        {
        return view('cart',compact('cart'));
        }
    }

   
    //to delete items in cart
    public function remove($id)
    {  
      $obj= cart::find($id);
      $obj->delete();                                                                                                                                                                                                                                                                                                                                                                                       
    }
    
}
