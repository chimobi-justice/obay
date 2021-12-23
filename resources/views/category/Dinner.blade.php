<x-layout>
  <x-food-background>
    Dinner Meals
  </x-food-background>

  <div class="mt-10 mb-10 pb-5 pt-5">
    <div class="mb-10">
      @if ($dinnerMeals->count())
      <h2 class="leading-7 mb-2 text-center text-2xl text-gray-600 font-semibold">Our Lunch Food Meals</h2>
        <div class="w-10/12 m-auto grid grid-cols-5 gap-4 mb-3">
          @foreach ($dinnerMeals as $meal)
            <div class="food-holder-card">
                <a href="{{ route('food.details', $meal->id ) }}">
                  <img src="{{ asset('images/pizza.jpeg') }}" alt="" class="rounded-lg">
                  <div class="p-1">
                    <h2 class="leading-5 mb-1 text-sm text-gray-500 font-semibold">{{ Str::limit($meal->name, 20) }}</h2>
                    <p class="text-sm text-gray-500">15 min</p>
                    <p class="text-xs text-gray-500">{{ $meal->new_price }} free delivery</p>
                  </div>    
                </a>
            </div>
          @endforeach
        </div>
        <div class="w-10/12 m-auto">
          {{ $dinnerMeals }}
        </div>
      @else
        <div class="mt-20 mb-20 w-8/12 m-auto text-center">
          <h1 class="text-red-500 text-2xl font-bold">No Dinner meals found for the moment!</h1>
          <div class="w-1/2 m-auto pb-5 mt-5">
            <img src="{{ asset('images/empty.svg') }}" alt="">
          </div>
        </div>   
      @endif
    </div>
  </div>
</x-layout>