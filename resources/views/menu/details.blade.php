<x-layout>
  <x-food-background>
    MENU DETAILS
  </x-food-background>

  <section class="pt-10 pb-16">
    <div class="details-section">
      <div class="flex justify-around w-10/12 m-auto pt-5 pb-5">
        <div>
          <img src="{{ asset('images/pizza.jpeg') }}" alt="">
        </div>
        <div class="p-8">
          <h2 class="leading-7 mb-2 text-2xl text-gray-600 font-bold">TACO CLUB BERRITO</h2>
          <h3 class="leading-7 mb-2 text-2xl"><span class="text-gray-500 font-extralight not-italic">$40</span> <span class="text-red-500 font-semibold italic">$30</span></h3>
          <p class="leading-7 text-sm text-gray-400 mb-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est sit, officia illo illum deleniti rerum ipsam excepturi dicta corporis minima?</p>

          <h4 class="text-gray-400 mb-2">Food Type: Taco</h4>
          <x-form.button>Add To Cart</x-form.button>
        </div>
      </div>

      <div class="w-10/12 m-auto pt-5 pb-5">
        <h2 class="text-2xl">Description</h2>
        <p class="leading-7 text-sm text-gray-400 mb-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus debitis animi ipsam dolorum eaque accusamus dignissimos impedit maiores, dolor illum
           esse cum reiciendis molestias cupiditate maxime aut alias quisquam quae aspernatur corrupti soluta neque. Quas id possimus est exercitationem, eum 
           corporis praesentium reprehenderit ex nihil ipsam fugit molestiae consectetur libero aut provident in expedita, vitae rem nobis delectus dolores voluptatum 
           cum. Eos, aliquid. Eligendi maxime quod consequatur, repellat exercitationem ad.</p>
      </div>
    </div>

    <div class="w-10/12 m-auto">
      <h2 class="leading-7 mb-2 text-lg text-gray-600 font-semibold">PUPORLAR MENU</h2>
    </div>
  
    <x-popular-food-menu></x-popular-food-menu>
    
  </section>
</x-layout>