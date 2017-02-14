<aside class="app-sidebar" id="sidebar">
  <div class="sidebar-header">
    <a class="sidebar-brand" href="#"><span class="highlight">Family </span> Planning</a>
    <button type="button" class="sidebar-toggle">
      <i class="fa fa-times"></i>
    </button>
  </div>
  <div class="sidebar-menu">
    <ul class="sidebar-nav">
      <li {{ Request::is('admin') ? 'class=active' : '' }}>
        <a href="{{ route('admin.index') }}">
          <div class="icon">
            <i class="fa fa-tasks" aria-hidden="true"></i>
          </div>
          <div class="title">Dashboard</div>
        </a>
      </li>
      <li {{ Request::is('admin/general*') ? 'class=active' : '' }}>
        <a href="{{ route('admin.general.index') }}">
          <div class="icon">
            <i class="fa fa-info-circle" aria-hidden="true"></i>
          </div>
          <div class="title">General Information</div>
        </a>
      </li>
      <li {{ Request::is('admin/uevent*') ? 'class=active' : '' }}>
        <a href="{{ route('admin.uevent.index') }}">
          <div class="icon">
            <i class="fa fa-comments" aria-hidden="true"></i>
          </div>
          <div class="title">Upcoming Event</div>
        </a>
      </li>
      <li {{ Request::is('admin/category*') ? 'class=active' : '' }}>
        <a href="{{ route('admin.category.index') }}">
          <div class="icon">
            <i class="fa fa-tags" aria-hidden="true"></i>
          </div>
          <div class="title">Document Category</div>
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