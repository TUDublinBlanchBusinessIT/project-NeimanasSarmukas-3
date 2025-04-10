<!-- Ship Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ship_name', 'Ship Name:') !!}
    {!! Form::text('ship_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Capacity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('capacity', 'Capacity:') !!}
    {!! Form::number('capacity', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('ships.index') !!}" class="btn btn-default">Cancel</a>
</div>
