<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Responses | Biscuits v2.0</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                colors: {
                    'dark-bg': '#121212',
                    'heading-green': '#1DB954',
                    'text-green': '#1ED760',
                    'button-gray': '#272727',
                    'cool-gray': '#3D3C3C',
                    'gray-light': '#202020',
                },
                fontFamily: {
                    sans: ['Chakra Petch', 'sans-serif'],
                },
                },
            },
            variants: {
                extend: {},
            },
            plugins: [],
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=JetBrains+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');
        * {
        font-family: 'Chakra Petch', sans-serif;
        }

        html,
        body {
        background-color: #121212;
        }

        ::-webkit-scrollbar {
        width: 10px;
        }

        ::-webkit-scrollbar-track {
        background: #121212;
        }

        ::-webkit-scrollbar-thumb {
        background: #4e4e4e;
        border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
        background: #363636;
        }
    </style>
</head>
<body>
    <div class="container px-5 py-24 mx-auto flex md:w-1/2 flex-wrap items-center">
        <div class="lg:w-full md:w-full bg-gray-light rounded-lg p-8 w-full mt-10 md:mt-0">
          <h3 class="font-bold text-2xl mb-4 px-4 text-heading-green">
            {{$response->user->username}} ({{$response->user->question_on}})
          </h3>
          <div class="flex flex-wrap items-start mb-6">
            <div class="w-full md:w-1/2 lg:w-1/3 px-4 my-3">
              <div class="text-white uppercase text-xl w-full">{{$response->answer}}</div>
            </div>
          </div>
          <form class="flex flex-col px-4" action={{route('admin.record_admin_response')}} method="POST">
            @csrf
            @method('POST')
            <input type="hidden" name="responseId" value={{$response->id}}>
            <textarea
              name="responseText"
              class="bg-cool-gray rounded-lg border-gray-300 mb-4 focus:border-dark-bg focus:ring-2 focus:ring-gray-500 text-base outline-none text-white py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
            ></textarea>
            <button class="font-bold border border-red-600 py-2 px-8 focus:outline-none hover:bg-red-600 text-red-600 hover:text-white rounded text-lg transition duration-200 ease-in-out">
              Mark As Incorrect
            </button>
          </form>
          <form
            class="flex flex-col px-4 mt-4"
            action={{route('admin.mark_correct')}}
            method="POST"
          >
          @csrf
          @method('POST')
          <input type="hidden" name="response_id" value={{$response->id}}>
            <button type="submit" class="font-bold border border-text-green py-2 px-8 focus:outline-none hover:bg-text-green text-text-green hover:text-white rounded text-lg transition duration-200 ease-in-out">
              Mark As Correct
            </button>
          </form>
        </div>
      </div>
</body>
</html>