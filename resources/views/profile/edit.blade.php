<x-app-layout>
    @include('layouts.navbar')
    <x-slot name="header ">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
{{-- <x-app-layout>
    @include('layouts.navbar')

        <div class="container mt-5">
            <h1 class="text-center">Profile</h1>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>

                @endif
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            Update Profile Information
                        </div>
                        <div class="card-body">

                    @include('profile.partials.update-profile-information-form')
                        </div>
                        <div class="card-body">
                    @include('profile.partials.update-password-form')
                        </div>

                        <div class="card-body">
                    @include('profile.partials.delete-user-form')

                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
 --}}
