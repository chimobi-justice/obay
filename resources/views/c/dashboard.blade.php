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

    <div class="w-10/12 m-auto">
      <h2 class="leading-7 mb-5 text-2xl text-gray-600 font-semibold">All Our Special Meals</h2>
    </div>
    <div class="mb-10">
      <x-popular-food-menu></x-popular-food-menu>
      <x-popular-food-menu></x-popular-food-menu>  
      <x-popular-food-menu></x-popular-food-menu>  
      <x-popular-food-menu></x-popular-food-menu>  
      <x-popular-food-menu></x-popular-food-menu>  
      <x-popular-food-menu></x-popular-food-menu>  
      <x-popular-food-menu></x-popular-food-menu>  
      <x-popular-food-menu></x-popular-food-menu>  
      <x-popular-food-menu></x-popular-food-menu>  
    </div>
  </div>

</x-Dashboard.layout>