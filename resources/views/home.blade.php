<x-layout>
  <section id="herosection">
    <div class="flex justify-around w-10/12 m-auto pt-5 pb-10 items-center">
      <div class="mr-2">
        <h2 class="text-4xl text-gray-500 font-bold leading-10 mb-4">Be The Fastest In Delivery Your <span class="text-red-500">Food</span></h2>
        <p class="text-sm text-gray-500 leading-7">Our job is filling up your tummy with delicious foods and with fast and also free delivery.</p>
        <x-field>
          <x-form.button>Get Started</x-form.button>
        </x-field>
      </div>
      <div class="w-9/12 ml-2">
        <img src="{{ asset('images/hero.svg') }}" alt="" class="w-full">
      </div>
    </div>
  </section>

  <div class="w-10/12 m-auto text-center pb-5 pt-5">
    <h2 class="leading-7 mb-2 text-2xl text-gray-600 font-semibold">Our Popular Food Menu</h2>
  </div>
  
  <div class="mb-10">
    @if ($foods->count())
      <div class="w-10/12 m-auto grid grid-cols-5 gap-4 mb-3">
        @foreach ($foods as $food)
          <div class="food-holder-card">
              <a href="{{ route('food.details', 
                                              ['id' => $food->id, 
                                              'slug' => $food->slug ]) }}">
                <img src="{{ asset('images/pizza.jpeg') }}" alt="" class="rounded-lg">
                <div class="p-1">
                  <h2 class="leading-5 mb-1 text-sm text-gray-500 font-semibold">{{ Str::limit($food->name, 20) }}</h2>
                  <p class="text-sm text-gray-500">15 min</p>
                  <p class="text-xs text-gray-500">{{ $food->new_price }} free delivery</p>
                </div>    
              </a>
          </div>
        @endforeach
      </div>
    @endif
  </div>

  <div class="category">
    <div class="w-10/12 m-auto">
      <h2 class="leading-7 mb-5 text-2xl text-gray-600 font-semibold">Search by food category</h2>
      <div class="grid grid-cols-3 gap-10 mb-10">
        <div class="category-card">
          <a href="/breakfast"><img src="{{ asset('images/pizza.jpeg') }}" alt>
          <p>Breakfast Item</p>
          </a>
        </div>
        <div class="category-card">
          <a href="/lunch"><img src="{{ asset('images/pizza.jpeg') }}" alt>
          <p>Lunch Item</p>
          </a>
        </div>
        <div class="category-card">
          <a href="/dinner"><img src="{{ asset('images/pizza.jpeg') }}" alt>
          <p>Dinner Item</p>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="w-10/12 m-auto">
    <h2 class="leading-7 mb-5 text-2xl text-gray-600 font-semibold">Restaurant with Special Meals</h2>
  </div>
  <section id="special-menu-container" class="m-auto mb-10 mt-5">
    <div class="grid grid-cols-2 gap-3 p-3 pt-5 tab-conten" id="show-all">
      <div class="flex w-10/12 m-auto items-center mb-4">
        <div class="w-1/4 menu-img-holder">
          <a href=""><img src="{{ asset('images/pizza.jpeg') }}" alt="" class="w-full h-full"></a>
        </div>
        <div class="flex justify-around w-3/4 ml-2">
          <div class="leading-10">
            <h2 class="text-2xl text-gray-200 font-bold mb-2">Spicy beef burger</h2>
            <p class="leading-7 text-sm text-gray-300 mb-2">Lorem ipsum dolor, sit amet consectetur adipisicing</p>
          </div>
          <div>
            <h3 class="text-3xl text-red-500 uppercase font-semibold italic">$30</h3>
          </div>
        </div>
      </div>

      <div class="flex w-10/12 m-auto items-center mb-4">
        <div class="w-1/4 menu-img-holder">
          <a href=""><img src="{{ asset('images/pizza.jpeg') }}" alt="" class="w-full h-full"></a>
        </div>
        <div class="flex justify-around w-3/4 ml-2 ">
          <div class="leading-10">
            <h2 class="text-2xl text-gray-200 font-bold mb-2">Spicy beef burger</h2>
            <p class="leading-7 text-sm text-gray-300 mb-2">Lorem ipsum dolor, sit amet consectetur adipisicing</p>
          </div>
          <div>
            <h3 class="text-3xl text-red-500 uppercase font-semibold italic">$30</h3>
          </div>
        </div>
      </div>

      <div class="flex w-10/12 m-auto items-center mb-4">
        <div class="w-1/4 menu-img-holder">
          <a href=""><img src="{{ asset('images/pizza.jpeg') }}" alt="" class="w-full h-full"></a>
        </div>
        <div class="flex justify-around w-3/4 ml-2 ">
          <div class="leading-10">
            <h2 class="text-2xl text-gray-200 font-bold mb-2">Spicy beef burger</h2>
            <p class="leading-7 text-sm text-gray-300 mb-2">Lorem ipsum dolor, sit amet consectetur adipisicing</p>
          </div>
          <div>
            <h3 class="text-3xl text-red-500 uppercase font-semibold italic">$30</h3>
          </div>
        </div>
      </div>

      <div class="flex w-10/12 m-auto items-center mb-4">
        <div class="w-1/4 menu-img-holder">
          <a href=""><img src="{{ asset('images/pizza.jpeg') }}" alt="" class="w-full h-full"></a>
        </div>
        <div class="flex justify-around w-3/4 ml-2">
          <div class="leading-10">
            <h2 class="text-2xl text-gray-200 font-bold mb-2">Spicy beef burger</h2>
            <p class="leading-7 text-sm text-gray-300 mb-2">Lorem ipsum dolor, sit amet consectetur adipisicing</p>
          </div>
          <div>
            <h3 class="text-3xl text-red-500 uppercase font-semibold italic">$30</h3>
          </div>
        </div>
      </div>

      <div class="flex w-10/12 m-auto items-center mb-4">
        <div class="w-1/4 menu-img-holder">
          <a href=""><img src="{{ asset('images/pizza.jpeg') }}" alt="" class="w-full h-full"></a>
        </div>
        <div class="flex justify-around w-3/4 ml-2 ">
          <div class="leading-10">
            <h2 class="text-2xl text-gray-200 font-bold mb-2">Spicy beef burger</h2>
            <p class="leading-7 text-sm text-gray-300 mb-2">Lorem ipsum dolor, sit amet consectetur adipisicing</p>
          </div>
          <div>
            <h3 class="text-3xl text-red-500 uppercase font-semibold italic">$30</h3>
          </div>
        </div>
      </div>

      <div class="flex w-10/12 m-auto items-center mb-4">
        <div class="w-1/4 menu-img-holder">
          <a href=""><img src="{{ asset('images/pizza.jpeg') }}" alt="" class="w-full h-full"></a>
        </div>
        <div class="flex justify-around w-3/4 ml-2">
          <div class="leading-10">
            <h2 class="text-2xl text-gray-200 font-bold mb-2">Spicy beef burger</h2>
            <p class="leading-7 text-sm text-gray-300 mb-2">Lorem ipsum dolor, sit amet consectetur adipisicing</p>
          </div>
          <div>
            <h3 class="text-3xl text-red-500 uppercase font-semibold italic">$30</h3>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-layout>