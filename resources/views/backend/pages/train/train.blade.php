@extends('backend.master')
@section('content')
<h1>Train List</h1>

<a href="{{route('train.add')}}"><p align="right">
  <input type="button" class="btn btn-success" value="Add New Train"/></p></a>
<br><br>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Train Name</th>
      <th scope="col">Seats</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  @foreach($trains as $data)
    <tr>
      <td>{{$data->id}}</td>
      <td>{{$data->train_name}}</td>
      <td>{{$data->seats}}</td>
      <td>{{$data->from}}</td>
      <td>{{$data->to}}</td>
      <td>{{$data->status}}</td>
    </tr>
    @endforeach
    
  </tbody>
</table> <br><br>
{{$trains->links()}}
@endsection