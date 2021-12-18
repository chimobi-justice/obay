@props(['food' => $food ])

<div class="w-10/12 m-auto grid grid-cols-5 gap-4 mb-3">
    <div class="food-holder-card">
        <a href="{{ route('food.detail', $food->id ) }}">
          <img src="{{ asset('images/pizza.jpeg') }}" alt="" class="rounded-lg">
          <div class="p-1">
            <h2 class="leading-5 mb-1 text-sm text-gray-500 font-semibold">{{ $food->title }}</h2>
            <p class="text-sm text-gray-500">15 min</p>
            <p class="text-xs text-gray-500">{{ $food->new_price }} free delivery</p>
          </div>    
        </a>
    </div>
</div>