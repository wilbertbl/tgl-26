<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($student->user_id) ? $student->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('class') ? 'has-error' : ''}}">
    <label for="class" class="control-label">{{ 'Class' }}</label>
    <input class="form-control" name="class" type="text" id="class" value="{{ isset($student->class) ? $student->class : ''}}" >
    {!! $errors->first('class', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nim') ? 'has-error' : ''}}">
    <label for="nim" class="control-label">{{ 'Nim' }}</label>
    <input class="form-control" name="nim" type="text" id="nim" value="{{ isset($student->nim) ? $student->nim : ''}}" >
    {!! $errors->first('nim', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
