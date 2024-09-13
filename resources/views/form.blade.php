<x-guest-layout>
    <form class="w-64 flex flex-col gap-5" action="{{ route('form.store')}}" method="POST">
        @csrf
        <x-input placeholder="Enter phone" id="phone" class="block mt-1 w-full" type="number" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
        <x-button class="w-full">
            {{ __('Sign In') }}
        </x-button>
    </form>
</x-guest-layout>
