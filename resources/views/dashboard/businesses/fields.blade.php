<div class="form-group m-form__group row">
    <div class="form-group col-sm-12">
        {!! Form::label('categories', 'Categories:') !!}
        <div class="m-checkbox-inline">
        @if(isset($listCategories) and $listCategories and count($listCategories) > 0)
            @foreach ($listCategories as $id => $category)
                <label class="m-checkbox">
                    {!! Form::checkbox('categories[]', $id, isset($businesss) ? in_array($id, $businesss->categories()->pluck('id')->toArray()) : null, ['class' => '']) !!} {!! $category !!}
                    <span></span>
                </label>
            @endforeach
        @endif
        </div>
    </div>
</div>
<div class="form-group m-form__group row">
    <div class="form-group col-sm-6">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-sm-6">
        {!! Form::label('phone', 'Phone:') !!}
        {!! Form::text('phone', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group m-form__group row">
    <div class="form-group col-sm-12">
        {!! Form::label('description', 'Description:') !!}
        {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => '4']) !!}
    </div>
</div>

<div class="form-group m-form__group row">
    <div class="form-group col-sm-8">
        {!! Form::label('address', 'Address:') !!}
        {!! Form::text('address', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group m-form__group row">
    <div class="form-group col-sm-4">
        {!! Form::label('city', 'City:') !!}
        {!! Form::text('city', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-sm-2">
        {!! Form::label('state', 'State:') !!}
        {!! Form::text('state', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-sm-3">
        {!! Form::label('zipcode', 'Zip Code:') !!}
        {!! Form::text('zipcode', null, ['class' => 'form-control']) !!}
    </div>
</div>

