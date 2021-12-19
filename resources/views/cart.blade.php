<x-layout>
  <x-flash-message />

  <x-food-background>
    Your Shopping Carts
  </x-food-background>

  @if ($carts->count())
    <div class="mt-20 mb-20">
      @foreach ($carts as $cart)
      <a href="{{ route('food.details', $cart->id ) }}">
        <div class="w-8/12 grid grid-cols-4 m-auto mt-3 mb-3 p-2 items-center border-b-2 border-t-2 border-gray-600">
              <div>
                <img src="{{ asset('images/pizza.jpeg') }}" alt="" class="w-8/12 rounded-lg">
              </div>
              <div>
                <p class="text-gray-500">{{ Str::limit($cart->name,15, '') }}</p>
              </div>
              <div>
                <form action="{{ route('cart.remove', $cart->rowId) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    
                    <x-form.button>Remove from cart</x-form.button>
                  </form>
              </div>
              <div class="flex justify-around">
                <div>
                  <label for="quantity" class="text-gray-500 text-sm">quantity:</label>
                  <input type="number" name="quantity" value="{{ $cart->qty }}" min="0" max="5" class="text-sm py-1 px-1 w-10 mb-3">
                </div>
                <p class="text-gray-500 font-semibold">${{ $cart->total() }}</p>
              </div>
          </div>
        </a>
        
      @endforeach
      <div class="mt-2 w-8/12 m-auto">
          <div class="flex justify-between mb-2">
              <h3 class="text-gray-500 font-bold">Subtotal:</h3>
              <p class="text-green-600">${{ \Gloudemans\Shoppingcart\Facades\Cart::total()}}</p>
          </div>

          <div class="flex justify-between mb-2">
            <h3 class="text-gray-500 font-bold">Total:</h3>
            <p class="text-green-600">${{ \Gloudemans\Shoppingcart\Facades\Cart::total()}}</p>
          </div>
            
          @auth
            <div class="flex justify-between">
              <form action="{{ route('c.dashboard') }}" class="mt-5 ">
                <x-form.button>Order & Checkout</x-form.button>
              </form>

              <form action="{{ route('cart.empty') }}" method="POST" class="mt-5 ">
                @csrf
                @method('DELETE')
                <x-form.button>delete all cart</x-form.button>
              </form>
            </div>
          @endauth

          @guest
            <div class="flex justify-between">
              <form action="{{ route('login') }}" class="mt-5 ">
                <x-form.button>Order & Checkout</x-form.button>
              </form>

              <form action="{{ route('cart.empty') }}" method="POST" class="mt-5 ">
                @csrf
                @method('DELETE')
                <x-form.button>delete all cart</x-form.button>
              </form>
            </div>
          @endguest
      </div>
  @else
      <div class="mt-20 mb-20 w-8/12 m-auto text-center">
        <h1 class="text-red-500 text-2xl font-bold">Nothing in your cart yet!</h1>
        <div class="w-1/2 m-auto pb-5 mt-5">
          <img src="{{ asset('images/empty.svg') }}" alt="">
        </div>
        <a href="" class="bg-red-500 uppercase font-semibold text-xs text-white py-2 px-5 rounded-lg hover:bg-red-600">Click here to add an item</a>
      </div>    
  @endif
</x-layout>