@extends('layouts.master')

@section('content')
<center>
  <?php echo \Illuminate\Foundation\Inspiring::quote(); ?>
</center>

<a href="/login">Login</a> | <a href="/register">Register</a>

<div id="Welcome" data-message="123"></div>
@vite(['resources/react/Welcome.jsx'])

<!-- Button to trigger modal -->

<div class="mt-4"></div>

<x-primary-button @click="$dispatch('open-modal', 'test-modal')">
  Create New Post
</x-primary-button>

<x-modal name="test-modal">
  <div class="p-6">
      <h2 class="text-lg font-bold">Test Modal</h2>
      <p class="mt-2">This is a test modal content.</p>
      
      <div class="mt-6 flex justify-end">
          <button type="button" 
                  @click="$dispatch('close')"
                  class="bg-gray-500 text-white px-4 py-2 rounded-md">
              Close Modal
          </button>
      </div>
  </div>
</x-modal>

<x-danger-button
x-data=""
x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
>{{ __('Delete Account') }}</x-danger-button>

<x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
<form method="post" action="{{ route('profile.destroy') }}" class="p-6">
    @csrf
    @method('delete')

    <h2 class="text-lg font-medium text-gray-900">
        {{ __('Are you sure you want to delete your account?') }}
    </h2>

    <p class="mt-1 text-sm text-gray-600">
        {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
    </p>

    <div class="mt-6">
        <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

        <x-text-input
            id="password"
            name="password"
            type="password"
            class="mt-1 block w-3/4"
            placeholder="{{ __('Password') }}"
        />

        <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
    </div>

    <div class="mt-6 flex justify-end">
        <x-secondary-button x-on:click="$dispatch('close')">
            {{ __('Cancel') }}
        </x-secondary-button>

        <x-danger-button class="ms-3">
            {{ __('Delete Account') }}
        </x-danger-button>
    </div>
</form>
</x-modal>

@endsection
