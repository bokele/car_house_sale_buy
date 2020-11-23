@auth
@if (Auth::user()->user_type == 'user')
@include('includes.user.topnavbar')
@include('includes.user.leftnemu')
@include('includes.user.footbar')

@else
@include('includes.user.topnavbar')

{{ $slot }}
@include('includes.user.leftnemu')
@include('includes.user.footbar')
@endif
@endauth
