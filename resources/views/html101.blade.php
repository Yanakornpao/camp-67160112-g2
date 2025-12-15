<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workshop html @yield('title')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Datepicker CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
</head>
<body>
    <div class="container pt-5 text-center">
        <h1 class="mb-3">ฟอร์มสมัคร</h1>

        <form class="needs-validation" novalidate>
            <!-- แถว: ชื่อ -->
            <div class="row g-3 align-items-center mb-3">
                <div class="col-4">
                    <label for="fname" class="col-form-label">ชื่อ</label>
                </div>
                <div class="col-6">
                    <input type="text" required id="fname" class="form-control" placeholder = "ชื่อ">
                    <div class="invalid-feedback" >
                        กรุณากรอกชื่อ
                    </div>
                </div>
            </div>

            <!-- แถว: นามสกุล -->
            <div class="row g-3 align-items-center mb-3">
                <div class="col-4">
                    <label for="lname" class="col-form-label">นามสกุล</label>
                </div>
                <div class="col-6">
                    <input type="text" required id="lname" class="form-control" placeholder = "นามสกุล">
                    <div class="invalid-feedback" >
                        กรุณากรอกนามสกุล
                    </div>
                </div>
            </div>

            <!-- แถว: เลือกวันที่ -->
            <div class="row g-3 align-items-center mb-3">
                <div class="col-4">
                    <label for="myDatepicker" class="col-form-label">วันที่</label>
                </div>
                <div class="col-6">
                    <input type="text" required class="form-control" id="myDatepicker" placeholder="วัน/เดือน/ปี">
                    <div class="invalid-feedback" >
                        กรุณาเลือกวันที่
                    </div>
                </div>
            </div>

            <!-- แถว อายุ -->
            <div class="row g-3 align-items-center mb-3">
                <div class="col-4">
                    <label for="old" class="col-form-label">อายุ</label>
                </div>
                <div class="col-6">
                    <input type="text" required id="old" class="form-control" placeholder = "อายุ">
                    <div class="invalid-feedback" >
                        กรุณากรอกอายุ
                    </div>
                </div>
            </div>
            <!-- เพศ -->
           <div class="row g-3 align-items-center mb-3">
    <div class="col-4">
        <label for="lname" class="col-form-label">เพศ</label>
    </div>

    <div class="col-6 text-end">
        <div class="form-check form-check-inline">
            <input class="form-check-input" required type="radio" name="Male" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">ชาย</label>
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input" required type="radio" name="Woman" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">หญิง</label>
        </div>
    </div>
</div>
            <!-- แถว: รูป -->
<div class="row g-3 align-items-center mb-3">
    <div class="col-4">
        <label for="image" class="col-form-label">รูป</label>
    </div>

    <div class="col-6">
        <input class="form-control" required type="file" id="image">
        <div class="invalid-feedback" >
                    กรุณาอัพโหลดรูป
        </div>
    </div>
</div>

<!-- แถว: ที่อยู่ -->
<div class="row g-3 align-items-start mb-3">
    <div class="col-4">
        <label for="address" class="col-form-label">ที่อยู่</label>
    </div>
    <div class="col-6">
        <textarea id="address" required class="form-control" rows="3"></textarea>
        <div class="invalid-feedback" >
                    กรุณาใส่ที่อยู่
        </div>
    </div>
</div>

<!-- แถว: สีที่ชอบ -->
<div class="row g-3 align-items-center mb-3">
    <div class="col-4">
        <label for="color" class="col-form-label">สีที่ชอบ</label>
    </div>
    <div class="col-6">
        <select id="color" required class="form-select">
            <option value="" selected disabled>-- เลือกสีที่ชอบ --</option>
            <option>สีแดง</option>
            <option>สีน้ำเงิน</option>
            <option>สีเขียว</option>
        </select>
    </div>
</div>
<!-- แถว: แนวเพลงที่ชอบ -->
<div class="row g-3 align-items-center mb-3">
    <div class="col-4">
        <label for="lname" class="col-form-label">แนวเพลงที่ชอบ</label>
    </div>

    <div class="col-6 text-end">
        <div class="form-check form-check-inline">
            <input class="form-check-input" required type="radio" name="inlineRadioOptions1" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">ลูกทุ่ง</label>
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input" required type="radio" name="inlineRadioOptions2" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">เพื่อชีวิต</label>
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input" required type="radio" name="inlineRadioOptions3" id="inlineRadio3" value="option3">
            <label class="form-check-label" for="inlineRadio3">อื่นๆ</label>
        </div>
    </div>
</div>
<!-- แถว: ยินยอมให้เก็บข้อมูล -->
<div class="align-items-center ">
    <div class="col-12">
  <input class="form-check-input" required type="checkbox" value="" id="checkDefault">
  <label class="form-check-label" for="checkDefault">
    ยินยอมให้เก็บข้อมูล
  </label>
</div>


            <!-- ปุ่มส่งฟอร์ม -->
             <div class="row">
            <div class="col-6">
        <button type="reset" class="btn btn-primary mt-3">Reset</button>
    </div>
<div class="col-6">
        <button type="submit" class="btn btn-primary mt-3">ส่งฟอร์ม</button>
        </div>
    </div>


    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap Datepicker JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <script>
        $(document).ready(function(){
            $('#myDatepicker').datepicker({
                format: 'dd/mm/yyyy',   // รูปแบบวันที่
                autoclose: true,        // เลือกวันแล้วปิดเอง
                todayHighlight: true    // ไฮไลต์วันที่วันนี้
            });
        });
    </script>

    <script>
(() => {
  'use strict'
  const forms = document.querySelectorAll('.needs-validation')

  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }
      form.classList.add('was-validated')
    }, false)
  })
})()
</script>
</body>
</html>
