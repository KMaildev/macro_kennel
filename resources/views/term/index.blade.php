@extends('layouts.app')
@section('title', ' - TERMS AND CONDITIONS')
@section('content')

    <div class="section banner-page" data-background="{{ asset('data/term_banner.jpeg') }}">
        <div class="content-wrap pos-relative">
            <div class="d-flex justify-content-center bd-highlight mb-2">
                <div class="title-page">
                    TERMS AND CONDITIONS
                </div>
            </div>
            <p class="text-center text-white">
                Your information helps us to better respond to your individual needs.
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
                        <li class="breadcrumb-item active" aria-current="page">
                            TERMS AND CONDITIONS
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div id="class" class="">
        <div class="content-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-4 order-last">

                        <div class="widget categories">
                            <ul class="category-nav">
                                @include('layouts.includes.quick_links')
                            </ul>
                        </div>

                        <div class="promo-ads bg-secondary">
                            <div class="content text-white">
                                <h4 class="title text-primary">Opening Hours</h4>
                                <p>Our support available to help you 24 hours a day. We provide our best.</p>
                                <ul class="list-unstyled">
                                    <li>
                                        Mon - Fri : 08.00 am - 50.00 pm
                                    </li>
                                    <li>
                                        Saturday : 09.00 am - 20.00 pm
                                    </li>
                                    <li>
                                        Sunday : We Are Closed
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <div class="col-12 col-sm-12 col-md-8">

                        <h2 class="section-heading text-primary no-after mb-4">
                            TERMS AND CONDITIONS
                        </h2>

                        <img src="{{ asset('data/term.jpeg') }}" alt="" class="img-fluid">

                        <br><br>
                        <p class="text-black lead" style="text-align: justify">
                            Your information, whether public or private, will not be sold, exchanged, transferred, or given
                            to any other company for any reason whatsoever, without your consent, other than for the express
                            purpose of delivering the purchased product or service requested.
                        </p>

                        <h2 class="section-heading text-primary no-after mb-4" style="font-size: 20px;">
                            Do we disclose any information to outside parties?
                        </h2>

                        <p class="text-black lead" style="text-align: justify">
                            We do not sell, trade, or otherwise transfer to outside parties your personally identifiable
                            information. This does not include trusted third parties who assist us in operating our website,
                            conducting our business, or servicing you, so long as those parties agree to keep this
                            information confidential. We may also release your information when we believe release is
                            appropriate to comply with the law, enforce our site policies, or protect ours or others rights,
                            property, or safety. However, non-personally identifiable visitor information may be provided to
                            other parties for marketing, advertising, or other uses.
                        </p>


                        <h2 class="section-heading text-primary no-after mb-4" style="font-size: 20px;">
                            Changes to our Privacy Policy
                        </h2>

                        <p class="text-black lead" style="text-align: justify">
                            If we decide to change our privacy policy, we will post those changes on this page.
                            <br><br>
                            This policy was last modified on 2022
                            <br><br>
                            <a href="{{ route('contact.index') }}" style="color: blue">
                                Contact Macro Kennel Here
                            </a>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
