<nav>

	@if(Auth::check())

			<li><a href="{{URL::route('home')}}"></li>

	@else
			<li> <a href="{{URL::route('account-sign-in')}}"></li>


	@endif


</nav>