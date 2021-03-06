<!--- Name Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('firstname', 'Primer Nombre:') !!}
    {!! Form::text('first_Name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('secondname', 'Segundo Nombre:') !!}
    {!! Form::text('second_Name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('lastname', 'Primer apellido:') !!}
    {!! Form::text('last_Name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('secondlastname', 'Segundo Apellido:') !!}
    {!! Form::text('secondlast_Name', null, ['class' => 'form-control']) !!}
</div>

<!--- Identificacion Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('identificacion', 'Identificacion:') !!}
    {!! Form::text('identificacion', null, ['class' => 'form-control']) !!}
</div>

<!--- Phone Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('phone', 'Teléfono Fijo:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!--- Celular Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('celular', 'Celular:') !!}
    {!! Form::text('celular', null, ['class' => 'form-control']) !!}
</div>

<!--- Email Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('email', 'Correo:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!--- Address Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('address', 'Dirección de Residencia:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<!--- Asociacion Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('asociacion', 'Asociación:') !!}
    {!! Form::text('asociacion', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
</div>
