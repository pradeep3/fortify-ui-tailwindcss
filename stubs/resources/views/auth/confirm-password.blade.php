@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
    <div class="flex">
        <div class="w-full">
            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg p-6">
          
                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="flex flex-wrap">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Password') }}
                        </label>

                        <input
                            class="form-input w-full @error('password') border-red-500 @enderror"
                            value="{{ old('email') }}" type="password" name="password" required autocomplete="current-password">

                        @if ($errors->any())
                            <div>
                                <div>{{ __('Whoops! Something went wrong.') }}</div>
                    
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li class="text-red-500 text-xs italic mt-4">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>

                    <div class="flex items-center">
                        <button type="submit"
                        class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                        {{ __('Confirm Password') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-sm text-blue-500 hover:text-blue-700 whitespace-no-wrap no-underline hover:underline ml-auto">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>

                </form>

            </section>
        </div>
    </div>
</main>

@endsection
