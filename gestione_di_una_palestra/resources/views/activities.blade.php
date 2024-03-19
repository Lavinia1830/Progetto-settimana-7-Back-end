<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Activity Page') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if(count($activities) > 0)
                        <ul class="list-group list-group-flush">
                            @foreach ($activities as $activity)
                                <li class="list-group-item">
                                    <strong>{{$activity->nome}}</strong>
                                    <span class="float-end d-flex">
                                        <a type="button" class="btn btn-outline-info me-2" href="activities/{{$activity->id}}">
                                            <i class="bi bi-clipboard-check"></i>
                                        </a>
                                        <a type="button" class="btn btn-outline-success me-2" href="">
                                            <i class="bi bi-plus-square"></i> Prenota
                                        </a>
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
