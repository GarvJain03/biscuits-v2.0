@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section>
    <div class="container mx-auto flex px-5 py-12 md:flex-row flex-col items-center">
      <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
        <h1 class="title-font sm:text-7xl text-6xl mb-4 font-bold text-heading-green uppercase">
          Biscuits
        </h1>
        <p class="mb-8 text-text-green leading-relaxed font-normal text-2xl">
          Standing for Blend into Simulating <br /> Circuits. <br />
          Use your knowledge to clear the levels. <br />
          The Fastest Solver Wins!
        </p>
        <div class="flex justify-center">
          <a
            href="/auth/login"
            class="inline-flex bg-button-gray text-heading-green border-0 py-2 px-6 focus:outline-none rounded-lg uppercase text-lg font-bold"
          >
            Login
          </a>
          <a
            href="/auth/register"
            class="ml-4 inline-flex bg-button-gray text-heading-green border-0 py-2 px-6 focus:outline-none rounded-lg uppercase text-lg font-bold"
          >
            Sign Up
          </a>
        </div>
      </div>
      <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
        <img
          class="object-cover object-center rounded"
          alt="hero"
          src="/images/logo.svg"
        />
      </div>
    </div>
  </section>
  <section class="text-gray-600 body-font">
    <div class="container px-5 py-12 mx-auto">
      <div class="flex flex-col text-center w-full mb-20">
        <h1 class="sm:text-5xl text-4xl font-medium title-font mb-4 text-heading-green">Sponsored By</h1>
      </div>
      <div class="flex flex-wrap -m-4 text-center justify-center items-center">
        <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
            <img src="/images/plaksha.png" alt="">
        </div>
        <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
            <img src="/images/vrt.png" alt="">
        </div>
      </div>
    </div>
  </section>
@endsection
