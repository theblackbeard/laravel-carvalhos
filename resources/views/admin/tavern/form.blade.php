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
<div class="form-group">
            {!! Form::label('published_at' , 'Publicado em:') !!}
            {!! Form::input('date' ,'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
</div>


         <div class="form-group">
            {!! Form::submit($submitButton, ['class' => 'btn btn-primary form-control']) !!}
         </div>

@section('options')
    <a href="/admin/tavern" class="label label-success">Listar Textos</a>
 @stop
