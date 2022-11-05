<x-layout page="B7Web To-Do: login">
    <x-slot name='btn'>
        <x-button href=http://localhost:8000/register text="Registrar"></x-button>
    </x-slot>

    <x-slot name="slot">
         <section id="task_section">
            <h1>Login</h1>
            <form method="POST" action="{{route('user.login_action')}}">
                @csrf
                @error('email')@php $errorEmail = $message @endphp @enderror
                @error('password') @php $errorPassword = $message @endphp @enderror   

                <x-form.input 
                    name="email"
                    type="email" 
                    label="Seu email" 
                    placeholder="Seu email..."
                    required={{true}}
                    value="{{old('email')}}"
                    error="{{$errorEmail ?? null}}"
                ></x-form.input>

                <x-form.input 
                    name="password"
                    type="password" 
                    label="Sua senha" 
                    placeholder="Sua senha..."
                    required={{true}}
                    value="{{old('password')}}"
                    error="{{$errorPassword ?? null}}"
                ></x-form.input>

                <x-form.button type="submit" >Login</x-form.button>
            </form>
        </section>
    </x-slot>
</x-layout>