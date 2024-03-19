<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Prenotazioni Page') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if(count($prenotaziones) > 0)
                        <ul class="list-group list-group-flush">
                            @foreach($prenotaziones as $prenotazione)
                                <li class="list-group-item">
                                    {{ $prenotazione->user_id }} | {{ $prenotazione->corso_id }} | {{ $prenotazione->stato}}
                                    <span class="float-end d-flex">
                                        <form method="post" action="/prenotaziones/{{$prenotazione->id}}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger">
                                                <i class="bi bi-trash-fill"></i>
                                            </button>
                                        </form>
                                    </span>
                                </li>
                            @endforeach
                        </ul>
                        @else
                            <p>I don't have any records!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>