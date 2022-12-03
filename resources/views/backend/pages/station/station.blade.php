@extends('backend.master')
@section('content')
<h1>Station List</h1>
<a href="{{route('add.station')}}">
  <p style='float:right; display:inline-block'>
  <input type="button" class="btn btn-success" value="Add New Station"/></p>
</a>
<br><br>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
    <th scope="col">Station Name</th>
    <th scope="col">Location</th>
    <th scope="col">Tel-Number</th>
    <th scope="col">Routes</th>
    <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
@endsection