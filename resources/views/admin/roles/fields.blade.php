{!! Form::text('id', null, ['class' => 'form-control hidden-field']) !!}
<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
    <strong class="error-label">
        @if($errors->has('name'))
            {!! $errors->first('name') !!}
        @endif
    </strong>
</div>
