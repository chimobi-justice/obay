<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
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
        <h1 class="text-center leading-7 mb-5 text-4xl text-gray-600 font-semibold pt-4"><a href="{{ route('dashboard') }}">Obay</h1>
        <ul>
            <li><a href="{{ route('dashboard') }}" class="hover:text-gray-500">Home</a></li>
            <li><a href="#" class="hover:text-gray-500" id="clickMeal">Meals v</a>
                <ul class="mealListBox">
                    <li><a href="/dashboard/burgers" class="p-3 text-gray-500 hover:text-gray-600">burgers</a></li>
                    <li><a href="/dashboard/pizzas" class="p-3 text-gray-500 hover:text-gray-600">pizza</a></li>
                    <li><a href="/dashboard/breads" class="p-3 text-gray-500 hover:text-gray-600">bread</a></li>
                    <li><a href="/dashboard/rices" class="p-3 text-gray-500 hover:text-gray-600">rice</a></li>
                    <li><a href="/french-fries" class="p-3 text-gray-500 hover:text-gray-600">french fries</a></li>
                    <li><a href="/dashboard/buns" class="p-3 text-gray-500 hover:text-gray-600">bun</a></li>
                </ul>
            </li>
            <li><a href="/listings" class="hover:text-gray-500">Listing</a></li>
            <li><a href="/settings" class="hover:text-gray-500">Setting</a></li>
            <li><a href="/account" class="hover:text-gray-500">Account</a></li>
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

    <aside class="right-nav bg-gray-300 p-3">
        <h1 class="mt-5 mb-5">My Order</h1>
        <div class="flex justify-between items-center mb-2">
            <div class="flex justify-between items-center">
                <div>
                    <img src="{{ asset('images/pizza.jpeg') }}" alt="" class="w-16 rounded-lg">
                </div>
                <p class="text-gray-600 text-sm ml-1">Food Name</p>
            </div>
            <div class="text-right">
                <p class="text-gray-600 text-sm font-bold">$500.00</p>
                <form action="">
                    <button class="text-red-500">U</button>
                </form>
            </div>
        </div>

        <div class="flex justify-between items-center mb-2">
            <div class="flex justify-between items-center">
                <div>
                    <img src="{{ asset('images/pizza.jpeg') }}" alt="" class="w-16 rounded-lg">
                </div>
                <p class="text-gray-600 text-sm ml-1">Food Name</p>
            </div>
            <div class="text-right">
                <p class="text-gray-600 text-sm font-bold">$500.00</p>
                <form action="">
                    <button class="text-red-500">U</button>
                </form>
            </div>
        </div>

        <div class="flex justify-between items-center mb-2">
            <div class="flex justify-between items-center">
                <div>
                    <img src="{{ asset('images/pizza.jpeg') }}" alt="" class="w-16 rounded-lg">
                </div>
                <p class="text-gray-600 text-sm ml-1">Food Name</p>
            </div>
            <div class="text-right">
                <p class="text-gray-600 text-sm font-bold">$500.00</p>
                <form action="">
                    <button class="text-red-500">U</button>
                </form>
            </div>
        </div>

        <div class="flex justify-between items-center mb-2">
            <div class="flex justify-between items-center">
                <div>
                    <img src="{{ asset('images/pizza.jpeg') }}" alt="" class="w-16 rounded-lg">
                </div>
                <p class="text-gray-600 text-sm ml-1">Food Name</p>
            </div>
            <div class="text-right">
                <p class="text-gray-600 text-sm font-bold">$500.00</p>
                <form action="">
                    <button class="text-red-500">U</button>
                </form>
            </div>
        </div>
        <div class="flex justify-between items-center mb-2">
            <div class="flex justify-between items-center">
                <div>
                    <img src="{{ asset('images/pizza.jpeg') }}" alt="" class="w-16 rounded-lg">
                </div>
                <p class="text-gray-600 text-sm ml-1">Food Name</p>
            </div>
            <div class="text-right">
                <p class="text-gray-600 text-sm font-bold">$500.00</p>
                <form action="">
                    <button class="text-red-500">U</button>
                </form>
            </div>
        </div>

        <div class="price-total mt-10">
            <div class="flex justify-between mb-2">
                <h3 class="text-gray-500 font-bold">Subtotal:</h3>
                <p class="text-green-600">$5500</p>
            </div>

            <div class="flex justify-between mb-2">
                <h3 class="text-gray-500 font-bold">Total:</h3>
                <p class="text-green-600">$5500</p>
            </div>

            <div class="flex justify-between">
                <h3 class="text-gray-500 font-bold">Delivery:</h3>
                <p>Free</p>
            </div>
        </div>

        <form action="" class="mt-5 ">
            <x-form.button>Order & Checkout</x-form.button>
        </form>
    </aside>

    <script src="{{ asset('js/index.js') }}"></script>
</body>
</html>