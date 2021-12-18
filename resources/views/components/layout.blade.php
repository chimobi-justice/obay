<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="obay is a food delivery web application">
    <meta name="keywords" content="CSS,JavaScript,Tailwind,Laravel,PHP">
    <meta name="author" content="Justice Chimobi">
    <title>Obay</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cartOrder.css') }}">
    @livewireStyles
</head>
<body class="bg-pink-50">
    <nav class="flex justify-around items-center p-3 pt-3">
        <h1 class="text-4xl fonst-bold m-2"><a href="/">Obay</a></h1>

        <ul class="inline-flex p-3">
            <li class="m-2">
                <a href="/" class="p-3 text-gray-500 hover:text-gray-600 {{ request()->is('/') ? 'text-red-500 hover:text-red-500' : '' }}">
                    Home
                </a>
            </li>
            <li class="m-2">
                <a href="" class="p-3 text-gray-500 hover:text-gray-600 {{ request()->is('services') ? 'text-red-500 hover:text-red-500' : '' }}">
                    Services
                </a>
            </li>
            <li class="m-2">
                <a href="/our-menu" class="p-3 text-gray-500 hover:text-gray-600 {{ request()->is('our-menu') ? 'text-red-500 hover:text-red-500' : '' }}">
                    Menu
                </a>
            </li>
            <li class="m-2">
                <a href="" class="p-3 text-gray-500 hover:text-gray-600 {{ request()->is('contact-us') ? 'text-red-500 hover:text-red-500' : '' }}">
                    Contact
                </a>
            </li>
        </ul>

        <ul class="inline-flex p-3 items-center">
            <li class="m-2">
                <a href="">
                    <img src="{{ asset('images/search.png') }}" alt="" class="pr-2 icon w-7">
                </a>
            </li>
            <li class="m-2">
                <a href="" class="flex" id="clickModalCartOpen">
                    <img src="{{ asset('images/c.png') }}" alt="" class="pr-2 icon w-7">
                    <span class="text-sm text-gray-500">
                        @livewire('cart-counter')
                    </span>
                </a>
            </li>
            <li class="m-2">
                <a href="{{ route('login') }}" class="flex bg-red-500 uppercase font-semibold text-xs text-white py-2 px-5 rounded-lg hover:bg-red-600">
                    <img src="{{ asset('images/user-login.png') }}" alt="" class="icon w-5 pr-2"> 
                    login
                </a>
            </li>
        </ul>
    </nav>

    <aside class="cartModal bg-gray-300 p-3" id="cartModal">
        <div class="flex justify-between items-center mt-2 mb-4">
            <h1>My Order</h1>
            <p><a href="" id="closeCartModal" class="hover:text-gray-500">close X</a></p>
        </div>
        @if (\Gloudemans\Shoppingcart\Facades\Cart::content()->count())
            @foreach (\Gloudemans\Shoppingcart\Facades\Cart::content() as $cart)
                <div>
                    <div class="flex justify-between items-center">
                        <div>
                            <img src="{{ asset('images/pizza.jpeg') }}" alt="" class="w-16 rounded-lg">
                        </div>
                        <p class="text-gray-600 text-sm ml-1">{{ Str::limit($cart->name, 15) }}</p>
                    </div>
                    <div class="text-right">
                        <p class="text-gray-600 text-sm font-bold">{{ $cart->total() }}</p>
                        <form action="">
                            <button class="text-red-500">U</button>
                        </form>
                    </div>
                </div>
            @endforeach

            <div class="mt-2">
                <div class="flex justify-between mb-2">
                    <h3 class="text-gray-500 font-bold">Subtotal:</h3>
                    <p class="text-green-600">${{ \Gloudemans\Shoppingcart\Facades\Cart::total()}}</p>
                </div>

                <div class="flex justify-between mb-2">
                    <h3 class="text-gray-500 font-bold">Total:</h3>
                    <p class="text-green-600">${{ \Gloudemans\Shoppingcart\Facades\Cart::total()}}</p>
                </div>
            </div>
            
            @auth
            <form action="{{ route('c.dashboard') }}" class="mt-5 ">
                <x-form.button>Order & Checkout</x-form.button>
            </form>
            @endauth

            @guest
                <form action="{{ route('login') }}" class="mt-5 ">
                    <x-form.button>Order & Checkout</x-form.button>
                </form>
            @endguest
        @else
            You haven't yet add any cart    
        @endif
    </aside>

    <main>
        {{ $slot }}
    </main>

    <footer class="pb-5">
        <div class="grid grid-cols-5 gap-12 w-10/12 m-auto">
            <div>
                <h1 class="text-2xl font-bold pb-3"><a href="/">Obay</a></h1>
                <p class="text-sm text-gray-500 leading-6">Our job is filling up your tummy with delicious foods and with fast and also free delivery.</p>
            </div>
            <div>
                <h2 class="pb-3 text-lg">About</h2>
                <ul>
                    <li><a href="" class="text-sm text-gray-500 hover:text-gray-600">About Us</a></li>
                    <li><a href="" class="text-sm text-gray-500 hover:text-gray-600">Features</a></li>
                    <li><a href="" class="text-sm text-gray-500 hover:text-gray-600">News</a></li>
                    <li><a href="" class="text-sm text-gray-500 hover:text-gray-600">Menu</a></li>
                </ul>
            </div>
            <div>
                <h2 class="pb-3 text-lg">Company</h2>
                <ul>
                    <li><a href="" class="text-sm text-gray-500 hover:text-gray-600">Home</a></li>
                    <li><a href="" class="text-sm text-gray-500 hover:text-gray-600">Partner with Us</a></li>
                    <li><a href="" class="text-sm text-gray-500 hover:text-gray-600">FAQ</a></li>
                    <li><a href="" class="text-sm text-gray-500 hover:text-gray-600">Blog</a></li>
                </ul>
            </div>
            <div>
                <h2 class="pb-3 text-lg">Support</h2>
                <ul>
                    <li><a href="" class="text-sm text-gray-500 hover:text-gray-600">Account</a></li>
                    <li><a href="" class="text-sm text-gray-500 hover:text-gray-600">Support Center</a></li>
                    <li><a href="" class="text-sm text-gray-500 hover:text-gray-600">Feedback</a></li>
                    <li><a href="" class="text-sm text-gray-500 hover:text-gray-600">Contact Us</a></li> 
                </ul>
            </div>
            <div>
                <h2 class="pb-3 text-lg">Get in Touch</h2>
                <p class="text-sm text-gray-500 leading-6">Question or feedback?</p>
                <p class="text-sm text-gray-500 leading-6">we'd love to hear from yoe</p>
                <form action="" class="pt-3">
                    <div class="flex">
                        <input type="text" placeholder="Email address" class="p-1 text-sm">
                        <button><img src="{{ asset('images/send.png') }}" alt="" class="ml-2 icon"></button>
                    </div>
                </form>
            </div>
        </div>
    </footer>

    @livewireScripts

    <script src="{{ asset('js/cartOrder.js')}}"></script>
</body>
</html>