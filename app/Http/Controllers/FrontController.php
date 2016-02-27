<?php namespace App\Http\Controllers;

use App\Category;
use App\About;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\MyMailRequest;
use App\Http\Requests\SearchRequest;
use App\Post;
use App\Work;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;

class FrontController extends Controller {

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'search']]);

    }

    public function index()
    {

        $categories = Category::all();
        $posts = Post::latest('created_at')->active()->take(3)->get();
        $works = Work::latest('created_at')->active()->paginate(5);
        $postsPop = Post::orderBy('views', 'desc')->take(3)->active()->get();
        $worksPop = Work::popular()->get();

        return view('home.index', compact('categories',  'works', 'posts', 'postsPop', 'worksPop'));
    }

    public function search(SearchRequest $request)
    {
        $input = $request->all();
        $keyword = $input['keywords'];
        $works = Work::mysearch($input['keywords'])->active()->paginate(10);
        $posts = Post::mysearch($input['keywords'])->active()->paginate(10);
        $postsPop = Post::orderBy('views', 'desc')->take(3)->active()->get();
        $worksPop = Work::orderBy('views', 'desc')->take(3)->active()->get();
        $categories = Category::all();
        return view('search.index', compact('works', 'posts', 'keyword', 'postsPop', 'worksPop', 'categories'));
    }




}
