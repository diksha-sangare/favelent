<x-layout>

<header class="text-center mt-44">
    @auth 
        <span class="text-xs font-bold uppercase">Welcome, {{ auth()->user()->name }}!</span>
        <a href="dashboard" class="text-white pt-20 text-center font-bold text-2xl">
                Dashboard
        </a>
        <form method="POST" action="/logout">
                        @csrf
                        <button type="submit" class="rounded-xl px-14 text-white py-2 text-md font-bold mt-5" style="color:rgb(168, 180, 189);background:rgb(51, 62, 73);">
                            Logout
                        </button>
                    </form>
    @else 
        <a href="login" class="text-white pt-20 text-center font-bold text-2xl">
                Login
        </a>
    @endauth
           
        </header>

</x-layout>