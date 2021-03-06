@extends('dashboard.layouts.app')

@section('content')
    <div class="m-content">
        <div class="m-portlet">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Businesses
                        </h3>
                    </div>
                </div>
            </div>
            {!! Form::model($business, ['route' => ['businesses.update', $business->id],'files' => true, 'method' => 'patch', 'class' => 'm-form m-form--fit m-form--label-align-right']) !!}
            <div class="m-portlet__body">
                @include('flash::message')
                @include('dashboard.businesses.fields')
            </div>

            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions">
                    <button class="btn btn-success" type="submit"
                            data-loading-text="<i class='fa fa-refresh fa-spin'></i> Processing">
                        Save
                    </button>
                    <a href="{!! route('businesses.index') !!}" class="btn btn-secondary">Cancel</a>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
