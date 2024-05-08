@extends('layouts.app')

@section('title', __('verify.title'))

@section('content')
    <section class="breadcrumb-area d-flex align-items-center"
             style="background-image:url({{ asset('assets/img/testimonial/test-bg.png') }})">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="breadcrumb-wrap text-left">
                        <div class="breadcrumb-title">
                            @if(\Illuminate\Support\Facades\Lang::has('verify.title'))
                                <h2>{{ __('verify.title') }}</h2>
                            @endif
                            <div class="breadcrumb-wrap">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        @if(\Illuminate\Support\Facades\Lang::has('header.home'))
                                            <li class="breadcrumb-item"><a href="/">{{ __('header.home') }}</a></li>
                                        @endif
                                        @if(\Illuminate\Support\Facades\Lang::has('verify.title'))
                                            <li class="breadcrumb-item active"
                                                aria-current="page">{{ __('verify.title') }}</li>
                                        @endif
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="verify_email mb-5 mt-2">
        <div class="container">
            <div class="row">

                <div class="col-md-12">

                    <div class="jumbotron mt-4 py-3">
                        <div class="alert mb-0" role="alert" id="notes">
                            @if(\Illuminate\Support\Facades\Lang::has('verify.notes'))
                                <h4>{{ __('verify.notes') }}</h4>
                            @else
                                <h4></h4>
                            @endif
                            <ul>
                                @if(\Illuminate\Support\Facades\Lang::has('verift.msg1'))
                                    <li>{{ __('verift.msg1') }}</li>
                                @endif
                                @if(\Illuminate\Support\Facades\Lang::has('verift.msg2'))
                                    <li>{{ __('verift.msg2') }}</span></a></li>
                                @endif
                            </ul>
                            <div class="verify_btn mt-4 d-flex justify-content-end w-100">
                                <form action="{{ route('verification.send') }}" method="POST">
                                    @csrf
                                    @if(\Illuminate\Support\Facades\Lang::has('verify.send'))
                                        <button class="btn">
                                            {{ __('verify.send') }}
                                        </button>
                                    @endif
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection