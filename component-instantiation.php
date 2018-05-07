<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kendo UI from scratch to catch</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="styles/kendo.common.min.css" rel="stylesheet" type="text/css"/>
    <link href="styles/kendo.bootstrap-v4.min.css" rel="stylesheet" type="text/css"/>

    <!-- jQuery JavaScript -->
    <script src="js/jquery.min.js"></script>

    <!-- Kendo UI combined JavaScript -->
    <script src="js/kendo.web.min.js"></script>

</head>
<body>

<form action="">
    <div>
        <input type="text" id="datepicker1" data-format="d-M-yyyy">
    </div>
    <div>
        <input type="text" id="datepicker2" data-format="d-M-yyyy">
    </div>
    <div>
        <input type="text" data-role="datepicker" data-format="d-M-yyyy">
    </div>
</form>

<script>
    // method 1: JQuery way
    var dp1 = $('#datepicker1').kendoDatePicker();

    // method 2: Kendo constructor
    var dp2 = new kendo.ui.DatePicker(document.getElementById('datepicker2'));

    // method 3: Declarative way via Kendo init
    kendo.init(document.body);

    console.log(dp1, dp2);
</script>

</body>
</html>
