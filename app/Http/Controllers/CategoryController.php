<?php namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Work;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCategoryRequest;

use Request;

class CategoryController extends Controller {

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['category', 'show']]);
    }


    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(CreateCategoryRequest $request)
    {
        $input = Request::all();
        $input['name'] = str_slug($input['title']);
        Category::create($request = $input);
        //$input['published_at'] = Carbon::now();
        flash()->success("Categoria criada com sucesso!");
        return redirect('admin/category');
    }

    public function edit(Category $category)
    {
        return view('admin.category.edit' , compact('category'));
    }

    public function update(CreateCategoryRequest $request, Category $category)
    {
        $input = Request::all();
        $input['name'] = str_slug($input['title']);
        $category->update($request = $input);
        flash()->success("Categoria atualizada com sucesso!");
        return redirect('admin/category');
    }


    public function destroy(Category $category)
    {
        $category->delete();
        flash()->success("Categoria excluida com sucesso!");
         return redirect('admin/category');
    }

    //Front End
    public function category()
    {
        $categories = Category::all();
        $posts = Post::latest('created_at')->published()->active()->paginate(20);
        $works = Work::latest('created_at')->published()->active()->paginate(20);
        $postsPop = Post::orderBy('views', 'desc')->take(10)->active()->get();
        $worksPop = Work::orderBy('views', 'desc')->take(20)->active()->get();
        return view('category.index', compact('categories', 'posts','works', 'postsPop', 'worksPop'));

    }

    public function show($name)
    {
        $categories = Category::all();
        $category = Category::myname($name)->get()->first();
        $posts = Post::latest('created_at')->published()->active()->paginate(20);
        $works = Work::latest('created_at')->published()->active()->paginate(20);
        $postsPop = Post::orderBy('views', 'desc')->take(10)->active()->get();
        $worksPop = Post::orderBy('views', 'desc')->take(20)->active()->get();

        if(is_null($category)):
            abort(404);
        endif;
        return view('category.show', compact('category','categories', 'postsPop', 'worksPop', 'posts', 'works'));
    }

}
