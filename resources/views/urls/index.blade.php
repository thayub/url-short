@extends('app')

@section('htmlheader_title')
    Home
@endsection

<div class="container">
    @yield('content')
</div>
@section('main-content')
@if ($suppliersList->count())
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">List of suppliers</h3>
        </div><!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
                <th>Id</th>
                <th>Code</th>
                <th>Name</th>
                <th>Website</th>
                <th>Telephone #</th>
                <th>Country</th>
                <th>Status</th>
                <th colspan="3" align="center">Action</th>
            </tr>
            <?php $i=0; ?>
                @foreach ($suppliersList as $supplier)
            <?php $i++; ?>
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $supplier->code }}</td>
                    <td>{{ $supplier->name }}</td>
                    <td>{{ $supplier->website }}</td>
                    <td>{{ $supplier->telephone }}</td>
                    <td>{{ $supplier->country }}</td>
                    @if($supplier->supplier_selected == 1)
                        <td>Approved</td>
                    @elseif($supplier->supplier_selected == 0)
                        <td> Pending approval / Not Approved </td>
                    @endif
                    <td><a class="btn btn-warning" href="{{ url('/suppliers', $supplier->application_id)}}">View</a></td>
                </tr>
                @endforeach
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div>
</div>
@else
There are no supplier in the supplier list
@endif
@endsection
