<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;
use App\Models\Category;

class TaskController extends Controller
{
    public function index() {

    }

    public function create(Request $req) {
        $categories = Category::all();
        $data['categories'] = $categories;
        return view('tasks/create', $data);
    }

    public function create_action(Request $req) {
        $task = $req->only(['title', 'due_date', 'category_id', 'description']);
        $task['user_id'] = 1;
        $dbTask = Task::create($task);
        return redirect(route('home'));
    }

    public function edit(Request $req) {
        $task = Task::find($req->id);
        $categories = Category::all();

        if(!$task) {
            return redirect(route('home'));
        }
        $data['task'] = $task;
        $data['categories'] = $categories;
        return view('tasks/edit', $data);   
    }

    public function edit_action(Request $req) {
        // "id" => "1"
        // "title" => "Minha tarefa editada"
        // "due_date" => "1996-07-07T02:16:53"
        // "category_id" => "25"
        // "description" => "descrição editada"      
        $req_data = $req->only('title', 'due_date', 'category_id', 'description');
        $req_data['is_done'] = $req->is_done ? true : false;

        $task = Task::find($req->id);
        if(!$task) {
            return 'Erro! Tarefa não existente';
        }
        //$task->is_done = $req->is_done ? true : false;
        $task->update($req_data);
        $task->save();
        return redirect(route('home'));
    }

    public function update(Request $req) {
        $response = ['error' => false];
        $task = Task::find($req->taskId);
        if(!$task) {
            $response['error'] = 'task não existente.';
            return $response;
        }
        
        $task->is_done = $req->done;
        $response['updated'] = $task->save();
        $response['task'] = $task;

        return $response;
    }

    public function delete(Request $req) {
        $task = Task::find($req->id);
        if($task) {
            $task->delete();
        }
        return redirect(route('home'));
    }
}
