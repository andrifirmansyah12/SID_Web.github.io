<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Login SIDK | Login</title>

    <!-- FavIcon -->
    {{-- Gambar Tittle --}}
    {{-- ngambil difolder public/profile/assets --}}
    <link rel="shortcut icon" href="{{asset('profile')}}/assets/img/Indramayu.png">

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />

    {{-- ngambil di folder public/LoginTailwindCss/static --}}
    {{-- Css.style --}}
    <link rel="stylesheet" href="{{asset('LoginTailwindCss')}}/static/dist/tailwind.css" />

  </head>
  {{-- background Body Utama --}}
  <body class="bg-yellow-100">
    <img
        {{-- Gambar Variasi Ombak --}}
        {{-- ngambil di folder public/LoginTailwindCss/Assets --}}
        {{-- filenya bernama wave --}}
      src="{{asset('LoginTailwindCss')}}/Assets/wave.png"
      class="fixed hidden lg:block inset-0 h-full"
      style="z-index: -1;"
    />
    <div
      class="w-screen h-screen flex flex-col justify-center items-center lg:grid lg:grid-cols-2"
    >
      <img
        {{-- Gambar Indramayu --}}
        {{-- ngambil di folder public/LoginTailwindCss/Assets --}}
        {{-- filenya bernama Indramayu --}}
        src="{{asset('LoginTailwindCss')}}/Assets/Indramayu.png"
        class="hidden lg:block w-1/2 hover:scale-150 transition-all duration-500 transform mx-auto"
      />
      <div class="flex flex-col justify-center items-center w-1/2">
        {{-- Gambar Avatar --}}
        {{-- ngambil di folder public/LoginTailwindCss/Assets --}}
        {{-- filenya bernama avatar --}}
        <img src="{{asset('LoginTailwindCss')}}/Assets/avatar.svg" class="w-32" />
        <h2
          class="my-8 font-display font-bold text-3xl text-gray-700 text-center"
        >
          Sistem Informasi Desa Kenanga
        </h2>
        
        <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="py-1 relative">
          <label for="your_name"><i class="fa fa-user absolute text-primarycolor text-xl"></i></label>
          <input
            type="text"
            name="email"
            id="email"
            placeholder="Email"
            class="pl-8 border-b-2 font-display focus:outline-none focus:border-primarycolor transition-all duration-500 capitalize text-md"
            style="text-transform: lowercase;"
            />
        </div>
        
        @error('email')
        <span class="invalid-feedback" role="alert">
            <p style="color:#ff0202;"> {{ $message }}</p>
        </span>
        @enderror

        <div class="py-1 relative mt-3">
          <label for="your_pass"><i class="fa fa-lock absolute text-primarycolor text-xl"></i></label>
          <input
            type="password"
            name="password"
            id="password" 
            placeholder="password"
            class="pl-8 border-b-2 font-display focus:outline-none focus:border-primarycolor transition-all duration-500 capitalize text-md"
            style="text-transform: lowercase;"
            />
        </div>

        @error('password')
        <span class="invalid-feedback" role="alert">
            <p style="color:#ff0202;"> {{ $message }}</p>
        </span>
        @enderror

        @if (session('pesan'))
        <span class="invalid-feedback" role="alert">
            <p style="color:#ff0202;"> 
                {{session('pesan')}}</p>
         </span>
        @endif
        
        <div class="py-5">
            <button
                name="signin" 
                id="signin"
                class="py-3 px-20 bg-yellow-600 lg:mx-0 hover:underline bg-white text-white font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"
            >
                Login
        </button>
            {{-- @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif  --}}
        </div>

        <div class="form-group row">
            <div class="col-md-6 offset-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('ingat saya') }}
                    </label>
                </div>
            </div>
        </div>
        <br>
        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">

                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Reset password?') }}
                    </a>
                @endif
            </div>
        </div>

        </form>
      </div>
    </div>
  </body>
</html>


<script src="{{asset('template-login')}}/vendor/jquery/jquery.min.js"></script>
<script src="{{asset('template-login')}}/js/main.js"></script>