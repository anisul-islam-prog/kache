@extends('layouts.app')
@section('content')
  <div class="container-fluid h-100">
    <div class="row h-100">
      <div class="col-sm-3 col-md-6 col-lg-2">
        <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Add Post</a>
        <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">View Post</a>
      </div>
      <div class="col-sm-9 col-md-6 col-lg-10">
        <form class="col-12" method="POST" action="{{ route('post.store') }}">
        @csrf
          <div class="form-group col-md-6">
            <label for="formGroupExampleInput">Business Owner</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
          </div>
          <div class="form-group col-md-6">
            <label for="formGroupExampleInput2">Product Name</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
          </div>
          <div class="form-group col-md-6">
            <label for="formGroupExampleInput2">Discount</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
          </div>
          <div class="form-group col-md-6">
            <label for="formGroupExampleInput2">Validity</label>
            <input type="date" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
          </div>
          <button type="button" class="btn btn-success col-md-6">Success</button>
        </form>
      </div>
    </div>
  </div>