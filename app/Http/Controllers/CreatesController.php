<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Article;

class CreatesController extends Controller
{
    public function home(){
    	//$articles = Article::all()->paginate(5);
        $articles = DB::table('articles')->paginate(5);
    	return view('home', ['articles' => $articles]);
    	//print_r($articles);
    }
    
    public function add(Request $request){
    	$this->validate($request , [
            'title' => 'required',
            'description' => 'required'
    	]);
        $articles = new Article ;
        $articles->title = $request->input('title');
        $articles->description = $request->input('description');
        $articles->save();
        return redirect('/')->with('info','Article Save successfully!');
    }

    public function update($id){
        $articles = Article::find($id);
        return view('update', compact('articles'));
    }

    public function edit(Request $request ,$id){
        $this->validate($request , [
            'title' => 'required',
            'description' => 'required'
        ]);
        $data = array(
            'title' => $request->input('title'),
            'description' => $request->input('description')
        );
        Article::where('id',$id)->update($data);
        return redirect('/')->with('info','Article Updated successfully!');

    }

    public function read($id){
        $articles = Article::find($id);
        return view('read', compact('articles'));
    }

    public function delete($id){
        Article::where('id',$id)->delete();
        return redirect('/')->with('info','Article Deleted successfully!');
    }
}
