@if (session()->has('flash_notification.message') or $errors->all())
    <div class="form-group m-form__group m--margin-top-10">
        @if (session()->has('flash_notification.message'))
            @if (session()->has('flash_notification.overlay'))
                @include('flash::modal', [
                    'modalClass' => 'flash-modal',
                    'title'      => session('flash_notification.title'),
                    'body'       => session('flash_notification.message')
                ])
            @else

                <div class="alert alert-{{ session('flash_notification.level') }}
                {{ session()->has('flash_notification.important') ? 'alert-important' : '' }}">
                    @if(session()->has('flash_notification.important'))
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    @endif
                    {!! session('flash_notification.message') !!}
                </div>

            @endif
        @endif

        @if(!empty($errors))
            @if($errors->any())
                <ul class="alert alert-danger" style="list-style-type: none">
                    @foreach($errors->all() as $error)
                        <li>{!! $error !!}</li>
                    @endforeach
                </ul>
            @endif
        @endif
    </div>
@endif
