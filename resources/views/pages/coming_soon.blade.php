


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
    <section class="text-gray-600 body-font">
        <div class="container mx-auto flex px-5 py-10 items-center justify-center flex-col">
            <img
                class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded"
                alt="hero"
                src="/images/logo.svg"
            />
            <div class="text-center lg:w-2/3 w-full">
                <h1 class="title-font sm:text-4xl text-6xl mb-4 font-medium text-heading-green uppercase font-bold">
                    Biscuits has concluded
                </h1>
                <button href="/leaderboard" class="uppercase text-dark-bg font-bold bg-text-green border-0 py-2 px-8 focus:outline-none hover:bg-heading-green rounded text-lg">
                    Leaderboard
                </button>
            </div>
        </div>
    </section>

</body>
</html>