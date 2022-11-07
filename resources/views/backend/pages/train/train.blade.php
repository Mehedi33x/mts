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
      <th scope="col">Train ID</th>
      <th scope="col">Seats</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Space</td>
      <td>1120</td>
      <td>150</td>
      <td>Chowrasta</td>
      <td>Boardbazar</td>
      <td>Yes</td>
    </tr>

    <th scope="row">2</th>
      <td>Naruta</td>
      <td>1121</td>
      <td>250</td>
      <td>Vogra</td>
      <td>Tongi</td>
      <td>No</td>
    </tr>

    <th scope="row">3</th>
      <td>Mycan</td>
      <td>1122</td>
      <td>150</td>
      <td>Vogra</td>
      <td>Mirpur</td>
      <td>Yes</td>
    </tr>

    <th scope="row">4</th>
      <td>Falcon</td>
      <td>1124</td>
      <td>150</td>
      <td>Tongi</td>
      <td>Mirpur</td>
      <td>No</td>
    </tr>
    
  </tbody>
</table>

@endsection