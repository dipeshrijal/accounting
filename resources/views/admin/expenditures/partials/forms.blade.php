<div class="form-group   {{ $errors->has('category_id') ? 'has-error' :  ''}}">
    <label>Expenditure Source*</label>
    {!! Form::select('category_id', ['' => 'Please Select'] + $categories, null, ['class' => 'input-sm validate[required] form-control', 'placeholder' => 'Enter Income Source']) !!}
    {!! $errors->first('category_id', '<p class="text-danger">:message</p>') !!}
</div>

<div class="form-group   {{ $errors->has('expenditure_amount') ? 'has-error' :  ''}}">
    <label>Expenditure Amount*</label>
    {!! Form::text('expenditure_amount', null, ['class' => 'input-sm validate[required] form-control', 'placeholder' => 'Enter Expenditure Amount']) !!}
    {!! $errors->first('expenditure_amount', '<p class="text-danger">:message</p>') !!}
</div>

<div class="form-group">
    <label>Expenditure Description*</label>
    {!! Form::textarea('expenditure_description', null, ['class' => 'form-control', 'placeholder' => 'Enter Expemditure Description']) !!}
    {!! $errors->first('expenditure_description', '<p class="text-danger">:message</p>') !!}
</div>

<input class="btn btn-info btn-xs" type="submit" value="{{$value}}">
<input class="btn btn-info btn-xs" type="reset" value="Reset">
