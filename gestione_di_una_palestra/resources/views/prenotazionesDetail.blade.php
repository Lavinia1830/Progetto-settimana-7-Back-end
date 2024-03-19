<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Prenotaziones Detail Page') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="row g-0">
                        <div class="card-body my-3">
                        <p class="card-text">User:{{$prenotazione->user_id}}</p>
                        <p class="card-text">Corso:{{$prenotazione->corso_id}}</p>
                        <p class="card-text">{{$prenotazione->stato}}</p>
                    </div>
                    <div class="card-body">
                        <a type="button" class="btn btn-outline-dark d-block" href="/activities">Back</a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</x-app-layout>