<!-- Ship Id Field -->
<div class="form-group">
    {!! Form::label('ship_id', 'Ship Id:') !!}
    <p>{!! $cruise->ship_id !!}</p>
</div>

<!-- Dep Date Field -->
<div class="form-group">
    {!! Form::label('dep_date', 'Dep Date:') !!}
    <p>{!! $cruise->dep_date !!}</p>
</div>

<!-- Return Date Field -->
<div class="form-group">
    {!! Form::label('return_date', 'Return Date:') !!}
    <p>{!! $cruise->return_date !!}</p>
</div>

<!-- Cruise Origin Field -->
<div class="form-group">
    {!! Form::label('cruise_origin', 'Cruise Origin:') !!}
    <p>{!! $cruise->cruise_origin !!}</p>
</div>

<!-- Cruise Destination Field -->
<div class="form-group">
    {!! Form::label('cruise_destination', 'Cruise Destination:') !!}
    <p>{!! $cruise->cruise_destination !!}</p>
</div>

