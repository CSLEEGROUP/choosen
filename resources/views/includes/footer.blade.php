@if (Auth::guest())
<div id="copyright text-right">© guest</div>
@else
<div id="copyright text-right">© {{ Auth::user()->email }}</div>
@endif
