<!DOCTYPE html>
<html>
  <head> 
   @include('admin.csslink')

   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

   <style>
    #headingRow{
        background: greenyellow;
        color: black;
    }
    #maindata{
        color: white;
    }
   </style>
  </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
    @include('admin.navigationbar')
      <!-- Sidebar Navigation end-->
   
        <div class="page-content">

         
                @if (session('status'))
                
                <div class="alert alert-secondary">{{session('status')}}
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true" >X</button>
                </div>
                @endif
                <div class="row">
                    <div class="col-12">

                

            <table class="table table-ordered">
                <tr id="headingRow">
                    <th>Id</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>name</th>
                    <th>user_id</th>
                    <th>post_status</th>
                    <th>usertype</th>
                    <th>image</th>
                    <th>edit</th>
                    <th>Delete</th>
                    <th>Accept</th>
                    <th>Reject</th>
                </tr>


                <tbody>
                    @foreach ($showpost as $item)
                        
                    <tr id="maindata">
                        <td>{{ $item->id}}</td>
                        <td>{{ $item->title}}</td>
                        <td>{{ $item->desc}}</td>
                        <td>{{ $item->name}}</td>
                        <td>{{ $item->user_id}}</td>
                        <td>{{ $item->post_status}}</td>
                        <td>{{ $item->usertype}}</td>
                        <td>
                            <img src="Products/{{ $item->image}}" width="100px" height="50px" alt="">
                        </td>
                        <td>
                            <a href="{{ url('editPost/'.$item->id)}}" class="btn btn-success">Edit</a>
                        </td>
                        <td>
                            <a href="{{ url('deletePost/'.$item->id)}}" class="btn btn-danger" onclick="confirmation(event)">Delete</a>
                        </td>

                        <td>
                            <a href="{{ url('accept/'.$item->id)}}" class="btn btn-success" onclick="return confirm('Do you want to Active')">Accept</a>
                        </td>

                        <td>
                            <a href="{{ url('reject/'.$item->id)}}" class="btn btn-danger" onclick="return confirm('Do you want to Nonactive')">Reject</a>
                        </td>

                       
                    </tr>
                    @endforeach
                </tbody>


            </table>

        </div>
    </div>

        </div>



    </div>
    <!-- JavaScript files-->
    @include('admin.script')

    <script>

        function confirmation(ev){
            ev.preventDefault();

            var url = ev.currentTarget.getAttribute('href');

            swal({
                title : 'Are you want to Delete this post',
                text : 'Deleted brother',
                icon : 'warning',
                buttons : true,
                dangerMode : true,
            })
            .then((willCancel) =>
            {
                if(willCancel){
                    window.location.href=url;
                }
            }
        );



        }


    </script>
    
  </body>
</html>