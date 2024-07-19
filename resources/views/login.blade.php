@extends('layouts.auth')
@section('title', 'Login')
@section('content')
<form
    method="POST"
    action="{{ url('login') }}"
    @submit.prevent="submitForm"
    autocomplete="off"
>
    @csrf

    <input name="hidden1" type="email" style="display:none;">
    <input name="hidden2" type="password" style="display:none;">

    <h3 class="pb-4 mb-4">
        <img src="{{ asset('image/logo.svg') }}" width="250" alt="Aurano">
    </h3>
    @if(session('success_msg') != "")
    <div style="border: 1px solid #005200;    padding: 20px;    border-radius: 5px;    margin-bottom: 20px;    background: #00800014;    color: #013401;" id="success_msg">
        {{session('success_msg')}}
    </div>
    @endif
    <span class="h6 mb-4 d-block">LOGIN</span>

    <input type="hidden" value="{{ session('error_msg') }}" id="error_msg" autocomplete="off">


    <div class="mb-4 form-group">
        <input
            type="email"
            class="form-control"
            autocomplete="off"
            :class="{'border-danger': errors.has('email')}"
            placeholder="Enter your email"
            name="email"
            v-validate="'required|email'"
            value="{{ old('email') }}"
            autofocus 
        />

        <span class="text-danger small" v-if="errors.has('email')">
            <strong>@{{ errors.first('email') }}</strong>
        </span>
    </div>

    <div class="mb-4 form-group">
        <input
            name="password"
            v-validate="'required'"
            :class="{'border-danger': errors.has('password')}"
            autocomplete="off"
            type="password"
            class="form-control @error('password') border-danger @enderror"
            placeholder="Password"  
        />

        <span class="text-danger small" v-if="errors.has('password')">
            <strong>@{{ errors.first('password') }}</strong>
        </span>
    </div>

    <a class="form-group d-inline-block" href="{{ url('/forgotPassword') }}">
        Forget your password?
    </a>


    <div class="mt-3 mb-4 form-group w-50" >
        <button type="submit" class="btn btn-lg btn-primary btn-block">
            <span>Log in</span>
        </button>
    </div>



    <div class="mt-1 mb-5 form-group" >
        <a href="{{url('continueGoogle')}}" class="ci-goole-login">
            <img src="{{asset('icon/google-icon.svg')}}"> <span>Continue With Google Account</span> 
        </a>
    </div>

    <div class="form-group">
        <p>New to Aurano? <a href="{{url('signup')}}" class="ml-2">Sign Up</a></p>

        <!-- <p>Don’t have an account? <a href="{{url('selectUserPlan')}}" class="ml-2">Sign Up</a></p> -->
    </div>
</form>

@php
    session()->forget('error_msg');
    session()->forget('success_msg');
@endphp
    
@endsection

@section('scripts')
<script src="https://unpkg.com/vee-validate@2.2.15/dist/vee-validate.js"></script>
<script>
    Vue.use(VeeValidate, {
        events: 'change'
    });

    let loginError = $('#error_msg').val();


    new Vue({
        name: 'Login',
        el: '#app',
        methods: {
            async submitForm(evt) {
                const isValid = await this.$validator.validate();

                if (isValid) {
                    evt.target.submit();
                }
            }
        },
        mounted() {
            if (loginError.length > 0) {
                this.errors.add({
                    field: 'email',
                    msg: loginError
                })
            }
        }
    })
    setTimeout(function(){
        $("#success_msg").hide();
    }, 10000);
</script>
@endsection
