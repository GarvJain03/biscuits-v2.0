<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Biscuits v2.0</title>
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
      <div class="bg-dark-bg">
        <header class="text-heading-green bg-dark-bg body-font">
            <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
              <a href="/" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <img src="/images/logo.svg" alt="logo" class="w-20 h-20">
                <span class="ml-3 text-xl font-bold text-heading-green">BISCUITS</span>
              </a>
              <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                  @auth
                    <a class="mr-5 hover:underline" href="/">Play</a>
                    <a class="mr-5 hover:underline" href="/dashboard">Dashboard</a>
                    <div class="flex flex-row">
                        <div class="flex-col">
                            <main class="block">
                                <div class="hidden">
                                    @yield('hidden')
                                </div>
                            </main>
                        </div>
                    </div>
                  @endauth
                  @guest
                  <a class="mr-5 hover:underline" href="/">
                    Home
                  </a>
                  @endguest
              </nav>
            </div>
          </header>
          <main class="container mx-auto text-heading-green">
              @yield('content')
          </main>
      </div>
</body>
</html>