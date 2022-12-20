<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
class AdminController extends Controller
{
//---------------------------------------    admin() -----------------------------
    //This method is called open the admin page (link: .../ticktock/admin)
    public function admin(){
            //Admin page has two option including products table and repairing table
            //get the products's info from the 'products' table
            $watches=DB::table('products')->get();
            //get the repairing's info from the 'repairing' table
            $repairing=DB::table('repairing')->get();
            //pass two array to the admin page
            return view('Admin/admin',compact('watches', 'repairing'));
    }
//---------------------------------------    add_watch() -----------------------------
    //This method is called when user click the 'Add Watch' button in the bottom of the admin page
    public function add_watch(){
        //insert new row in the 'products'table with brand name is 'New'
        $inserarr=[
            'brand'=>'New',
        ];
        DB::table('products')->insert($inserarr);
    }
//---------------------------------------    remove_watch() -----------------------------
    //This method is called when user click the 'Remove' button in the admin page
    //'Remove' button has their id. this is the id that will be delete.
    public function remove_watch(){
        //receive the watch is that will be delete from the admin page with post method(using form)
        $data=Input::all();
        $remove_id=$data['remove_id'];
        DB::table('products')
            ->where('id',$remove_id)
            ->delete();
    }

//---------------------------------------    remove_message() -----------------------------

    public function remove_message(){
        //receive the watch is that will be delete from the admin page with post method(using form)
        $data=Input::all();
        $remove_id=$data['remove_id'];
        DB::table('repairing')
            ->where('id',$remove_id)
            ->delete();
    }

//---------------------------------------    upload_watches() -----------------------------
    //This method is called when user click the 'Save changes' button on the modal
    //this modal display when click the update button on the admin page
    public function upload_watches(){
        //receive the watch's data that will be update
        $data=Input::all();
        $brand=$data['brand'];
        $gender=$data['gender'];
        $type=$data['type'];
        $shape=$data['shape'];
        $price=$data['price'];
        $quantity=$data['quantity'];
        $description=$data['description'];
        $watch_id=$data['watch_id'];
        DB::table('products')
            ->where('id', $watch_id)
            ->update([
                'brand' => $brand,
                'gender' => $gender,
                'type' => $type,
                'shape' => $shape,
                'price' => $price,
                'quantity' => $quantity,
                'description' => $description,]);
        return redirect('admin');
    }
//---------------------------------------    view_message() -----------------------------
    //This method is called when user click the 'MESSAGE' tag on the header of the admin page
    public function view_message(){
        // get the data from the 'repairing' table
        // There is the message that user sent to the admin to repair their watches.
        $message=DB::table('repairing')->get();
        return view('Admin.view_message',compact('message'));
    }
//---------------------------------------    view_recommend() -----------------------------
    //This method is called when user click the 'RECOMMEND' tag on the header of the admin page
    //Admin can see the recommendation that user written
    public function view_recommend(){
        $recommendation=DB::table('recommendation')->get();
        return view('Admin.view_recommendation',compact('recommendation'));
    }
//---------------------------------------    upload_repairing() -----------------------------
    //This method is called when user click the 'Save changes' button on the modal
    //This modal display when admin click the 'Update' button on the admin page's repairing option.
    public function upload_repairing()
    {
        //receive the current repairing state
        $data = Input::all();
        $id = $data['id'];
        $progress = $data['progress'];
        $description = $data['description'];
        $price = $data['price'];
        //update new date and reload admin page
        DB::table('repairing')
            ->where('id', $id)
            ->update([
                'progress' => $progress,
                'description' => $description,
                'price' => $price,
                ]);
        return redirect('admin');

    }
//---------------------------------------    upload_watch_img() -----------------------------
    //This method is called when Admin click the 'save' in the admin page
    public function upload_watch_img()
    {
        //receive the row id that will be upload
        //here the row id is appear with upload_watch_id
        $data = Input::all();
        $upload_watch_id= $data['upload_watch_id'];
        $file_result = "";
        /*
            Once the form is submitted information about the uploaded file can be accessed via PHP global array called $_FILES
            $_FILES["file"]["error"]  This array value specifies error or status code associated with the file upload
            for example, it will be 0, if there is no error
            here , if the value is big than 0, it is error.
        */

        if ($_FILES["file"]["error"] > 0) {
            $file_result .= "No File Uploaded or Invalid File";

        } else {
            /*
              $_FILES["file"]["name"]  This array value specifies the original name of the file,
                                       including the file extension. It doesn't include the file path.
              $_FILES["file"]["type"]  This array value specifies the MIME type of the file
              $_FILES["file"]["tmp_name"]  This array value specifies the temporary name including
                                           full path that is assigned to the file once it has been uploaded to the server
             */

            $file_result .= "Upload: " . $_FILES["file"]["name"] . "<br>" .
                "Type: " . $_FILES["file"]["type"] . "<br>" .
                "Size: " . ($_FILES["file"]["tmp_name"] . "<br>");

            //move_uploaded_file() This is the path of the file.
            move_uploaded_file($_FILES["file"]["tmp_name"], "public/img/watch/" . $_FILES['file']['name']);
            //$upload_file_path  This is the path that upload to the 'products' table
            $upload_file_path = "img/watch/" . $_FILES['file']['name'];

            DB::table('products')
                ->where('id', $upload_watch_id)
                ->update([
                    'path' => $upload_file_path,
                ]);
            return redirect('admin');
        }
    }

//---------------------------------------    view_history() -----------------------------
    //This method is called when user click the 'purchase state' tag on the header of the admin page
    public function view_history(){
        $history=DB::table('buy_history')->get();
        return view('Admin.purchase_history',compact('history'));
    }

    //---------------------------------------    remove_history() -----------------------------
    public function remove_history(){
        $data=Input::all();
        $remove_id=$data['remove_id'];
        DB::table('buy_history')
            ->where('id',$remove_id)
            ->delete();
    }



}
