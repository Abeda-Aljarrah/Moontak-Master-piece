<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link href="{{ asset('CSS/sign-in.css') }}" rel="stylesheet" />

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Delicious+Handrawn&display=swap"
        rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet" />
    <title>Moontak</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="signup-container">
        <div class="signup-img">
            <img src="../image/sign.png" width="400px" height="700px" alt="">
        </div>

        <div class="signup-form">
            <div class="Register">
                <h1>Sign In</h1>
                <span>You don't have an account?<a href="{{ route('register') }}">Sign in</a></span>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="email">
                    <label for="email" :value="__('Email')">E-mail</label>
                    <input id="email" type="email" name="email" :value="old('email')" required autofocus
                        autocomplete="username">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="pass">
                    <label for="password" :value="__('Password')">Password</label>
                    <input id="password" type="password" name="password" required autocomplete="current-password">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="social">
                    <div class="form-group">
                        <!-- Remember Me -->
                        <label for="remember_me" class="label-agree-term">
                            <input id="remember_me" type="checkbox" class="agree-term" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                        {{-- <input type="checkbox" name="agree-term" id="agree-term" class="agree-term">
                        <label for="remember_me" class="label-agree-term"><span><span></span></span>Remember me</label> --}}
                        @if (Route::has('password.request'))
                            <span><a href="{{ route('password.request') }}" class="term-service">Forget your
                                    password?</a></span>
                            {{-- <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a> --}}
                        @endif
                    </div>

                    <button type="submit">Sign in</button>
                    <h4>OR Sign in by</h4>
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                            <path
                                d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                        </svg></a>
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                        </svg></a>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
