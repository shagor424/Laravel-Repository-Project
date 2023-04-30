<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\New\Complaint;
use Carbon\Carbon;
use Auth;
use App\Models\User;
class DashboardController extends Controller
{
    public function index(){

       

    return view('backend.layouts.home');

    }

    public function create_user(){

    return view('backend.user.create-user');

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
