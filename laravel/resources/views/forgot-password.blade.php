@extends('layouts.app')

@section('title', __('third.forgot_password'))

@section('content')
    <section class="form-section">
        <form class="digiuth_form pt-80" id="forgot_password" action="{{ route('forgot.password') }}" method="POST">
            @csrf
            @if(\Illuminate\Support\Facades\Lang::has('third.forgot_password_msg'))
                <p class="mb-4">{{ __('third.forgot_password_msg') }}</p>
            @endif
            <div class="form-group">
                <input class="form-control" type="text" name="email" id="email" placeholder="
                @if(\Illuminate\Support\Facades\Lang::has('third.email'))
                {{ __('third.email') }}
                @endif">
            </div>

            @if(\Illuminate\Support\Facades\Lang::has('third.submit'))
                <div class="form-btns">
                    <button type="submit" class="btn-c mt-1">{{ __('third.reset_password_msg') }}</button>
                </div>
            @endif
        </form>
    </section>
@endsection
