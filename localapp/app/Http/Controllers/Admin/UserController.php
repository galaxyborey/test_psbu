<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Validator;
use Redirect;
use DB;
class UserController extends Controller
{
    public function __construct()
  {
      $this->middleware('auth');
  }
  public function index()
  {
      return view('admin.user.index');
  }
  public function create()
  {
      return view('admin.user.create');
  }
  public function store(Request $request)
  {
    // print_r($request->all());exit;
    $this->Validate($request, [
      'name' => 'required',
      'email' => 'required|unique:users,email',
      'password'=>'required|min:5',
			'password_confirmation'=>'required|min:5|same:password',
    ]);
    $table = new User();
    $table->name=$request->name;
    $table->email=$request->email;
    $table->password=bcrypt($request->password);
    $table->image=$request->filepath;
    $table->save();
    return redirect::to('users')->with('info', trans('lang.insert_success'));
  }
  public function show($id)
  {
      $category = Team::find($id);

      return view('admin.team.show', compact('category'));
  }
  public function edit($id)
  {
      $edit = User::find($id);

      return view('admin.user.edit', compact('edit'));
  }
  public function update(Request $request, $id)
  {
      $this->Validate($request, [
        'name' => 'required',
        'email' => 'required',
        // 'password'=>'required|min:5',
      ]);
      $table = User::find($id);
      $table->name=$request->name;
      $table->email=$request->email;
      if(!empty($request->password)){
        $table->password= bcrypt($request->password);
      }
      $table->image=$request->filepath;
      $table->save();
      return redirect::to('users')->with('info', trans('lang.update_success'));
  }
  public function destroy($id)
  {
    $eeam = Team::find($id)->delete();
    return back()->with('info', trans('lang.delete_success'));
  }
}
