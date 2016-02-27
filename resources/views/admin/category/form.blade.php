 <div class="form-group">
             {!! Form::label('title' , 'Titulo:') !!}
             {!! Form::text('title', null, ['class' => 'form-control']) !!}
         </div>

         <div class="form-group">
             {!! Form::submit($submitButton,  ['class' => 'btn btn-primary form-control']) !!}
          </div>
@section('options')
    <a href="/admin/category" class="label label-success">Listar Categorias</a>
    <a href="/admin/work/create" class="label label-info">Novo Trabalho</a>
   
@stop

