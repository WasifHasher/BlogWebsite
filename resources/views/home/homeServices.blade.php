<div class="services_section layout_padding">
    <div class="container">
       <h1 class="services_taital">Services </h1>
       <p class="services_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
       <div class="services_section_2">
          <div class="row">

            @foreach ($post as $item)
                
            <div class="col-md-4 mt-5">
               <div><img src="Products/{{$item->image}}" style="height:340px !important;width:300px;" class="rounded"></div>
               <div class="py-1">{{$item->title}}</div>
               <div class="py-0">Post by : {{$item->name}}</div>
               <a href="{{ url('details/'.$item->id)}}" class="btn btn-danger w-50 mt-2 ms-5">Details</a>
            </div>
            
            @endforeach
          </div>
       </div>
    </div>
 </div>