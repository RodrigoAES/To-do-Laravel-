<x-layout page="B7Web To-Do: login">
    <x-slot name='btn'>
        <x-button href=http://localhost:8000/register text="Registrar"></x-button>
    </x-slot>

    <x-slot name="slot"><a href="{{route('home')}}">home</a></x-slot>
</x-layout>