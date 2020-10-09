<section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

    <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
        Update Profile information
    </header>

    <div class="w-full p-6">
        <form method="POST" action="{{ route('user-profile-information.update') }}" class="w-full px-6 py-2 space-y-6 sm:px-10 sm:space-y-8">
            @csrf
            @method('PUT')
        
            <div class="flex flex-wrap">
                <label for="Name" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                    {{ __('Name') }}
                </label>
        
                <input id="name" type="text"
                    class="form-input w-full @error('email') border-red-500 @enderror" ntype="text" name="name" value="{{ old('name') ?? auth()->user()->name }}" required autofocus autocomplete="name">
        
                @error('name')
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
                @enderror
            </div>
            
        
            <div class="flex flex-wrap">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                    {{ __('Email') }}
                </label>
        
                <input id="email" type="email"
                    class="form-input w-full @error('email') border-red-500 @enderror" type="email" name="email" value="{{ old('email') ?? auth()->user()->email }}" required autofocus>
        
                @error('name')
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
                @enderror
            </div>
        
            <div class="flex flex-wrap">
                <button type="submit"
                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                {{ __('Update Profile') }}
                </button>
            </div>
          
        </form>
    </div>
</section>

