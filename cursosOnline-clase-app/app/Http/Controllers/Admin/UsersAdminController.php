<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UsersAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(12);
        return view('admin.usuarios.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::latest()->get()->take(10);
        $user = new User();
        return view('admin.usuarios.create', compact('users', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
//    public function store(Request $request)
    public function store(UserRequest $request)
    {
        $requestData = $request->all();
        try {
            $user = User::create($requestData);
            return redirect()->back()->with(['alertSuccess' => 'El usuario ha sido guardado']);
        } catch(\Exception $e){
            return redirect()->back()->with(['alertError'=>"El usuario no pudo ser guardado"]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('admin.usuarios.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        //dd($user);
        $users = User::latest('updated_at')->get()->take(10);
        return view('admin.usuarios.edit',
            compact('users', 'user'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        $requestData = $request->all();
        $user = User::find($id);
        try {
            $user->update($requestData);
            return redirect()->back()->with(['alertSuccess' => 'El usuario ha sido modificado']);
        } catch(\Exception $e){
            return redirect()->back()->with(['alertError'=>"El usuario no pudo ser modificado"]);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        try {
            $user->delete();
            return redirect()->route('admin.usuarios.index')->with(['alertSuccess' => 'El usuario ha sido borrado']);
        } catch(\Exception $e){
            return redirect()->route('admin.usuarios.index')->with(['alertError'=>"El usuario no pudo ser borrado"]);
        }
    }

    public function delete(User $user)
    {
        $users = User::latest('updated_at')->get()->take(10);
        return view('admin.usuarios.delete',
            compact('users', 'user'));
    }
}
