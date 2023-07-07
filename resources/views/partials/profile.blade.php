<div class="flex justify-end mr-20 items-center h-full pr-4">
    @auth
        <h1 class="font-medium text-gray-200">Welcome {{auth()->user()->name}}</h1>
    @else
    <h1>not authenticated</h1>
    @endauth

</div>
