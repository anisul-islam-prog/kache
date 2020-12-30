@extends('layouts.app')
@section('content')
<div class="container d-flex h-100">
    <div class="row w-100">
        <div class="col-10 mx-auto">
            <div class="custom-jumbotron">
                <h1 class="display-4">Alert</h1>
                <p class="text-danger h2">This is an alert box</p>
                <h1 class="display-4">Latest Discount Offer</h1>
                <div class="list-group borderless">
  <div class="list-group-item list-group-item-action flex-column align-items-start borderless">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1"> <span class="custom-span">Chillox</span> gives <span class="custom-span">30%</span> discount on <span class="custom-span">burger</span></h5>
      <small>3 days ago</small>
    </div>
</div>
  <div class="list-group-item list-group-item-action flex-column align-items-start ">
    <div class="d-flex w-100 justify-content-between">
    <h5 class="mb-1"> <span class="custom-span">Chillox</span> gives <span class="custom-span">30%</span> discount on <span class="custom-span">burger</span></h5>
      <small class="text-muted">3 days ago</small>
    </div>
    <h6> Valid: <kbd>30th august, 2020<kbd></h6>
</div>
  <div class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
    <h5 class="mb-1"> <span class="custom-span">Chillox</span> gives <span class="custom-span">30%</span> discount on <span class="custom-span">burger</span></h5>
      <small class="text-muted">3 days ago</small>
    </div>
</div>
</div>

            </div>
        </div>
    </div>
</div>
<!--TODO Make feed for post-->
@endsection