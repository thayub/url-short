@extends('app')

@section('htmlheader_title')
    Home
@endsection

<div class="container">
    @yield('content')
</div>
@section('main-content')
@if(Session::has('flash_message'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
         
        {{ Session::get('flash_message') }}
    </div>
    @endif
@if ($urlsList->count())
<div class="pull-right">
    <a class="btn btn-block btn-danger" href="{{action('UrlController@create')}}">Back</a>
</div>
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">List of Shortened URLs</h3>
        </div><!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
                <th>#</th>
                <th>Actual Url</th>
                <th>Shortened Url</th>
            </tr>
            <?php $i=0; ?>
                @foreach ($urlsList as $url)
            <?php $i++; ?>
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $url->url }}</td>
                    <td><a href = "{{$url->short_url}}">{{ $url->short_url }}</a></td>
                </tr>
                @endforeach
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div>
</div>
@else
There are no urls in this list
@endif
@endsection
