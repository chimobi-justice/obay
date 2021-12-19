<x-Dashboard.layout>
  <x-flash-message />
    <div class="content-text">
        <div class="">
          <h1 class="text-white">You don't need a silver fork to eat good food</h1>
        </div>
        <div class="" id="div-img">
          <img src="{{ asset('images/content.png') }}" alt="">
        </div>
    </div>

    <div class="mb-10">
    @if ($foods->count())
      <div class="w-11/12 m-auto">
        <h2 class="leading-7 mb-5 text-2xl text-gray-600 font-semibold">All Our Special Meals</h2>
      </div>
      <div class="w-11/12 m-auto grid grid-cols-5 gap-4 mb-3">
        @foreach ($foods as $food)
          <div class="food-holder-card">
              <a href="{{ route('c.dashboard.food.details', $food->id ) }}">
                <img src="{{ asset('images/pizza.jpeg') }}" alt="" class="rounded-lg">
                <div class="p-1">
                  <h2 class="leading-5 mb-1 text-sm text-gray-500 font-semibold">{{ Str::limit($food->title, 20) }}</h2>
                  <p class="text-sm text-gray-500">15 min</p>
                  <p class="text-xs text-gray-500">{{ $food->new_price }} free delivery</p>
                </div>    
              </a>
          </div>
        @endforeach
      </div>
      <div class="w-10/12 m-auto">
        {{ $foods }}
      </div>
    @else
      <div class="mt-20 mb-20 w-8/12 m-auto text-center">
        <h1 class="text-red-500 text-2xl font-bold">No meals yet!</h1>
        <div class="w-1/2 m-auto pb-5 mt-5">
          <img src="{{ asset('images/empty.svg') }}" alt="">
        </div>
      </div> 
    @endif
  </div>
  </div>

</x-Dashboard.layout>