<div class="form-group m-form__group row">
    <div class="form-group col-sm-6">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-sm-6">
        {!! Form::label('email', 'E-mail:') !!}
        {!! Form::email('email', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group m-form__group row">
    <div class="form-group col-sm-6">
        {!! Form::label('username', 'Username:') !!}
        {!! Form::text('username', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-sm-6">
        {!! Form::label('password', 'Password:') !!}
        {!! Form::password('password', ['class' => 'form-control']) !!}
    </div>
</div>
