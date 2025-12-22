@extends('template.default')

<!doctype html>
<html lang="th">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ผลลัพธ์</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container pt-5">
  <h1 class="mb-3">ผลลัพธ์จากการส่งฟอร์ม</h1>

  <div class="card p-3">
    <p><b>ชื่อ:</b> {{ $data['fname'] }}</p>
    <p><b>นามสกุล:</b> {{ $data['lname'] }}</p>
    <p><b>วันที่:</b> {{ $data['date'] }}</p>
    <p><b>อายุ:</b> {{ $data['age'] }}</p>
    <p><b>เพศ:</b> {{ $data['gender'] }}</p>
    <p><b>ที่อยู่:</b> {{ $data['address'] }}</p>
    <p><b>สีที่ชอบ:</b> {{ $data['color'] }}</p>
    <p><b>แนวเพลงที่ชอบ:</b> {{ $data['music'] }}</p>
    <p><b>ยินยอมให้เก็บข้อมูล:</b> ยินยอม</p>
  </div>

  <a class="btn btn-secondary mt-3" href="{{ route('workshop.form') }}">กลับหน้าฟอร์ม</a>
</div>
</body>
</html>
