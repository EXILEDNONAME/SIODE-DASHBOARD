<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
  <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
    <ul class="menu-nav">

      <li class="menu-item">
        <a href="index.html" class="menu-link">
          <i class="menu-icon fas fa-desktop"></i>
          <span class="menu-text"> Dashboard </span>
        </a>
      </li>
      <li class="menu-item">
        <a href="index.html" class="menu-link">
          <i class="menu-icon fas fa-envelope"></i>
          <span class="menu-text"> Messages </span>
        </a>
      </li>
      <li class="menu-item">
        <a href="index.html" class="menu-link">
          <i class="menu-icon fas fa-bell"></i>
          <span class="menu-text"> Notifications </span>
        </a>
      </li>

      <li class="menu-section">
        <h4 class="menu-text"> Extensions </h4>
        <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
      </li>
      <li class="menu-item menu-item-submenu {{ (request()->is('dashboard/management*')) ? 'menu-item-active menu-item-open' : '' }}">
        <a href="javascript:;" class="menu-link menu-toggle">
          <span class="menu-icon"><i class="menu-icon fas fa-hashtag"></i></span>
          <span class="menu-text"> Dummies </span>
          <i class="menu-arrow"></i>
        </a>
        <div class="menu-submenu">
          <i class="menu-arrow"></i>
          <ul class="menu-subnav">
            <li class="menu-item {{ (request()->is('dashboard/management/users*')) ? 'menu-item-active' : '' }}">
              <a href="/dashboard/management/users" class="menu-link">
                <i class="menu-bullet menu-bullet-dot"><span></span></i>
                <span class="menu-text"> Table Invoices </span>
              </a>
            </li>
            <li class="menu-item {{ (request()->is('dashboard/management/accesses*')) ? 'menu-item-active' : '' }}">
              <a href="/dashboard/management/accesses" class="menu-link">
                <i class="menu-bullet menu-bullet-dot"><span></span></i>
                <span class="menu-text"> Table Generals </span>
              </a>
            </li>
            <li class="menu-item {{ (request()->is('dashboard/management/roles*')) ? 'menu-item-active' : '' }}">
              <a href="/dashboard/management/roles" class="menu-link">
                <i class="menu-bullet menu-bullet-dot"><span></span></i>
                <span class="menu-text"> Table Relations </span>
              </a>
            </li>
            <li class="menu-item {{ (request()->is('dashboard/management/users*')) ? 'menu-item-active' : '' }}">
              <a href="/dashboard/management/users" class="menu-link">
                <i class="menu-bullet menu-bullet-dot"><span></span></i>
                <span class="menu-text"> Table Reports </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="menu-item">
        <a href="index.html" class="menu-link">
          <i class="menu-icon fas fa-hdd"></i>
          <span class="menu-text"> File Manager </span>
        </a>
      </li>
      <li class="menu-item">
        <a href="index.html" class="menu-link">
          <i class="menu-icon fas fa-recycle"></i>
          <span class="menu-text"> Generator </span>
        </a>
      </li>

      <!-- SETTINGS -->
      <li class="menu-section">
        <h4 class="menu-text"> Settings </h4>
        <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
      </li>
      <li class="menu-item menu-item-submenu {{ (request()->is('dashboard/management*')) ? 'menu-item-active menu-item-open' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
        <a href="javascript:;" class="menu-link menu-toggle">
          <span class="menu-icon"><i class="menu-icon fas fa-shield-alt"></i></span>
          <span class="menu-text"> Managements </span>
          <i class="menu-arrow"></i>
        </a>
        <div class="menu-submenu">
          <i class="menu-arrow"></i>
          <ul class="menu-subnav">
            <li class="menu-item {{ (request()->is('dashboard/management/accesses*')) ? 'menu-item-active' : '' }}">
              <a href="/dashboard/management/accesses" class="menu-link">
                <i class="menu-bullet menu-bullet-dot"><span></span></i>
                <span class="menu-text"> Accesses </span>
              </a>
            </li>
            <li class="menu-item {{ (request()->is('dashboard/management/roles*')) ? 'menu-item-active' : '' }}">
              <a href="/dashboard/management/roles" class="menu-link">
                <i class="menu-bullet menu-bullet-dot"><span></span></i>
                <span class="menu-text"> Roles </span>
              </a>
            </li>
            <li class="menu-item {{ (request()->is('dashboard/management/users*')) ? 'menu-item-active' : '' }}">
              <a href="/dashboard/management/users" class="menu-link">
                <i class="menu-bullet menu-bullet-dot"><span></span></i>
                <span class="menu-text"> Users </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="menu-item">
        <a href="/dashboard/logout" class="menu-link" onclick="return confirm('Are you sure?')">
          <i class="menu-icon fas fa-sign-out-alt"></i>
          <span class="menu-text"> Logout </span>
        </a>
      </li>

    </ul>
  </div>
</div>
