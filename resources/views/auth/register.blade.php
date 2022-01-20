@extends('layouts.app')

@section('title', 'Register')

@section('content')
<section class="text-gray-600 body-font">
    <div class="container px-5 py-12 mx-auto flex flex-wrap items-center">
      <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
        <form
          class="bg-gray-light shadow-md rounded-lg px-8 pt-6 pb-8 mb-4 flex flex-col my-2"
          action="{{ route('auth.handleRegister') }}"
          method="POST"
        >
        @csrf
        @method('POST')
          <div class="-mx-3 md:flex mb-6">
            <div class="md:w-1/2 px-3 mb-6 md:mb-0">
              <label class="block tracking-wide text-text-green text-xl font-bold mb-2">
                Names
              </label>
              <input
                class="appearance-none block w-full text-grey-darke py-3 px-4 mb-3 bg-cool-gray rounded-lg border-gray-300 focus:border-dark-bg focus:ring-2 focus:ring-gray-500 text-base outline-none text-white leading-8 transition-colors duration-200 ease-in-out"
                name="first_member"
                type="text"
                placeholder="Participant 1">
                @error('first_member')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
              <input
                class="appearance-none block w-full text-grey-darke py-3 px-4 mb-3 bg-cool-gray rounded-lg border-gray-300 focus:border-dark-bg focus:ring-2 focus:ring-gray-500 text-base outline-none text-white leading-8 transition-colors duration-200 ease-in-out"
                name="second_member"
                type="text"
                placeholder="Participant 2">
                @error('second_member')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="md:w-1/2 px-3">
              <label class="block tracking-wide text-text-green text-xl font-bold mb-2">
                Email
              </label>
              <input
                class="appearance-none block w-full text-grey-darke py-3 px-4 mb-3 bg-cool-gray rounded-lg border-gray-300 focus:border-dark-bg focus:ring-2 focus:ring-gray-500 text-base outline-none text-white leading-8 transition-colors duration-200 ease-in-out"
                name="first_member_email"
                type="email"
                placeholder="Participant 1">
                @error('first_member_email')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
              <input
                class="appearance-none block w-full text-grey-darke py-3 px-4 mb-3 bg-cool-gray rounded-lg border-gray-300 focus:border-dark-bg focus:ring-2 focus:ring-gray-500 text-base outline-none text-white leading-8 transition-colors duration-200 ease-in-out"
                name="second_member_email"
                type="email"
                placeholder="Participant 2">
                @error('second_member_email')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
          </div>
          <div class="-mx-3 md:flex mb-6">
            <div class="md:w-1/2 px-3 mb-6 md:mb-0">
              <label class="block tracking-wide text-text-green text-xl font-bold mb-2">
                Class
              </label>
              <select
                class="appearance-none block w-full text-grey-darke py-3 px-4 mb-3 bg-cool-gray rounded-lg border-gray-300 focus:border-dark-bg focus:ring-2 focus:ring-gray-500 text-base outline-none text-white leading-8 transition-colors duration-200 ease-in-out"
                name="first_member_grade"
                id="first_member_grade"
              >
                <option value="">Participant 1</option>
                @for ($i = 1; $i < 13; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
              </select>
                @error('first_member_grade')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
                <select
                class="appearance-none block w-full text-grey-darke py-3 px-4 mb-3 bg-cool-gray rounded-lg border-gray-300 focus:border-dark-bg focus:ring-2 focus:ring-gray-500 text-base outline-none text-white leading-8 transition-colors duration-200 ease-in-out"
                name="second_member_grade"
                id="second_member_grade"
              >
                <option value="">Participant 2</option>
                @for ($i = 1; $i < 13; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
              </select>
                @error('second_member_grade')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="md:w-1/2 px-3">
              <label class="block tracking-wide text-text-green text-xl font-bold mb-2">
                Username and Password
              </label>
              <input
                class="appearance-none block w-full text-grey-darke py-3 px-4 mb-3 bg-cool-gray rounded-lg border-gray-300 focus:border-dark-bg focus:ring-2 focus:ring-gray-500 text-base outline-none text-white leading-8 transition-colors duration-200 ease-in-out"
                name="username"
                type="text"
                placeholder="johndoe">
                @error('username')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
              <input
                class="appearance-none block w-full text-grey-darke py-3 px-4 mb-3 bg-cool-gray rounded-lg border-gray-300 focus:border-dark-bg focus:ring-2 focus:ring-gray-500 text-base outline-none text-white leading-8 transition-colors duration-200 ease-in-out"
                name="password"
                type="password"
                placeholder="********">
                @error('password')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
          </div>
          <div class="-mx-3 md:flex mb-6">
            <div class="md:w-1/2 px-3 mb-6 md:mb-0">
              <label
                class="block tracking-wide text-text-green text-xl font-bold mb-2"
                htmlFor="grid-first-name"
              >
                Category
              </label>
              <select
                name="category"
                class="appearance-none block w-full text-grey-darke py-3 px-4 mb-3 bg-cool-gray rounded-lg border-gray-300 focus:border-dark-bg focus:ring-2 focus:ring-gray-500 text-base outline-none text-white leading-8 transition-colors duration-200 ease-in-out"
              >
                <option value="">Select Category</option>
                <option value="individual">Individual</option>
                <option value="school">School</option>
              </select>
                @error('category')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
          </div>
          <div class="-mx-3 flex flex-col mb-2 justify-center">
            <p class="text-sm text-center font-semibold text-text-green mb-3">
              Don't have an account? Sign Up
              <a href="/auth/login" class="font-bold underline">
                here
              </a>
            </p>
            <button class="text-dark-bg font-bold py-2 mx-2 bg-text-green border-0 focus:outline-none hover:bg-heading-green rounded text-lg" type="submit">
              Register
            </button>
          </div>
        </form>
      </div>
      <div class="lg:w-2/6 md:w-1/2 p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
        <img src="/images/register_hero.svg" alt="hero">
      </div>
    </div>
  </section>
@endsection