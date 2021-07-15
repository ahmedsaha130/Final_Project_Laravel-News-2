@extends('admin.layout.master')

@section('title')
Contact_Us
@endsection
@section('content')
<link rel="icon" type="image/png" href="{{ asset('frontcss/images/icons/favicon.ico') }}"/>

<style>
    body {
        margin-bottom: 0px;
        padding-bottom: 0px;
        font-family: Arial, Helvetica, sans-serif;
    }

    .topnav {
        overflow: hidden;
        background-color: #333;
    }

    .topnav a {
        float: left;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }

    .topnav a:hover {
        background-color: #ddd;
        color: black;
    }

    .topnav a.active {
        background-color: #4CAF50;
        color: white;
    }

    .button {
        background-color: #4CAF50;
        /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    }

    #button1 {
        background-color: #4CAF50;
    }

    /* Green */
    #button2 {
        background-color: #008CBA;
    }

    /* Blue */
    #button3 {
        background-color: #f44336;
    }

    /* Red */



    #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #customers td,
    #customers th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #customers tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #customers tr:hover {
        background-color: #ddd;
    }

    #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #4CAF50;
        color: white;
    }
    .error
  {
      background-color:#f2DEDE;
      color: #A94442;
      padding:10px;
      width: 95%;
      border-radius:5px ;
      margin:  20x auto;
  }
  .secuess
  {
    background-color: #32c353b3;
    color: #fff;
    padding: 10px;
    width: 95%;
    border-radius: 5px;
  }
  h2{
    background-color: #A94442;
    font-size: 30px;
    font-weight: 500;
    color: #FFF;
    position:absolute;
    top: 100px;
    padding: 20px;
    border:3px solid DarkSeaGreen;
  }
    </style>
</head>

<body>


    <div class="container-login100">
    <h2 style="margin-top:0px">Contact Us</h2>
        <div style="background-color:#FFF; width:80%;
       padding:10%;
      height:50%">

@include('admin.layout.messages')
       <table id ='customers' border ='1'>
       <tr>
       <th>ID</th>
       <th>Full Name</th>
        <th>E-mail</th>
        <th>Subject</th>
        <th>Message</th>
        <th>Created_at</th>
        <th>Opertion</th>
        </tr>


@foreach ($contacts as $contact)


                  <tr>
                   <td>{{ $loop->iteration }}</td>
                   <td>{{ $contact->name }}</td>
                  <td>{{ $contact->email }}</td>
                   <td>{{ $contact->subject }}</td>
                   <td>{{ $contact->message }}</td>
                   <td>{{ $contact->created_at }}</td>

                  <form action="{{ route('contact.destroy',$contact) }}" method="POSt">
                    @csrf
                    @method('DELETE')
                  <td><button class='button' id='button3'name =""> <i class='fa fa-trash'></i></button></td>
                   </form>
                 <tr>


                    @endforeach






 </table>

{{ $contacts->links() }}

        </div>
    </div>
    </div>

</body>

</html>

@endsection
