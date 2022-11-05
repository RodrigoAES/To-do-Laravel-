<x-layout>
    <x-slot name='btn'>
         <x-button href='http://localhost:8000/' text='Voltar'> </x-button>
    </x-slot>
   
    <section id="task_section">
          <h1>Editar tarefa</h1>
          <form method="POST" action="{{route('task.edit_action')}}">
               @csrf
               <input type="hidden" name="id" value="{{$task->id}}">
               <x-form.checkbox 
                    name="is_done" 
                    value='1' 
                    label="Completada?"
                    checked="{{$task->is_done}}"
               >
               </x-form.checkbox>
               <x-form.input name="title" 
                    label="Titúlo da tarefa" 
                    placeholder="Digite o título da tarefa" 
                    required=true
                    value="{{$task->title}}"
               ></x-form.input>   

               <x-form.input 
                    type="datetime-local" 
                    name="due_date" 
                    label="Data da tarefa" 
                    required=true
                    value="{{$task->due_date}}"
               ></x-form.input>

               <x-form.select 
                    name="category_id" 
                    type="a categoria" 
                    required="true" 
                    value='{{$categories[1]->id}}' 
                    text="{{$categories[1]->title}}"
               >
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}"
                              @if($category->id == $task->category_id)
                                   selected
                              @endif
                        >{{$category->title}}<option>
                    @endforeach
               </x-form.select>

               <x-form.textarea 
               name='description' 
               label="Descrição da tarefa" 
               placeholder="Digite a descrição da tarefa" >{{$task->description}}</x-form.input>

               <x-form.button type="reset" >Resetar</x-form.button>
               <x-form.button type="submit" >Salvar</x-form.button>
          </form>
     </section>
</x-layout>