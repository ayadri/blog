<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

<!-- JavaScript Bundle with Popper -->
<title>Login</title>
<style>
    body{
        background-image:url(images/R.jpg);
    }
</style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4" style="margin-top: 170px; margin-left: 380px; background-color: white; border: 2px ;
        border-radius: 12px;
    height: 350px;
        padding: 5px;">
           <h3 class="text-center"><b>Connection</h3>
           <hr>
            <form action="{{ route('login-user') }}" method="post">
                @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
                @endif
                @if(Session::has('fail'))
                <div class="alert alert-danger">
                    {{ Session::get('fail') }}
                </div>
                @endif
                @csrf
                <div class="form-group">
                    <i class='bx bxs-envelope' ></i>  <label for="email">Email</label>
                    <input type="email" class="form-control" placeholder="Enter Email" name="email" value="{{ old('email') }}" style="border-radius: 12px; border:solid;">
                    <span class="text-danger">@error('email') {{ $message }} @enderror</span>

                </div>
                <div class="form-group">
                   <i class='bx bxs-lock-alt'></i>  <label for="password">Mot de passe</label>
                     <input type="password" class="form-control" placeholder="Entrer le mot de passe" name="password" value="" style="border-radius: 12px; border:solid;">
                    <span class="text-danger">@error('password') {{ $message }} @enderror</span><br>

                </div>
                <div class="form-group">
                    &nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;
                    <button class="btn btn-block btn-primary" type="submit" style="background-color: #555555;  border: none;
                    border-radius: 15px; box-shadow: 0 9px #999;">Se connecter</button>
                    &nbsp;  &nbsp;  &nbsp;  &nbsp; <a href="registration" style=" color: black;">S'inscrire</a>
                </div>
                <br>

            </form>
