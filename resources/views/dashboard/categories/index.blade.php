@extends('dashboard.layouts.app')

@section('content')
    <div class="m-content">
        <div class="m-portlet">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Categories
                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <ul class="m-portlet__nav">
                        <li class="m-portlet__nav-item">
                            <a href="{!! route('categories.create') !!}" class="m-portlet__nav-link btn btn-success m-btn m-btn--pill m-btn--air">
                                <i class="fa fa-plus"></i> Create
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="m-portlet__body">
                <div class="form-group m-form__group m--margin-top-10">
                    @include('flash::message')
                </div>
                @include('dashboard.categories.table')
            </div>
            <div class="m-portlet__footer">
                <div class="m-datatable m-datatable--default m-datatable--brand m-datatable--loaded">
                    <div class="m-datatable__pager m-datatable--paging-loaded clearfix">
                        <ul class="m-datatable__pager-nav">
                            {{ $categories->links() }}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



