<x-c.layout>
  <x-flash-message />

  @if (auth()->user()->country == "" && auth()->user()->address == ""  && auth()->user()->state == ""  && auth()->user()->number == "") 
      <div class="t font-bold bg-green-500 text-sm text-white p-3">
        <p>Please continue your profile to checkout</p>
      </div>
  @endif

  @if ($carts->count())
    <div class="mt-20 mb-20">
      <h1 class="text-red-500 text-2xl font-bold w-11/12 m-auto">Your Cart</h1>
      @foreach ($carts as $cart)
      <a href="{{ route('c.dashboard.food.details', $cart->id ) }}">
        <div class="w-11/12 grid grid-cols-4 m-auto mt-3 mb-3 p-2 items-center border-b-2 border-t-2 border-gray-600">
              <div>
                <img src="{{ $cart->options[0] }}" alt="" class="w-8/12 rounded-lg">
              </div>
              <div>
                <p class="text-gray-500">{{ Str::limit($cart->name, 15) }}</p>
              </div>
              <div>
                <form action="{{ route('c.dashboard.cart.remove', $cart->rowId) }}" method="POST">
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
      
      <div class="mt-2 w-11/12 m-auto">
          <div class="flex justify-between mb-2">
              <h3 class="text-gray-500 font-bold">Subtotal:</h3>
              <p class="text-green-600">${{ \Gloudemans\Shoppingcart\Facades\Cart::total()}}</p>
          </div>

          <div class="flex justify-between mb-2">
            <h3 class="text-gray-500 font-bold">Total:</h3>
            <p class="text-green-600">${{ \Gloudemans\Shoppingcart\Facades\Cart::total()}}</p>
          </div>
            
            <div class="flex justify-between">
              @if (auth()->user()->country == "" && auth()->user()->address == ""  && auth()->user()->state == ""  && auth()->user()->number == "") 
                <form action="{{ route('c.dashboard') }}" class="mt-5 ">
                  <button disabled="disabled" class="flex bg-red-200 uppercase font-semibold text-xs 
                    text-white py-2 px-5 rounded-lg" style="cursor: not-allowed" title="Please continue your profile to checkout">Order & Checkout</button>
                </form>
              @else
                <form action="{{ route('c.dashboard') }}" class="mt-5 ">
                  <x-form.button>Order & Checkout</x-form.button>
                </form>
              @endif

              <form action="{{ route('c.dashboard.cart.empty') }}" method="POST" class="mt-5 ">
                @csrf
                @method('DELETE')
                <x-form.button>delete all cart</x-form.button>
              </form>
            </div>
      </div>
  @else
      <div class="mt-20 mb-20 w-8/12 m-auto text-center">
        <h1 class="text-red-500 text-2xl font-bold">Nothing in your cart yet!</h1>
        <div class="w-1/2 m-auto pb-5 mt-5">
          <img src="{{ asset('images/empty.svg') }}" alt="">
        </div>
      </div>    
  @endif

</x-c.layout>