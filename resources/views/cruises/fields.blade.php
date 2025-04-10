<!-- Ship Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ship_id', 'Ship Id:') !!}
    {!! Form::number('ship_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Dep Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dep_date', 'Dep Date:') !!}
    {!! Form::date('dep_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Return Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('return_date', 'Return Date:') !!}
    {!! Form::date('return_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Cruise Origin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cruise_origin', 'Cruise Origin:') !!}
    {!! Form::number('cruise_origin', null, ['class' => 'form-control']) !!}
</div>

<!-- Cruise Destination Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cruise_destination', 'Cruise Destination:') !!}
    {!! Form::number('cruise_destination', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('cruises.index') !!}" class="btn btn-default">Cancel</a>
</div>
