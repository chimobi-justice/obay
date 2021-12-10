<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <title>Login</title>
  </head>
  <body>
    <main>
      <section id="form-container"> 
        <div class="">
          <img src="{{ asset('images/login.jpg') }}" alt="register image">
        </div>
        <div class="">
          <div class="form-wrapper">
            <div>
              <div class="mb-4">
                <h2 class="font-bold text-2xl">Welcome</h2>
                <p class="font-medium text-xs">please login to your account</p>
              </div>
              <x-panel>
                <h1 class="text-center font-bold text-lg"><a href="/" title="home">Obay</a></h1>

                <form action="{{ route('login') }}" method="POST">
                  @csrf

                  <x-form.input type="email" name="email" id="email" placeholder="Enter your Email" />
                  <x-form.input type="password" name="password" id="password" placeholder="Choose a password" />

                  <div class="flex items-center">
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember" class="pl-1 text-sm">Remember me</label>
                  </div>

                  <div class="flex mt-3 items-center justify-end">
                    <p class="mr-2 text-sm"><a href="{{ route('register') }}" class="hover:underline">Don't have an account?</a></p>
                    <x-form.button>Login</x-form.button>
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

