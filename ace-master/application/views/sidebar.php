<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
  <script type="text/javascript">
    try{ace.settings.loadState('sidebar')}catch(e){}
  </script>

  <div class="sidebar-shortcuts" id="sidebar-shortcuts">
    <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
      <button class="btn btn-success">
        <i class="ace-icon fa fa-signal"></i>
      </button>

      <button class="btn btn-info">
        <i class="ace-icon fa fa-pencil"></i>
      </button>

      <button class="btn btn-warning">
        <i class="ace-icon fa fa-users"></i>
      </button>

      <button class="btn btn-danger">
        <i class="ace-icon fa fa-cogs"></i>
      </button>
    </div>

    <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
      <span class="btn btn-success"></span>

      <span class="btn btn-info"></span>

      <span class="btn btn-warning"></span>

      <span class="btn btn-danger"></span>
    </div>
  </div><!-- /.sidebar-shortcuts -->

  <ul class="nav nav-list">
    <li class="<?php echo "dashboard" == $this->uri->segment(1) ? 'active open':''?>">
      <a href="<?php echo base_url('index.php/dashboard');?>">
        <i class="menu-icon fa fa-tachometer"></i>
        <span class="menu-text"> Dashboard </span>
      </a>

      <b class="arrow"></b>
    </li>

    <li class="<?php
    echo "profil_lapangan" == $this->uri->segment(1) ||
    "deskripsi_lapangan" == $this->uri->segment(1) ||
    "deskripsi_venue" == $this->uri->segment(1) ||
    "jenis_lapangan" == $this->uri->segment(1) ||
    "tipe_lapangan" == $this->uri->segment(1) ||
    "stok_lapangan" == $this->uri->segment(1) ? 'active open':''?>">
      <a href="#" class="dropdown-toggle">
        <i class="menu-icon fa fa-desktop"></i>
        <span class="menu-text">
          Lapangan
        </span>
        <b class="arrow fa fa-angle-down"></b>
      </a>
      <b class="arrow"></b>
        <ul class="submenu">
            <li class="<?php echo "profil_lapangan" == $this->uri->segment(1) ? 'active':''?>">
                <a href="<?php echo base_url();?>index.php/profil_lapangan">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Profil Lapangan
                </a>
                <b class="arrow"></b>
            </li>
            <li class="<?php echo "deskripsi_lapangan" == $this->uri->segment(1) ? 'active':''?>">
                <a href="<?php echo base_url('index.php/deskripsi_lapangan');?>">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Deskripsi Lapangan
                </a>
                <b class="arrow"></b>
            </li>
            <li class="<?php echo "deskripsi_venue" == $this->uri->segment(1) ? 'active':''?>">
                <a href="<?php echo base_url('index.php/deskripsi_venue');?>">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Deskripsi Venue
                </a>
                <b class="arrow"></b>
            </li>
            <li class="<?php echo "jenis_lapangan" == $this->uri->segment(1) ? 'active':''?>">
                <a href="<?php echo base_url('index.php/jenis_lapangan');?>">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Jenis Lapangan
                </a>
                <b class="arrow"></b>
            </li>
            <li class="<?php echo "tipe_lapangan" == $this->uri->segment(1) ? 'active':''?>">
                <a href="<?php echo base_url('index.php/tipe_lapangan');?>">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Tipe Lapangan
                </a>
                <b class="arrow"></b>
            </li>
            <li class="<?php echo "stok_lapangan" == $this->uri->segment(1) ? 'active':''?>">
                <a href="<?php echo base_url();?>index.php/stok_lapangan">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Stok Lapangan
                </a>
                <b class="arrow"></b>
            </li>
        </ul>
    </li>
    <li class="<?php
    echo "harga_reguler" == $this->uri->segment(1) ||
    "harga_weekend" == $this->uri->segment(1) ? 'active open':''?>">
      <a href="#" class="dropdown-toggle">
        <i class="menu-icon fa fa-desktop"></i>
        <span class="menu-text">
          Daftar Harga
        </span>
        <b class="arrow fa fa-angle-down"></b>
      </a>
      <b class="arrow"></b>
        <ul class="submenu">
            <li class="<?php
            echo "harga_reguler" == $this->uri->segment(1) ? 'active':''?>">
                <a href="<?php echo base_url();?>index.php/harga_reguler">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Harga Reguler
                </a>
                <b class="arrow"></b>
            </li>
            <li class="<?php
            echo "harga_weekend" == $this->uri->segment(1) ? 'active':''?>">
                <a href="<?php echo base_url();?>index.php/harga_weekend">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Harga Weekend
                </a>
                <b class="arrow"></b>
            </li>
        </ul>
    </li>

    <li class="<?php
    echo "profil_order" == $this->uri->segment(1) ||
    "order_lapangan" == $this->uri->segment(1) ||
    "order_validasi" == $this->uri->segment(1) ||
    "status_order" == $this->uri->segment(1) ? 'active open':''?>">
      <a href="<?php echo base_url();?>index.php/stok_lapangan" class="dropdown-toggle">
        <i class="menu-icon fa fa-desktop"></i>
        <span class="menu-text">
          Daftar Order
        </span>
        <b class="arrow fa fa-angle-down"></b>
      </a>
      <b class="arrow"></b>
      <ul class="submenu">
            <li class="<?php
            echo "profil_order" == $this->uri->segment(1) ? 'active':''?>">
                <a href="<?php echo base_url();?>index.php/profil_order">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Profil Order
                </a>
                <b class="arrow"></b>
            </li>
            <li class="<?php
            echo "order_lapangan" == $this->uri->segment(1) ? 'active':''?>">
                <a href="<?php echo base_url();?>index.php/order_lapangan">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Order Lapangan
                </a>
                <b class="arrow"></b>
            </li>
            <li class="<?php
            echo "order_validasi" == $this->uri->segment(1) ? 'active':''?>">
                <a href="<?php echo base_url();?>index.php/order_validasi">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Order Validasi
                </a>
                <b class="arrow"></b>
            </li>
            <li class="<?php
            echo "status_order" == $this->uri->segment(1) ? 'active':''?>">
                <a href="<?php echo base_url();?>index.php/status_order">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Status Order
                </a>
                <b class="arrow"></b>
            </li>
      </ul>
    </li>
    <li class="<?php
    echo "profil_users" == $this->uri->segment(1) ||
    " " == $this->uri->segment(1) ? 'active open':''?>">
      <a href="#" class="dropdown-toggle">
        <i class="menu-icon fa fa-desktop"></i>
        <span class="menu-text">
          Daftar Users
        </span>
        <b class="arrow fa fa-angle-down"></b>
      </a>
      <b class="arrow"></b>
        <ul class="submenu">
            <li class="<?php
            echo "profil_users" == $this->uri->segment(1) ? 'active':''?>">
                <a href="<?php echo base_url();?>index.php/profil_users">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Profil Users
                </a>
                <b class="arrow"></b>
            </li>
        </ul>
    </li>
    <li class="#">
      <a href="http://www.maenfutsal.16mb.com" target="_blank">
        <i class="menu-icon fa fa-globe"></i>
        <span class="menu-text"> Front End </span>
        </a>
    </li>

  </ul><!-- /.nav-list -->

  <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
    <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
  </div>
</div>
