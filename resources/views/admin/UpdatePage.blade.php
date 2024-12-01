<!DOCTYPE html>
<html>
  <head> 
      <base href="/public">
   @include('admin.csslink')
  </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
    @include('admin.navigationbar')
      <!-- Sidebar Navigation end-->
    <div class="page-content">

        <div class="container mt-5">

            

            <h2 class="text-white">Update Posts</h2>
            <div class="row">

                <div class="col-6 shadow py-3" style="box-shadow: 4px 6px 9px white;" >

                    <form action="{{ url('SaveUpdatePost/'.$update->id)}}" method="POST" enctype="multipart/form-data">
                       
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <input type="text" class="form-Control w-100 py-2 rounded pl-2 text-white" value="{{$update->title}}" style="background: rgb(49, 49, 49);" placeholder="Title" name='title'>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-Control w-100 py-2 rounded pl-2 text-white" value="{{$update->desc}}"  style="background: rgb(49, 49, 49);" placeholder="Description" name='description'>
                        </div>

                        <div class="form-group">
                            <input type="file" class="form-Control w-100 py-2 rounded pl-2 text-white" onchange="document.querySelector('#image').src=window.URL.createObjectURL(this.files[0])" value="{{$update->image}}"  style="background: rgb(49, 49, 49);" placeholder="Image" name='image'>
                            <img src="Products/{{$update->image}}" class="mt-2" id="image" height="60px" width="100px" alt="">
                        </div>

                        <button class="btn btn-success">Update</button>
                    </form>

                </div>
            </div>
        </div>
    </div>



    </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.script')

    
  </body>
</html>