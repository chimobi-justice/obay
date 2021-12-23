<x-m.layout>
  <x-flash-message />
  <section class="profile-form-wrapper">
    <div id="profile-form-wrapper" class="flex justify-around flex-col sm:flex-row p-3 space-x-2 items-start m-auto">
      <div class="w-11/12 sm:w-6/12 mb-10 sm:mb-0">
        <h2 class="text-gray-600 pb-2 text-2xl text-center sm:text-left font-semibold">Update your password</h2>
        <p class="text-gray-500 text-base text-center sm:text-left">Please ensure your password is using a long term random password</p>
      </div>

      <form action="{{ route('dashboard.account.settings') }}" method="POST" 
        enctype="multipart/form-data" class="p-4 bg-white rounded-lg w-11/12 
        sm:w-2/5 md:w-11/12 lg:w-11/12"
        >
        @csrf
        @method('PUT')

        <div class="form-control pb-4 pl-1">
          <label for="current_password" class="sr-only">Current Password</label>
          <input type="password" name="current_password" placeholder="Current Password" 
          class="w-full border-2 bg-gray-100 rounded-lg p-2 md:p-4 lg:p-2" 
          id="current_password"
          >

          @error('current_password')
            <div class="text-red-500 text-sm" id="current_password_feed_back_err">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="form-control pb-4 pl-1">
          <label for="password" class="sr-only">New Password</label>
          <input type="password" name="password" placeholder="New Password" 
          class="w-full border-2 bg-gray-100 rounded-lg p-2 md:p-4 lg:p-2" 
          id="new_password"
          >

          @error('password')
            <div class="text-red-500 text-sm" id="new_password_feed_back_err">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="form-control pb-4 pl-1">
          <label for="password_confirmation" class="sr-only">Comfirm Password</label>
          <input type="password" name="password_confirmation" placeholder="Confirm Password" 
          class="w-full border-2 bg-gray-100 rounded-lg p-2 md:p-4 lg:p-2" 
          id="password_confirmation"
          >

        </div>

        <div class="pb-3">
            <x-form.button>Save</x-form.button>
          </div>
      </form>
    </div>  

    <div id="profile-form-wrapper" class="flex justify-around flex-col sm:flex-row p-3 space-x-2 items-start m-auto">
      <div class="w-11/12 sm:w-6/12 mb-10 sm:mb-0">
        <h2 class="text-gray-600 pb-2 text-2xl text-center sm:text-left font-semibold">Delete Account</h2>
        <p class="text-gray-500 text-base text-center sm:text-left">Permanently delete your account.</p>
      </div>

      <div class="p-4 bg-white rounded-lg w-11/12 
        sm:w-2/5 md:w-11/12 lg:w-11/12">
        <p class="pb-4 text-gray-500 text-base">Once your account is deleted, all of it resources and data will be permanently deleted. And probably can't be restore again</p>
        <button type="submit" class="px-2 py-2 
        text-center rounded-lg text-white bg-red-500 text-sm font-medium Button" id="deleteAccount">Delete Account</button>
      </div>
    </div> 

    <div id="accountPermanentlyDeleteBox">
      <h2 class="text-gray-600 pb-2 text-xl text-center">Delete Account</h2>
      <h3 class="text-gray-600 pb-2 text-sm text-center">are your sure your really what to delete your account permanently</h3>
      <form action="{{ route('dashboard.account.destroy') }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="button" class="px-2 py-1 
          text-center rounded-sm text-white text-sm font-medium bg-blue-300" id="cancleDelete">Cancel</button>
        

          <button type="submit" class="px-2 py-1 
            text-center rounded-sm text-white bg-red-500 text-sm font-medium Button" id="deleteAccount">Delete</button>
        </form>
    </div>
  </section>
</x-m.layout>