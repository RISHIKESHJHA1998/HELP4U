{{--
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Password -->
            <div>
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <div class="flex justify-end mt-4">
                <x-button>
                    {{ __('Confirm') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

<x-guest-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto" style="margin-top: 110px;">
                <div class="card p-5 rounded">
                    <x-slot name="logo">
                        <a href="/">
                            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                        </a>
                    </x-slot>

                    <h1 class=" d-flex justify-content-center mb-4 font-weight-bold text-success">HELP4U</h1>

                    <div class="mt-2 mb-4">
                        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
                    </div>
                        
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf
            
                        <!-- Password -->
                        <div>
                            <x-label for="password" :value="__('Password')" />
            
                            <x-input id="password" class="block mt-1 w-full"
                                            type="password"
                                            name="password"
                                            required autocomplete="current-password" />
                        </div>
            
                        <div class="flex justify-end mt-4">
                            <x-button>
                                {{ __('Confirm') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
--}}

<x-theme-layout>
    <x-slot name="header">
        <h2>Confirm Password</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet, molestiae quo facilis pariatur delectus vero mollitia blanditiis voluptatibus maiores reiciendis?</p>
    </x-slot>

    <div>
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div class="card p-5 rounded bg-light">


                    <div class="mt-2 mb-4">
                        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
                    </div>
                        
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf
            
                        <!-- Password -->
                        <div>
                            <x-label for="password" :value="__('Password')" />
            
                            <x-input id="password" class="block mt-1 w-full"
                                            type="password"
                                            name="password"
                                            required autocomplete="current-password" />
                        </div>
            
                        <div class="flex justify-end mt-4">
                            <x-primary-button class="btn-success ml-3">
                                {{ __('Confirm') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-theme-layout>
