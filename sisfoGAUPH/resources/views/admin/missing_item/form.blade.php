<div class="form-group {{ $errors->has('item_code') ? 'has-error' : ''}}">
    <label for="item_code" class="control-label">{{ 'Item Code' }}</label>
    <input class="form-control" name="item_code" type="number" id="item_code" value="{{ isset($missing_item->item_code) ? $missing_item->item_code : ''}}" >
    {!! $errors->first('item_code', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ 'Title' }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($missing_item->title) ? $missing_item->title : ''}}" >
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('category_id') ? 'has-error' : ''}}">
    <label for="category_id" class="control-label">{{ 'Category Id' }}</label>
    <input class="form-control" name="category_id" type="number" id="category_id" value="{{ isset($missing_item->category_id) ? $missing_item->category_id : ''}}" >
    {!! $errors->first('category_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('location_id') ? 'has-error' : ''}}">
    <label for="location_id" class="control-label">{{ 'Location Id' }}</label>
    <input class="form-control" name="location_id" type="number" id="location_id" value="{{ isset($missing_item->location_id) ? $missing_item->location_id : ''}}" >
    {!! $errors->first('location_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ 'Description' }}</label>
    <input class="form-control" name="description" type="text" id="description" value="{{ isset($missing_item->description) ? $missing_item->description : ''}}" >
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('missing_item_status') ? 'has-error' : ''}}">
    <label for="missing_item_status" class="control-label">{{ 'Missing Item Status' }}</label>
    <input class="form-control" name="missing_item_status" type="number" id="missing_item_status" value="{{ isset($missing_item->missing_item_status) ? $missing_item->missing_item_status : ''}}" >
    {!! $errors->first('missing_item_status', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('img_url') ? 'has-error' : ''}}">
    <label for="img_url" class="control-label">{{ 'Img Url' }}</label>
    <input class="form-control" name="img_url" type="text" id="img_url" value="{{ isset($missing_item->img_url) ? $missing_item->img_url : ''}}" >
    {!! $errors->first('img_url', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('taken_at') ? 'has-error' : ''}}">
    <label for="taken_at" class="control-label">{{ 'Taken At' }}</label>
    <input class="form-control" name="taken_at" type="datetime-local" id="taken_at" value="{{ isset($missing_item->taken_at) ? $missing_item->taken_at : ''}}" >
    {!! $errors->first('taken_at', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('taken_by') ? 'has-error' : ''}}">
    <label for="taken_by" class="control-label">{{ 'Taken By' }}</label>
    <input class="form-control" name="taken_by" type="number" id="taken_by" value="{{ isset($missing_item->taken_by) ? $missing_item->taken_by : ''}}" >
    {!! $errors->first('taken_by', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
