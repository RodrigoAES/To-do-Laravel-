<div class="task">
    <div class="title">
        <input type="checkbox" onchange="taskUpdate(this)" data-id="{{$data['id']}}"
            @if($data['is_done'] ?? null)
                checked
            @endif
        />
        <h3 class="task_title">{{$data['title'] ?? null}}</h3>
    </div>

    <div class="priority">
        <div class="sphere"></div>
        <div>{{$data['category']->title ?? null}}</div>
    </div>

    <div class="actions">
        <a href="{{route('task.edit', ['id' => $data['id']])}}">
            <img src="/assets/images/icon-edit.png" alt="Icone de edição">
        </a>
        <a href="{{route('task.delete', ['id' => $data['id']])}}">
            <img src="/assets/images/icon-delete.png" alt="Icone de exclusão">
        </a>
    </div>
</div>