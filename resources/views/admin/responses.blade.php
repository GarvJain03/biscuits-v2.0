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
    <div class="w-full px-5 py-24 mx-auto max-w-screen-lg">
        <a href={{route('admin.index')}} class="flex flex-wrap text-xl text-white items-center pb-4">
          <div class="pr-2">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-6 w-6"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                strokeLinecap="round"
                strokeLinejoin="round"
                strokeWidth="2"
                d="M10 19l-7-7m0 0l7-7m-7 7h18"
              />
            </svg>
          </div>
          <div>Back to home</div>
        </a>
        <div class="flex items-center w-full p-6 bg-cool-gray rounded-lg shadow-sm">
          <div>
            <div class="text-4xl font-bold text-heading-green">Responses</div>
          </div>
        </div>
        <div class="flex items-center mx-auto my-4 overflow-x-auto bg-gray-light rounded-lg max-w-screen-lg min-w-screen-lg shadow-sm">
          <table class="w-full border-collapse border-1 border-gray-300 divide-y divide-gray-900">
            <thead>
              <tr class="bg-cool-gray text-heading-green rounded-t-lg text-left uppercase text-xs">
                <th class="p-4 rounded-tl-lg">#</th>
                <th class="p-4">Response</th>
                <th class="p-4">More</th>
              </tr>
            </thead>
            <tbody>
              @if (count($responses) === 0)
                <tr class="text-text-green uppercase">
                  <td colspan="3" class="p-4">No responses yet.</td>
                </tr>
              @else
              @foreach ($responses as $response)
              <tr class="even:bg-gray-100 text-text-green">
                  <td class="p-4">{{$response->id}}</td>
                  <td class="p-4">{{$response->answer}}</td>
                  <td class="p-4">
                    <a href="/admin/responses/{{$response->id}}">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                  </td>
                </tr>
              @endforeach
              @endif
            </tbody>
          </table>
        </div>
      </div>
</body>
</html>
