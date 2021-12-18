@if (session('status'))
    <div class="bg-green-500 text-sm text-white p-3 res">
        {{ session('status') }}
    </div>
@endif