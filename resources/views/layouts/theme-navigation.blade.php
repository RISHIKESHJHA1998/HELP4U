<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
        <h1 class="logo me-auto"><a href="index.html">Help4U</a></h1>
        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li>
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                        {{ __('Home') }}
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link :href="route('about')" :active="request()->routeIs('about')">
                        {{ __('About') }}
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link :href="route('blogs')" :active="request()->routeIs('blogs')">
                        {{ __('Events') }}
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link :href="route('team')" :active="request()->routeIs('team')">
                        {{ __('Our Team') }}
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link :href="route('help-requests')" :active="request()->routeIs('help-requests')">
                        {{ __('Help Requests') }}
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link :href="route('yoga-videos')" :active="request()->routeIs('yoga-videos')">
                        {{ __('Yoga Videos') }}
                    </x-nav-link>
                </li>

                <li>
                    <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')">
                        {{ __('Contact') }}
                    </x-nav-link>
                </li>

                <li>
                    <x-nav-link :href="route('donation')" :active="request()->routeIs('donation')">
                        {{ __('Donate') }}
                    </x-nav-link>
                </li>

                @guest
                    <li>
                        <x-nav-link :href="route('login')" :active="request()->routeIs('login')">
                            {{ __('Login') }}
                        </x-nav-link>
                    </li>
                    <li>
                        <x-nav-link :href="route('register')" :active="request()->routeIs('register')">
                            {{ __('Register') }}
                        </x-nav-link>
                    </li>
                @endguest
                
                @auth
                    <li>
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                    </li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            this.closest('form').submit();">Logout</a>
                    </form>
                @endauth 
                
            </ul>
            
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>