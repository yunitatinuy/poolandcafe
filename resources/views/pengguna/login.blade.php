@extends('layout.main1')

@section('container')
<section class="">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
  @if(session()->has('succes'))
    <div class="flex items-center p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
    </svg>
    <span class="sr-only">Info</span>
    <div>
        {{session('succes')}}
    </div>
   </div>
  @endif

  @if(session()->has('loginError'))
    <div class="flex items-center p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
    </svg>
    <span class="sr-only">Info</span>
    <div>
        {{session('loginError')}}
    </div>
   </div>
  @endif
      <div class="w-full bg-gradient-to-b from-[#E970C0] to-[#CA1A5A]  rounded-lg shadow light:border md:mt-0 sm:max-w-md xl:p-0">
          <div class="p-6 space-y-4 md:space-y-6">
              <img src="/img/logo3.png" alt="" class="w-40 items-center justify-center mx-auto">
              <form class="space-y-4 md:space-y-6" action="/login" method="post">
                @csrf
                  <div>
                      <label for="email" class="block mb-2 text-sm font-medium text-gray-900 light:text-white">Email:</label>
                      <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 @error('email') is-invalid @enderror" required="">
                      @error('email')
                      <div class="invalid-feedback">
                        {{$message}}
                      </div>
                      @enderror
                  </div>
                  <div>
                      <label for="password" class="block mb-2 text-sm font-medium text-gray-900 light:text-white">Password:</label>
                      <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " required="">
                  </div>
                  <div class="flex items-center justify-between">
                      <div class="flex items-start">
                          <div class="flex items-center h-5">
                            <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300" required="">
                          </div>
                          <div class="ml-3 text-sm">
                            <label for="remember" class="text-black light:text-gray-300">Remember me</label>
                          </div>
                      </div>
                  </div>
                  <button type="submit" class="w-full text-dark bg-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Login</button>
                  <p class="text-sm font-light text-black light:text-gray-400">
                      Belum punya akun? <a href="/registrasi" class="font-medium text-primary-600 hover:underline ">Registrasi disini</a>
                  </p>
              </form>
          </div>
      </div>
  </div>
</section>
@endsection