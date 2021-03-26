<!-- MAIN -->
<li class="menu-section">
  <h4 class="menu-text"> Main </h4>
  <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
</li>

<li class="menu-item menu-item-submenu {{ (request()->is('dashboard/jasamarga*')) ? 'menu-item-active menu-item-open' : '' }}">
  <a href="javascript:;" class="menu-link menu-toggle">
    <span class="menu-icon"><i class="menu-icon fas fa-hashtag"></i></span>
    <span class="menu-text"> JASAMARGA </span>
    <i class="menu-arrow"></i>
  </a>
  <div class="menu-submenu">
    <i class="menu-arrow"></i>
    <ul class="menu-subnav">
      <li class="menu-item {{ (request()->is('dashboard/jasamarga/devices*')) ? 'menu-item-active' : '' }}">
        <a href="/dashboard/jasamarga/devices" class="menu-link">
          <i class="menu-bullet menu-bullet-dot"><span></span></i>
          <span class="menu-text"> Devices </span>
        </a>
      </li>
      <li class="menu-item {{ (request()->is('dashboard/jasamarga/locations*')) ? 'menu-item-active' : '' }}">
        <a href="/dashboard/jasamarga/locations" class="menu-link">
          <i class="menu-bullet menu-bullet-dot"><span></span></i>
          <span class="menu-text"> Locations </span>
        </a>
      </li>
      <li class="menu-item {{ (request()->is('dashboard/jasamarga/intercomes*')) ? 'menu-item-active' : '' }}">
        <a href="/dashboard/jasamarga/intercomes`" class="menu-link">
          <i class="menu-bullet menu-bullet-dot"><span></span></i>
          <span class="menu-text"> Intercomes </span>
        </a>
      </li>
      <li class="menu-item {{ (request()->is('dashboard/jasamarga/maintenances*')) ? 'menu-item-active' : '' }}">
        <a href="/dashboard/jasamarga/maintenances" class="menu-link">
          <i class="menu-bullet menu-bullet-dot"><span></span></i>
          <span class="menu-text"> Maintenances </span>
        </a>
      </li>
      <li class="menu-item {{ (request()->is('dashboard/jasamarga/users*')) ? 'menu-item-active' : '' }}">
        <a href="/dashboard/jasamarga/users" class="menu-link">
          <i class="menu-bullet menu-bullet-dot"><span></span></i>
          <span class="menu-text"> Users </span>
        </a>
      </li>
    </ul>
  </div>
</li>

<li class="menu-item menu-item-submenu {{ (request()->is('dashboard/vms*')) ? 'menu-item-active menu-item-open' : '' }}">
  <a href="javascript:;" class="menu-link menu-toggle">
    <span class="menu-icon"><i class="menu-icon fas fa-hashtag"></i></span>
    <span class="menu-text"> VMS </span>
    <i class="menu-arrow"></i>
  </a>
  <div class="menu-submenu">
    <i class="menu-arrow"></i>
    <ul class="menu-subnav">
      <li class="menu-item {{ (request()->is('dashboard/vms/maintenances*')) ? 'menu-item-active' : '' }}">
        <a href="/dashboard/vms/maintenances" class="menu-link">
          <i class="menu-bullet menu-bullet-dot"><span></span></i>
          <span class="menu-text"> Maintenances </span>
        </a>
      </li>
    </ul>
  </div>
</li>
