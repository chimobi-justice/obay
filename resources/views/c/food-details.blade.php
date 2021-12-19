<x-Dashboard.layout>
<section class="pt-10 pb-16">
    <div class="details-section">
      <div class="flex justify-around w-11/12 m-auto pt-5 pb-5">
        <div>
          <img src="{{ asset('images/pizza.jpeg') }}" alt="">
        </div>
        <div class="p-3 pl-5">
          <h2 class="leading-7 mb-2 text-2xl text-gray-600 font-bold">{{ Str::limit($food->title, 40 ) }}</h2>
          <h3 class="leading-7 mb-2 text-2xl">
            <span class="text-gray-500 font-extralight not-italic">
              ${{ $food->old_price }}
            </span> 
            <span class="text-red-500 font-semibold italic">
              ${{ $food->old_price }}
            </span>
          </h3>
          <p class="leading-7 text-sm text-gray-400 mb-2">{{ Str::limit($food->description, 100) }}</h4>
          @if($cart->where('id', $food->id )->count())
            <div class="text-gray-500 text-lg pb-2">Product already exit in cart</div>
            <a href="{{ route('c.dashboard.cart') }}" class="text-red-500 hover:underline">View cart</a>
          @else
          <form action="{{ route('c.dashboard.cart.store', $food ) }}" method="POST">
            @csrf
            <div>
              <label for="quantity" class="text-gray-500 text-sm">quantity:</label>
              <input type="number" name="quantity" value="1" min="0" max="5" class="text-sm py-1 px-1 w-10 mb-3">
            </div>
            <x-form.button>Add To Cart</x-form.button>
          </form>
          @endif
        </div>
      </div>

      <div class="w-11/12 m-auto pt-5 pb-5">
        <h2 class="text-2xl">Description</h2>
        <p class="leading-7 text-sm text-gray-400 mb-2">{{ $food->description }}</p>
      </div>
    </div>
  </section>
</x-Dashboard.layout>
