<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/registration.css')}}">
    <title>Restaurant | Gallery</title>
</head>

<body>

@extends('layout')
<!-- End navbar  -->

<!-- Start Regsitration form -->

    <section class="home">
        <div class="text-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12"></div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <form class="form-container" method="post" action="{{URL::to('/store')}}">
                         @csrf
                            <h1 class="justify-content-center d-flex h-100">Sign Up</h1>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control" placeholder="Enter name" name="name" required>
                               
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="Enter email" name="email" required>
                               
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Password" name="password"  required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Confirm password</label>
                                <input type="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Confirm password"  name="cpassword" required>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary btn-block">Create account</button><br>
                            <p class="text-center text-white">Already registered? <a href="/login" class="text-warning">SignIn</a></p>
                        </form>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Registration form -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>