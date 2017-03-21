<div class="masthead">
	<h1 class="masthead-title">
		<a href="/">ARSort</a>
	</h1>
	<hr class="masthead-hr">
	<ul class="masthead-nav">
		@if (Auth::guest())
			<li class="nav-item">
				<a class="nav-link" href="{{ route('login') }}">登入</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ route('register') }}">註冊</a>
			</li>
		@else
			<li class="nav-item">
				<h4>嗨，{{ Auth::user()->name }}</h4>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ url('dashboard') }}">Dashboard</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">登出</a>
				<form id="logout-form" action="logout" method="POST" style="display: none;">
					{{ csrf_field() }}
				</form>
			</li>
		@endif
	</ul>
	<hr class="masthead-hr">
	<ul class="masthead-nav">
		<li class="nav-item">
			<a class="nav-link" href="{{ url('about') }}">關於</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="{{ url('contact') }}">聯絡我們</a>
		</li>
	</ul>
	<hr class="masthead-hr visible-xs">
</div>
