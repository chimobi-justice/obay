<x-layout>
  <x-food-background>
    MENU LIST VIEW
  </x-food-background>

  
  <section id="menulist-view-container" class="pt-10 pb-10">
    @if ($foods->count())
      @foreach ($foods as $food) 
        <div class="flex w-10/12 m-auto items-center border border-gray-300 bg-white mb-4">
          <div class="w-1/4 menu-img-holder">
            <img src="{{ asset('images/pizza.jpeg') }}" alt="" class="w-full h-full">
          </div>
          <div class="flex justify-around w-3/4 p-10">
            <div class="leading-10">
              <h2 class="text-2xl text-gray-600 font-bold mb-2">{{ Str::limit($food->name, 50) }}</h2>
              <p class="leading-7 text-sm text-gray-400 mb-2">{{ Str::limit($food->food_description, 110) }}</p>
              <x-form.button>Order Now</x-form.button>
            </div>
            <div>
              <h3 class="text-xl text-red-500 uppercase font-semibold italic">${{ $food->new_price }}</h3>
            </div>
          </div>
        </div>
      @endforeach

      <div class="w-10/12 m-auto">
        {{ $foods }}
      </div>
    @endif
  </section>
</x-layout>