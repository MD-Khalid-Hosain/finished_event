@extends('layouts.front_page')
@section('content')
  <section class="page-section image breadcrumbs overlay">
      <div class="container">
          <h1>EVENT Bkash Payment PAGE</h1>
          <ul class="breadcrumb">
              <li><a href="#">Home</a></li>
              <li><a href="#">Events</a></li>
              <li class="active">Event Registration Page</li>
          </ul>
      </div>
  </section>
  <!-- -->
  <hr class="page-divider transparent half"/>
  <!-- -->


@section('content')
<div class="container">

<div class="row">
    <div class="col-md-6 col-md-offset-3">
      <form action="{{ route('bkash_payment') }}" method="post">
        @csrf
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="Name">Transection ID</label>
              <input type="text" name="transection_id" class="form-control" id="Name">
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4">Amount</label>
              <input type="text" name="bkash_amount" class="form-control" id="inputEmail4">
            </div>
            <input type="hidden" name="user_name" value="{{ $user_name }}">
            <input type="hidden" name="user_email" value="{{ $user_email }}">
            <input type="hidden" name="event_title" value="{{ $event_title }}">
            <input type="hidden" name="event_category" value="{{ $event_category }}">
            <input type="hidden" name="published_at" value="{{ $published_at }}">
            <input type="hidden" name="event_location" value="{{ $event_location }}">
            <input type="hidden" name="user_number" value="{{ $user_number }}">
            <input type="hidden" name="event_cost" value="{{ $event_cost }}">
            <input type="hidden" name="people" value="{{ $people }}">
            <input type="hidden" name="per_person_cost" value="{{ $per_person_cost }}">
            <input type="hidden" name="event_time" value="{{ $event_time }}">
        </div>
          <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now (৳{{ $event_cost +($people*$per_person_cost) }})</button>

      </form>

    </div>
    </div>
    </div>
@endsection
