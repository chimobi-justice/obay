<x-c.layout>
  <x-flash-message />

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
                <p class="text-gray-500 font-semibold">${{ $cart->subTotal() }}</p>
              </div>
          </div>
        </a>
        
      @endforeach
      <div class="mt-2 w-11/12 m-auto">
          <div class="flex justify-between mb-2">
              <h3 class="text-gray-500 font-bold">Subtotal:</h3>
              <p class="text-green-600">${{ \Gloudemans\Shoppingcart\Facades\Cart::subTotal()}}</p>
          </div>

          <div class="flex justify-between mb-2">
            <h3 class="text-gray-500 font-bold">Total:</h3>
            <p class="text-green-600">${{ \Gloudemans\Shoppingcart\Facades\Cart::subTotal()}}</p>
          </div>
            
            <div class="flex justify-between">
              @if (auth()->user()->country == "" && auth()->user()->address == ""  && auth()->user()->state == ""  && auth()->user()->number == "") 
                <form action="{{ route('c.dashboard') }}" class="mt-5 ">
                  <button disabled="disabled" class="flex bg-red-200 uppercase font-semibold text-xs 
                    text-white py-2 px-5 rounded-lg" style="cursor: not-allowed" title="Please continue your profile to checkout">Order & Checkout</button>
                </form>
              @else
                <form class="mt-5 ">
                  @csrf
                  <button type="button" onClick="makePayment()" class="flex bg-red-500 uppercase font-semibold text-xs 
                    text-white py-2 px-5 rounded-lg">Order & Checkout</button>
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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://checkout.flutterwave.com/v3.js"></script>

  <script>
    function makePayment() {
      FlutterwaveCheckout({
        public_key: "FLWPUBK_TEST-397da62d031960996f1abd61c00766a0-X",
        tx_ref: "RX1_{{ substr(rand(0, time()), 0, 7) }}",
        amount: {{\Gloudemans\Shoppingcart\Facades\Cart::subTotal()}},
        currency: "USD",
        country: "US",
        payment_options: " ",
        customer: {
          email: '{{ auth()->user()->email }}',
          phone_number: '{{ auth()->user()->number }}',
          name: '{{ auth()->user()->fullname }}',
        },
        callback: function (data) {
          var transaction_id = data.transaction_id;

          var _token = $("input[name='_token']").val();

          $.ajax({
            type: 'POST',
            url: "{{URL::to('/verify-payment')}}",
            data: {
              transaction_id,
              _token
            }, 
            success: function(response) {
              console.log(response);
            }
          });
        },
        customizations: {
          title: "Obay Food App",
          description: "Payment for items in cart",
        },
      });
    }
  </script>
</x-c.layout>