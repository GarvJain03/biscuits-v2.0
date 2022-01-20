@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="container px-5 py-12 mx-auto flex flex-wrap items-center">
    <div class="lg:w-3/5 md:w-1/2 md:pr-16 md:block hidden lg:pr-0 pr-0">
        <img src="/images/login_hero.svg" alt="hero">
    </div>
    <form
      class="lg:w-2/6 md:w-1/2 bg-gray-light rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0"
      action="{{ route('auth.handleLogin') }}"
      method="POST"
    >
    @csrf
    @method('POST')
      <h1 class="font-bold text-heading-green text-3xl mb-5">Login</h1>
      <div class="relative mb-4">
        <label for="username" class="leading-7 text-text-green font-bold text-lg">
          Username
        </label>
        <input
          type="text"
          id="username"
          name="username"
          class="w-full bg-cool-gray rounded-lg border-gray-300 focus:border-dark-bg focus:ring-2 focus:ring-gray-500 text-base outline-none text-white py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
        />
      </div>
      <div class="relative mb-4">
        <label for="password" class="leading-7 text-text-green font-bold text-lg">
          Password
        </label>
        <input
          type="password"
          id="password"
          name="password"
          class="w-full bg-cool-gray rounded-lg border-gray-300 focus:border-dark-bg focus:ring-2 focus:ring-gray-500 text-base outline-none text-white py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
        />
      </div>
      <p class="text-sm font-semibold text-text-green mb-3">
        Don't have an account? Sign Up
        <a href="/auth/register" class="font-bold underline">
          here
        </a>
      </p>
      <span class="text-red-600 text-sm mb-4">
        @if(Session::has('error'))
            {{ Session::get('error') }}
        @endif
      </span>
      <button class="text-dark-bg font-bold bg-text-green border-0 py-2 px-8 focus:outline-none hover:bg-heading-green rounded text-lg" type="submit">
        Login
      </button>
    </form>
  </div>
@endsection()
