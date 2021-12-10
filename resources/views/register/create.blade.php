<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <title>Register</title>
  </head>
  <body>
    <main>
      <section id="form-container"> 
        <div class="">
          <img src="{{ asset('images/register.jpg') }}" alt="register image">
        </div>
        <div class="">
          <div class="form-wrapper">
            <div>
              <div class="mb-4">
                <h2 class="font-bold text-2xl">Welcome</h2>
                <p class="font-medium text-xs">please enter your details</p>
              </div>
              <x-panel>
                <h1 class="text-center font-bold text-lg"><a href="/" title="home">Obay</a></h1>

                <form action="{{ route('register') }}" method="POST">
                  @csrf

                  <x-form.input type="text" name="name" id="name" placeholder="Enter your name" />
                  <x-form.input type="text" name="username" id="username" placeholder="Enter your username" />
                  <x-form.input type="email" name="email" id="email" placeholder="Enter your Email" />
                  <x-form.input type="password" name="password" id="password" placeholder="Choose a password" />

                  <div class="flex mt-3 items-center justify-end">
                    <p class="mr-2 text-sm"><a href="{{ route('login') }}" class="hover:underline">Already Registered?</a></p>
                    <x-form.button>Register</x-form.button>
                  </div> 
                </form>
              </x-panel>
            </div>
          </div>
        </div>
      </section>
    </main>
  </body>
</html>
