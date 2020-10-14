<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <title>Restaurant | Gallery</title>
</head>

<body>

@extends('layout')
<!-- End Navbar -->

<!-- Start Login form -->

    <section class="home">
        <div class="text-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12"></div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <form class="form-conrainer" method="post" action="{{URL::to('/logs')}}">
                        {{ csrf_field()}}

                            @if($message= Session::get('status'))
                            <div class="alert-danger text-center">
                                <p>{{$message}}</p>
                            </div>
                            @endif

                            <h1 class="justify-content-center d-flex h-100">Sign In</h1>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" placeholder="Enter email" name="email">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="password">
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Remember me</label>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary btn-block">Submit</button><br>
                            <p class="text-center text-white">Not a member yet? <a href="/registration"
                                    class="text-warning">SignUp</a></p>
                        </form>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- End login form -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>