<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function users(){
        $data=User::all();
        return view('Admin.allusers',['data'=>$data]);  
    }
    public function MakeTeacher($id){
        $result= User::where('id', $id)->update(['UserType'=>'teacher']);
        if ($result) {
            return redirect()->back()->with('success', 'data updated successfully');
        }
    }
    public function MakeStudent($id){
        $result= User::where('id', $id)->update(['UserType'=>'student']);
        if ($result) {
            return redirect()->back()->with('success', 'data updated successfully');
        }
    }
    public function Delete($id){
        $result = User::destroy($id);
        if ($result) {
            return redirect()->back()->with('success', 'data updated successfully');
        }
    }


  
    
}
