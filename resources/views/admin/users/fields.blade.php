<!-- Email Field -->
{!! Form::text('id', null, ['class' => 'form-control hidden-field']) !!}
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
    <strong class="error-label">
        @if($errors->has('email'))
            {!! $errors->first('email') !!}
        @endif
    </strong>
</div>
@push('scripts')
<script type="text/javascript">
    $('#email_verified_at').datetimepicker({
        format: 'YYYY-MM-DD HH:mm:ss',
        useCurrent: false
    })
</script>
@endpush

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

<!-- Prenom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prenom', 'Prenom:') !!}
    {!! Form::text('prenom', null, ['class' => 'form-control']) !!}
    <strong class="error-label">
        @if($errors->has('prenom'))
        {!! $errors->first('prenom') !!}
        @endif
    </strong>
</div>


<!-- Structure Field -->
<div class="form-group col-sm-6">
    {!! Form::label('structure', 'Structure:') !!}
    {!! Form::text('structure', null, ['class' => 'form-control']) !!}
    <strong class="error-label">
        @if($errors->has('structure'))
        {!! $errors->first('structure') !!}
        @endif
    </strong>
</div>

<div class="form-group col-sm-6">
    {!! Form::label('password', 'Mot de passe:') !!}
    <input type="password" id="password" name="password" class="form-control"/>
    <strong class="error-label">
        @if($errors->has('password'))
        {!! $errors->first('password') !!}
        @endif
    </strong>
</div>
<div class="form-group col-sm-6">
    {!! Form::label('password_confirm', 'Confirmation:') !!}
    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control"/>
</div>

<!-- Telephone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telephone', 'Telephone:') !!}
    {!! Form::number('telephone', null, ['class' => 'form-control']) !!}
    <strong class="error-label">
        @if($errors->has('telephone'))
        {!! $errors->first('telephone') !!}
        @endif
    </strong>
</div>

<div class="form-group col-sm-6">
    <label for="roles">Roles*
        <span class="btn btn-info btn-xs select-all">Tout sélectionner</span>
        <span class="btn btn-info btn-xs deselect-all">Tout déselectionner</span></label>
    <select name="roles[]" id="roles" class="form-control select2" multiple="multiple" required>
        @foreach($roles as $id => $roles)
        <option value="{{ $id }}" {{ (in_array($id, old('roles', [])) || isset($user) && $user->roles->contains($id)) ? 'selected' : '' }}>{{ $roles }}</option>
        @endforeach
    </select>
    <strong class="error-label">
        @if($errors->has('roles'))
        {!! $errors->first('roles') !!}
        @endif
    </strong>
</div>

