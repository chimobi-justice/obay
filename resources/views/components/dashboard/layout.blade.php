<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/c/account.css') }}">

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
        <form action="" class="w-8/12">
            <input type="text" name="search" id="search" placeholder="what would you like to eat today"
             class="border border-gray-200 p-2 mb-1 w-full rounded text-sm"/>
        </form>
    </nav>

    <aside class="left-nav">
        <h1 class="text-center leading-7 mb-5 text-4xl text-gray-600 font-semibold pt-4"><a href="{{ route('c.dashboard') }}">Obay</h1>
        <ul>
            <li><a href="{{ route('c.dashboard') }}" class="hover:text-gray-500 text-gray-600 {{ request()->is('c/dashboard') ? 'text-red-500 hover:text-red-500' : '' }}">Home</a></li>
            <li><a href="/c/dashboard/meals" class="hover:text-gray-500 text-gray-600 {{ request()->is('c/dashboard/meals') ? 'text-red-500 hover:text-red-500' : '' }}" id="clickMeal">Meals v</a>
                <ul class="mealListBox">
                    <li><a href="{{ route('c.dashboard.meals.burger') }}" class="p-3 hover:text-gray-600 text-gray-600 {{ request()->is('c/dashboard/meals/burgers') ? 'text-red-500 hover:text-red-500' : '' }}">burgers</a></li>
                    <li><a href="{{ route('c.dashboard.meals.pizzas') }}" class="p-3 hover:text-gray-600 text-gray-600 {{ request()->is('c/dashboard/meals/pizzas') ? 'text-red-500 hover:text-red-500' : '' }}">pizzas</a></li>
                    <li><a href="{{ route('c.dashboard.meals.bread') }}" class="p-3 hover:text-gray-600 text-gray-600 {{ request()->is('c/dashboard/meals/breads') ? 'text-red-500 hover:text-red-500' : '' }}">breads</a></li>
                    <li><a href="{{ route('c.dashboard.meals.rice') }}" class="p-3 hover:text-gray-600 text-gray-600 {{ request()->is('c/dashboard/meals/rice') ? 'text-red-500 hover:text-red-500' : '' }}">rice</a></li>
                    <li><a href="{{ route('c.dashboard.meals.french-fries') }}" class="p-3 hover:text-gray-600 text-gray-600 {{ request()->is('c/dashboard/meals/french-fries') ? 'text-red-500 hover:text-red-500' : '' }}">french fries</a></li>
                    <li><a href="{{ route('c.dashboard.meals.bun') }}" class="p-3 hover:text-gray-600 text-gray-600 {{ request()->is('c/dashboard/meals/bun') ? 'text-red-500 hover:text-red-500' : '' }}">bun</a></li>
                </ul>
            </li>
                        
            <li><a href="/c/dashboard/cart" class="hover:text-gray-500 text-gray-600 {{ request()->is('c/dashboard/cart') ? 'text-red-500 hover:text-red-500' : '' }}">@livewire('cart-counter') </a></li>
            <li><a href="/c/dashboard/account" class="hover:text-gray-500 text-gray-600 {{ request()->is('c/dashboard/account') ? 'text-red-500 hover:text-red-500' : '' }}">Account</a></li>
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
    <script src="{{ asset('js/c/account.js') }}"></script>
</body>
</html>