<?php namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Request;
use DB;

class PostController extends Controller {

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['post', 'show']]);
    }

	public function index()
    {
        $posts = Post::latest('published_at')->published()->get();
        return view('admin.post.index' , compact('posts'));
    }


    public function create()
    {
        $categories = Category::lists('title', 'id');
        return view('admin.post.create', compact('categories'));
    }

    public function store(PostRequest $request)
    {
        $this->createPost($request);
        flash()->success("Postagem criada com sucesso!");
        return redirect('admin/post');
    }


    public function edit(Post $post)
    {
        $categories = Category::lists('title', 'id');
        return view('admin.post.edit', compact('post', 'categories'));
    }

    public function update(PostRequest $request, Post $post)
    {
        $input = $request->all();
        $input['name'] = str_slug($input['title']);
        $input['status'] = false;
        $post->update($request = $input);
        $this->syncTags($post, $input['category_list']);
        flash()->success("Postagem atualizada com sucesso!");
        return redirect('admin/post');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        flash()->success("Postagem deletada com sucesso!");
        return redirect('admin/post');
    }

    public function status(Post $post)
    {
        $input = Request::all();
        $msg = $input['msg'];
        unset($input['msg']);
        $post = Post::all()->find($input['id']);
        $post->status = $input['status'];
        //dd($work->status);
        $post->save();
        flash()->success("Postagem esta: " . $msg );
        return redirect('admin/post');
    }

    private function syncTags(Post $post, array $tags)
    {
        $post->categories()->sync($tags);
    }

    private function createPost(PostRequest $request)
    {
        $input = $request->all();
        $input['name'] = str_slug($input['title']);
        $input['status'] = false;
        $input['views'] = 0;
        $post =  Auth::user()->post()->create($input);
        // \Session::put('flash_message' , 'Trabalho cadastrado com Sucesso!');
        $this->syncTags($post, $input['category_list']);

        return $post;
    }

    //FrontEnd
    public function post()
    {
        $categories = Category::all();
        $posts = Post::latest('created_at')->published()->active()->paginate(10);
        $posts->setPath('post');
        $postsPop = Post::orderBy('views', 'desc')->take(3)->active()->get();
        $worksPop = Post::orderBy('views', 'desc')->take(3)->active()->get();
        return view('post.index', compact('categories', 'posts', 'postsPop', 'worksPop'));
    }

    public function show($name)
    {
        $post = Post::myname($name)->active()->get()->first();
        $categories = Category::all();
        $postsPop = Post::orderBy('views', 'desc')->take(3)->active()->get();
        $worksPop = Post::orderBy('views', 'desc')->take(3)->active()->get();
        if(is_null($post)):
            abort(404);
        endif;
        DB::table('posts')->where('id', $post->id)->increment('views');
        return view('post.show', compact('post', 'postsPop', 'worksPop', 'categories'));
    }

}
