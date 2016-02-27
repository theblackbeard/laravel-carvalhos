
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
						     {!! Form::label('name' , 'Nome Completo:') !!}
                             {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
						</div>

						<div class="form-group">
                            {!! Form::label('email' , 'E-mail:') !!}
                            {!! Form::text('email', old('email'), ['class' => 'form-control']) !!}
						</div>

						<div class="form-group">
						    {!! Form::label('password' , 'Senha:') !!}
                            {!! Form::password('password', null, ['class' => 'form-control']) !!}
                        </div>

						<div class="form-group">
						    {!! Form::label('password' , 'Confirmar Senha:') !!}
                            {!! Form::password('password_confirmation', null, ['class' => 'form-control']) !!}
                        </div>

						 <div class="form-group">
                           {!! Form::submit($submitButton, ['class' => 'btn btn-primary form-control']) !!}
                         </div>

