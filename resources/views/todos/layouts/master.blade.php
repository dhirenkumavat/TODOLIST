<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TODO</title>

<link rel="stylesheet" href="{{asset('public/css/app.css')}}">

</head>
<body>
    
    @section('content')
        
    @show
    <script src="{{asset('public/js/app.js')}}"></script>
<script>

$(".alert").fadeTo(2000, 500).slideUp(500, function(){
    $(".alert").slideUp(500);
});
</script>

</body>
</html>