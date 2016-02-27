<div class="form-group">
            {!! Form::label('title' , 'Titulo:') !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>

         <div class="form-group">
             {!! Form::label('photo' , 'Foto:') !!}
             {!! Form::text('photo', null, ['class' => 'form-control']) !!}
         </div>

         <div class="form-group">
             {!! Form::label('texto' , 'Descrição:') !!}
             {!! Form::textarea('text', null, ['class' => 'form-control']) !!}
         </div>

           <a href="/admin/category/create" class="label label-info pull-right">+Nova Categoria</a>
          <div class="form-group">
              {!! Form::label('category_list' , 'Categoria:') !!}


              {!! Form::select('category_list[]', $categories,  null, ['id' => 'category_list' ,'class' => 'form-control', 'multiple' ]) !!}
         </div>

        <div class="form-group">
            {!! Form::label('published_at' , 'Publicado em:') !!}
            {!! Form::input('date' ,'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
         </div>


         <div class="form-group">
            {!! Form::submit($submitButton, ['class' => 'btn btn-primary form-control']) !!}
         </div>

@section('options')
    <a href="/admin/category" class="label label-success">Listar Categorias</a>
    <a href="/admin/post" class="label label-info">Listar Postagens</a>
    <a href="/admin/category/create" class="label label-warning">Nova Categoria</a>

@stop

    @section('footer')
        <script>
            $('#category_list').select2({
                placeholder: "Escolha a Categoria"
            });
        </script>
    @stop