<x-layout>
     <x-slot name='btn'>
          <x-button href='http://localhost:8000/' text='Voltar'> </x-button>
     </x-slot>
   
     <section id="task_section">
          <h1>Criar tarefa</h1>
          <form method="POST" action="{{route('task.create_action')}}">
               @csrf
               <x-form.input name="title" label="Titúlo da tarefa" placeholder="Digite o título da tarefa" required=true></x-form.input>              
               <x-form.input type="datetime-local" name="due_date" label="Data da tarefa" required=true></x-form.input>
               <x-form.select name="category_id" type="a categoria" required="true">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->title}}<option>
                    @endforeach
               </x-form.select>
               <x-form.textarea name='description' label="Descrição da tarefa" placeholder="Digite a descrição da tarefa" ></x-form.input>

               <x-form.button type="reset" >Resetar</x-form.button>
               <x-form.button type="submit" >Criar tarefa</x-form.button>
          </form>
     </section>
</x-layout>