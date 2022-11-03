@extends('layouts.app')
@section('title', ' - Review')
@section('content')

    <div class="section bg-breadcrumb">
        <div class="content-wrap py-0 pos-relative">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb ">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Reviews</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="content-wrap" style="padding-top: 10px">
        <div class="container">

            <div class="row">
                <div class="col-12 col-sm-12 col-md-12">

                    <h2 class="section-heading text-primary no-after">
                        Macro Kennel Reviews Trusted By Dog Owners
                    </h2>

                    @foreach ($reviews as $review)
                        <div class="author-box" style="maring-top: 10px !important;">
                            <div class="media">
                                @if ($review->photo)
                                    <img src="{{ Storage::url($review->photo) }}" alt=""
                                        style="width: 100px; height: 100px; background-position: center; background-size: contain, cover;">
                                @else
                                    <img src="{{ asset('assets/images/testimony-thumb-3.jpg') }}" alt=""
                                        class="img-fluid">
                                @endif
                            </div>
                            <div class="body">
                                <h4 class="media-heading"><span>Owner :</span>{{ $review->owner_name ?? '' }}</h4>
                                {!! $review->review ?? '' !!}
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
