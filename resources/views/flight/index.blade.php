@extends("template.default")

@section('header1','Flight Data')
@section('content')
<div class="mt-3">
    <form action="/flight" method="post">
        @csrf
        <div class="col-12">
        <label for = "name">Name</label>
        <input class="form-control" name = "name" id = "name">
        </div>
        <div class="col-12">
            <label for="airline">Airline</label>
            <inputc class="form-control" airline = "airline" id ="airline"></inputc>
        </div>
    </form>
</div>
