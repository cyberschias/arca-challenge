
@extends('frontend.layout')

@section('content')
    <div class="page-detalhe">
        <h1 class="header-title">Bussines Finder</h1>
        <div class="detail-block">
            <div class="detail-header">
                <div class="content">
                    <h2 class="title">{!! $business->title !!}</h2>
                    <span class="tag">in <strong>{!! $business->category->title !!}</strong></span>
                </div>
                <div class="action">
                    <a href="{{url()->previous()}}" class="button">Back</a>
                </div>
            </div>
            <div class="detail-content">
                <div class="text">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2 class="title">About</h2>
                            {!! $business->description !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <span class="tag"><strong>Address:</strong></span> {!! $business->address() !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <span class="tag"><strong>Phone:</strong></span> {!! $business->phone !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
