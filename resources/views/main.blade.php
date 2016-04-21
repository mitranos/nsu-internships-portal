@if (Auth::guest())
    @include('index')
@elseif(Auth::user()->account_type == 0)
    @include('homeUser')
@elseif(Auth::user()->account_type == 1)
    @include('homeAdmin')
@else
    @include('errors.503')
@endif