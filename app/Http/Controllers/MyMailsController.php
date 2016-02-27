<?php namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\MyMailRequest;
use App\Http\Requests\SearchRequest;
use App\Post;
use App\Work;
use App\MyMails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;


class MyMailsController extends Controller {


    public function __construct()
    {
        $this->middleware('auth', ['except' => ['getMail']]);

    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$mails = MyMails::all();
        return view('admin.mail.index', compact('mails'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view ('admin.mail.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(MyMailRequest $request)
	{
        if(!$this->checkMail($request->mail)):
            flash()->success("E-Mail Cadastrado com Sucesso, Obrigado!");
            $this->createMail($request);
        else:
            flash()->error("E-mail já está cadastrado.");
        endif;
        return redirect('admin/mail');
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
	public function edit(MyMails $mail)
	{
        return view('admin.mail.edit', compact('mail'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(MyMailRequest $request, MyMails $mail)
	{
        $mail->update($request->all());
        flash()->success("E-mail atualizado com sucesso!");
        return redirect('admin/mail');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(MyMails $mail)
	{
        $mail->delete();
        flash()->success("E-mail deletado com sucesso!");
        return redirect('admin/mail');
	}


    //Front
    /**
     * @param MyMailRequest $request
     * @return $this
     */
    public function getMail(MyMailRequest $request){

        $categories = Category::all();
        $posts = Post::latest('created_at')->active()->take(3)->get();
        $works = Work::latest('created_at')->active()->paginate(5);
        $postsPop = Post::orderBy('views', 'desc')->take(3)->active()->get();
        $worksPop = Work::popular()->get();
        $msg = null;
        $myMail = Input::all();
        $rules = array(
            'g-recaptcha-response' => 'required|captcha'
        );

        $validate = Validator::make($request->all(), $rules);
        if($validate->fails()):
            $msg = "Tem que provar que é humano...";
         else:
             if(!$this->checkMail($myMail['mail'])):
                 $msg = "E-Mail Cadastrado com Sucesso, Obrigado!";
                 $this->createMail($request);
             else:
                 $msg = "Hey, Esse E-mail já está cadastrado, Obrigado";
             endif;
        endif;
        return view('mail.index', compact('msg','categories', 'about', 'works', 'posts', 'postsPop', 'worksPop', 'validated'))->withErrors($validate);
    }


    private function checkMail($mail)
    {
        $hasMail = MyMails::mymail($mail)->get()->first();
        if(is_null($hasMail)):
            return false;
        else:
            return true;
        endif;

    }

    private function createMail($request)
    {
        MyMails::create($request->all());
    }

}
