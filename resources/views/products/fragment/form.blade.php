<div class="form-group">
	{!! Form::label('name', 'Nome do produto') !!}
	{!! Form::text('name', null, ['class'=>'form-control'] ) !!}
</div>

<div class="form-group">
	{!! Form::label('short', 'Descrição breve do produto') !!}
	{!! Form::text('short', null, ['class'=>'form-control'] ) !!}
</div>

<div class="form-group">
	{!! Form::label('body', 'Descrição do produto') !!}
	{!! Form::textarea('body', null, ['class'=>'form-control'] ) !!}
</div>

<div class="form-group">
	{!! Form::submit('ENVIAR', null, ['class'=>'btn btn-primary'] ) !!}
</div>