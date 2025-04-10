<!-- Pass Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pass_name', 'Pass Name:') !!}
    {!! Form::text('pass_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Pass Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pass_email', 'Pass Email:') !!}
    {!! Form::text('pass_email', null, ['class' => 'form-control']) !!}
</div>

<!-- Pass Cabin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pass_cabin', 'Pass Cabin:') !!}
    {!! Form::number('pass_cabin', null, ['class' => 'form-control']) !!}
</div>

<!-- Cruise Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cruise_id', 'Cruise Id:') !!}
    {!! Form::number('cruise_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('passengers.index') !!}" class="btn btn-default">Cancel</a>
</div>
