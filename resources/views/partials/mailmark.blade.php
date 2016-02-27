
  <!-- start Mail Contact -->
  <div class="single_blog_sidebar wow fadeInUp">
    <h2>Cadastre seu E-mail</h2>
    <p>Cadastre seu e-mail para ficar por dentro das novidades do site!, conto com seu apoio!</p>
    <form action="{{ url('mail')}}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
                <input type="text" class="form-control" placeholder="Insira seu Email" name="mail">
    </div>

    {!! app('captcha')->display(); !!}
    <br>
     <div class="form-group">
        <button type="submit" class="form-control btn btn-success">Cadastrar</button>
     </div>
     </form>

     <br>
   </div>
   <!-- End Mail Contatct -->
