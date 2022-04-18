<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    private function membership_name(){
        $membership = DB::table('membership')->get();
        $membership_name = "NULL";
        if (empty($membership[0]) !== true){
            $membership_name = $membership[0]->membership_name;
        }
        return $membership_name;
    }
    
    public function details(){
        $membership = DB::table('membership')->get(); 
        if (empty($membership[0]) !== true){
            return view('details', [
                'pageTitle' => 'Details',
                'membership_name' => $this->membership_name(),
                'membership' => $membership[0]
            ]);    
        }else {
            return view('details', [
                'pageTitle' => 'Details',
                'membership_name' => "NULL",
            ]);
        }
    }

    public function plans(){
        return view('plans', [
            'pageTitle' => 'Plans',
            'membership_name' => $this->membership_name()
        ]);
    }

    public function classes(){
        return view('classes', [
            'pageTitle' => 'Classes',
            'membership_name' => $this->membership_name()
        ]);
    }

    public function editDetails($id){
        $membership = DB::table('membership')->where('id', $id)->get(); 
        return view('editDetails', [
            'pageTitle' => 'Details',
            'membership_name' => $this->membership_name(),
            'membership' => $membership[0]
        ]);
    }

    public function updateDetails(Request $request){
        DB::table('membership')->where('id', $request->id)->update([
            'membership_name' => $request->name,
            'membership_duration' => $request->duration,
            'membership_classes' => $request->classes,
            'membership_price' => $request->price,
            'membership_discount_percentage' => $request->discount,
            'membership_offer_name' => $request->offer,
            'membership_status' => $request->status
        ]);
        return redirect('/');
    }

    public function deleteDetails($id){
        DB::table('membership')->where('id', $id)->delete();
        return redirect('/');
    }
}
