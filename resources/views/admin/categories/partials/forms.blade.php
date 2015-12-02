<div class="form-group   {{ $errors->has('category_name') ? 'has-error' :  ''}}">
    <label>Category Name*</label>
    {!! Form::text('category_name', null, ['class' => 'input-sm validate[required] form-control', 'placeholder' => 'Enter Category Name']) !!}
    {!! $errors->first('category_name', '<p class="text-danger">:message</p>') !!}
</div>

<div class="form-group">
    <label>Category Description*</label>
    {!! Form::textarea('category_description', null, ['class' => 'form-control', 'placeholder' => 'Enter Category Description']) !!}
    {!! $errors->first('category_description', '<p class="text-danger">:message</p>') !!}
</div>

<input class="btn btn-info btn-xs" type="submit" value="{{$value}}">
<input class="btn btn-info btn-xs" type="reset" value="Reset">
