<x-layout>
    <x-slot:heading>
        Homepage
    </x-slot:heading>

    <h1>{{$gretting}}. from the home page</h1>
    <x-alert message="This is a named component (it uses a class and a blade file)"></x-alert>
    <x-info></x-info>
</x-layout>
