{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                {{ $value }}
            </div>
        @endsession

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
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
                    Forgot Password?

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
                    @session('status')
                        <div class="mb-4 font-medium text-sm text-green">
                            {{ $value }}
                        </div>
                    @endsession
                    <x-validation-errors class="mb-4" />
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <p class="mb-5">Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>

                        <div class="form-group">
                            <input type="text" class="form-control text-center" placeholder="Email" name="email" :value="old('email')" required autofocus autocomplete="username">
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