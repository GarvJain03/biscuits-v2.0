@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
    <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
      <div class="lg:w-full md:w-full bg-gray-light rounded-lg p-8 w-full mt-10 md:mt-0">
        <h3 class="font-bold text-2xl mb-4 px-4 text-heading-green">{{$user->username}}</h3>
        <div class="flex flex-wrap items-start mb-6">
            <div class="w-full md:w-1/2 lg:w-1/3 px-4 my-3 block">
              <label class="uppercase text-text-green text-lg font-bold">Username</label>
              <div class="text-white uppercase text-xl">{{$user->username}}</div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3 px-4 my-3 block">
                <label class="uppercase text-text-green text-lg font-bold">First Member</label>
                <div class="text-white uppercase text-xl">{{$user->first_member}}</div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3 px-4 my-3 block">
                <label class="uppercase text-text-green text-lg font-bold">Second Member</label>
                <div class="text-white uppercase text-xl">{{$user->second_member}}</div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3 px-4 my-3 block">
                <label class="uppercase text-text-green text-lg font-bold">First Member Email</label>
                <div class="text-white uppercase text-xl">{{$user->first_member_email}}</div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3 px-4 my-3 block">
                <label class="uppercase text-text-green text-lg font-bold">Second Member Email</label>
                <div class="text-white uppercase text-xl">{{$user->second_member_email}}</div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3 px-4 my-3 block">
                <label class="uppercase text-text-green text-lg font-bold">First Member Grade</label>
                <div class="text-white uppercase text-xl">{{$user->first_member_grade}}</div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3 px-4 my-3 block">
                <label class="uppercase text-text-green text-lg font-bold">Second Member Grade</label>
                <div class="text-white uppercase text-xl">{{$user->second_member_grade}}</div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3 px-4 my-3 block">
                <label class="uppercase text-text-green text-lg font-bold">Category</label>
                <div class="text-white uppercase text-xl">{{$user->category}}</div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3 px-4 my-3 block">
                <label class="uppercase text-text-green text-lg font-bold">Questions Solved</label>
                <div class="text-white uppercase text-xl">{{$user->question_on - 1}}</div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3 px-4 my-3 block">
              <label class="uppercase text-text-green text-lg font-bold">Auth Token</label>
              <div class="text-white text-xl">{{$user->auth_token}}</div>
          </div>
        </div>
        <div class="mx-3 flex flex-row mb-2 item-start">
          <a href="/auth/logout" class="text-center w-full text-dark-bg font-bold py-2 mx-2 bg-text-green border-0 focus:outline-none hover:bg-heading-green rounded text-lg">
            Logout
          </a>
          <a
            href="/"
            class="w-full text-dark-bg text-center font-bold py-2 mx-2 bg-text-green border-0 focus:outline-none hover:bg-heading-green rounded text-lg"
          >
            Play
          </a>
        </div>
      </div>
    </div>
    <div class="lg:w-2/6 md:w-1/2 bg-gray-light rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
      <h3 class="font-bold text-2xl mb-4 px-4 text-heading-green">Admin Response</h3>
      <div class="mx-3 flex text-xl flex-row mb-2 item-start">@if ($admin_response)
        <div class="w-full text-white uppercase text-xl">{{$admin_response->response_text}}</div>
        @else
        <div class="w-full text-white uppercase text-xl">No response yet</div>
        @endif</div>
    </div>
  </div>
@endsection