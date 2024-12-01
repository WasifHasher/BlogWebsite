<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <base href="/public">
      @include('home.homeCss')

      <style>

   #img:hover {
    z-index: 1;
      transform: scale(0.5);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }
      </style>

   </head>
   <body>
       
    <!-- header section start -->
    @include('home.homeHeader')
    <!-- header section end -->

           <div class="container">
            <div class="row justify-content-center">
                <div class="col-10">


                    <div class=" mt-4" style="height:340px !important;width:500px;" id="img">
                        <img src="{{ url('Products/'.$details->image)}}" class="h-100 rounded" alt="">
                    </div>
                    <div class="">
                        <h2>{{$details->title}}</h2>
                        <h4>{{$details->desc}}</h4>
                        <div class="d-flex ">
                            
                            <h5 class="pe-4">{{$details->name}}</h5>
                            <h4>{{$details->user_id}}</h4>
                            <h4 class="px-4">{{$details->post_status}}</h4>
                            <h4>{{$details->usertype}}</h4>
                        </div>
                    </div>
                </div>
            </div>
           </div>


      
      <!-- header section end -->
      @include('home.homeFooter')
      <!-- Javascript files-->
     @include('home.homeScript')   
   </body>
</html>