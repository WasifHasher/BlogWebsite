<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\Models\post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;


class adminController extends Controller
{

    public function index(){
        return view('admin.index');
    }


    public function addPost(Request $req){

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
            $file = $req->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.' .$ext;
            $file->move('Products/', $filename);
            $post->image = $filename;

        }

        $post->save();

        return redirect()->back()->with('status','Your data is Successfully added.');



    }


    public function showPost(){
        $showpost = post::get();
        return view('admin.showPost',compact('showpost'));
    }


    public function show_update_page(string $id){

        $update = post::find($id);

        return view('admin.UpdatePage',compact('update'));

    }


    public function SaveUpdatePost(Request $req,string $id){


        $user = Auth()->user();
        $user_id = $user->id;
        $User_name =$user->name;

        $post = post::find($id);

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

        return redirect('/showPosts')->with('status','Your data is Successfully Update.');




    }


    public function accept(string $id){

        $accept = post::find($id);

        $accept->post_status = 'Active';

        $accept->save();
        return redirect('/showPosts');

    }

    public function reject(string $id){

        $accept = post::find($id);

        $accept->post_status = 'NoNactive';

        $accept->save();
        return redirect('/showPosts');

    }


















    public function deletePost(string $id){

            $deletePost = post::find($id);

            $path = public_path('Products/'.$deletePost->image);

            if(File_exists($path)){
                unlink($path);
            }

            $deletePost->delete();

            return redirect()->back()->with('status','Your data is Successfully Deleted.');

    }

   
}
