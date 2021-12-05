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
</head>
<body class="bg-pink-50">
    <nav class="flex justify-around items-center p-3 pt-3">
        <h1 class="text-4xl fonst-bold m-2"><a href="/">Obay</a></h1>

        <ul class="inline-flex p-3">
            <li class="m-2"><a href="" class="p-3 text-gray-500 hover:text-gray-600 {{ request()->is('/') ? 'text-red-500 hover:text-red-500' : '' }}">Why Obay?</a></li>
            <li class="m-2"><a href="" class="p-3 text-gray-500 hover:text-gray-600 {{ request()->is('services') ? 'text-blue-500 hover:text-red-500' : '' }}">Services</a></li>
            <li class="m-2"><a href="" class="p-3 text-gray-500 hover:text-gray-600 {{ request()->is('our-menu') ? 'text-blue-500 hover:text-red-500' : '' }}">Menu</a></li>
            <li class="m-2"><a href="" class="p-3 text-gray-500 hover:text-gray-600 {{ request()->is('contact-us') ? 'text-blue-500 hover:text-red-500' : '' }}">Contact</a></li>
        </ul>

        <ul class="inline-flex p-3 items-center">
            <li class="m-2"><a href=""><img src="{{ asset('images/search.png') }}" alt="" class="pr-2 icon w-7"></a></li>
            <li class="m-2"><a href=""><img src="{{ asset('images/c.png') }}" alt="" class="pr-2 icon w-7"></a></li>
            <li class="m-2">
                <x-form.button><img src="{{ asset('images/login.png') }}" alt="" class="icon w-5 pr-2"> login</x-form.button>
            </li>
        </ul>
    </nav>

    <main>
        {{ $slot }}
    </main>

    <footer>
        <div class="grid grid-cols-5 gap-12 w-10/12 m-auto">
            <div>
                <h1 class="text-2xl fonst-bold pb-3"><a href="/">Obay</a></h1>
                <p class="text-sm text-gray-500 leading-6">Our job is filling up your tummy with delicious foods and with fast and also free delivery.</p>
            </div>
            <div>
                <h2 class="pb-3">About</h2>
                <ul>
                    <li><a href="" class="text-sm text-gray-500 hover:text-gray-600">About Us</a></li>
                    <li><a href="" class="text-sm text-gray-500 hover:text-gray-600">Features</a></li>
                    <li><a href="" class="text-sm text-gray-500 hover:text-gray-600">News</a></li>
                    <li><a href="" class="text-sm text-gray-500 hover:text-gray-600">Menu</a></li>
                </ul>
            </div>
            <div>
                <h2 class="pb-3">Company</h2>
                <ul>
                    <li><a href="" class="text-sm text-gray-500 hover:text-gray-600">Why Obay?</a></li>
                    <li><a href="" class="text-sm text-gray-500 hover:text-gray-600">Partner with Us</a></li>
                    <li><a href="" class="text-sm text-gray-500 hover:text-gray-600">FAQ</a></li>
                    <li><a href="" class="text-sm text-gray-500 hover:text-gray-600">Blog</a></li>
                </ul>
            </div>
            <div>
                <h2 class="pb-3">Support</h2>
                <ul>
                    <li><a href="" class="text-sm text-gray-500 hover:text-gray-600">Account</a></li>
                    <li><a href="" class="text-sm text-gray-500 hover:text-gray-600">Support Center</a></li>
                    <li><a href="" class="text-sm text-gray-500 hover:text-gray-600">Feedback</a></li>
                    <li><a href="" class="text-sm text-gray-500 hover:text-gray-600">Contact Us</a></li> 
                </ul>
            </div>
            <div>
                <h2 class="pb-3">Get in Touch</h2>
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
</body>
</html>