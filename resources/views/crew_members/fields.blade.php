<!-- Crew Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('crew_name', 'Crew Name:') !!}
    {!! Form::text('crew_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Crew Role Field -->
<div class="form-group col-sm-6">
    {!! Form::label('crew_role', 'Crew Role:') !!}
    {!! Form::text('crew_role', null, ['class' => 'form-control']) !!}
</div>

<!-- Ship Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ship_id', 'Ship Id:') !!}
    {!! Form::number('ship_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('crewMembers.index') !!}" class="btn btn-default">Cancel</a>
</div>
