@extends('layouts.app')
@section('content')
<div class="container d-flex h-100">
    <div class="row w-100">
        <div class="col-10 mx-auto">
            <div class="custom-jumbotron text-center">
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    @if(empty($alerts))
                    @else
                    @forelse ($alerts as $alert)
                    <strong> Annoucement made {{$alert->created_at->diffForHumans()}}: {{ $alert['annoucement'] }}</strong>
                    @empty
                    <p class="text-muted text-center"> There is no announcement</p>
                    @endforelse
                    @endif
                </div>
                <div class="text-center">
                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#feature-req">
                        Request a feature!
                    </button>
                </div>
                @if( empty($posts))
                @else
                <h1 class="display-4" id="discount-sec-title">Latest Discount Offer</h1>
                @endif
                @forelse ($posts as $post)
                <div class="list-group borderless">
                    <div class="list-group-item list-group-item-action flex-column align-items-start ">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1 text-left discount-sec"><span class="custom-span">{{$post['owner']}}</span> giving
                                @if($post['type'] == 'inpercent')
                                <span class="custom-span">{{$post['discount']}}%</span>
                                discount on
                                @else
                                <span class="custom-span">{{$post['discount']}}TAKA</span>
                                OFF on
                                @endif
                                <span class="custom-span">{{$post['name']}}</span>
                            </h5>
                            <small class="text-muted discount-sec">{{$post->created_at->diffForHumans()}}</small>
                        </div>
                        @if ( empty($post['discount_validity']) )
                        @else
                        <h6 class="text-left discount-sec"> Valid Till: <kbd class="discount-sec">{{ date('j F, Y',strtotime($post['discount_validity'])) }}<kbd> </h6>
                        {{-- <small class="text-muted">{{ $post->discount_validity->diffForHumans() }} remaining</small> --}}
                        @endif
                        @if ( empty($post['discount_code']) )
                        @else
                        <h6 class="text-left discount-sec"> Discount Code: <kbd class="discount-sec">{{ $post['discount_code'] }}<kbd></h6>
                        @endif
                        @if ( empty($post['refer_link']) )
                        @else
                        <h6 class="text-left discount-sec"> Link: <a href="https://{{ $post['refer_link'] }}" target="_blank">{{ $post['platform'] }}</h6></a>
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
<div class="modal fade" id="feature-req" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Request a Feature</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="col-12" method="POST" action="{{ route('feature.store') }}">
                <div class="modal-body">
                    @csrf
                    <input type="hidden" id="requested_by" name="requested_by" value="{{ Auth::user()->email }}">
                    <div class="form-group col-md-12 ">
                        <label for="name">Feature Details<span style="color: red;">*</span></label>
                        <textarea type="textarea" class="form-control" id="details" name="details" placeholder="Feature Details" style="height:300px" required></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save Changes</button>
                    </div>
            </form>
        </div>

    </div>
    @endsection