@extends('app')

@section('htmlheader_title')
    Home
@endsection

<div class="container">
    @yield('content')
</div>
@section('main-content')
@if ($urlsList->count())
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
