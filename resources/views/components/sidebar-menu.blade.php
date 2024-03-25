<nav class="mt-2">
    <ul
      class="nav nav-pills nav-sidebar flex-column"
      data-widget="treeview"
      role="menu"
      data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
      <li class="nav-item menu-open">
        <a href="#" class="nav-link active">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
            <x-sidebar-link href="{{ route('home') }}" active="{{ request()->routeIs('home') }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Dashboard 1</p>
            </x-sidebar-link>
            <x-sidebar-link href="{{ route('about') }}" active="{{ request()->routeIs('about') }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Dashboard 2</p>
            </x-sidebar-link>
            <x-sidebar-link href="{{ route('contact') }}" active="{{ request()->routeIs('contact') }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Dashboard 3</p>
            </x-sidebar-link>
        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-table"></i>
          <p>
            CRM
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
            <x-sidebar-link href="{{ route('home') }}" active="{{ request()->routeIs('home') }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Contacts</p>
            </x-sidebar-link>
            <x-sidebar-link href="{{ route('about') }}" active="{{ request()->routeIs('about') }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Contacts 2</p>
            </x-sidebar-link>
            <x-sidebar-link href="{{ route('contact') }}" active="{{ request()->routeIs('contact') }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Contacts 3</p>
            </x-sidebar-link>
        </ul>
    </li>
        <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
        <p>
            Inventory Management
            <i class="fas fa-angle-left right"></i>
        </p>
        </a>
        <ul class="nav nav-treeview">
            <x-sidebar-link href="{{ route('home') }}" active="{{ request()->routeIs('home') }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Barang Keseluruhan</p>
            </x-sidebar-link>
            <x-sidebar-link href="{{ route('about') }}" active="{{ request()->routeIs('about') }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Barang Daas</p>
            </x-sidebar-link>
            <x-sidebar-link href="{{ route('contact') }}" active="{{ request()->routeIs('contact') }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Termination</p>
            </x-sidebar-link>
        </ul>
    </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-table"></i>
          <p>
            Buku Besar
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
            <x-sidebar-link href="{{ route('home') }}" active="{{ request()->routeIs('home') }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Simple Tables</p>
            </x-sidebar-link>
            <x-sidebar-link href="{{ route('about') }}" active="{{ request()->routeIs('about') }}">
                <i class="far fa-circle nav-icon"></i>
                <p>DataTables</p>
            </x-sidebar-link>
            <x-sidebar-link href="{{ route('contact') }}" active="{{ request()->routeIs('contact') }}">
                <i class="far fa-circle nav-icon"></i>
                <p>jsGrid</p>
            </x-sidebar-link>
        </ul>
      </li>
      <li class="nav-header">EXAMPLES</li>
      <li class="nav-item">
        <a href="pages/calendar.html" class="nav-link">
          <i class="nav-icon far fa-calendar-alt"></i>
          <p>
            Calendar
            <span class="badge badge-info right">2</span>
          </p>
        </a>
      </li>
    </ul>
  </nav>
