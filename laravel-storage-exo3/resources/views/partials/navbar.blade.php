
<div class="d-flex" id="wrapper">


			<!-- Sidebar -->
			<div class="bg-light border-right shadow ms-0 me-5" id="sidebar-wrapper">
				<div class="sidebar-heading fs-1 mb-4 pt-5  text-center">
					<i class="fas fa-comments-dollar"></i>
				</div>
				<div class="list-group list-group-flush mt-5">
					<a class="list-group-item list-group-item-action bs-primary pt-5 mt-4 {{ !Route::currentRouteName() ? 'active' : '' }}" href="/"><i class="fas fa-home"></i> Home</a>
					<a class="list-group-item list-group-item-action bs-primary pt-5 mt-4 {{ Route::currentRouteName() === 'users.index' ? 'active' : '' }}" href="{{ route('users.index') }}"><i class="fas fa-user"></i> User</a>
					<a class="list-group-item list-group-item-action bs-primary pt-5 mt-4 {{ Route::currentRouteName() === 'services.index' ? 'active' : '' }}" href="{{ route('services.index') }}"><i class="fas fa-concierge-bell"></i> Services</a>
					<a class="list-group-item list-group-item-action bs-primary pt-5 mt-4 {{ Route::currentRouteName() === 'caracteristiques.index' ? 'active' : '' }}" href="{{ route('caracteristiques.index') }}"><i class="fas fa-binoculars"></i> Caractéristique</a>
					<a class="list-group-item list-group-item-action bs-primary pt-5 mt-4 {{ Route::currentRouteName() === 'portfolios.index' ? 'active' : '' }}" href="{{ route('portfolios.index') }}"><i class="fas fa-book-open"></i> Portfolios</a>
					<a class="list-group-item list-group-item-action bs-primary pt-5 mt-4{{ Route::currentRouteName() === 'galeries.index' ? 'active' : '' }}" href="{{ route('galeries.index') }}"><i class="fas fa-images"></i> Galeries</a>
				</div>
			</div>
			<!-- /#sidebar-wrapper -->

			<!-- Page Content -->
			<div id="page-content-wrapper">
                @yield('content')
			</div>
			<!-- /#page-content-wrapper -->
		</div>
		<!-- /#wrapper -->


