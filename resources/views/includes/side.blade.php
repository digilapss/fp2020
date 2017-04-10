<aside class="app-sidebar" id="sidebar">
  <div class="sidebar-header">
    <a class="sidebar-brand" href="#"><span class="highlight">Family </span> Planning</a>
    <button type="button" class="sidebar-toggle">
      <i class="fa fa-times"></i>
    </button>
  </div>
  <div class="sidebar-menu">
    <ul class="sidebar-nav">
    <li {{ Request::is('admin/intro*') ? 'class=active' : '' }}>
        <a href="{{ route('admin.intro.view', ['intro_id' => 1]) }}">
          <div class="icon">
            <i class="fa fa-comments" aria-hidden="true"></i>
          </div>
          <div class="title">Introduction</div>
        </a>
      </li>
      <li class="{{ Request::is('admin/about*') ? 'dropdown active' : 'dropdown' }}" >
        <a class="dropdown-toggle" data-toggle="dropdown">
          <div class="icon">
            <i class="fa fa-info-circle" aria-hidden="true"></i>
          </div>
          <div class="title">About Us</div>
        </a>
        <div class="dropdown-menu">
          <ul>
            <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Profile</li>
            <li><a href="{{ route('admin.profile.view', ['about_id' => 1]) }}">Global FP2020</a></li>
            <li><a href="{{ route('admin.profile.view', ['about_id' => 2]) }}}">FP2020 in Indonesia</a></li>
            <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i>Working Group</li>
            <li><a href="{{ route('admin.group.view', ['group_id' => 4]) }}">FP Strategy</a></li>
            <li><a href="{{ route('admin.group.view', ['group_id' => 5]) }}">Rights & Empowerment</a></li>
            <li><a href="{{ route('admin.group.view', ['group_id' => 6]) }}">Data Monitoring and Evaluation</a></li>
            <li class="line"></li>
            <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i>Partner</li>
            <li><a href="{{ route('admin.partner.index') }}">FP2020 Country Committee</a></li>
            <li class="line"></li>
          </ul>
        </div>
      </li>
      <li {{ Request::is('admin/news*') ? 'class=active' : '' }}>
        <a href="{{ route('admin.news.index') }}">
          <div class="icon">
            <i class="fa fa-info-circle" aria-hidden="true"></i>
          </div>
          <div class="title">News</div>
        </a>
      </li>
      <li {{ Request::is('admin/uevent*') ? 'class=active' : '' }}>
        <a href="{{ route('admin.uevent.index') }}">
          <div class="icon">
            <i class="fa fa-comments" aria-hidden="true"></i>
          </div>
          <div class="title">Event</div>
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
        <a href="{{ route('admin.partner.index') }}">
          <div class="icon">
            <i class="fa fa-cube" aria-hidden="true"></i>
          </div>
          <div class="title">Partner</div>
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