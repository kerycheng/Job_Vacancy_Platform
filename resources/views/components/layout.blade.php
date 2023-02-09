<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/icon-2.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            laravel: "#ef3b2d",
                        },
                    },
                },
            };
        </script>
        <title>招工讀 | 招募工讀生平台</title>
    </head>
    <body class="mb-48">
        <nav class="flex justify-between items-center mb-4">
            <a href="/example/public/"
                ><img class="w-24" src="{{asset('images/logo.png')}}" alt="" class="logo"
            /></a>
            <ul class="flex space-x-6 mr-6 text-lg">
                @auth
                <li>
                    <span class="font-bold uppercase">
                        歡迎 {{auth()->user()->name}}
                    </span>
                </li>
                <li>
                    <a href="/example/public/listings/manage" class="hover:text-laravel"
                        ><i class="fa-solid fa-gear"></i>
                        管理文章</a
                    >
                </li>
                <li>
                    <form class="inline" method="POST" action="/example/public/logout">
                        @csrf
                        <button type="submit">
                            <i class="fa-solid fa-door-closed"></i> 登出
                        </button>
                    </form>
                </li>
                @else
                <li>
                    <a href="/example/public/register" class="hover:text-laravel"
                        ><i class="fa-solid fa-user-plus"></i> 註冊會員</a
                    >
                </li>
                <li>
                    <a href="/example/public/login" class="hover:text-laravel"
                        ><i class="fa-solid fa-arrow-right-to-bracket"></i>
                        登入</a
                    >
                </li>
                @endauth
            </ul>
        </nav>

        <main>
            {{$slot}}
        </main>
        <footer
            class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center">
            <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>
            <a
                href="/example/public/listings/create"
                class="absolute top-1/3 right-10 bg-black text-white py-2 px-5"
                >張貼文章</a
            >
        </footer>
        <x-flash-message />
    </body>
</html>