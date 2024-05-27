<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <img src="img/logo.jpeg" alt="">
                <div class="shrink-0 flex items-center">
                </div>

                <!-- Enlaces de navegación para invitados y clientes -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                 @guest
                <x-nav-link href="/welcome1">
                 {{ __('Inicio') }}
                </x-nav-link>
                @endguest
 
                @auth 
                <x-nav-link href="/welcome1">
                 {{ __('Inicio') }}
                </x-nav-link>
                @endauth
                    
                @if(Auth::guest() || Auth::user()->role != 1 && Auth::user()->role != 2)
                    <x-nav-link :href="route('citas.index')" :active="request()->routeIs('citas')">
                        {{ __('Agendar Cita') }}
                    </x-nav-link>
                    @auth
                    <x-nav-link :href="route('clientes.index')" :active="request()->routeIs('clientes')">
                        {{ __('Administrar Perfil') }}
                    </x-nav-link>
                    @endauth
                @endif

                @guest
                    <x-nav-link :href="route('login')" :active="request()->routeIs('login')">
                        {{ __('Iniciar Sesión') }}
                    </x-nav-link>
                    <x-nav-link :href="route('register')" :active="request()->routeIs('register')">
                        {{ __('Registrarse') }}
                    </x-nav-link>
                @endguest
 
                @auth
                    @if(Auth::user()->role == 1)
                    <x-nav-link :href="route('clientes.index')" :active="request()->routeIs('clientes')">
                        {{ __('Administrar Clientes') }}
                    </x-nav-link>
                    <x-nav-link :href="route('artistas.index')" :active="request()->routeIs('artistas')">
                        {{ __('Administrar Artistas') }}
                    </x-nav-link>
                    <x-nav-link :href="route('citas.index')" :active="request()->routeIs('citas.index')">
                    {{ __('Administrarr Citas') }}
                    </x-nav-link>  
                    <x-nav-link :href="route('categorias.index')" :active="request()->routeIs('categorias')">
                        {{ __('Administrar Categorias') }}
                    </x-nav-link>
                    <x-nav-link :href="route('galerias.index')" :active="request()->routeIs('galerias')">
                        {{ __('Administrar Galerias') }}
                    </x-nav-link>
                    @endif
                @endauth


                @auth
                    @if(Auth::user()->role == 2)
                    <x-nav-link :href="route('clientes.index')" :active="request()->routeIs('clientes')">
                        {{ __('Administrar Perfil') }}
                    </x-nav-link>
                    <x-nav-link :href="route('citas.index')" :active="request()->routeIs('citas.index')">
                    {{ __('Administrarr Citas') }}
                    </x-nav-link>  
                    <x-nav-link :href="route('categorias.index')" :active="request()->routeIs('categorias')">
                        {{ __('Administrar Categorias') }}
                    </x-nav-link>
                    <x-nav-link :href="route('galerias.index')" :active="request()->routeIs('galerias')">
                        {{ __('Administrar Galerias') }}
                    </x-nav-link>
                    @endif
                @endauth


                </div>
            </div>
        @auth

            <!-- Settings Dropdown siuuuu -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
        @endauth
            <div>
                     @auth
                    <x-nav-link>
                    {{ __('Bienvenido') }}, {{ auth()->user()->name }}              
                    </x-nav-link>
                    @endauth
            </div>
</nav>
