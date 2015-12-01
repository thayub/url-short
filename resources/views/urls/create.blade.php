@extends('app')

@section('htmlheader_title')
    Home
@endsection

<div class="container">
    @yield('content')
</div>

@section('main-content')
{!! Form::open(['url' => 'urls']) !!}
@include('errors.form_error')
@include('urls.create_form', ['submitTextButton' => 'Shorten !!!'])
{!! Form::close() !!}
@endsection