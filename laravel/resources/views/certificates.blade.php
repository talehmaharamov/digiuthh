@extends('layouts.app')

@section('title', __('header.contact') . ' -')

@section('content')
    <section id="certificates" class="certificates-area fix pt-120 pb-120"
             style=" background-image: url(../../assets/img/bg/event-bg-aliments.png); background-repeat: no-repeat; background-position: center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-align text-center mb-10">
                        @if(\Illuminate\Support\Facades\Lang::has('third.my_certificates'))
                            <h5>{{ __('third.my_certificates') }}</h5>
                        @else
                            <h5></h5>
                        @endif
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive pt-3">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        @if(\Illuminate\Support\Facades\Lang::has('third.course_name'))
                                            <th>
                                                {{ __('third.course_name') }}
                                            </th>
                                        @endif
                                        @if(\Illuminate\Support\Facades\Lang::has('third.trainer_name'))
                                            <th>
                                                {{ __('third.trainer_name') }}
                                            </th>
                                        @endif
                                        @if(\Illuminate\Support\Facades\Lang::has('third.correct_question_count'))
                                            <th>
                                                {{ __('third.correct_question_count') }}
                                            </th>
                                        @endif
                                        @if(\Illuminate\Support\Facades\Lang::has('third.total_question_count'))

                                            <th>
                                                {{ __('third.total_question_count') }}
                                            </th>
                                        @endif
                                        @if(\Illuminate\Support\Facades\Lang::has('third.operations'))
                                            <th>
                                                {{ __('third.operations') }}
                                            </th>
                                        @endif
                                    </tr>
                                    @foreach($certificates as $certificate)
                                        <tr>
                                            <td>
                                                {{ $certificate->course?->title }}
                                            </td>
                                            <td>
                                                {{ $certificate->course?->user->name . ' ' .  $certificate->course?->user->surname}}
                                            </td>
                                            <td>
                                                {{ $certificate->correct_count }}
                                            </td>
                                            <td>
                                                {{ count($certificate->course?->course_exams ?? []) }}
                                            </td>

                                            <td>

                                                <div>
                                                    <a href="/certificates/{{ $certificate->id }}" class="setting-icon">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </div>

                                            </td>
                                        </tr>
                                    @endforeach
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
