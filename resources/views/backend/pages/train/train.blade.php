@extends('backend.master')
@section('content')
<h1>Train List</h1>

<!-- Button trigger modal -->
<p style='float:right; display:inline-block'>
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#train">
 Add new user
</button></p>
<br><br>

<!-- Modal and Form -->
<form action="{{route('train.store')}}" method="post">
@csrf
<div class="modal fade" id="train" tabindex="-1" aria-labelledby="trainLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="trainLabel">Add New Train</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <label for="name">Train Name</label>
  <input id="name" type="text" class="form-control" name="name" required> <br>
  <label for="text">Seats</label>
<input id="seats" type="seats" class="form-control" name="seats" required> <br>
  <label for="form">From</label>
  <input id="form" type="text" class="form-control" name="form" required><br>
  <label for="to">To</label>
  <input id="to" type="text" class="form-control" name="to"><br>
  <label for="status">Status</label>
  <select id="status" class="form-control" name='status'>
  <option value="active">Active</option>
  <option value="inactive">Inactive</option>
</select> 
  <br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success" >Submit</button>
      </div>
    </div>
  </div>
</div>
</form>

<!-- data_table -->
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Train Name</th>
      <th scope="col">Seats</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($trains as $key=>$data)
    <tr>
      <td scope="col">{{$key+1}}</td>
      <td scope="col">{{$data->train_name}}</td>
      <td scope="col">{{$data->seats}}</td>
      <td scope="col">{{$data->from}}</td>
      <td scope="col">{{$data->to}}</td>
      <td scope="col">{{$data->status}}</td>
      <td scope="col">
      <a href="" class="btn btn-info">View</a>
      <a href="" class="btn btn-secondary">Edit</a>
      <a href="" class="btn btn-danger">Delete</a>
    </td>
        

      </td>
    </tr>
    @endforeach
    
  </tbody>
</table> <br><br>
{{$trains->links()}}
@endsection