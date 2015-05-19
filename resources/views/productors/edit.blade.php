@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($productor, ['route' => ['productors.update', $productor->id], 'method' => 'patch']) !!}

        @include('productors.fields')

    {!! Form::close() !!}
</div>
@endsection
