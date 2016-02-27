<?php namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateWorkRequest;
use App\Post;
use App\User;
use App\Work;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Request;
use DB;

class WorkController extends Controller {

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['work', 'show']]);
    }

    //Admin
    public function index()
    {
        $works = Work::latest('published_at')->published()->get();
        return view('admin.work.index' , compact('works'));
    }
    /*
        public function show(Work $work)
        {

            return view('admin.work.show' , compact('work'));
        }
    */
    public function create()
    {
        $categories = Category::lists('title' , 'id');
        return view('admin.work.create', compact('categories'));
    }

    public function store(CreateWorkRequest $request)
    {
        $this->createWork($request);
        //Work::create($request = $input);
        //$input['published_at'] = Carbon::now();
        flash()->success("Trabalho criado com sucesso!");
        return redirect('admin/work');

    }

    public function edit(Work $work)
    {
        $categories = Category::lists('title' , 'id');
        return view('admin.work.edit', compact('work', 'categories'));
    }

    public function update(CreateWorkRequest $request, Work $work)
    {
        $input = Request::all();
        $input['name'] = str_slug($input['title']);
        $input['status'] = false;
        $work->update($request = $input);
        $this->syncTags($work, $input['category_list']);
        flash()->success("Trabalho atualizado com sucesso!");
        return redirect('admin/work');
    }

    public function destroy(Work $work)
    {
        $work->delete();
        flash()->success("Trabalho deletado com sucesso!");
        return redirect('admin/work');
    }

    public function statusw(Work $work)
    {
        $input = Request::all();
        $msg = $input['msg'];
        unset($input['msg']);
        $work = Work::all()->find($input['id']);
        $work->status = $input['status'];
        //dd($work->status);
        $work->save();
        flash()->success("Trabalho esta: " . $msg );
        return redirect('admin/work');
    }

    private function syncTags(Work $work, array $tags)
    {
        $work->categories()->sync($tags);
    }

    private function createWork(CreateWorkRequest $request)
    {
        $input = $request->all();
        $input['name'] = str_slug($input['title']);
        $input['status'] = false;
        $input['views'] = 0;
        $work =  Auth::user()->work()->create($input);
        // \Session::put('flash_message' , 'Trabalho cadastrado com Sucesso!');
        $this->syncTags($work, $input['category_list']);

        return $work;
    }


    //Front end
    public function work()
    {

        $categories = Category::all();
        $works = Work::latest('created_at')->published()->active()->paginate(10);
        $works->setPath('work');
        $postsPop = Post::orderBy('views', 'desc')->take(3)->active()->get();
        $worksPop = Work::orderBy('views', 'desc')->take(3)->active()->get();

        return view('work.index', compact('works', 'categories', 'postsPop', 'worksPop'));
    }

    public function show($name)
    {

        $postsPop = Post::orderBy('views', 'desc')->take(3)->active()->get();
        $worksPop = Work::orderBy('views', 'desc')->take(3)->active()->get();
        $categories = Category::all();
        $posts = Post::all();
        $work = Work::myname($name)->active()->get()->first();
        if(is_null($work)):
            abort(404);
        endif;
        DB::table('works')->where('id', $work->id)->increment('views');
        return view('work.show', compact('work', 'categories', 'posts', 'postsPop', 'worksPop'));
    }


}
