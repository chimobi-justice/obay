<x-m.layout>
  <x-flash-message />
  <div class="mb-10 mt-5">
    @if ($foods->count())
      <div class="w-10/12 m-auto grid grid-cols-5 gap-4 mb-3">
        @foreach ($foods as $food)
          <div class="food-holder-card">
              <a href="{{ route('dashboard.show', 
                                      ['id' => $food->id, 
                                      'slug' => $food->slug] ) }}">
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
      <div class="w-10/12 m-auto">
        {{ $foods }}
      </div>
    @endif
  </div>
</x-m.layout>