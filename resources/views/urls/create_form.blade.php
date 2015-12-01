<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Add an Item to Master List</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form role="form">
            <div class="box-body">
                <div class="box box-danger">
                    <div class="box-header with-border">
                      <h3 class="box-title">Item Identification</h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-xs-3">
                                {!! Form::label('code', 'Code:') !!}
                            </div>
                            <div class="col-xs-4">
                                {!! Form::text('code', '', ['class'=> 'form-control','placeholder' => 'Item Code'] ) !!}
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-xs-3">
                                {!! Form::label('name', 'Supplier Name:') !!}
                            </div>
                            <div class="col-xs-6">
                                {!! Form::text('name', '', ['class'=> 'form-control','placeholder' => 'Item Name'] ) !!}
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-xs-3">
                                {!! Form::label('name', 'Description:') !!}
                            </div>
                            <div class="col-xs-6">
                                {!! Form::text('name', '', ['class'=> 'form-control','placeholder' => 'Description of the item'] ) !!}
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-xs-3">
                                {!! Form::label('name', 'Supplier Name:') !!}
                            </div>
                            <div class="col-xs-6">
                                {!! Form::text('name', '', ['class'=> 'form-control','placeholder' => 'Supplier Name'] ) !!}
                            </div>
                        </div>
                        <br>
                    </div><!-- /.box-body -->
                </div><!-- /.box Supplier Identification-->
                <BR>                
            </div>
            <div class="box-footer">
                <!-- <button type="submit" class="btn btn-primary">Create the Supplier</button> -->
                {!! Form::submit($submitTextButton, array('class' => 'btn btn-primary')) !!}
            </div>
        </form>
        </div><!-- /.box -->
</div>