<!-- form start -->
<form role="form">
    <div class="box-body">
        <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Url Shortener</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-xs-3">
                        {!! Form::label('url', 'Enter the URL to be shortened:') !!}
                    </div>
                    <div class="col-xs-4">
                        {!! Form::text('url', '', ['class'=> 'form-control','placeholder' => 'Enter the url here' , 'type'=>'email'] ) !!}
                    </div>
                </div>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
    <div class="box-body"> 
        {!! Form::submit($submitTextButton, array('class' => 'btn btn-primary')) !!}
    </div>
</form>
</div><!-- /.box -->