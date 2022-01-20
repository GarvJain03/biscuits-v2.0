@extends('layouts.app')

@section('title', 'Play')

@section('hidden')
{{$question->hidden_stuff}}
@endsection

@section('content')
<section class="text-gray-600 body-font">
    <div class="container mx-auto flex px-5 py-12 items-center justify-center flex-col">
      <div class="text-center bg-gray-light py-12 px-8 rounded-lg lg:w-2/3 w-full">
          <div>
            <h1 class="title-font sm:text-6xl text-6xl mb-4 font-bold text-heading-green">
                {{$question->title}}
            </h1>
            <p class="mb-8 leading-relaxed text-text-green text-xl">{{$question->description}}</p>
          </div>
          <form class="flex flex-col px-8" action={{route('record_response')}} method="POST">
            @csrf
            @method('POST')
            <textarea
              name="answer"
              class="bg-cool-gray rounded-lg border-gray-300 mb-4 focus:border-dark-bg focus:ring-2 focus:ring-gray-500 text-base outline-none text-white py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
            ></textarea>
            <button type="submit" class="text-dark-bg font-bold bg-text-green border-0 py-2 px-8 focus:outline-none hover:bg-heading-green rounded text-lg">
              Submit
            </button>
          </form>
      </div>
    </div>
  </section>
@endsection