<!DOCTYPE html>
<html>
<head>
<title>Main layout page </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="{{ asset('assets/js/jquery3.6.0.min.js') }}" type="" ></script>
</head>
<body>


<div class="container">
    @yield('content')
</div>

</body>
</html>
