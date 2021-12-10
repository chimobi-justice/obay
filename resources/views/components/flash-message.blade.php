@if (session('status'))
    <div class="bg-red-500 text-sm text-white p-3">
        {{ session('status') }}
    </div>
@endif