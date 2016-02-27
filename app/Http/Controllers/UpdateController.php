<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateRequest;
use App\Updates;
use Illuminate\Http\Request;

class UpdateController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $updates = Updates::latest('created_at')->published()->get();
        return view('admin.updates.index', compact('updates'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.updates.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(UpdateRequest $request)
	{
        $this->createUpdates($request);
        flash()->success("Atualização criada com sucesso!");
        return redirect('admin/updates');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Updates $updates)
	{
        return view('admin.updates.edit', compact('updates'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(UpdateRequest $request, Updates $updates)
	{
        $updates->update($request->all());
        flash()->success("Atualização atualizada com sucesso!");
        return redirect('admin/updates');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Updates $updates)
	{
        $updates->delete();
        flash()->success("Página deletada com sucesso!");
        return redirect('admin/updates');
	}


    private function createUpdates(UpdateRequest $request)
    {
        Updates::create($request->all());
    }
}
