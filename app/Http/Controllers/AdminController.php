<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\TaskManager;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Facades\Gate;
use Validator;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $user;
     public function __construct()
     {
         $this->middleware('redirectifnotadmin:web');
         //$this->authorize('view', $user);
     }
    public function index()
    {
        //
        $tasks = Auth::user()->task_manager()->get();
        return view('admin_auth.dashboard', ['tasks' => $tasks]);
    }


    public function fetch_all_task(){
 
        $tasks = Auth::user()->task_manager()->orderBy('updated_at', 'desc')->get();

        if(count($tasks) > 0){
            return response_data(true, 200, 'Task fetched.', ['values' => $tasks], false, false);
            
        }else{
            return response_data(false, 422, "There's no task list available.", false, false, false);  
        }  

    }

    public function create_new_task(Request $request){

        $user = Auth::user();

        $input = $request->all();
    
        $validator = Validator::make($input, [
            'title' => 'required',
            'task_time' => 'required',
        ]);
    
        if($validator->fails()){
            return response_data(false, 422, "Sorry a Validation Error Occured", ['errors' => $validator->errors()->all()], false, false);                            
        }

        $create_tasks = $user->task_manager()->create([
            'task_name' => $request->title,
            'task_date_and_time' => $request->task_time
        ]);

        $select_tasks = $user->task_manager()->orderBy('updated_at', 'desc')->get();

        if($create_tasks){
            return response_data(true, 200, 'Task created.', ['values' => $select_tasks], false, false);
            
        }else{
            return response_data(false, 422, "Error occured, please try later.", false, false, false);  
        }  

    }

    public function update_task(Request $request, $id=null){

        $user = Auth::user();

        $input = $request->all();
    
        $validator = Validator::make($input, [
            'title' => 'required',
            'task_time' => 'required',
        ]);
    
        if($validator->fails()){
            return response_data(false, 422, "Sorry a Validation Error Occured", ['errors' => $validator->errors()->all()], false, false);                            
        }

        $update_tasks = $user->task_manager()->where('id', $id)->update([
            'task_name' => $request->title,
            'task_date_and_time' => $request->task_time
        ]);

        $select_tasks = $user->task_manager()->orderBy('updated_at', 'desc')->get();

        if($update_tasks){
            return response_data(true, 200, 'Task Updated.', ['values' => $select_tasks], false, false);
            
        }else{
            return response_data(false, 422, "Error occured, please try later.", false, false, false);  
        }  

    }

    public function delete_task($id){
        $user = Auth::user();
        $delete_tasks = $user->task_manager()->find($id);
        $delete_tasks->delete();
        if($delete_tasks){
            return response_data(true, 200, 'Task deleted.', false, false, false);
            
        }else{
            return response_data(false, 422, "Error occured, please try later.", false, false, false);  
        }  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
        $this->authorize('view', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
