<aside class="app-sidebar" id="sidebar">
  <div class="sidebar-header">
    <a class="sidebar-brand" href="#"><span class="highlight">Family </span> Planning</a>
    <button type="button" class="sidebar-toggle">
      <i class="fa fa-times"></i>
    </button>
  </div>
  <div class="sidebar-menu">
    <ul class="sidebar-nav">
      <li class="{{ Request::is('admin/about*') ? 'dropdown active' : 'dropdown' }}" >
        <a class="dropdown-toggle" data-toggle="dropdown">
          <div class="icon">
            <i class="fa fa-info-circle" aria-hidden="true"></i>
          </div>
          <div class="title">About Us</div>
        </a>
        <div class="dropdown-menu">
          <ul>
            <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> About Us</li>
            <li><a href="{{ route('admin.about.view', ['about_id' => 1]) }}">Global FP2020</a></li>
            <li><a href="{{ route('admin.about.view', ['about_id' => 2]) }}}">FP2020 in Indonesia</a></li>
            <li class="line"></li>
            <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i>-</li>
            <li><a href="{{ route('admin.group.view', ['group_id' => 1]) }}">Country Committee</a></li>
            <li><a href="{{ route('admin.group.view', ['group_id' => 3]) }}">Secretariate</a></li>
            <li class="line"></li>
            <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i>Working Group</li>
            <li><a href="{{ route('admin.group.view', ['group_id' => 4]) }}">National Rights-Based FP Strategy</a></li>
            <li><a href="{{ route('admin.group.view', ['group_id' => 5]) }}">Rights & Empowerment</a></li>
            <li><a href="{{ route('admin.group.view', ['group_id' => 6]) }}">Data</a></li>
          </ul>
        </div>
      </li>
      <li class="{{ Request::is('admin/general*') ? 'dropdown active' : 'dropdown' }}" >
        <a class="dropdown-toggle" data-toggle="dropdown">
          <div class="icon">
            <i class="fa fa-info-circle" aria-hidden="true"></i>
          </div>
          <div class="title">General Information</div>
        </a>
        <div class="dropdown-menu">
          <ul>
            <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Profile</li>
            <li><a href="{{ route('admin.general.index') }}">Profile</a></li>
            <li class="line"></li>
            <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Commitment</li>
            <li><a href="{{ route('admin.general.view', ['general_id' => 1]) }}">Program & Service Delivery</a></li>
            <li><a href="{{ route('admin.general.view', ['general_id' => 2]) }}">Financial</a></li>
            <li><a href="{{ route('admin.general.view', ['general_id' => 3]) }}">Policy & Political</a></li>
            <li><a href="{{ route('admin.general.view', ['general_id' => 4]) }}">Objective</a></li>
          </ul>
        </div>
      </li>
      <li {{ Request::is('admin/uevent*') ? 'class=active' : '' }}>
        <a href="{{ route('admin.uevent.index') }}">
          <div class="icon">
            <i class="fa fa-comments" aria-hidden="true"></i>
          </div>
          <div class="title">Upcoming Event</div>
        </a>
      </li>
    <li {{ Request::is('admin/document*') ? 'class=active' : '' }}>
        <a href="{{ route('admin.document.index') }}">
          <div class="icon">
            <i class="fa fa-file-o" aria-hidden="true"></i>
          </div>
          <div class="title">Document</div>
        </a>
      </li>
      <li class="{{ Request::is('admin/partner*') ? 'dropdown active' : 'dropdown' }}" >
        <a class="dropdown-toggle" data-toggle="dropdown">
          <div class="icon">
            <i class="fa fa-cube" aria-hidden="true"></i>
          </div>
          <div class="title">Partner</div>
        </a>
        <div class="dropdown-menu">
          <ul>
            <li><a href="{{ route('admin.catpart.index') }}">Partner Category</a></li>
            <li><a href="{{ route('admin.partner.index') }}">Partner List</a></li>
          </ul>
        </div>
      </li>
      
    </ul>
  </div>
  <div class="sidebar-footer">
    <ul class="menu">
      <li>
        <a href="/" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-cogs" aria-hidden="true"></i>
        </a>
      </li>
      <li><a href="#"><span class="flag-icon flag-icon-th flag-icon-squared"></span></a></li>
    </ul>
  </div>
</aside>