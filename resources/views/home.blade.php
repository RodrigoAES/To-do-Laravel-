<x-layout>
<x-slot name='btn'>
    <x-button href=http://localhost:8000/task/new text='Criar tarefa'></x-button>
    <x-button href="{{route('logout')}}" text='Sair'></x-button>
</x-slot>
    
<section class="graph">
    <div class="graph_header">
        <h2>Progresso do Dia</h2>
        <div class="line"></div>
        <div class="graph_header-date">
            <img src="/assets/images/icon-prev.png" alt="Botão: anterior">
                13 de Dez
            <img src="/assets/images/icon-next.png" alt="Botão: próximo">
        </div>
    </div>
    <div class="graph_header-subtitle">Tarefas <b>3/6</b></div>

    <div class="graph-placeholder">

    </div>
    <div class="tasks_left_footer">
        <img src="/assets/images/icon-info.png" alt="icone de informação">
        Restam 3 tarefas para serem realizadas
    </div>
</section>

<section class="list">
    <div class="list_header">
        <select class="list_header-select">
            <option value="1">Todas as tarefas</option>
        </select>
    </div>

    <div class="task_list">

    @foreach ($tasks as $task)
        <x-task :data=$task/>
    @endforeach
        
    </div>
</section>
<script>
    async function taskUpdate(element) {
        let done = element.checked;
        let taskId = element.dataset.id;
        let url = '{{route('task.update')}}';

        let req = await fetch(url, {
            method:'POST',
            headers: {
                'content-type':'application/json',
                'accept': 'application/json'
            },
            body: JSON.stringify({done, taskId, _token:'{{csrf_token()}}'})
        });

        result = await req.json();
        if(result.updated) {
            alert('true');
        } else {
            element.checked = !done;
        }

    }
</script>
</x-layout>