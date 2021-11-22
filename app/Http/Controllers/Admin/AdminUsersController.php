<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


        $users=User::role('User')->get();
        $managers=USer::role('Manager')->get();
        $activeUsers=User::role('User')->permission('Active-users')->get()->count();
        return  view('admin.users.index', compact('users','managers','activeUsers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roles=Role::all();

        return  view('admin.users.create',compact('roles'));
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
        $validated=$request->validate([
            'name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'cellphone' => ['required', 'string', 'max:25'],
            'street' => ['required', 'string', 'max:25'],
            'town' => ['required', 'string', 'max:25'],
            'county' => ['required', 'string', 'max:25'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            Password::min(8)
                ->mixedCase()
                ->letters()
                ->numbers()
                ->symbols()
                ->uncompromised(),
            'password_confirmation' => 'required|max:16|min:8',
        ]);
        if (is_null($request->role)){
            $role='User';
        }else{
            $role_name=Role::findOrFail($request->role);
            $role=$role_name->name;
        }
       $user=User::create([
           'name'=>$validated['name'],
           'email'=>$validated['email'],
           'password' => Hash::make($validated['password']),
           'last_name'=>$validated['last_name'],
           'cellphone'=>$validated['cellphone'],
       ]);
        $user->address()->create([
            'street'=>$validated['street'],
            'town'=>$validated['town'],
            'county'=>$validated['county']
        ]);
        $user->assignRole($role);
        return redirect('admin/homepage/users')->with('status','User created successfully');
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
        $user=User::findOrFail($id);
        return  view('admin.users.show', compact('user'));
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
        $roles=Role::all();
        $user=User::findOrFail($id);

        return  view('admin.users.edit',compact('roles','user'));
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
        $user=User::findOrFail($id);
        $validated=$request->validate([
            'name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'cellphone' => ['required', 'string', 'max:25'],
            'street' => ['required', 'string', 'max:25'],
            'town' => ['required', 'string', 'max:25'],
            'county' => ['required', 'string', 'max:25'],


        ]);
        $user->update($validated);
        return redirect('admin/homepage/users')->with('status','User updated successfully');

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
        $user=User::findOrFail($id);
        $user->delete();
        return redirect('admin/homepage/users')->with('status','User deleted successfully');

    }
}
