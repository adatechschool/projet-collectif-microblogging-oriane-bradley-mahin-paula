<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Create a new post') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Add your text or your picture for a maximum of 255 characters.') }}
        </p>
    </header>

    
        <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
            <form method="POST" action="{{ route('chirps.store') }}">
                @csrf
                <textarea
                    name="message"
                    placeholder="{{ __('What\'s on your mind?') }}"
                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                >{{ old('message') }}</textarea>
                <x-input-error :messages="$errors->get('message')" class="mt-1 block w-full" />
                <x-primary-button class="mt-4">{{ __('Publish') }}</x-primary-button>
            </form>
        </div>
    

</section>