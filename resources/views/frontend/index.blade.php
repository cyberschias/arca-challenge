@extends('frontend.layout')

@section('content')
    <div class="page-home">
        <h1 class="header-title">Bussines Finder</h1>
        {!! Form::open(['method'=>'GET', 'class'=>'form']) !!}

        {!! Form::text('search', Request::input('search'), ['required', 'class'=>'input', 'placeholder'=>'What are you looking for?']) !!}
        <button type="submit" class="button" data-loading-text="<i class='fa fa-refresh fa-spin'></i> Processing">
            Search
        </button>

        {!! Form::close() !!}
    </div>

    @if(Request::input('search') != '')
        <div class="page-resultados">
            @if(isset($businesses) and $businesses and count($businesses) > 0)
                <h2 class="subtitle">Results for <strong>"{!! Request::input('search') !!}"</strong></h2>
                <div class="list-results">
                    @foreach($businesses as $business)
                        <a href="{!! url($business->url) !!}" class="item-results">
                            <span class="count">{!! $business->id !!}</span>
                            <div class="content">
                                <div class="title">{!! $business->title !!}</div>
                                <div class="tag">
                                    in <strong>{!! $business->category->title !!}</strong>
                                </div>
                            </div>
                        </a>
                    @endforeach

                    {{ $businesses->links() }}
                </div>
            @else
                <h2 class="subtitle">We couldn't find anything for <strong>"{!! Request::input('search') !!}"</strong>
                </h2>
            @endif
        </div>
    @endif

@endsection
