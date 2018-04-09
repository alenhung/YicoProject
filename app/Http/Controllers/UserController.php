<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersAdd;
use App\User;
use App\Role;
use DB;
use Session;
use Hash;
use Input;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
      $users = User::orderBy('id', 'desc')->paginate(10);
      return view('users.index')->withUsers($users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersAdd $request)
    {
        //
        //return $request->all();
        if (!empty($request->password)) {
          $password = trim($request->password);
        } else {
          # set the manual password
          $length = 10;
          $keyspace = '123456789abcdefghijkmnopqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ';
          $str = '';
          $max = mb_strlen($keyspace, '8bit') - 1;
          for ($i = 0; $i < $length; ++$i) {
              $str .= $keyspace[random_int(0, $max)];
          }
          $password = $str;
        }

        $user = new User();
        $user->firstName = $request->firstName;
        $user->lastName = $request->lastName;
        $user->name = $request->name;
        $user->companyName = $request->companyName;
        $user->department = $request->department;
        $user->jobTitle = $request->jobTitle;
        $user->extTel = $request->extTel;
        $user->email = $request->email;
        $user->password = Hash::make($password);
        $user->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $user = User::where('id', $id)->first();
        return view("users.show")->withUser($user);
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
        $user = User::where('id', $id)->first();
        return view("users.edit")->withUser($user);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsersAdd $request, $id)
    {
        //
        $user = User::findOrFail($id);
        $user->firstName = $request->firstName;
        $user->lastName = $request->lastName;
        $user->name = $request->name;
        $user->companyName = $request->companyName;
        $user->department = $request->department;
        $user->jobTitle = $request->jobTitle;
        $user->extTel = $request->extTel;
        //change password
        if ($request->password_options == 'auto') {
          $length = 10;
          $keyspace = '123456789abcdefghijkmnopqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ';
          $str = '';
          $max = mb_strlen($keyspace, '8bit') - 1;
          for ($i = 0; $i < $length; ++$i) {
              $str .= $keyspace[random_int(0, $max)];
          }
          $user->password = Hash::make($str);
        } elseif ($request->password_options == 'manual') {
          $user->password = Hash::make($request->password);
        }
        //END change password

        $user->save();

        // $user->syncRoles(explode(',', $request->roles));
        return redirect()->route('users.show', $id);
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
        $user = User::findOrFail($id);

        $user->delete();
        Session::flash('success', '成功刪除了 '. $user->title);
        return redirect()->route('users.index');
    }
}
