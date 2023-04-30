<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\New\Complaint;
use Carbon\Carbon;
use Auth;
use App\Models\User;
class UserController extends Controller
{
    public function all_user_list(){

        $users = User::all();

    return view('backend.user.all-user-list',compact('users'));

    }

    public function show_user_details($id){
        $user= User::where('id',$id)->first();
    return view('backend.user.show-user-details',compact('user'));

    }

    public function create_user_page(){

    return view('backend.user.create-user');

    }

    public function edit_user_page($id){
        $user= User::where('id',$id)->first();
    return view('backend.user.edit-user',compact('user'));

    }

    


    public function delete_user($id){
        $user= User::where('id',$id)->first();
        $user->delete();
        if ($user==true) {
             return back()->with('success','User delete Successfully');
        }else{
             return back()->with('success','You cant deleted this item');
        }
   

    }

    public function complain_page(){

      
        

    return view('frontend.complain-page');

    }

    public function create_complain(Request $request){

        $complain= new Complaint();
        $complain->complaint_date= Carbon::now();
        $complain->customer_id= Auth::user()->id;
        $complain->complaint_description= $request->complaint_description;
        $complain->save();
        

    return back()->with('success','Successfully Create Complain');

    }


}
