@extends('app')

@section('htmlheader_title')
    Home
@endsection

<div class="container">
    @yield('content')
</div>

@section('main-content')

<div class="container">
    @if(Session::has('flash_message'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
         
        {{ Session::get('flash_message') }}
    </div>
    @endif
    @yield('content')
</div>

{!! Form::open(['url' => 'urls']) !!}
@include('errors.form_error')
@include('urls.create_form', ['submitTextButton' => 'Shorten !!!'])
{!! Form::close() !!}
@endsection