<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Activities Detail Page') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="row g-0">
                        <div class="card-body my-3">
                        <h5 class="card-title fw-bold">{{$activities->nome}}</h5>
                        <p class="card-text"><span class="fw-bold">Descrizione</span>: {{$activities->descrizione}}</p>
                        <p class="card-text"><span class="fw-bold">Data</span>: {{$activities->data}}</p>
                        <p class="card-text"><span class="fw-bold">Orario</span>: {{$activities->orario}}</p>
                        <p class="card-text"><span class="fw-bold">Durata</span>: {{$activities->durata}}</p>
                        <p class="card-text"><small class="text-body-secondary">Livello {{$activities->livello}}</small></p>
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