<x-layout>
    <x-slot name='btn'>
         <x-button href='http://localhost:8000/login' text='Já tem conta? Faça login'> </x-button>
    </x-slot>
    <section id="task_section">
        <h1>Registar-se</h1>
        {!!old('name')!!}
        <form method="POST" action="{{route('user.register_action')}}">
            @csrf
            @error('name')@php $errorName = $message @endphp @enderror
            @error('email')@php $errorEmail = $message @endphp @enderror
            @error('password') @php $errorPassword = $message @endphp @enderror
            
            <x-form.input name="name" 
                label="Seu nome" 
                placeholder="Seu nome..." 
                required="{{true}}"
                value="{{old('name')}}"
                error="{{$errorName ?? null}}"
            ></x-form.input>   

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

            <x-form.input 
                name="password_confirmation"
                type="password" 
                label="Confirme sua senha" 
                placeholder="Confirme sua senha..."
                value="{{old('password_confirmation')}}"
                required={{true}}
            ></x-form.input>

            <x-form.button type="reset" >Resetar</x-form.button>
            <x-form.button type="submit" >Registrar</x-form.button>
        </form>
    </section>
</x-layout>