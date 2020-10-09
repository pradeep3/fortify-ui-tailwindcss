<section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

    <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
        Update Profile information
    </header>

    <div class="w-full p-6">
        @if ($errors->any())
            <div>
                <div>{{ __('Whoops! Something went wrong.') }}</div>

                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ url('/two-factor-challenge') }}">
            @csrf

            {{--
                Do not show both of these fields, together. It's recommended
                that you only show one field at a time and use some logic
                to toggle the visibility of each field
            --}}

            <div>
                {{ __('Please confirm access to your account by entering the authentication code provided by your authenticator application.') }}
            </div>

            <div>
                <label>{{ __('Code') }}</label>
                <input type="text" name="code" autofocus autocomplete="one-time-code" />
            </div>

            {{-- ** OR ** --}}

            <div>
                {{ __('Please confirm access to your account by entering one of your emergency recovery codes.') }}
            </div>

            <div>
                <label>{{ __('Recovery Code') }}</label>
                <input type="text" name="recovery_code" autocomplete="one-time-code" />
            </div>

            <div>
                <button type="submit">
                    {{ __('Login') }}
                </button>
            </div>
        </form>
        
</div>
</section>