@extends('layouts.app')
@section('content')
<div class="container d-flex h-100">
    <div class="row w-100">
        <div class="col-10 mx-auto">
            <div class="custom-jumbotron text-center">
                @forelse ($alerts as $alert)
                <h1 class="display-4">Alert</h1>
                <p class="text-danger h2">This is an alert box</p>
                @empty
                <p class="text-muted text-center"> There is no alert</p>
                @endforelse
                @if ($user_role == 2)

                <form method="POST" action="{{ route('post.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="formGroupExampleInput">Business Owner</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Another label</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                    </div>
                    <button type="button" class="btn btn-success">Success</button>

                </form>

                @else
                @endif

                @forelse ($posts as $post)
                <h1 class="display-4">Latest Discount Offer</h1>
                <div class="list-group borderless">
                    <div class="list-group-item list-group-item-action flex-column align-items-start borderless">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1"> <span class="custom-span">{{$post['owner']}}</span> is giving <span class="custom-span">{{$post['discount']}}%</span> discount on <span class="custom-span">{{$post['name']}}</span></h5>
                            <small>3 days ago</small>
                        </div>
                    </div>
                    <div class="list-group-item list-group-item-action flex-column align-items-start ">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1"> <span class="custom-span">Chillox</span> gives <span class="custom-span">30%</span> discount on <span class="custom-span">burger</span></h5>
                            <small class="text-muted">3 days ago</small>
                        </div>
                        <h6 class="text-left"> Valid Till: <kbd>30th august, 2020<kbd></h6>
                    </div>
                    <div class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1"> <span class="custom-span">Chillox</span> gives <span class="custom-span">30%</span> discount on <span class="custom-span">burger</span></h5>
                            <small class="text-muted">3 days ago</small>
                        </div>
                    </div>
                </div>
                @empty
                <p class="text-muted">There is no post</p>
                @endforelse


            </div>
        </div>
    </div>
</div>
<!--TODO Make feed for post-->
@endsection