@extends('admin.layout.master')
<link rel="icon" type="image/png" href="{{ asset('images/icons/favicon.ico') }}"/>

@section('title')
List Users
@endsection

@section('content')

<div class="container-login100">
    <h2 style="margin-top: 0px">List Users</h2>
    <div style="background-color:#ffffffe0; width:100%;
       padding:0%;
      height:100%">

@include('admin.layout.messages')


       <table id ='customers' border ='1'>
        <tr>
        <th>ID</th>
       <th>Full Name</th>
        <th>User Name</th>
       <th>Email</th>
        <th>IMG</th>
        <th>Created_at</th>
       <th colspan='3'>Opertions</th>
       </tr>

        <button  class='button' id='button1'><a style='color:#FFF' href ='{{ route('user.create') }}' > <i class='fa fa-plus'></i>Add New User</a></button>


@foreach ($users as $user)



               <tr>
               <td>{{ $loop->iteration  }}</td>
                <td>{{ $user->fullname }}</td>
                <td>{{ $user->username }}</td>
               <td>{{ $user->email }}</td>
                <td><img  width='150'  src="{{ asset('image_user/'.$user->user_image )}}" ></td>
               <td>{{ $user->created_at }}</td>

               <td><a href='{{ route('user.edit',$user) }}'><button class='button'  id='button2' name=""><i class='fa fa-edit'></button></td>

                <form action="{{ route('user.destroy',$user) }}" method="PoST">
                @csrf
                @method('DELETE')
                <td><button class='button' id='button3'name =""><i class='fa fa-trash'></i></button></td>
                </form>


                    <td ><a href="{{ route('update-password.edit',$user) }}"><button class='button' id='button3'name =""> <i class='fa fa-lock'></button></a></td>

                </tr>
                @endforeach
  </table>
    </div>
  </div>
{{  $users->links()}}
@endsection

