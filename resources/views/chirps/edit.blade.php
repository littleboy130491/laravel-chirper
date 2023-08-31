<x-app-layout>
    <div class="max-w-7xl mx-auto p-4 sm:px-6 lg:px-8">
        <form method="POST" action="{{ route('chirps.update', $chirp) }}">
            @csrf
            @method('patch')
            <textarea name="message" placeholder="{{ __('What\'s on your mind?') }}"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">{{ old('message', $chirp->message) }}</textarea>
            <x-input-error :messages="$errors->get('message')" class="mt-2" />
            <x-primary-button class="mt-4">{{ __('Save') }}</x-primary-button>
            <a href="{{ route('chirps.index') }}">{{ __('Cancel') }}</a>
        </form>

    </div>
</x-app-layout>
