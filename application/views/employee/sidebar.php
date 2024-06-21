<!-- Page Wrapper -->
<div id="wrapper">
	<!-- Sidebar -->
	<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

		<!-- Sidebar - Brand -->
		<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url("employee") ?>">
			<div class="sidebar-brand-icon">
				<i class="fas fa-car"></i>
			</div>
			<div class="sidebar-brand-text mx-3">Pandawa Rental</div>
		</a>

		<!-- Divider -->
		<hr class="sidebar-divider my-0">

		<!-- Nav Item - Dashboard -->
		<li class="nav-item <?= $activeLink == "dashboard" ? "active" : "" ?>">
			<a class="nav-link" href="<?= base_url("employee") ?>">
				<i class="fas fa-fw fa-tachometer-alt"></i>
				<span>Dashboard</span></a>
		</li>
		<hr class="sidebar-divider">


		<div class="sidebar-heading">Data Sewa</div>

		<!-- Nav Item - Pages Collapse Menu -->
		<li
			class="nav-item <?= in_array($activeLink, ["rent_pending", "rent_paid", "rent_picked_up", "rent_success", "rent_invalid"]) ? "active" : "" ?>">
			<a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
				aria-controls="collapseTwo">
				<i class="fas fa-fw fa-cog"></i>
				<span>Transaksi</span>
			</a>
			<div id="collapseTwo"
				class="collapse <?= in_array($activeLink, ["rent_pending", "rent_paid", "rent_picked_up", "rent_success", "rent_invalid"]) ? "show" : "" ?>"
				aria-labelledby="headingTwo" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					<h6 class="collapse-header">Status</h6>
					<a class="collapse-item <?= $activeLink == "rent_pending" ? "active" : "" ?>"
						href="<?= base_url("employee/list_rent_pending") ?>">Pending</a>
					<a class="collapse-item <?= $activeLink == "rent_paid" ? "active" : "" ?>"
						href="<?= base_url("employee/list_rent_paid") ?>">Paid</a>
					<a class="collapse-item  <?= $activeLink == "rent_picked_up" ? "active" : "" ?>"
						href="<?= base_url("employee/list_rent_picked_up") ?>">Picked Up</a>
					<a class="collapse-item <?= $activeLink == "rent_success" ? "active" : "" ?>"
						href="<?= base_url("employee/list_rent_success") ?>">Success</a>
					<a class="collapse-item <?= $activeLink == "rent_invalid" ? "active" : "" ?>"
						href="<?= base_url("employee/list_rent_invalid") ?>">Invalid</a>
				</div>
			</div>
		</li>

		<!-- Divider -->
		<hr class="sidebar-divider d-none d-md-block">

		<li class="nav-item <?= $activeLink == "profile" ? "active" : "" ?>">
			<a class="nav-link" href="<?= base_url("employee/profile") ?>">
				<i class="fa fa-user"></i>
				<span>Profile</span></a>
		</li>

		<hr class="sidebar-divider d-none d-md-block">


		<!-- Sidebar Toggler (Sidebar) -->
		<div class="text-center d-none d-md-inline">
			<button class="rounded-circle border-0" id="sidebarToggle"></button>
		</div>

	</ul>
	<!-- End of Sidebar -->