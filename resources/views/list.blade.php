<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/list.css')}}">

    <title>Restaurant | Gallery</title>
</head>

<body>
    
@extends('layout')
    <!-- End navbar -->

    <section class="body">
        <div class="container">

            <div class="d-flex justify-content-center h-100">

                <div class="card w-100">
                    @if($message= Session::get('status'))
                    <div class="alert-success">
                        <p>{{$message}}</p>
                    </div>
                    @endif

                    <div class="header">

                        <h1>Restaurant List</h1>

                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody> @foreach($data as $item) <tr>
                                    <th scope="row">{{$item->id}}</th>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->address}}</td>
                                    <td>
                                        <!-- Edit button -->
                                        <a data-id="{{$item->id}}" data-name="{{$item->name}}"
                                            data-email="{{$item->email}}" data-address="{{$item->address}}"
                                            data-toggle="modal" data-target="#editModal" type="button"
                                            class="btn btn-primary btn-sm">EDIT</a>

                                        <!-- Delete button -->
                                        <a data-id="{{$item->id}}" data-toggle="modal" data-target="#deleteModal"
                                            type="button" class="btn btn-danger btn-sm">DELETE</a>
                                    </td>

                                </tr> @endforeach


                            </tbody>
                    </div>
                    </table>
                </div>
            </div>
        </div>

    </section>
    <!-- end  dashboad section -->

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

    <!-- Edit restaurant modal start -->
    <section class="edit-restaurant">
        <!-- Modal -->
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Restaurant</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>


                    <div class="modal-body">
                        <form id="editformID" method="post" action="{{URL::to('/update')}}">
                            @csrf
                            <div class="modal-body">
                                <input type="hidden" id="id" name="id">
                                <br>
                                <div class="form-group">
                                    <label for="res-name" class="col-form-label">Restaurant name</label>
                                    <input type="text" name="name" id="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-form-label">Email</label>
                                    <input type="email" name="email" id="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="addr" class="col-form-label">Address</label>
                                    <input type="text" name="address" id="address" class="form-control">
                                </div>

                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-success">Save Update</button>
                            </div>
                        </form>
                        <!-- form end -->
                    </div>

                </div>
            </div>
        </div>

    </section>
    <!-- Edit restaurant modal end -->

    <!-- Delete restaurant modal start -->
    <section class="edit-restaurant">
        <!-- Modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Restaurant</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>


                    <div class="modal-body">
                        <form id="editformID" method="post" action="{{URL::to('/delete')}}">
                            @csrf
                            <div class="modal-body">
                                <input type="hidden" id="id" name="id">

                                <p class="text-center">Are you sure you want to delete this?</p>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                <button type="submit" class="btn btn-success">Yes</button>
                            </div>
                        </form>
                        <!-- form end -->
                    </div>

                </div>
            </div>
        </div>

    </section>
    <!-- Delete restaurant modal end -->





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <script>
    // Edit modal script part
    $('#editModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)

        var name = button.data('name')
        var email = button.data('email')
        var address = button.data('address')
        var id = button.data('id')

        var modal = $(this)
        modal.find('.modal-body #name').val(name);
        modal.find('.modal-body #email').val(email);
        modal.find('.modal-body #address').val(address);
        modal.find('.modal-body #id').val(id);
    });

    // Delete modal script part
    $('#deleteModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)

        var id = button.data('id')

        var modal = $(this)
        modal.find('.modal-body #id').val(id);
    });
    </script>

</body>



</html>