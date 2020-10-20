<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Restaurant | Gallery</title>
</head>

<body>
   
   @extends('layout')
    <!-- *******************Navbar end*******************  -->
  <!-- Add restaurant Modal start -->
    <section class="add-restaurant">
        <!-- Modal -->
        <div class="modal fade" id="addresto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-info" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New Restaurant</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="form-modal-container" method="post" action="{{URL::to('/addValue')}}">
                            {{ csrf_field()}}

                            <div class="modal-body">

                                <div class="form-group">
                                    <label for="res-name" class="col-form-label">Restaurant name</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-form-label">Email</label>
                                    <input type="email" name="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="addr" class="col-form-label">Address</label>
                                    <input type="text" name="address" class="form-control">
                                </div>

                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-success">Save New</button>
                            </div>
                        </form>
                        <!-- form end -->
                    </div>
                </div>
            </div>
        </div>

    </section>
      <!-- Add restaurant modal end -->

    <section class="home">
        <div class="text-body">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="p-2 text-center text-color">
                            <h1>Welcome</h1>
                            <h5>Find Your Desire Restaurant Here..</h5>
                            @if(!Session::get('user'))
                            <a href="/registration" class="btn btn-primary">Register Now</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- **********************Body end********************** -->

    <section class="footer">
        <!-- Footer -->
        <footer class="page-footer font-small bg-dark">
            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2020 Copyright: Restaurant Gallery </div>
            <!-- Copyright -->
        </footer> <!-- Footer -->
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
