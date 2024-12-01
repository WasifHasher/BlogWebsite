<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      @include('home.homeCss')
   </head>
   <body>
      <!-- header section start -->
     @include('home.homeHeader')
    
     <div class="container">

    
        <div class="row justify-content-center">
            @foreach ($myPost as $item)
            <div class="col-4 ps-5">


                    
                <img src="Products/{{$item->image}}" height="400px" width="300px" class="mt-5 rounded" alt="">
                <h4 class="mt-3">{{$item->title}}</h4>
                <h4 class="w-100">{{$item->desc}}</h4>
                <h4>{{$item->usertype}}</h4>
                <a href="{{ url('deletePost/'.$item->id)}}" onclick="return confirm('Do you want to Delete Data.')" class="btn btn-danger px-3 w-75 ms-2">Delete</a>
            </div>
            @endforeach
        </div>
     </div>
    

   



      <!-- choose section end -->
      <!-- footer section start -->
     @include('home.homeFooter')
      <!-- copyright section end -->
      <!-- Javascript files-->
     @include('home.homeScript')   
   </body>
</html>