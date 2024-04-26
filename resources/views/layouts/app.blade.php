@include('includes.mainhead')
@include('includes.navbar')
@include('includes.sidebar')
<div class="content-wrapper">
@include('includes.header')
@yield('content')
</div>
@include('includes.footer')