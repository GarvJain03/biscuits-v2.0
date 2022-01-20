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
    <div class="relative min-h-screen md:flex">

        <div class="bg-gray-light text-gray-100 flex justify-between md:hidden">
          <a href="/admin" class="block p-4 text-white font-bold">Biscuits Admin</a>
      
          <button class="mobile-menu-button p-4 focus:outline-none focus:bg-gray-700">
            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
      
        <div class="sidebar bg-gray-light text-text-green w-68 space-y-6 py-7 px-2 absolute inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in-out">
      
          <a href="/admin" class="text-heading-green flex items-center space-x-2 px-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>
            <span class="text-2xl font-extrabold">Biscuits Admin</span>
          </a>
      
          <nav>
            <a href="/admin" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-cool-gray hover:text-white">
              Home
            </a>
            <a href="/admin/responses" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-cool-gray hover:text-white">
              Responses
            </a>
            <a href="/admin/notifications" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-cool-gray hover:text-white">
              Notifications
            </a>
            <a href="/leaderboard" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-cool-gray hover:text-white">
              Leaderboard
            </a>
            <a href="/auth/logout" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-cool-gray hover:text-white">
              Logout
            </a>
          </nav>
        </div>
      
        <div class="flex-1 p-10 text-2xl font-bold">
          @yield('content')
        </div>
      
      </div>
</body>
<script>
    // grab everything we need
    const btn = document.querySelector(".mobile-menu-button");
    const sidebar = document.querySelector(".sidebar");

    // add our event listener for the click
    btn.addEventListener("click", () => {
    sidebar.classList.toggle("-translate-x-full");
    });

</script>
</html>