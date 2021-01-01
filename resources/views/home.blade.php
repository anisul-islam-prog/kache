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

                @include('includes.addpost')

                @else
                @endif

                @forelse ($posts as $post)
                <h1 class="display-4">Latest Discount Offer</h1>
                <div class="list-group borderless">
                    <div class="list-group-item list-group-item-action flex-column align-items-start ">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1"> <span class="custom-span">{{$post['owner']}}</span> gives
                                @if($post['type'] == 'inpercent')
                                <span class="custom-span">{{$post['discount']}}%</span>
                                discount on
                                @else
                                <span class="custom-span">{{$post['discount']}}TK OFF</span>
                                @endif
                                <span class="custom-span">{{$post['name']}}</span></h5>
                            <small class="text-muted">{{$post->created_at->diffForHumans()}}</small>
                        </div>
                        @if ( empty($post['discount_validity']) )
                        @else
                        <h6 class="text-left"> Valid Till: <kbd>{ { $post['discount_validity']}}<kbd></h6>
                        @endif
                        @if ( empty($post['discount_code']) )
                        @else
                        <h6 class="text-left"> Discount Code: <kbd>{ { $post['discount_code']}}<kbd></h6>
                        @endif
                        @if ( empty($post['refer_link']) )
                        @else
                        <h6 class="text-left"> Link: <a href="https://{{ $post['refer_link'] }}" target="_blank">{{ $post['platform'] }}</h6></a>
                        @endif
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