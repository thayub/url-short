@extends('app')

@section('htmlheader_title')
    Home
@endsection

<div class="container">
    @yield('content')
</div>

@section('main-content')
{!! Form::open(['url' => 'suppliers']) !!}
@include('errors.form_error')
@include('items.create_form', ['submitTextButton' => 'Add Item to Master List'])
{!! Form::close() !!}
@endsection