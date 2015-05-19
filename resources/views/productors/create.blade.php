@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'productors.store']) !!}

        @include('productors.fields')

    {!! Form::close() !!}
</div>
@endsection
