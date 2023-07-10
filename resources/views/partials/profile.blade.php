<div class="flex justify-end mr-20 items-center h-full pr-4">
    @auth
        <h1 class='font-medium gap-4 text-gray-100 flex items-center'>Welcome {{ auth()->user()->name }}
            <form action="/logout" method="post">
                @csrf
                <button type="submit">
                <svg class="w-4 h-4 text-gray-200 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 16 16">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 8h11m0 0-4-4m4 4-4 4m-5 3H3a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h3" />
                </svg>
            </button>
            </form>
        </h1>
    @else
        <h1 class='font-medium gap-4 text-gray-100 flex'>You are not login
            <a href="/loginForm"><svg class="w-6 h-6 text-gray-200 dark:text-white" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 15">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 7.5h11m0 0L8 3.786M12 7.5l-4 3.714M12 1h3c.53 0 1.04.196 1.414.544.375.348.586.82.586 1.313v9.286c0 .492-.21.965-.586 1.313A2.081 2.081 0 0 1 15 14h-3" />
                </svg></a>
        </h1>
    @endauth

</div>
