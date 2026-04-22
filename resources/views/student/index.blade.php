@extends ('layouts.app')
@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Student Name</label>
                    <input type="Name" class="form-control" id="" placeholder="Enter Student Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="Address" class="form-control" id="" placeholder="Enter Address">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Birthday</label>
                    <input type="Birthday" class="form-control" id="" placeholder="Birthday">
                  </div>
                  
                    <div class="form-group">
                    <label for="exampleInputPassword1">Height</label>
                    <input type="Birthday" class="form-control" id="" placeholder="Height">
                  </div>

                    <div class="form-group">
                    <label for="exampleInputPassword1">Weight</label>
                    <input type="Birthday" class="form-control" id="" placeholder="Weight">
                  </div>


                    <div class="form-group">
                    <label for="exampleInputPassword1">Blood Type</label>
                    <input type="Birthday" class="form-control" id="" placeholder="Blood Type">
                  </div>


                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Add</button> <button type="submit" class="btn btn-primary">Cancel</button>
                </div>
              </form>
            </div>
            @endsection     