<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
use Auth;
use App\Mail\DemoMail;

use Mail;
use App\Tickets;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
//use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{

//----------------------------------------    products() ---------------------------------

/*
When open the product page, this method is called.
All watches of 'products' table in DB will display on the pro page.
*/
    public function products(){

            $watches=DB::table('products')->get();  //products is the table name and  get->() is the method that get all record from table.
//            $email = Auth::user()->email;
//            Mail::to($email)->send(new DemoMail());
            return view('home',compact('watches')); //Compact creates an array containing variables and their values and pass into the home.blade.php

        }




//---------------------------------------    search_products() -----------------------------
    /*
   This method is called when user click search button.
   In this search functionality, user can search watches with search bar and
    some select option including gender, shape and type.
   search bar->brand(rolex, seiko)
   gender(male, female)
   shape(circle, rect)
   type(metal, leather, rubber, ceramic, automatic )
   Users can search for certain types of options.
    */
    public function search_products()
    {

        $data=input::all();     //get all passing parameter through post method (these parameter is passing from home.blade.php when click the search button)
        $search_word=$data['search_word'];      //search bar's parameter
        $gender=$data['gender'];        //gender option's parameter
        $shape=$data['shape'];      //shape option's parameter
        $type=$data['type'];    //type option's parameter

        //When pass parameter into the controller, the value(for example 1,2 ,,,) is passed.
        //So using switch(), have to separate.

        switch ($gender)
        {
            case '1': $gender = "male"; break;
            case '2': $gender = "female"; break;
            default : $gender = "unknown";
        }
        switch ($shape)
        {
            case '1': $shape = "circle"; break;
            case '2': $shape = "rect"; break;
            default : $shape = "unknown";
        }
        switch ($type)
        {
            case '1': $type = "metal"; break;
            case '2': $type = "leather"; break;
            case '3': $type = "rubber"; break;
            case '4': $type = "ceramic"; break;
            case '5': $type = "automatic"; break;
            default : $type = "unknown";
        }

        //-------Gender is not selected---------
         /*
          (Note : In this case, the search bar's parameter is selected always
                  The search result is the watches that including search_word)
          - When gender is not selected, shape is not selected and type is not selected, the total search result in the only search bar 's result
            That is, only about the brand's search results will be display on the products page
          - When gender is not selected, shape is not selected and type is selected, the total search result in the search bar and type's result
            That is , only about the brand and type results will be display on the products page
          - When gender is not selected, type is not selected and shape is selected, the total search result in the search bar and shape's result
            That is , only about the brand and shape results will be display on the products page
         */


        if($gender=='unknown')
        {
            if($shape == 'unknown')
            {
                if($type == 'unknown')
                {
                    $watches=DB::table('products')->where('brand', 'LIKE', "%{$search_word}%")->get();
                            //On the products table,  select the brand including search_word
                    return view('home',compact('watches'));
                            //Send the array containing watches valuables into the home.blade.php
                }
                $watches=DB::table('products')->where('brand', 'LIKE', "%{$search_word}%")->where('type', $type)->get();
                            //On the products table,  select the watches that brand is $search_word and type is $type.
                            //Follow code is same principle
                return view('home',compact('watches'));
            }
            if($type == 'unknown')
            {
                if($shape == 'unknown')
                {
                    $watches=DB::table('products')->where('brand', 'LIKE', "%{$search_word}%")->get();
                    return view('home',compact('watches'));
                }
                $watches=DB::table('products')->where('brand', 'LIKE', "%{$search_word}%")->where('shape', $shape)->get();
                return view('home',compact('watches'));
            }
            $watches=DB::table('products')->where('brand', 'LIKE', "%{$search_word}%")->where('type', $type)->where('shape', $shape)->get();
            return view('home',compact('watches'));
        }
        //-------Shape is not selected---------

        if($shape=='unknown')
        {
            if($gender == 'unknown')
            {
                if($type == 'unknown')
                {
                    $watches=DB::table('products')->where('brand', 'LIKE', "%{$search_word}%")->get();
                    return view('home',compact('watches'));
                }

                $watches=DB::table('products')->where('brand', 'LIKE', "%{$search_word}%")->where('type', $type)->get();
                return view('home',compact('watches'));
            }

            if($type == 'unknown')
            {
                if($gender == 'unknown')
                {
                    $watches=DB::table('products')->where('brand', 'LIKE', "%{$search_word}%")->get();
                    return view('home',compact('watches'));
                }

                $watches=DB::table('products')->where('brand', 'LIKE', "%{$search_word}%")->where('gender', $gender)->get();
                return view('home',compact('watches'));
            }

            $watches=DB::table('products')->where('brand', 'LIKE', "%{$search_word}%")->where('type', $type)->where('gender', $gender)->get();
            return view('home',compact('watches'));
        }
        //-------Type is not selected---------
        if($type=='unknown')
        {
            if($gender == 'unknown')
            {
                if($shape == 'unknown')
                {
                    $watches=DB::table('products')->where('brand', 'LIKE', "%{$search_word}%")->get();
                    return view('home',compact('watches'));
                }

                $watches=DB::table('products')->where('brand', 'LIKE', "%{$search_word}%")->where('shape', $shape)->get();
                return view('home',compact('watches'));
            }
            if($shape == 'unknown')
            {
                if($gender == 'unknown')
                {
                    $watches=DB::table('products')->where('brand', 'LIKE', "%{$search_word}%")->get();
                    return view('home',compact('watches'));
                }

                $watches=DB::table('products')->where('brand', 'LIKE', "%{$search_word}%")->where('gender', $gender)->get();
                return view('home',compact('watches'));
            }

            $watches=DB::table('products')->where('brand', 'LIKE', "%{$search_word}%")->where('shape', $shape)->where('gender', $gender)->get();
            return view('home',compact('watches'));
        }

        $watches=DB::table('products')->where('brand', 'LIKE', "%{$search_word}%")->where('shape', $shape)->where('gender', $gender)->where('type', $type)->get();
        return view('home',compact('watches'));

    }
//---------------------------------------    add_cart() -----------------------------
    /*
        This method is called when use click the 'Add Cart' button.
        Using this method, user add watches into the cart page.
        - When user click the 'Add Cart' button once ,the $flag is 'add', thus the selected watch will be add into the 'cart' table with $watch_id , $uid
          At once the watch_num of the 'cart' table is inserted with 1.
          And the button's text is changed with 'Success!'.
        - Contrary when user click the 'Add cart' button again, the $flag is 'delete' thus the inserted watch data will be delete from the 'cart' table.

        (flag valuable is passed from the home.blade.php using Ajax with post method)

       I used default laravel authentication.Laravel framework offers Authentication. This is the one of the advantages of Laravel framework.
       Authentication is the process of identifying the user credentials.
       Here, Auth::check() use to determine if the user is already logged into your application or not
       And Auth::user() use to get the logged user's info from 'users'table.

    */
    public function add_cart(){

        if (Auth::check()){
            $user = Auth::user();
            $uid = $user->id;

            $data=Input::all();
            $watch_id=$data['watch_id'];       //get the passing parameter from home.blade.php using Ajax
            $flag=$data['flag'];
            if($flag=="add")        //if passed parameter $flag is add, insert data into the 'cart' table
            {
                $inserarr=[
                    'watch_id'=>$watch_id,
                    'user_id'=>$uid,
                    'watch_num'=>1,
                ];
                DB::table('cart')->insert($inserarr);
            }
            if($flag=="delete")     //if passed parameter $flag is delete, delete inserted data from the 'cart'table
            {
                DB::table('cart')
                    ->where('watch_id',$watch_id)
                    ->delete();
            }
        }
    }
//---------------------------------------    cart() -----------------------------
    /*
        This method is called when use click the 'Go Cart >'tag.
      */
    public function cart()
    {
//        if (Auth::check()){
        $user = Auth::user();   //get the logged user's info from 'users'table.
        $uid = $user->id;       //get the logged user's id from 'users'table.

            $watches = DB::table('cart')    //select the watches's info join 'products' table and 'cart' table when "products" table's  id = "cart" table's watch_id
                ->where('user_id',$uid)
                ->join('products','products.id','cart.watch_id')
                ->get();

            $length=count($watches);        //select's watches's count
            if($length==0)              //if count is 0, go to the home page (when redirect to the products, go to the home page)
            {
                return redirect('products');
            }
            return view('cart',compact('watches')); //else go to the cart page , at then pass the array containing watch's info(watches).
//        }

//            return redirect('login');   //if user did not logged, go to the login page.


    }
//---------------------------------------    buy_page() -----------------------------
    //This method is called when click the 'Let's Buy' button on the Cart page
    public function buy_page($watch_id)
    {
        if (Auth::check())      //determine user is already logged into your application or not
        {
            $watches = DB::table('products')
                ->where('id',$watch_id)
                ->get();
            return view('buy',compact('watches'));
        }
        return redirect('login');
    }
//---------------------------------------    watch_buy() -----------------------------
    //This method is called when click the 'Buy' button on the buy_page
//    public function watch_buy()
//    {
//        if (Auth::check())
//        {
//            //Receive the $buy_watch_id and $buy_watch_number when click the 'Buy' button using Ajax
//            $data = Input::all();
//            $buy_watch_id = $data['buy_watch_id'];
//            $buy_watch_number = $data['buy_watch_number'];
//
//
//            //After user buy the watch, the watch don't display when open the buy_page.
//            //So after click the 'Buy' button have to delete the Purchased
//            //buy_watch_id is the purchased watch id.
//
//            $user = Auth::user();
//            $uid = $user->id;
//            $name = $user->name;
//            $email = $user->email;
//            DB::table('cart')
//                ->where('user_id', $uid)
//                ->where('watch_id', $buy_watch_id)
//                ->delete();
//
//            //After sell the watches, the quantity will be reduce as purchased number.
//            $quantity = DB::table('products')->where('id', $buy_watch_id)->value('quantity');   //The watches's quantity before user purchase watches.
//
//            //$buy_watch_number is the number of purchased by user.
//            //$remain_quantity is the remain quantity of the watches in the 'products'table
//            $remain_quantity = $quantity - $buy_watch_number;
//            //update the quantity with remain quantity in the 'products'table
//            DB::table('products')->where('id', $buy_watch_id)->update(['quantity' => $remain_quantity]);
//            //After purchase the watch , have to record the history
//            //At the recommend page , this history info used to display similar watches that user purchased.
//            $inserarr=[
//                'user_id'=>$uid,
//                'user_name'=>$name,
//                'user_email'=>$email,
//                'buy_watch_id'=>$buy_watch_id,
//                'buy_watch_num'=>$buy_watch_number,
//            ];
//            DB::table('buy_history')->insert($inserarr);
//        }
//    }

//---------------------------------------    go_send_message() -----------------------------
    //This method is called when click the 'Send us a message' button on the Cart page
    public function go_send_message()
    {
        if (Auth::check())      //determine user is already logged into your application or not
        {

            return view('send_message');
        }
        return redirect('login');
    }

//---------------------------------------    send_message() -----------------------------
    //This method is called when user click the 'send message' button on Our Service page and My repair page
    public function send_message(){
        if (Auth::check())
        {
            // get logged user info
            $user = Auth::user();
            $u_name = $user->name;
            $u_email = $user->email;

            // Receive the message data that have to repair from the Service page and My repair page (using form)
            // And insert into the 'repairing' table
            //After user send this message, Admin see this message and write repairing state about the watch that user sent.
            //Above action will control in the AdminController
            //here this send_message() method control to insert the received data.
            $data=Input::all();
            $phone=$data['phone'];
            $brand=$data['brand'];
            $type=$data['type'];
            $message=$data['message'];
            $inserarr=[
                'name'=>$u_name,
                'email'=>$u_email,
                'phone'=>$phone,
                'brand'=>$brand,
                'type'=>$type,
                'message'=>$message,
            ];
            DB::table('repairing')->insert($inserarr);
            return view('send_message');
        }
        return redirect('login');


    }
//---------------------------------------    send_recommend() -----------------------------
    //This method is called when user click the 'Submit' button on recommended for you page
    public function send_recommend(){
        if (Auth::check())
        {
            $user = Auth::user();
            $u_id = $user->id;
            $u_name = $user->name;
            $u_email = $user->email;
            $data=Input::all();
            $type=$data['type'];
            $quality=$data['quality'];
            $credit=$data['credit'];
            $come=$data['come'];
            $service=$data['service'];
            $content=$data['content'];

            $inserarr=[
                'name'=>$u_name,
                'email'=>$u_email,
                'type'=>$type,
                'quality'=>$quality,
                'credit'=>$credit,
                'come'=>$come,
                'service'=>$service,
                'content'=>$content,

            ];
            DB::table('recommendation')->insert($inserarr);

            $recommend_watch_id = DB::table('buy_history')->where('user_id', $u_id)->where('id', \DB::raw("(select max(`id`) from buy_history)"))->value('buy_watch_id');
            //In the 'products' table select the watches that same brand.
            $recommend_watch_brand = DB::table('products')->where('id', $recommend_watch_id)->value('brand');
            //In the 'products' table select the watches that same type.
            $recommend_watch_type = DB::table('products')->where('id', $recommend_watch_id)->value('type');
            //select the watches that have same brand and type
            $data=DB::table('products')
                ->where('brand', $recommend_watch_brand)
                ->where('type', $recommend_watch_type)
                ->get();

            return view('recommendation',compact('data'));
        }
        return redirect('login');
    }
//---------------------------------------    view_repairing() -----------------------------
    //This method is called when user click the 'My repair' page on every page's header
    public function view_repairing(){
        if (Auth::check())
        {
            $user = Auth::user();
            $u_email = $user->email;
            $message=DB::table('repairing')
                ->where('email', $u_email)
                ->get();
            //Passing the repairing state's info( the array containing $message ), go to the view_repairing page
            return view('view_repairing',compact('message'));
        }
        return redirect('login');

    }
//---------------------------------------    recommendation() -----------------------------
    //This method is called when user click the 'My repair' page on every page's footer
    public function recommendation(){
        if (Auth::check())
        {
            $user = Auth::user();
            $u_id = $user->id;

            //Select the max id in the 'buy_history' table
            //The reason is to know the watch recent user purchased watches.
            //In the table, max id is the recent inserted id.
            $recommend_watch_id = DB::table('buy_history')->where('user_id', $u_id)->where('id', \DB::raw("(select max(`id`) from buy_history)"))->value('buy_watch_id');
            //In the 'products' table select the watches that same brand.
            $recommend_watch_brand = DB::table('products')->where('id', $recommend_watch_id)->value('brand');
            //In the 'products' table select the watches that same type.
            $recommend_watch_type = DB::table('products')->where('id', $recommend_watch_id)->value('type');
            //select the watches that have same brand and type
            $data=DB::table('products')

                ->where('brand', $recommend_watch_brand)
                ->where('type', $recommend_watch_type)
                ->get();
            //go to the recommendation passing the array containing the valuables
            return view('recommendation',compact('data'));

        }
        return redirect('login');

    }

//---------------------------------------    view_recommend() -----------------------------
    //This method is called when user click the 'RECOMMEND' tag on the header of the admin page
    //Admin can see the recommendation that user written
    public function view_recommendations(){
        $recommendation=DB::table('recommendation')->get();
        return view('view_recommendations',compact('recommendation'));
    }


//---------------------------------------    watch_buy() -----------------------------
    public function watch_buy()
    {
        if (Auth::check())
        {

            $data = Input::all();
            $buy_watch_number = $data['shares'];
            $buy_watch_number_temp = $buy_watch_number/2;
            return $buy_watch_number_temp;
        }
    }

}
















