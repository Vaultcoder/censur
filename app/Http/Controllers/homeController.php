<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Sweden;
use App\Syria;
use App\User;
use App\India;
use App\China;
use App\Country_list;
use Request;
use DB;
use App\Quotation;

class homeController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function showHome()
    {



        // $try = Country_list::with('Sweden','India','Syria','China','Vietnamn')->get();
        $try = Country_list::with('Sweden','India','Syria','China','Vietnamn')->get();
        var_dump($try);



        $con = Country_list::all();
        $sweden = Sweden::all();

        
        $country = Request::input('country');   
        $id = Request::input('id');
        // $test = DB::table('Country_list')->where('id', $id)->get();
        $data = DB::table('users')->where('id', $id)->get();

    
        // $test = App\Country_list::find(1);
        
        // $test->sweden()->where('active', 1)->get();


        return view('home')
            ->with('swe', $sweden)
            // ->with('syr', $syria)
            ->with('home', $data)
             ->with('try', $try);


    }

        public function Details()
        {
            $id = Request::input('id');
            $data = DB::table('users')->where('id', $id)->get();
            $user = DB::table('users')->where('id', $id)->get();
        
            return view('details')->with('details', $data)->with('user', $user);
        }

}