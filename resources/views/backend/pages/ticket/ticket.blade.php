@extends('backend.master')
@section('content')
<h1>Ticket List</h1>
<p style='float:right; display:inline-block'>
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#reservation">
 Add new reservation
</button></p>
<!-- Modal and form -->

 <form action="" method="post">
 @csrf
 <div class="modal fade" id="reservation" tabindex="-1" aria-labelledby="reservationLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="reservationLabel">New Reservation</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    <label for="name">Passenger Name</label>
  <input id="name" type="text" class="form-control" name="name" required> <br>
  <label for="email">Email</label>
<input id="email" type="email" class="form-control" name="email" required> <br>
  <label for="contact">Contact</label>
  <input id="contact" type="text" class="form-control" name="contact" required><br>
  <label for="station name">Station Name</label>
  <input id="station name" type="text" class="form-control" name="station name" required><br>
  <label for="train name">Train Name</label>
  <input id="train name" type="text" class="form-control" name="train name" required><br>
  <label for="seat number">Seat Number</label>
  <input id="seat number" type="text" class="form-control" name="seat number" required><br>
  <label for="arrival time">Arrival Time</label>
  <input id="arrival time" type="text" class="form-control" name="arrival time" required><br>
  <label for="depature time">Depature Time</label>
  <input id="depature time" type="text" class="form-control" name="depature time" required>
  <!-- <button type="submit" class="btn btn-info mt-2" >Submit</button> -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Submit</button>
      </div>
    </div>
  </div>
</div>
 </form>


<!-- Tabblee -->
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Passenger Name</th>
      <th scope="col">Email</th>
    <th scope="col">Contact</th>
    <th scope="col">Station Name</th>
    <th scope="col">Train Name</th>
    <th scope="col">Seat Number</th>
    <th scope="col">Arrival Time</th>
    <th scope="col">Depature Time</th>
    <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
@endsection