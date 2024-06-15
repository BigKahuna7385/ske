<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{ asset('images/logo.jpg') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: '#ef3b2d',
                    },
                },
            },
        }
    </script>
    <title>Schachklub 1926 Ettlingen e.V.</title>
</head>

<body class="mb-12">
    <div id="sidebar-section" style="z-index: 10" class="h-screen fixed">
        <div id="sidebar" class="fixed h-screen z-10 top-0 left-0 bg-slate-800 w-20 hover:w-72 duration-200">
            <a href="/"><img class="w-24" src="{{ asset('images/logo.jpg') }}" alt=""
                    class="logo" /></a>
            <nav role="navigation" class="pl-3 pt-8 mt-4">
                <div class="mt-4 relative overflow-hidden">
                    <ul class="nav-list space-y-8" id="nav-list">
                        <li class="nav-item text-xl active p-2 rounded-l-xl text-white ">
                            <a href="/" class="flex gap-6">
                                <i class="fa-solid fa-house fa-2x"></i>
                                Home
                            </a>
                        </li>
                        <li class="nav-item text-xl  p-2 rounded-l-xl text-white ">
                            <a href="/tournaments" class="flex gap-6">
                                <i class="fa-solid fa-chess fa-2x"></i>
                                Turniere
                            </a>
                        </li>
                        <li class="nav-item text-xl  p-2 rounded-l-xl text-white ">
                            <a href="/dates" class="flex gap-6">
                                <i class="fa-solid fa-calendar fa-2x"></i>
                                Termine
                            </a>
                        </li>
                        <li class="nav-item text-xl  p-2 rounded-l-xl text-white ">
                            <a href="/dwz" class="flex gap-6">
                                <i class="fa-solid fa-ranking-star fa-2x"></i>
                                DWZ
                            </a>
                        </li>
                        @auth
                            <li class="nav-item text-xl  p-2 rounded-l-xl text-white ">
                                <a href="/matches" class="flex gap-6"><i class="fa-solid fa-user-group fa-2x"></i>
                                    Mannschaftskämpfe</a>
                            </li>
                            <li class="nav-item text-xl  p-2 rounded-l-xl text-white ">
                                <a href="/signup" class="flex gap-6"><i
                                        class="fa-solid fa-pen-to-square fa-2x"></i>Anmeldung</a>
                            </li>
                            <li class="nav-item text-xl  p-2 rounded-l-xl text-white ">
                                <a href="/signup" class="flex gap-6"><i class="fa-solid fa-envelopes-bulk fa-2x"></i>
                                    Rundschreiben</a>
                            </li>
                        @endauth
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <nav class="flex justify-between items-center md:ml-20 p-2" style="background:#E9F1F7">
        <div></div>
        <ul class="flex space-x-6 mr-6 text-lg">
            @auth
                <li>
                    <span class="font-bold uppercase">
                        Willkommen {{ auth()->user()->name }}
                    </span>
                </li>
                <li>
                    <a href="/account" class="hover:text-laravel"><i class="fa-solid fa-gear"></i> Konto</a>
                </li>
                <li>
                    <form class="inline" method="POST" action="/logout">
                        @csrf
                        <button type="submit">
                            <i class="fa-solid fa-door-closed"></i> Logout
                        </button>
                    </form>
                </li>
            @else
                <li>
                    <a href="/register" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i> Register</a>
                </li>
                <li>
                    <a href="/login" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i>
                        Login</a>
                </li>
            @endauth
        </ul>
    </nav>

    <main id="content" style="z-index:-1;" class="md:pl-20 w-full">
        {{ $slot }}
    </main>

    <footer
        class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold h-12 mt-24 opacity-90 md:justify-center"
        style="background:#E9F1F7">
        <nav class="flex justify-between items-center md:ml-24">
            <ul class="flex space-x-6 mr-6 text-lg">
                <li>
                    <a href="/impressum">Impressum</a>
                </li>
                <li>
                    <a href="/links">Links</a>
                </li>
                <li>
                    <a href="/contact">Kontakt</a>
                </li>
                <li>
                    <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>
                </li>
            </ul>
        </nav>
    </footer>

    <x-flash-message />
    <script>
        var navList = document.getElementById("nav-list");
        var items = navList.getElementsByClassName("nav-item ");

        for (var i = 0; i < items.length; i++) {
            items[i].addEventListener("click", function() {
                var current = document.querySelectorAll(".active");

                current.forEach((element) => {
                    element.classList.remove("active");
                });

                this.classList.add("active");
            });
        }
    </script>
</body>

</html>
