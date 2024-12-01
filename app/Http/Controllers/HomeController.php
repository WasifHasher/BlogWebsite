<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\post;

class HomeController extends Controller
{
    public function homepage(){

        $post = post::where('post_status','=','active')->get();
       return view('home.homepage',compact('post')); 
    }


    public function index(){

        if(Auth::id()){

            $check = Auth()->user()->usertype;

            if($check == 'user'){
                $post = post::where('post_status','=','active')->get();
                return view('home.homepage',compact('post'));
            }
            elseif($check == 'admin'){
                return view('admin.index');
            }
            else{
                return redirect()->back();
            }

        }
    }

    public function detailsFunction(string $id){

        $details = post::find($id);

        return view('home.homedetailPage',compact('details'));


    }



    public function post_created(){

        return view('home.PostCreatePage');
    }


    public function SavePost(Request $req){


    
        $user = Auth()->user();
        $user_id = $user->id;
        $User_name =$user->name;

        $post = new post;

        $post->title = $req->title;
        $post->desc = $req->description;
        $post->name = $User_name;
        $post->user_id = $user_id;
        $post->post_status = 'active';
        $post->usertype = $user->usertype;

        if($req->hasfile('image')){

            $destination = 'Products/'.$post->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
        }


        if($req->hasfile('image')){
            $file = $req->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.' .$ext;
            $file->move('Products/', $filename);
            $post->image = $filename;

        }

        $post->save();

        return redirect('/')->with('status','Your data is Successfully Added.');
    }


    public function my_post(){

        $user = Auth()->user();
        $user_id = $user->id;

        $myPost = post::where('user_id','=',$user_id)->get();

        return view('home.homeMyPost',compact('myPost'));
    }


    public function deletePost(string $id){

        $deletePost = post::find($id);

        $path =  public_path('Products/'.$deletePost->image);

        if(File_exists($path)){
            unlink($path);
        }

        $deletePost->delete();

        return redirect()->back();
    }


}
