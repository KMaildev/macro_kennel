@extends('layouts.app')
@section('title', ' - Contact Us')
@section('content')

    <div class="section banner-page" data-background="{{ asset('data/contact_banner.jpeg') }}">
        <div class="content-wrap pos-relative">
            <div class="d-flex justify-content-center bd-highlight mb-2">
                <div class="title-page">Contact Us</div>
            </div>
            <p class="text-center text-white">
                You can buy and support various imported puppies with confidence.
            </p>
        </div>
    </div>

    <div class="section bg-breadcrumb">
        <div class="content-wrap py-0 pos-relative">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb ">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div id="class" class="">
        <div class="content-wrap">
            <div class="container">


                <div class="row mt-4">
                    <!-- Item 1 -->
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="rs-icon-info-4 mb-5">
                            <div class="icon">
                                <i class="fa fa-smile-o"></i>
                            </div>
                            <div class="body">
                                <h3 class="title">Address</h3>
                                <p class="mb-1">
                                    No-131(Ground Floor),23rd Street , (8)Quarter,Latha Township, Yangon, Myanmar, 11131,
                                    Yangon, Myanmar
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="rs-icon-info-4 mb-5">
                            <div class="icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="body">
                                <h3 class="title">Email</h3>
                                <p class="mb-1">
                                    <a href="mailto:info@macrokennel.com">
                                        info@macrokennel.com
                                    </a>
                                </p>
                                <p>
                                    <a href="mailto:hello@macrokennel.com">
                                        hello@macrokennel.com
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="rs-icon-info-4 mb-5">
                            <div class="icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="body">
                                <h3 class="title">Address</h3>
                                <p class="mb-1">
                                    <a href="tel:09 771 883883">
                                        09 771 883883
                                    </a>
                                </p>
                                <br><br>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-12 col-md-12 mb-5">
                        <h2 class="section-heading text-center text-primary no-after mb-5">
                            Send Us A Message
                        </h2>
                        <p class="subheading text-center">
                            FEEL FREE TO EMAIL US OR CALL US WITH ANY QUESTIONS YOU MAY HAVE!
                        </p>
                    </div>

                    <div class="col-12 col-sm-12 col-md-12">
                        <form action="{{ route('contact.store') }}" method="post" class="form-contact" id="create-form"
                            autocomplete="off">
                            @csrf

                            <div class="row">

                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Enter Name" name="name"
                                            value="{{ old('name') }}">

                                        @error('name')
                                            <span class="form-control-feedback" style="color: red;">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Enter Email" name="email"
                                            value="{{ old('email') }}">

                                        @error('email')
                                            <span class="form-control-feedback" style="color: red;">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Subject" name="subject"
                                            value="{{ old('subject') }}">
                                        @error('subject')
                                            <span class="form-control-feedback" style="color: red;">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Enter Phone Number"
                                            name="phone" value="{{ old('phone') }}">
                                        @error('phone')
                                            <span class="form-control-feedback" style="color: red;">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                            </div>

                            <div class="form-group">
                                <textarea name="message" class="form-control" rows="6" placeholder="Enter Your Message">{{ old('message') }}</textarea>
                                @error('message')
                                    <span class="form-control-feedback" style="color: red;">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="text-center">
                                    <div id="success"></div>
                                    <button type="submit" class="btn btn-primary">SEND MESSAGE</button>
                                </div>
                            </div>
                        </form>

                    </div>


                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3811.946713568792!2d96.19566242578988!3d17.172803075777864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c19d81db78baf1%3A0x261be210317a2c18!2s7.5%20Miles%20Garden!5e0!3m2!1sen!2smm!4v1667493370340!5m2!1sen!2smm"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreContact', '#create-form') !!}
@endsection
