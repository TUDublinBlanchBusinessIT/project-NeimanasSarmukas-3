<!-- Port Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('port_name', 'Port Name:') !!}
    {!! Form::text('port_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Port Country Field -->
<div class="form-group col-sm-6">
    {!! Form::label('port_country', 'Port Country:') !!}
    {!! Form::text('port_country', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('ports.index') !!}" class="btn btn-default">Cancel</a>
</div>
