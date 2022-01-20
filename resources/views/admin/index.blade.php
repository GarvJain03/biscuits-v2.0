@extends('layouts.admin')

@section('title', 'Admin')

@section('content')
<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto flex flex-wrap">
      <div class="flex flex-wrap -mx-4 mt-auto mb-auto lg:w-1/2 sm:w-2/3 content-start sm:pr-10">
        <div class="w-full sm:p-4 px-4 mb-6">
          <h1 class="title-font font-medium text-2xl mb-2 uppercase text-heading-green">
            Biscuits 2021
          </h1>
          <div class="leading-relaxed text-4xl text-heading-green">Admin Panel</div>
        </div>
          <div
            class="p-4 mx-2 sm:w-1/2 lg:w-1/4 w-1/2 text-text-green bg-gray-light rounded-md mb-2"
          >
            <h2 class="title-font font-medium text-2xl">Users</h2>
            <p class="leading-relaxed font-normal uppercase">{{$stats['users']}}</p>
          </div>
          <div
          class="p-4 mx-2 sm:w-1/2 lg:w-1/4 w-1/2 text-text-green bg-gray-light rounded-md mb-2"
        >
          <h2 class="title-font font-medium text-2xl">Questions</h2>
          <p class="leading-relaxed font-normal uppercase">{{$stats['questions']}}</p>
        </div>
        <div
        class="p-4 mx-2 sm:w-1/2 lg:w-1/4 w-1/2 text-text-green bg-gray-light rounded-md mb-2"
      >
        <h2 class="title-font font-medium text-2xl">Responses</h2>
        <p class="leading-relaxed font-normal uppercase">{{$stats['responses']}}</p>
      </div>
      </div>
      <div class="lg:w-1/2 sm:w-1/3 w-full rounded-lg overflow-hidden mt-6 sm:mt-0">
        <img
          class="object-cover object-center w-96 h-96"
          src="/images/admin_hero.svg"
          alt="admin hero"
        />
      </div>
    </div>
  </section>
@endsection