  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/admin')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Anasayfa</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{url('admin/user')}}">
          <i class="fas fa-fw fa-table"></i>
          <span>Üyeler</span></a>
      </li>

      <li class="nav-item  ">
        <a class="nav-link" href="{{url('admin/article')}}" id="pagesDropdown" role="button">
          <i class="fas fa-fw fa-folder"></i>
          <span>Makaleler</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{url('admin/categories')}}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Kategoriler</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{url('/admin/comments')}}">
          <i class="fa fa-table"></i>
          <span>Yorumlar</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{url('admin/messages')}}">
          <i class="fas fa-fw fa-table"></i>
          <span>Mesajlar</span></a>
      </li>


    </ul>
