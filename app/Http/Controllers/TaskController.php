<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\TaskRepository;
use Illuminate\Http\Request;

class TaskController extends Controller

{
    /**
     * repertoire des taches
     */
    protected $tasks;

    /**
     * on cree un nv controlleur
     */
    public function __construct(TaskRepository $tasks)
    {
        $this->middleware('auth');
        $this->tasks = $tasks;
    }

    /**
     * liste des taches pour les users
     */
    public function index(Request $request)
    {
        return view('tasks.index', [
            'tasks' => $this->tasks->forUser($request->user()),
        ]);
    }
    /**
     * cree la tache

     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'écheance' => 'required',
        ]);

        $request->user()->tasks()->create([
            'name' => $request->name,
            'écheance' => $request->écheance,

        ]);

        return redirect('/tasks');
    }

    /**
     * pour detruire la tache
     */
    public function destroy(Request $request, Task $task)
    {
        $this->authorize('destroy', $task);

        $task->delete();

        return redirect('/tasks');
    }
}

