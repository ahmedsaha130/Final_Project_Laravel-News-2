@extends('admin.layout.master')
@section('title')
Add post
@endsection
@section('content')
<style>
body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
  }

  .topnav {
    overflow: hidden;
    background-color: #333;
  }

  .topnav a   {
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
    background-color: #4CAF50; /* Green */
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

  #button1 {background-color: #4CAF50;} /* Green */
  #button2 {background-color: #008CBA;} /* Blue */
  #button3 {background-color: #f44336;} /* Red */
  #button4 {background-color: DarkCyan;} /* Red */


  #customers {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }

  #customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
  }

  #customers tr:nth-child(even){background-color: #f2f2f2;}

  #customers tr:hover {background-color: #ddd;}

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

    input[type=text], select, textarea {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  input[type=submit]:hover {
    background-color: #45a049;
  }

  .adddiv {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
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

  </style>
<div class="container-login100">

<h2 style="margin-top: -7px;">Add News</h2>


				<div  style="background-color:#ffffffe0; width:100%;
       padding:15%;
      height:100%">
<div class="adddiv">
  <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
    @include('admin.layout.messages')
    @csrf
    <label for="fname"><h5>Titel</h5></label>
    <input type="text" id="fname" name="title" placeholder="Your Title..">

    <label for="lname"><h5>Descrption</h5></label>
    <textarea  rows="4" cols="50" name="body" placeholder="Your Descrption.." ></textarea >

    <label class="file">
  <input type="file" id="file"  name="image" aria-label="File browser example">
  <span class="file-custom"></span>
   </label>
<br>
    <label><h5>Feature</h5> </label>
    <select id="country" name="feature">
      <option value="feature">Feature</option>
      <option value="nofeature"> No Feature</option>

    </select>

    <label> <h5>Views</h5> </label>
    <select id="country" name="view">
      <option value="view">View</option>
      <option value="noview"> No View</option>

    </select>

    <input type="submit"  name = "addpost" value="Add News ">
  </form>


 </div>
		</div>
</div>

</body>
</html>

@endsection
