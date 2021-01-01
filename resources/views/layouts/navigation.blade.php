<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	<!-- Brand -->
	<a class="navbar-brand" href="/">Course Hero</a>

	<!-- Links -->
	<ul class="navbar-nav ml-auto">
		@guest
		@if (Route::has('login'))
		<li class="nav-item float-right">
			<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
		</li>

		@endif

		@if (Route::has('register'))
		<li class="nav-item">
			<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
		</li>
		@endif

		@else
		@if(auth()->user()->Type == 1)
			<li class="nav-item float-right">
				<a class="nav-link" href="{{ route('myCourses.index') }}">My Courses</a>
			</li>
			<li class="nav-item float-right">
				<a class="nav-link" href="{{ route('mySections.index') }}">My Sections</a>
			</li>
			<li class="nav-item float-right">
				<a class="nav-link" href="{{ route('myVideos.index') }}">My Videos</a>
			</li>
		@endif
		@if(auth()->user()->Type == 2)
			
		@endif
		<li class="nav-item dropdown">
			<a id="navbarDropdown" class="nav-link dropdown-toggle text-capitalize" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
				{{ Auth::user()->name }}
			</a>

			<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="{{ route('logout') }}"
				onclick="event.preventDefault();
				document.getElementById('logout-form').submit();">
				<span>{{ __('Logout') }}</span>
			</a>

			<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
				@csrf
			</form>
		</div>
	</li>
	@endguest
</ul>
</nav> 