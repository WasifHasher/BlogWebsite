<!DOCTYPE html>
<html>
  <head> 
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

            @if (session('status'))
                
            <div class="alert alert-success">{{session('status')}}
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true" >X</button>
            </div>
            @endif

            <h2 class="text-white">Add Posts</h2>
            <div class="row">

                <div class="col-6 shadow py-3" style="box-shadow: 4px 6px 9px white;" >

                    <form action="SavePost" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-Control w-100 py-2 rounded pl-2 text-white" style="background: rgb(49, 49, 49);" placeholder="Title" name='title'>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-Control w-100 py-2 rounded pl-2 text-white"  style="background: rgb(49, 49, 49);" placeholder="Description" name='description'>
                        </div>

                        <div class="form-group">
                            <input type="file" class="form-Control w-100 py-2 rounded pl-2 text-white"  style="background: rgb(49, 49, 49);" placeholder="Image" name='image'>
                        </div>

                        <button class="btn btn-success">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

    </div>
    <!-- JavaScript files-->
    @include('admin.script')

    
  </body>
</html>