@extends('layouts.app')
@section('content')
<div class="container d-flex h-100">
    <div class="row w-100">
        <div class="col-10 mx-auto">
            <div class="custom-jumbotron text-center">
                
                @include('includes.addpost')
            
                <h1 class="display-4">Your Posts</h1>
                @forelse ($posts as $post)
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
                                <span class="custom-span">{{$post['name']}}</span>
                            </h5>
                            <small class="text-muted">{{$post->created_at->diffForHumans()}}</small>
                        </div>
                        @if ( empty($post['discount_validity']) )
                        @else
                        <h6 class="text-left"> Valid Till: <kbd>{{ date('j F, Y',strtotime($post['discount_validity'])) }}<kbd> </h6>
                        {{-- <small class="text-muted">{{ $post->discount_validity->diffForHumans() }} remaining</small> --}}
                        @endif
                        @if ( empty($post['discount_code']) )
                        @else
                        <h6 class="text-left"> Discount Code: <kbd>{{ $post['discount_code'] }}<kbd></h6>
                        @endif
                        @if ( empty($post['refer_link']) )
                        @else
                        <h6 class="text-left"> Link: <a href="https://{{ $post['refer_link'] }}" target="_blank">{{ $post['platform'] }}</h6></a>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#Modal{{ $post['id'] }} ">
                            Edit
                        </button>
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



@foreach($posts as $post)
<div class="modal fade" id="Modal{{$post['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   @include('includes.updatepost')
</div>
@endforeach



@endsection