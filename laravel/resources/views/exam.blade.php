@extends('layouts.app')

@section('title', __('header.exam') . ' -')

@section('content')
    <section class="breadcrumb-area d-flex align-items-center"
             style="background-image:url({{ asset('assets/img/testimonial/test-bg.png') }})">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="breadcrumb-wrap text-left">
                        <div class="breadcrumb-title">
                            <h2>{{ $course->title }}</h2>
                            <div class="breadcrumb-wrap">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        @if(\Illuminate\Support\Facades\Lang::has('header.home'))
                                            <li class="breadcrumb-item"><a href="/">{{ __('header.home') }}</a></li>
                                        @endif
                                        @if(\Illuminate\Support\Facades\Lang::has('third.exam'))
                                            <li class="breadcrumb-item active"
                                                aria-current="page">{{ __('third.exam') }}</li>
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
    <section id="studentExam" class="exam-area fix pt-80 pb-120">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <form action="" id="exam-form" method="POST">
                        @csrf
                        <div class="form-header">
                            <div id="exam-countdown" class="exam-countdown"></div>
                        </div>
                        <div class="form-body">
                            @foreach($course->course_exams as $exam)
                                <div class="exam-item">
                                    <p><span class="order-number"></span> {{ $exam->question }}</p>
                                    <fieldset id="{{ $exam->id }}">
                                        <div class="row">
                                            @if($exam->variant_a !== null && $exam->variant_a !== '')
                                                <div class="col-md-4 col-sm-6 col-12">
                                                    <div class="exam-item-group">
                                                        <input name="{{ $exam->id }}" value="a" type="radio"/>
                                                        <label>{{ $exam->variant_a }}</label>
                                                    </div>
                                                </div>
                                            @endif
                                            @if($exam->variant_b !== null && $exam->variant_b !== '')
                                                <div class="col-md-4 col-sm-6 col-12">
                                                    <div class="exam-item-group">
                                                        <input name="{{ $exam->id }}" value="b" type="radio"/>
                                                        <label>{{ $exam->variant_b }}</label>
                                                    </div>
                                                </div>
                                            @endif
                                            @if($exam->variant_c !== null && $exam->variant_c !== '')
                                                <div class="col-md-4 col-sm-6 col-12">
                                                    <div class="exam-item-group">
                                                        <input name="{{ $exam->id }}" value="c" type="radio"/>
                                                        <label>{{ $exam->variant_c }}</label>
                                                    </div>
                                                </div>
                                            @endif
                                            @if($exam->variant_d !== null  && $exam->variant_d !== '')
                                                <div class="col-md-4 col-sm-6 col-12">
                                                    <div class="exam-item-group">
                                                        <input name="{{ $exam->id }}" value="d" type="radio"/>
                                                        <label>{{ $exam->variant_d }}</label>
                                                    </div>
                                                </div>
                                            @endif
                                            @if($exam->variant_e !== null && $exam->variant_e !== '')
                                                <div class="col-md-4 col-sm-6 col-12">
                                                    <div class="exam-item-group">
                                                        <input name="{{ $exam->id }}" value="e" type="radio"/>
                                                        <label>{{ $exam->variant_e }}</label>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </fieldset>
                                </div>
                            @endforeach
                        </div>
                        <div class="form-footer">
                            <div class="exam-submit">
                                @if(\Illuminate\Support\Facades\Lang::has('third.submit'))
                                    <button type="submit" class="exam-submit-btn">
                                        {{ __('third.exam_submit') }}
                                    </button>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
