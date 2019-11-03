<?php

namespace App\Http\Controllers\AboutTask;
use App\Http\Controllers\Controller;
use App\Model\TasksCreation;
use Illuminate\Http\Request;
use Validator;
// use DB;
use Illuminate\Support\Facades\DB;
class TaskController extends Controller
{
    //
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'subject'=>'required',
            'description'=>'required',
            'task_creation_date'=>'required',
            'priority'=>'required'
        ]);
    if ($validator->fails()) {
        return response()->json(["errors"=>$validator->errors()]);
      }
      $tskSAv = new TasksCreation;
      $tskSAv->subject = $request->subject;
      $tskSAv->description = $request->description;
      $tskSAv->task_creation_date = $request->task_creation_date;
      $tskSAv->priority = $request->priority;
      $tskSAv->save();
    //   dd($tskSAv);
    }
    //get values
    public function index(){
        $tasks = DB::table('created_tasks_table')->select('id','subject','description','task_creation_date','priority')->get();
        // return $tasks;
        // return view('cust.tasks')->with('tasks', $tasks);
        return response()->json(['data'=>$tasks]);
        }
    public function showTask($id){
        try{
        $showtask = TasksCreation::find($id);
        // return $show_task;
        // return view('cust.viewtask')->with('viewtask', $show_task);
          return view('cust.viewtask',compact('showtask'));
        }
        catch(\Exception $ex) {
            return response()->json(['exception_error'=>$ex->getMessage()]);
        }
    }
    public function updateTask(Request $request, $id){
      $data = $request->all();
    //   dd($data);
      $task = TasksCreation::find($id);
      $task->fill($data);
      $task->save();
     return response()->json(["message"=>"updated successfully", "task"=>$task]);
    }
}