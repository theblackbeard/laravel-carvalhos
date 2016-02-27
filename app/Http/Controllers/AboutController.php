<?php namespace App\Http\Controllers;

use App\Work;
use App\About;
use App\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use Request;
use App\Http\Requests\CreateAboutRequest;
use Illuminate\Support\Facades\Auth;


class AboutController extends Controller {

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['about']]);
    }

	public function index()
	{
		$abouts = About::all();
		return view("admin.about.index", compact('abouts'));
	}
	
	public function create()
	{
		return view("admin.about.create");
	}
	
	public function store(CreateAboutRequest $request)
	{
        if($this->checkAbout()):
            $this->createAbout($request);
            flash()->success("Página Sobre criada com sucesso!");
        else:
            flash()->error("Apenas pode existir uma pagina sobre.");
        endif;
        return redirect('admin/about');
	}
	
	
	public function edit(About $about)
	{
		return view('admin.about.edit', compact('about'));
	}

	
	public function update(CreateAboutRequest $request, About $about)
	{
        $input = $request->all();
        $input['name'] = str_slug($input['title']);
        $about->update($request = $input);
        flash()->success("Página Sobre atualizada com sucesso!");
        return redirect('admin/about');
	}

    public function destroy(About $about)
    {
        $about->delete();
        flash()->success("Página deletada com sucesso!");
        return redirect('admin/about');
    }

    private function createAbout(CreateAboutRequest $request)
    {
        $input = $request->all();
        $input['name'] = str_slug($input['title']);
        About::create($input);

    }

    private function checkAbout()
    {
        $numAbout = About::all()->count();
        if($numAbout < 1):
            return true;
        else:
            return false;
        endif;
    }

    public function findex()
    {
        $abouts = About::all();
        return view("about.index", compact('abouts'));
    }

    //Frontend
    public function about()
    {

        $categories = Category::all();
        $postsPop = Post::orderBy('views', 'desc')->take(10)->active()->get();
        $worksPop = Work::orderBy('views', 'desc')->take(20)->active()->get();
        $about = About::all()->first();

        return view('about.index', compact('categories', 'about','postsPop', 'worksPop'));
    }
}
