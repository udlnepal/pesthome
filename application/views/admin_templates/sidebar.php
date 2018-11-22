    <div class="sidebar" data-color="orange" data-background-color="white" data-image="<?php echo base_url('admin_assets'); ?>/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->

    <?php
$classvalue=$this->uri->segment(2);

     ?>
      <div class="logo">
        <a href="<?php echo base_url(); ?>" class="simple-text logo-normal" target="_blank">
          View Site
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item <?php if (empty($classvalue)) echo "active" ?> ">
            <a class="nav-link" href="<?php echo base_url('admin'); ?>">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item  <?php if ($classvalue=='appointments') echo "active" ?>  ">
            <a class="nav-link" href="<?php echo base_url('admin/appointments') ?>">
              <i class="material-icons">person</i>
              <p>Appointments</p>
            </a>
          </li>
       
          <li class="nav-item   <?php if ($classvalue=='create_post') echo "active" ?>  ">
            <a class="nav-link" href="<?php echo base_url('admin/create_post') ?>">
              <i class="material-icons">library_books</i>
              <p>Create Post(Blog)</p>
            </a>
          </li>
            <li class="nav-item   <?php if ($classvalue=='create_page') echo "active" ?>  ">
            <a class="nav-link" href="<?php echo base_url('admin/create_page') ?>">
              <i class="material-icons">file_copy</i>
              <p>Create Page</p>
            </a>
          </li>
        
        <li class="nav-item ">
            <a class="nav-link collapsed" data-toggle="collapse" href="#pagesExamples" aria-expanded="false">
              <i class="material-icons">settings</i>
              <p> Setup
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse <?php if ($classvalue=='slider_setup' or $classvalue=='contact_setup' or $classvalue=='menu_setup' or $classvalue=='services_setup')   echo "show"?>" id="pagesExamples" style="">
              <ul class="nav">
                <li class="nav-item <?php if ($classvalue=='menu_setup') echo "active" ?> ">
                  <a class="nav-link" href="<?php echo base_url('admin/menu_setup'); ?>">
                    <i class="material-icons">menu</i>
                    <p>Menu Setup</p>
                  </a>
                  </li> 
                <li class="nav-item <?php if ($classvalue=='slider_setup') echo "active" ?> ">
                  <a class="nav-link" href="<?php echo base_url('admin/slider_setup') ?>">
                    <i class="material-icons">photos</i>
                  <p>Slider Setup</p>
                  </a>
                </li>
                <li class="nav-item <?php if ($classvalue=='contact_setup') echo "active" ?> ">
                  <a class="nav-link" href="<?php echo base_url('admin/contact_setup'); ?>">
                    <i class="material-icons">location_ons</i>
                    <p>Contact Setup</p>
                  </a>
                  </li>
                    <li class="nav-item <?php if ($classvalue=='services_setup') echo "active" ?> ">
                  <a class="nav-link" href="<?php echo base_url('admin/services_setup'); ?>">
                    <i class="material-icons">bug_report</i>
                    <p>Services Setup</p>
                  </a>
                  </li>
                                 
              </ul>
            </div>
          </li>

          <!-- <li class="nav-item active-pro ">
                <a class="nav-link" href="./upgrade.html">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> -->
        </ul>
      </div>
    </div>