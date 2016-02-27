<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::latest('created_at')->published()->get();
        return view('admin.user.index' , compact('users'));
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(UserRequest $request)
    {
        $this->createUser($request);
        flash()->success("Usuario criado com sucesso!");
        return redirect('admin/user');
    }

    public function edit(User $user){
        return view('admin.user.edit', compact('user'));
    }

    public function update(UserRequest $request, User $user)
    {

        $user->update($request->all());
        flash()->success("Usuario atualizado com sucesso!");
        return redirect('admin/user');
    }

    public function destroy(USer $user)
    {
        $user->delete();
        flash()->success("Usuario deletado com sucesso!");
        return redirect('admin/user');
    }

    private function createUser(UserRequest $request)
    {
        $input = $request->all();
        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => bcrypt($input['password']),
        ]);
    }


}
