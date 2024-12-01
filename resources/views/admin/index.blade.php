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
     @include('admin.mainContent')
    </div>
    <!-- JavaScript files-->
    @include('admin.script')

    
  </body>
</html>