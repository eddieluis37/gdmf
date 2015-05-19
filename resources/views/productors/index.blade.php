@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Productores</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('productors.create') !!}">Nuevo Productor</a>
        </div>

        <div class="row">
            @if($productors->isEmpty())
                <div class="well text-center">Productores no encontrados.</div>
            @else
                <table class="table">
                    <thead>
                    <th>Nombres</th>
			<th>Identificacion</th>
			<th>Fijo</th>
			<th>Celular</th>
			<th>Correo</th>
			<th>Dirección</th>
			<th>Asociación</th>
                    <th width="50px">Acción</th>
                    </thead>
                    <tbody>
                    @foreach($productors as $productor)
                        <tr>
                            <td>{!! $productor->name !!}</td>
					<td>{!! $productor->identificacion !!}</td>
					<td>{!! $productor->phone !!}</td>
					<td>{!! $productor->celular !!}</td>
					<td>{!! $productor->email !!}</td>
					<td>{!! $productor->address !!}</td>
					<td>{!! $productor->asociacion !!}</td>
                            <td>
                                <a href="{!! route('productors.edit', [$productor->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="{!! route('productors.delete', [$productor->id]) !!}" onclick="return confirm('Usted esta seguro que desea borrar al productor?')"><i class="glyphicon glyphicon-remove"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>

    </div>
@endsection