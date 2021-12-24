<x-m.layout>
  <x-flash-message />
  <section id="createFood">
    <div id="create-form-wrapper">
      <form action="{{ route('dashboard.store') }}" method="POST" 
        enctype="multipart/form-data" class="p-4  bg-white rounded-lg w-11/12 sm:w-3/5 
        md:w-11/12 lg:w-3/5 m-auto" id="form">
        @csrf

        <x-form.input type="text" name="name" id="name" placeholder="Enter food name"  value="{{ auth()->user()->country ? auth()->user()->country : old('country') }}" />
        <div class="flex justify-between">
          <div class="w-1/2 mr-1">
            <x-form.input type="text" name="old_price" id="old_price" placeholder="eg: 99.9"  value="{{ auth()->user()->state ? auth()->user()->state : old('state') }}" />
          </div>
          <div class="w-1/2 ml-1">
            <x-form.input type="text" name="new_price" id="new_price" placeholder="eg: 59.9"  value="{{ auth()->user()->state ? auth()->user()->state : old('state') }}" />
          </div>
        </div>
        <div class="form-control mb-4 pl-1">
          <label for="food_type" class="mb-2 block text-sm text-gray-500 font-bold">Food Type</label>
          <select name="food_type" class="w-full border-2 bg-gray-100 text-sm rounded-lg p-2 md:p-4 lg:p-2 text-gray-600">
            <option value="">Choose Meal Type</option>
            <option value="breakfast">bun</option>
            <option value="lunch">french fries</option>
            <option value="dinner">bread</option>
            <option value="dinner">pizza</option>
            <option value="dinner">rice</option>
            <option value="dinner">burger</option>
          </select>

          @error('food_type')
            <div class="text-red-500 text-sm">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="form-control mb-4 pl-1">
          <label for="food_category" class="mb-2 block text-sm text-gray-500 font-bold">Category</label>
          <select name="food_category" class="w-full border-2 bg-gray-100 text-sm rounded-lg p-2 
          md:p-4 lg:p-2 text-gray-600">
            <option value="">Category</option>
            <option value="breakfast">breakfast</option>
            <option value="lunch">lunch</option>
            <option value="dinner">dinner</option>
          </select>

          @error('food_category')
            <div class="text-red-500 text-sm">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="food_description" class="mb-2 block text-sm text-gray-500 font-bold">Description</label>
          <textarea name="food_description" id="" cols="3" rows="5" placeholder="Food Description" 
          class="w-full border-2 bg-gray-100 text-sm rounded-lg p-2 md:p-4 lg:p-2 resize-none">{{ old('food_description') }}</textarea>

          @error('food_description')
            <div class="text-red-500 text-sm">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="pb-4">
          <label for="food_image" id="upload">Upload Food Image</label>
          <input type="file" name="food_image" id="food_image">
          @error('food_image')
            <div class="text-red-500 text-sm">
              {{ $message }}
            </div>
          @enderror
        </div>

        <x-form.button>Create a meal</x-form.button>

      </form>
    </div>
  </section>
</x-m.layout>