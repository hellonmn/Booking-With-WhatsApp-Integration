<x-guest-layout class="flex w-full">
    <div class="flex">
        <div class="flex flex-col items-start justify-center w-1/2">
            <div class="relative flex flex-col justify-center h-screen">
                <img class="bottom-0 -right-28 -z-10 w-96" src="{{ asset('storage/images/auth/login2.png') }}" alt="">
                <div class="flex flex-col justify-center mt-8">
                    <div class="absolute -z-10 -top-5 right-0 flex w-40 h-40 bg-indigo-200 blur-3xl"></div>
                    <div class="absolute -z-10 -top-0 bottom-40 flex w-20 h-20 bg-sky-300 blur-3xl"></div>
                    <div class="absolute -z-10 -top-10 right-0 flex w-20 h-20 bg-blue-300 blur-3xl"></div>
                    <span class="text-5xl font-extrabold leading-10 text-gray-800">Secure login <br> for quick access.</span>
                    <span class="mt-8">If you already have an account, You can <a class="font-bold text-indigo-500">Login here!</a></span>
                    <span class="mt-2"></span>
                </div>
            </div>
        </div>
        <x-authentication-card>
            <x-validation-errors class="mb-4" />

            <div class="flex items-center justify-center mb-8">
                <div class="flex w-20 h-20 bg-gray-100 rounded-full shadow-xl border-gray-100">
                    <img src="{{ asset('storage/images/logo/logo.png') }}" alt="">
                </div>
            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div>
                    <x-label for="name" value="{{ __('Name') }}" />
                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div>

                <div class="mt-4">
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                </div>

                <div class="mt-4">
                    <x-label for="password" value="{{ __('Password') }}" />
                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                </div>

                <div class="mt-4">
                    <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                    <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-label for="terms">
                            <div class="flex items-center">
                                <x-checkbox name="terms" id="terms" required />

                                <div class="ms-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('Terms of Service').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('Privacy Policy').'</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-label>
                    </div>
                @endif

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-button class="ms-4">
                        {{ __('Register') }}
                    </x-button>
                </div>

                <div class="mt-8 relative py-8">
                    <div class="flex bg-gray-200 w-full h-[1px]"></div>
                    <span class="absolute flex items-center justify-center text-gray-400 text-sm top-1 mx-auto w-full mt-4">
                        <span class="bg-white px-4">or continue with</span>
                    </span>
                </div>

                <div class="mt-4 flex items-center justify-evenly">
                    <div class="flex w-14 h-14 border border-gray-300 rounded-xl p-3 hover:shadow-xl">
                        <img src="https://static.cdnlogo.com/logos/g/23/goolge-icon.png" alt="">
                    </div>
                    <div class="flex w-14 h-14 border border-gray-300 rounded-xl p-3 hover:shadow-xl">
                        <img src="https://cdn-icons-png.freepik.com/512/0/747.png" alt="">
                    </div>
                    <div class="flex w-14 h-14 border border-gray-300 rounded-xl p-3 hover:shadow-xl">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTtfbcYeYgf0wQJ-LSPm3CPbyB7T1p0f5bnaA&s" alt="">
                    </div>
                </div>
            </form>
        </x-authentication-card>
    </div>
</x-guest-layout>
