	<div class="form-group">

		{!! Form::label('title', 'Titulo: ') !!}
		{!! Form::text('title', null, ['class' => 'form-control']) !!}

	</div>

		<div class="form-group">

    		{!! Form::label('status', 'Status: ') !!}
    		{!! Form::text('status', null, ['class' => 'form-control']) !!}

    	</div>



	<div class="form-group">

		  {!! Form::submit($submitButton,  ['class' => 'btn btn-primary form-control']) !!}


	</div>
