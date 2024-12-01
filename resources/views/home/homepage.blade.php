<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      @include('home.homeCss')
   </head>
   <body>
      <!-- header section start -->
     @include('home.homeHeader')
     
      <!-- header section end -->

      <!-- services section start -->
     @include('home.homeServices')
      <!-- services section end -->
      <!-- about section start -->
     @include('home.homeAbout')
      <!-- about section end -->
      <!-- blog section start -->
     @include('home.homeVideos')
      <!-- blog section end -->
      <!-- client section start -->
     @include('home.homeTestimonial')
      <!-- client section start -->
      <!-- choose section start -->
     @include('home.homeChoose')
      <!-- choose section end -->
      <!-- footer section start -->
     @include('home.homeFooter')
      <!-- copyright section end -->
      <!-- Javascript files-->
     @include('home.homeScript')   
   </body>
</html>