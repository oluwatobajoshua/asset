<!-- Add icons to the links using the .nav-icon class
     with font-awesome or any other icon font library -->
<li class="nav-item has-treeview menu-open">
  <a href="#" class="nav-link active">
    <i class="nav-icon fas fa-tachometer-alt"></i>
    <p>
      Starter Pages
      <i class="right fas fa-angle-left"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="<?php echo $this->Url->build('/assets'); ?>" class="nav-link active">
        <i class="far fa-circle nav-icon"></i>
        <p>Assets</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="<?php echo $this->Url->build('/biddings'); ?>" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Bidding</p>
      </a>
    </li>
  </ul>
</li>

<li class="nav-item">
  <a href="<?php echo $this->Url->build('/permits'); ?>" class="nav-link">
    <i class="nav-icon fas fa-th"></i>
    <p>
      Permit
      <!--<span class="right badge badge-danger">New</span>-->
    </p>
  </a>
</li>
<li class="nav-item">
  <a href="<?php echo $this->Url->build('/users/logout'); ?>" class="nav-link">
    <i class="nav-icon fa fa-sign-out"></i>
    <p>
      Logout
      <!--<span class="right badge badge-danger">New</span>-->
    </p>
  </a>
</li>
