<!-- resources/views/partials/sidebar.blade.php -->
<aside class="main-sidebar sidebar-light elevation-4">
    <a href="{{ route('dashboard') }}" class="brand-link">
      <img src="{{ asset('dist/img/JVD.png') }}" alt="JVD" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">TRAVEL AND TOURS</span>
    </a>
  
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Dashboard -->
          <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
  
          <!-- Project Management -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-project-diagram"></i>
              <p>Project Management<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item"><a href="{{ route('project.budget') }}" class="nav-link"><i class="far fa-circle nav-icon"></i> Budget Planning</a></li>
              <li class="nav-item"><a href="{{ route('project.itineraries') }}" class="nav-link"><i class="far fa-circle nav-icon"></i> Itineraries</a></li>
              <li class="nav-item"><a href="{{ route('project.schedule') }}" class="nav-link"><i class="far fa-circle nav-icon"></i> Schedule Status</a></li>
            </ul>
          </li>
  
          <!-- Asset Management -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-boxes"></i>
              <p>Asset Management<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item"><a href="{{ route('asset.list') }}" class="nav-link"><i class="far fa-circle nav-icon"></i> Asset List</a></li>
              <li class="nav-item"><a href="{{ route('asset.maintenance') }}" class="nav-link"><i class="far fa-circle nav-icon"></i> Maintenance</a></li>
              <li class="nav-item"><a href="{{ route('asset.depreciation') }}" class="nav-link"><i class="far fa-circle nav-icon"></i> Depreciation</a></li>
              <li class="nav-item"><a href="{{ route('asset.disposal') }}" class="nav-link"><i class="far fa-circle nav-icon"></i> Disposal</a></li>
            </ul>
          </li>
  
          <!-- Procurement -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>Procurement<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item"><a href="{{ route('procurement.requests') }}" class="nav-link"><i class="far fa-circle nav-icon"></i> Purchase Requests</a></li>
              <li class="nav-item"><a href="{{ route('procurement.orders') }}" class="nav-link"><i class="far fa-circle nav-icon"></i> Purchase Orders</a></li>
              <li class="nav-item"><a href="{{ route('procurement.suppliers') }}" class="nav-link"><i class="far fa-circle nav-icon"></i> Supplier Management</a></li>
              <li class="nav-item"><a href="{{ route('procurement.invoices') }}" class="nav-link"><i class="far fa-circle nav-icon"></i> Invoices</a></li>
            </ul>
          </li>
  
          <!-- Warehousing -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-warehouse"></i>
              <p>Warehousing<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item"><a href="{{ route('warehousing.inventory') }}" class="nav-link"><i class="far fa-circle nav-icon"></i> Inventory</a></li>
              <li class="nav-item"><a href="{{ route('warehousing.stock') }}" class="nav-link"><i class="far fa-circle nav-icon"></i> Stock Management</a></li>
              <li class="nav-item"><a href="{{ route('warehousing.received') }}" class="nav-link"><i class="far fa-circle nav-icon"></i> Goods Received</a></li>
              <li class="nav-item"><a href="{{ route('warehousing.dispatch') }}" class="nav-link"><i class="far fa-circle nav-icon"></i> Dispatch</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </aside>
  