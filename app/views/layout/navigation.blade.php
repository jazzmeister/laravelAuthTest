<nav>
	<ul>
		<li><a href="{{ URL::route('home') }}">Home</li>
		@if(Auth::check())
			<li><a href="{{ URL::route('account-sign-out') }}">Sign Out</a></li>
		@else
			<li><a href="{{ URL::route('account-sign-in') }}">Sign in</a>
		<li><a href="{{ URL::route('account-create') }}">Create an account</a></li>
		@endif
	</ul>
</nav>