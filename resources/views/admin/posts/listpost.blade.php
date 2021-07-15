@extends('admin.layout.master')

@section('content')


<div class="container-login100">
  <h2 style="margin-top:4px">Post List</h2>
  <div style="background-color:#ffffffe0; width:100%;
     padding:0%;
    height:100%">


@include('admin.layout.messages')

     <table id ='customers' border ='1'>
      <tr>
        <th> Id</th>
      <th> Titel</th>
      <th>Body</th>
     <th>Post_image</th>
      <th>View</th>
     <th>Feature </th>
      <th>Create_at</th>
     <th colspan='3'>Opertions</th>
     </tr>

      <button  class='button' id='button1'><a style='color:#FFF' href ='{{ route('post.create') }}' > <i class='fa fa-plus'></i>          Add New Post</a></button>


@foreach ( $posts as $post)


             <tr>
             <td> {{ $loop->iteration }}</td>
              <td>{{ $post->title }}</td>
              <td>{{ $post->body }}</td>
             <td> <img width='150'  src="{{ asset('post_images/'.$post->post_image)}}"> </td>
              <td>{{ $post->view }}</td>
              <td>{{ $post->feature }}</td>
             <td>{{ $post->created_at }}</td>

             <td><a href="{{ route('post.edit',$post) }}"><button class='button'  id='button2' name=""><i class='fa fa-edit'></button></a></td>
             </form>
              <form action="{{ route('post.destroy',$post) }}" method="post">
                @method('DELETE')
                @csrf
              <td><button class='button' id='button3'name =""><i class='fa fa-trash'></i></button></td>
              </form>

              </tr>
              @endforeach
</table>
  </div>
</div>
{{ $posts->links() }}

@endsection
