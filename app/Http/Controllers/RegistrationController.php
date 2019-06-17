<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\users_tbl;

class RegistrationController extends Controller
{
    public function display(){
        $users = DB::table('users_tbls')->paginate(5);
    	return view('registration', compact('users'));
    	//print_r($articles);
    }

    //created a new function to download images for viewing 
	public function download(){
		$download=DB::table('users_tbls')->get();
		print_r($download);
		//return view('registration', compact('download'));
    }
    
    public function store(Request $request){
    	$this->validate($request , [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'degree' => 'required',
            'gender' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png|max:30000' // max 30000kb
    	]);


        $users = new users_tbl ;
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->password = $request->input('password');
        $users->degree = $request->input('degree');
        $users->gender = $request->input('gender');
        if($request->hasfile('image')){
           $file = $request->file('image');
           $extension = $file->getClientOriginalExtension();
           //$filename = $img->getClientOriginalName();
           $filename = time().'.'.$extension;
           $file->move(public_path('uploads'),$filename);
           $users->image = $filename;
    	}else{
           return $request ;
           $users->image = '';
    	}
        $users->save();
        return redirect('/list')->with('info','Registration successfully!');
    }

    public function update($id){
        $users = users_tbl::find($id);
        return view('updateform', compact('users'));
    }

    public function edit(Request $request ,$id){
        $this->validate($request , [
             'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'degree' => 'required',
            'gender' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,JPG,JPEG,PNG|max:30000'
        ]);
        
        if($request->hasfile('image')){
           $file = $request->file('image');
           $extension = $file->getClientOriginalExtension();
           //$filename = $img->getClientOriginalName();
           $filename = time().'.'.$extension;
           $file->move(public_path('uploads'),$filename);
           //$users->image = $filename;
           $data = array(
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'degree' => $request->input('degree'),
            'gender' => $request->input('gender'),
            'image' => $filename
        );
    	}else{
    		//
    	}
        users_tbl::where('id',$id)->update($data);
        return redirect('/list')->with('info','Form Updated successfully!');

    }

    public function read($id){
        $users = users_tbl::find($id);
        return view('readform', compact('users'));
    }

    public function delete($id){
        users_tbl::where('id',$id)->delete();
        return redirect('/list')->with('info','From Record Deleted successfully!');
    }

}
