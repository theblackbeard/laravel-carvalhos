	<div class="form-group">

		{!! Form::label('title', 'Titulo: ') !!}
		{!! Form::text('title', null, ['class' => 'form-control']) !!}

	</div>

	<div class="form-group">

		{!! Form::label('text', 'Descrição: ') !!}
		{!! Form::textarea('text', null, ['class' => 'form-control']) !!}

	</div>

	<div class="form-group">

		  {!! Form::submit($submitButton,  ['class' => 'btn btn-primary form-control']) !!}


	</div>
