<style>

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

@if(Session::has('success'))

<div class="alert alert-success alert-dismissible">
    {{-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> --}}
    <h5> Success!</h5>
    {{ Session::get('success') }}
  </div>
@endif
@if(Session::has('error'))
<div class="alert alert-danger alert-dismissible">
    {{-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> --}}
    <h5> Error!</h5>
    {{ Session::get('error') }}
  </div>

@endif

@if($errors->any())
<div class="alert alert-danger alert-dismissible">
    {{-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> --}}
    <h5> Error!</h5>
   @foreach ($errors->all() as $error )
 {{ $error }}.<br>
   @endforeach
  </div>

@endif
