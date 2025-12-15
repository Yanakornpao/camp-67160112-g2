@extends('template.default')
@section('title','My Controller')
@section('header1',"My View")

@section('content')
    <form action="" method="">
        @csrf
        <label for = "num" >ป้อนข้อมูล</label>
        <input type = "number" id = "num" name="num">
        <button type = "submit" >ส่งข้อมูล</button>
    </form>
@endsection
