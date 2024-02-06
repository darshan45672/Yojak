<header>
	<nav class="navbar navbar-expand-lg navbar-light bg-white shadow py-3">
		<div class="container">
			<a class="navbar-brand" href="{{ route('home') }}"><img src="images/logo-dark.png" alt="Image" class="img-fluid" style="height: 28px"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">  			
				<a class="btn btn-outline-primary me-2" href="login.html" type="submit">Home</a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <a class="btn btn-primary" type="submit">Log Out</a>
                </form>
			</div>
		</div>
	</nav>
</header>