<!DOCTYPE html>
<html>
<head>
    <title>{{$title}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center">Labour Patner Information</h1>
    <hr>
    <ul>
        <li style="margin-bottom:10px;"><span style="font-weight:bold;">Company Name</span>: {{ $companyName }}</li>
        <li style="margin-bottom:10px;"><span style="font-weight:bold;">DBA</span>: {{ $dba }}</li>
        <li style="margin-bottom:10px;"><span style="font-weight:bold;">Full Company Address</span>: {{ $address }}</li>
        <li style="margin-bottom:10px;"><span style="font-weight:bold;">Shipping Address</span>: {{ $shopping_address }}</li>
    </ul>
  
</body>
</html>