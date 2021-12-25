<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/m/food.css') }}">
    <link rel="stylesheet" href="{{ asset('css/m/account.css') }}">

    @livewireStyles
    <title>Dashboard</title>
</head>
<body class="bg-pink-50">
    <nav class="flex justify-between p-3" id="nav">
        <div id="icon_container">
            <div id="mobile_menu" class="hamburger">
                <div class="mobile_icon"></div>
                <div class="mobile_icon"></div>
                <div class="mobile_icon"></div>
            </div>
        </div>
        <form action="" class="w-8/12 flex justify-around items-center">
            <div class="w-10/12">
            <input type="text" name="search" id="search" placeholder="what would you like to eat today"
             class="border border-gray-200 p-2 mb-1 w-full rounded text-sm"/>
            </div>
            <div>
                @if (auth()->user()->avatar)
                  <img src="{{ auth()->user()->avatar }}" alt="" class="w-9">
                @else
                  <img src="{{ asset('images/avatar.jpeg') }}" alt="" class="w-9">
                @endif
            </div>
        </form>
    </nav>

    <aside class="left-nav">
        <h1 class="text-center leading-7 mb-5 text-4xl text-gray-600 font-semibold pt-4"><a href="{{ route('c.dashboard') }}">Obay</h1>
        <ul>
            <li><a href="{{ route('dashboard.index') }}" class="hover:text-gray-500 text-gray-600 {{ request()->is('m/dashboard') ? 'text-red-500 hover:text-red-500' : '' }}">Home</a></li>
            <li><a href="{{ route('dashboard.create') }}" class="hover:text-gray-500 text-gray-600 {{ request()->is('m/dashboard/food/create') ? 'text-red-500 hover:text-red-500' : '' }}">Create Meal</a></li>
            <li><a href="{{ route('dashboard.order') }}" class="hover:text-gray-500 text-gray-600 {{ request()->is('m/dashboard/orders') ? 'text-red-500 hover:text-red-500' : '' }}">Orders</a></li>
            <li><a href="/m/dashboard/account" class="hover:text-gray-500 text-gray-600 {{ request()->is('c/dashboard/account') ? 'text-red-500 hover:text-red-500' : '' }}">Account</a></li>
            <li>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    
                    <x-form.button>sign out</x-form.button>
                </form>
            </li>
        </ul>
    </aside>

    <main class="main-body">
        {{ $slot }}
    </main>

    @livewireScripts

    <script src="{{ asset('js/index.js') }}"></script>
    <script src="{{ asset('js/m/account.js') }}"></script>
</body>
</html>