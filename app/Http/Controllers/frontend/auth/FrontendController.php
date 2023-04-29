<?php

namespace App\Http\Controllers\frontend\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\New\Complaint;
use Carbon\Carbon;
use Auth;
class FrontendController extends Controller
{
    public function login_page(){

        

    return view('frontend.auth.login-page');

    }

    public function register_page(){

        

    return view('frontend.auth.register-page');

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
