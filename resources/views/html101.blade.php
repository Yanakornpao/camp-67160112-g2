<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Workshop HTML</title>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <title>Bootstrap Datepicker</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Datepicker CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
</head>
<body>
    <div class = " container pt-5">
        <h1>Workshop #HTML - FORM</h1>
        <form>
        
    </div>
    <div class="row g-3 align-items-center">
<div class="col-4">
    <label for="fname" class="col-form-label">ชื่อ</label>
    </div>
<div class="col-6">
    <input type="text" id="fname" class="form-control">
    </div>
<div class="col-4">
    <label for="inputPassword6" class="col-form-label">นามสกุล</label>
  </div>
  <div class="col-6">
    <input type="password" id="inputPassword6" class="form-control">
  </div>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap Datepicker JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <div class="container mt-3">
        <div class="col-4">
    <label for="myDatepicker">Select Date:</label>
    <input type="text" class="form-control" id="myDatepicker">
        <script>
    $(document).ready(function(){
        $('#myDatepicker').datepicker({
            format: 'dd/mm/yyyy', // Customize date format
            autoclose: true,     // Close the datepicker when a date is selected
            todayHighlight: true // Highlight today's date
        });
    });
    </script>
</div>
</div>
</div>
</body>
</html>