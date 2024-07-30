@extends('layouts.app')

@section('title', $team->{'fullname_' . app()->getLocale()} . ' -')

@section('content')
    <section class="breadcrumb-area d-flex align-items-center"
             style="background-image:url({{ asset('assets/img/testimonial/test-bg.png') }})">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="breadcrumb-wrap text-left">
                        <div class="breadcrumb-title">
                            <h2>
                                {{ $team->{'fullname_' . app()->getLocale()} }}
                            </h2>
                            <div class="breadcrumb-wrap">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        @if(\Illuminate\Support\Facades\Lang::has('header.home'))
                                            <li class="breadcrumb-item">
                                                <a href="/">
                                                    {{ __('header.home') }}
                                                </a>
                                            </li>
                                        @endif
                                        <li class="breadcrumb-item active"
                                            aria-current="page">{{ $team->{'fullname_' . app()->getLocale()} }}</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="instructor" class="instructor-area pt-80 pb-90">
        <div class="container">
            <div class="row intructor-row">
                <div class="col-lg-8 col-md-7 col-sm-12">
                    <div class="instructor-info">
                        <h2>
                            <b>
                                {{ $team->{'fullname_' . app()->getLocale()} }}
                            </b>
                        </h2>
                        <span class="instructor-position">
                            {{ __('third.'.$team->position) }}
                        </span>
                    </div>
                    <div class="instructor-description mt-4">
                        <div class="title">
                            <h4>
                                @if(\Illuminate\Support\Facades\Lang::has('team_page.about_me'))
                                    <b>{{ __('team_page.about_me') }}</b>
                                @endif
                            </h4>
                        </div>
                        <p>{!! $team->{'bio_' . app()->getLocale()} !!}</p>
                    </div>
                </div>


                <div class="col-lg-4 col-md-5 col-sm-6">
                    <div class="single-team text-center mb-30 ">
                        <div class="team-thumb">
                            <div class="brd">
                                <img src="{{ asset('laravel/public/uploads/' . $team->image) }}"
                                     alt="{{ $team->{'fullname_' . app()->getLocale()} }}">
                            </div>
                        </div>
                        <div class="team-info" style="margin-bottom: -177px !important;">
                            @if(\Illuminate\Support\Facades\Lang::has('team_page.social_media'))
                                <span>{{ __('team_page.social_media') }}</span>
                            @endif
                            <div class="team-social">
                                @if($team->facebook_link)
                                    <a href="{{ $team->facebook_link }}"><i class="fab fa-facebook-f"></i></a>
                                @endif
                                @if($team->instagram_link)
                                    <a href="{{ $team->instagram_link }}"><i class="fab fa-instagram"></i></a>
                                @endif
                                @if($team->linkedin_link)
                                    <a href="{{ $team->linkedin_link }}"><i class="fab fa-linkedin"></i></a>
                                @endif
                            </div>

                            <button type="button" class="btn btn-primary mt-4" data-toggle="modal" style="margin-bottom: 25px !important;"
                                    data-target="#exampleModalCenter">
                                {{ __('third.send-message') }}
                            </button>


                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <img src="{{ asset('/digiuth.svg') }}" height="50px" alt="logo">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ route('send-mail.mentor') }}" method="POST">
                                            @csrf
                                            <div class="modal-body">

                                                <div class="form-group">
                                                <textarea class="form-control" type="text" id="editor1" rows="10"
                                                          placeholder="{{ __('third.send-message') }}"
                                                          name="message"></textarea>
                                                    <input name="mentorMail" hidden="" value="{{ $team->email }}">
                                                    <input name="senderMail" hidden=""
                                                           value="{{ auth()->user()->email ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger"
                                                        style="background-color: red" data-dismiss="modal">
                                                    @lang('third.close')
                                                </button>
                                                <button type="submit" class="btn btn-primary" id="submitButton">
                                                    @lang('third.send')
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
@section('js')
    <script>
        $(document).ready(function () {
            $('.btn-primary').on('click', function () {
                var $button = $(this);
                $button.prop('disabled', true);
                isLoggedIn(function (loggedIn) {
                    if (!loggedIn) {
                        window.location.href = '/login';
                    } else {
                        $('#exampleModalCenter').modal('show');
                    }
                    $button.prop('disabled', false);
                });
            });
            $('#submitButton').on('click', function () {
                // Trigger the form submission
                $('form').submit();
            });
        });

        function isLoggedIn(callback) {
            $.ajax({
                url: '/check-authentication',
                method: 'GET',
                success: function (response) {
                    callback(!!response.loggedIn);
                },
                error: function (xhr, status, error) {
                    console.error(error);
                    callback(false);
                }
            });
        }
    </script>
@endsection
