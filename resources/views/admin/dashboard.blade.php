@extends('admin.layout.master')

@section('content')
<?php $timezone = "Asia/GAZA";
date_default_timezone_set($timezone)  ?>
<style>
    .personal{
        margin-right: -544px;
    margin-top: -337px;
    }
</style>
<div class="container-login100">

    <div style="background-color:#FFF; width:80%;
   padding:10%;
  height:50%">
<h2 > Welcome to the webmaster page</h2>

        <form action="" method="POST" class="login100-form validate-form">
            <!-- <span class="login100-form-title p-b-59"> -->

<hr>
<table id ='customers' border ='1'>
<tr><th colspan='3'>Check-in date </th><td><?php echo date('Y-M-D h:m A') ?></td></tr>
<tr><th colspan='3'>Welcom Mr </th><td>{{ Auth::User()->fullname }}</td></tr>
<tr><th colspan='3'>User Name </th><td>{{ Auth::User()->username }}</td></tr>
<tr><th colspan='3'>Email </th><td>{{ Auth::User()->email }}</td></tr>
<tr><th colspan='3'>password </th><td>{{ Auth::User()->password }}</td></tr>
{{-- <tr><th colspan='3'>img </th><td>{{ Auth::User()->username }}</td></tr> --}}




</table>

<img class="personal" src="{{ asset('image_user/'.Auth::User()->user_image) }}">
<h3 style="    margin-right: -528px;">  {{ Auth::User()->fullname }}</h3>



    </div>
</div>
</div>

@endsection
