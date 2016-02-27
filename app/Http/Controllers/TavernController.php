<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\TavernRequest;
use App\Tavern;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Request;

class TavernController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $taverns = Tavern::latest('published_at')->published()->get();
        return view('admin.tavern.index' , compact('taverns'));
    }

    public function create()
    {
        return view('admin.tavern.create');
    }

    public function store(TavernRequest $request)
    {
        $this->createTavern($request);
        flash()->success("Texto criado com sucesso!");
        return redirect('admin/tavern');
    }

    public function edit(Tavern $tavern)
    {
        return view('admin.tavern.edit', compact('tavern'));
    }

    public function update(TavernRequest $request, Tavern $tavern)
    {
        $input = $request->all();
        $input['name'] = str_slug($input['title']);
        $tavern->update($input);
        flash()->success("Texto atualizado com sucesso!");
        return redirect('admin/tavern');
    }

    public function destroy(Tavern $tavern)
    {
        $tavern->delete();
        flash()->success("Texto excluido com sucesso!");
        return redirect('admin/tavern');
    }

    private function createTavern(TavernRequest $request)
    {
        $input = $request->all();
        $input['name'] = str_slug($input['title']);
        $tavern =  Auth::user()->tavern()->create($input);

        return $tavern;
    }

    //Front end
    public function tavern()
    {
        $taverns = Tavern::latest('created_at')->published()->paginate(20);
        return view('tavern.index', compact('taverns'));
    }

    public function show($name)
    {
        $tavern = Tavern::myname($name)->get()->first();
        if(is_null($tavern)):
            abort(404);
        endif;
        return view ('tavern.show', compact('tavern'));
    }



}
