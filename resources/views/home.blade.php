<x-layout>
  <section id="herosection">
    <div class="flex justify-around w-10/12 m-auto pt-5 pb-5 items-center">
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
</x-layout>