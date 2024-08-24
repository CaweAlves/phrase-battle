<nav class="bg-[#2563Eb] border-b border-blue-600">
    <!-- Primary Navigation Menu -->
    <div class="mx-auto px-10">
        <div class="flex justify-between h-16 text-white text-sm font-medium leading-5">
            <div class="flex">
                <!-- Logo -->
                <div class="flex items-center flex-shrink-0">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block w-auto h-10 text-white fill-current" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <a href="{{ route('dashboard') }}"
                       class="{{ request()->routeIs('dashboard') ? 'border-indigo-400 text-white focus:border-indigo-700' : 'border-transparent hover:border-gray-300 focus:text-gray-700 focus:border-gray-300' }} inline-flex items-center px-1 pt-1 border-b-2 focus:outline-none">
                        {{ __('Batalha de Frases') }}
                    </a>
                </div>
            </div>

            <!-- Settings -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                @auth
                    <div>{{ Auth::user()->name }}</div>

                    <a href="{{ route('logout') }}"
                        class="h-16 ml-4 border-transparent hover:border-gray-300 focus:text-gray-700 focus:border-gray-300 inline-flex items-center px-1 pt-1 border-b-2 focus:outline-none"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('sair') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        @csrf
                    </form>
                @endauth
            </div>
        </div>
    </div>
</nav>
