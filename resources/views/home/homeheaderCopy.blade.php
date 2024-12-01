<div class="header_section">
    <div class="header_main">
       <div class="mobile_menu">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
             <div class="logo_mobile"><a href="index.html"><img src="images/logo.png"></a></div>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                   <li class="nav-item">
                      <a class="nav-link" href="index.html">Home</a>
                   </li>
                   <li class="nav-item">
                      <a class="nav-link" href="about.html">About</a>
                   </li>
                   <li class="nav-item">
                      <a class="nav-link" href="services.html">Services</a>
                   </li>
                   <li class="nav-item">
                      <a class="nav-link " href="blog.html">Blog</a>
                   </li>
                   <li class="nav-item">
                      <a class="nav-link " href="contact.html">Contact</a>
                   </li>
                </ul>
             </div>
          </nav>
       </div>
       <div class="container-fluid">
          <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
          <div class="menu_main">
             <ul>
                <li class="active"><a href="/">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="services.html">Services</a></li>

                @if(Auth::check() && Auth::user()->name) 
                <li><a href="/logout">Logout</a></li>
               

              <li><h5>{{ Auth::user()->name}}</h5></li>
                <li><a href="{{ url('/post_created')}}">Post Create</a></li>
                  
              @else
               <li><a href="login">Login</a></li>
               <li><a href="{{ route('register')}}">Register</a></li>
              
              @endif


             
             </ul>
          </div>
       </div>
    </div>
    <!-- banner section start -->
    <div class="banner_section layout_padding">
       <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
             
            
            <div class="container">
               <h3 class="text-white" style="margin-left: 22%;">Post</h3>
               <div class="row">
                  <div class="col-9">

                     

     <form action="/SavePost" method="POST" enctype="multipart/form-data" class="" style="margin-left: 30%;">
      @csrf
        <div class="form-group">
            <input type="text" name="title" class="Form-Control w-100 py-2 rounded ps-3" placeholder="Title">
        </div>
  
        <div class="form-group">
            <input type="text" name="description" class="Form-Control w-100 py-2 rounded ps-3" placeholder="Description">
        </div>
  
        <div class="form-group">
            <input type="file" name="image" class="Form-Control w-100 py-2 rounded">
        </div>
  
        <input type="submit" class="btn btn-danger rounded px-4" value="Save">
  
    </form> 

                  </div>
               </div>
            </div>

          </div>
       </div>
    </div>
    <!-- banner section end -->
 </div>