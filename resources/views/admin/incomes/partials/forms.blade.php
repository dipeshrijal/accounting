<div class="form-group   {{ $errors->has('income_source') ? 'has-error' :  ''}}">
    <label>Income Source*</label>
    {!! Form::text('income_source', null, ['class' => 'input-sm validate[required] form-control', 'placeholder' => 'Enter Income Source']) !!}
    {!! $errors->first('income_source', '<p class="text-danger">:message</p>') !!}
</div>

<div class="form-group   {{ $errors->has('income_amount') ? 'has-error' :  ''}}">
    <label>Income Amount*</label>
    {!! Form::text('income_amount', null, ['class' => 'input-sm validate[required] form-control', 'placeholder' => 'Enter Income Amount']) !!}
    {!! $errors->first('income_amount', '<p class="text-danger">:message</p>') !!}
</div>


<div class="form-group">
    <label>Income Description*</label>
    {!! Form::textarea('income_description', null, ['class' => 'form-control', 'placeholder' => 'Enter Income Description']) !!}
    {!! $errors->first('income_description', '<p class="text-danger">:message</p>') !!}
</div>

<input class="btn btn-info btn-xs" type="submit" value="{{$value}}">
<input class="btn btn-info btn-xs" type="reset" value="Reset">
