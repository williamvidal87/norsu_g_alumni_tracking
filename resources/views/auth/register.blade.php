{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

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
        </form>
    </x-authentication-card>
</x-guest-layout> --}}


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>NORSU-G ALUMNI</title>
        <link rel="shortcut icon" type="image/x-icon" href="resources/img/logo/logo.png">

        <!-- Vendor styles -->
        <link rel="stylesheet" href="{{ asset('resources/vendors/zwicon/zwicon.min.css') }}">
        <link rel="stylesheet" href="{{ asset('resources/vendors/animate.css/animate.min.css') }}">

        <!-- App styles -->
        <link rel="stylesheet" href="{{ asset('resources/css/app.min.css') }}">
        <script src='{{ asset('google_analytics_auto.js') }}'></script>
    </head>

    <body data-sa-theme="2">
        <div class="login">

            <!-- Login -->
            <div class="login__block active" id="l-login">
                <div class="login__block__header">
                    <i class="zwicon-user-circle"></i>
                    Create an account

                    <div class="actions actions--inverse login__block__actions">
                        <div class="dropdown">
                            <i data-toggle="dropdown" class="zwicon-more-h actions__item"></i>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item"
                                    href="login">Already have an account?</a>
                                <a class="dropdown-item"
                                    href="forgot-password">Forgot password?</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="login__block__body">
                    <x-validation-errors class="mb-4" />
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <input type="text" class="form-control text-center" placeholder="Last Name" name="last_name" :value="old('last_name')" required autofocus autocomplete="last_name">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control text-center" placeholder="First Name" name="name" :value="old('name')" required autofocus autocomplete="name">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control text-center" placeholder="Middle Name" name="middle_name" :value="old('middle_name')" required autofocus autocomplete="middle_name">
                        </div>

                        <div class="form-group form-group--centered">
                            <input type="text" class="form-control text-center" placeholder="Email" name="email" :value="old('email')" required autocomplete="username">
                        </div>

                        <div class="form-group form-group--centered">
                            <input type="password" class="form-control text-center" placeholder="Password" name="password" required autocomplete="new-password">
                        </div>

                        <div class="form-group form-group--centered">
                            <input type="password" class="form-control text-center" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <button type="submit" class="btn btn-theme btn--icon"><i class="zwicon-checkmark"></i></button>
                    </form>
                </div>
            </div>

        </div>

        <!-- Javascript -->
        <!-- Vendors -->
        <script src="{{ asset('resources/vendors/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('resources/vendors/popper.js/popper.min.js') }}"></script>
        <script src="{{ asset('resources/vendors/bootstrap/js/bootstrap.min.js') }}"></script>

        <!-- App functions and actions -->
        <script src="{{ asset('resources/js/app.min.js') }}"></script>
    </body>

</html>