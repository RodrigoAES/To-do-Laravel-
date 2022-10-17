<x-layout>
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
        <div class="task">
            <div class="title">
                <input type="checkbox" />
                <h3 class="task_title">Titulo da tarefa</h3>
            </div>

            <div class="priority">
                <div class="sphere"></div>
                <div>Titulo da tarefa</div>
            </div>

            <div class="actions">
                <a href="">
                    <img src="/assets/images/icon-edit.png" alt="Icone de edição">
                </a>
                <a href="">
                    <img src="/assets/images/icon-delete.png" alt="Icone de exclusão">
                </a>
            </div>
        </div>

        <div class="task">
            <div class="title">
                <input type="checkbox" />
                <h3 class="task_title">Titulo da tarefa</h3>
            </div>

            <div class="priority">
                <div class="sphere"></div>
                <div>Titulo da tarefa</div>
            </div>

            <div class="actions">
                Editar - Excluir
            </div>
        </div>
    </div>
</section>
</x-layout>