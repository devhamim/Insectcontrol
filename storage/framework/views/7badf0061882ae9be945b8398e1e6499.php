<div class="ec-left-sidebar ec-bg-sidebar">
    <div id="sidebar" class="sidebar ec-sidebar-footer">

        <div class="">
            <a href="<?php echo e(url('/')); ?>" target="_blank">
                <?php if($setting->first()->black_logo != null): ?>
                    <img src="<?php echo e(asset('uploads/setting')); ?>/<?php echo e($setting->first()->black_logo); ?>" class="ec-brand-icon" height="43px" width="180px" alt="Logo">
                <?php else: ?>
                    <img src="<?php echo e(asset('uploads/setting')); ?>/<?php echo e($setting->first()->white_logo); ?>" class="ec-brand-icon" height="43px" width="180px" alt="Logo">
                <?php endif; ?>
            </a>
        </div>

        <!-- begin sidebar scrollbar -->
        <div class="ec-navigation" data-simplebar>
            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">
                <!-- Dashboard -->
                <li class="active">
                    <a class="sidenav-item-link" href="<?php echo e(route('dashboard')); ?>">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                    <hr>
                </li>
                <!-- Order list -->
                <li>
                    <a class="sidenav-item-link" href="<?php echo e(route('orders.index')); ?>">
                        <i class="mdi mdi-cart"></i>
                        <span class="nav-text">Order</span>
                    </a>
                </li>
                <!-- product list -->
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)">
                        <i class="mdi mdi-palette-advanced"></i>
                        <span class="nav-text">Product</span> <b class="caret"></b>
                    </a>
                    <div class="collapse">
                        <ul class="sub-menu" id="vendors" data-parent="#sidebar-menu">
                            <li class="">
                                <a class="sidenav-item-link" href="<?php echo e(route('product.index')); ?>">
                                    <span class="nav-text">Product List</span>
                                </a>
                            </li>

                            <li class="">
                                <a class="sidenav-item-link" href="<?php echo e(route('inventory.index')); ?>">
                                    <span class="nav-text">Attribute</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="<?php echo e(route('attribute.index')); ?>">
                                    <span class="nav-text">Color</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="<?php echo e(route('size.list')); ?>">
                                    <span class="nav-text">Size</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- category list -->
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)">
                        <i class="mdi mdi-dns-outline"></i>
                        <span class="nav-text">Category</span> <b class="caret"></b>
                    </a>
                    <div class="collapse">
                        <ul class="sub-menu" id="vendors" data-parent="#sidebar-menu">
                            <li class="">
                                <a class="sidenav-item-link" href="<?php echo e(route('categorys.index')); ?>">
                                    <span class="nav-text">Category List</span>
                                </a>
                            </li>

                            <li class="">
                                <a class="sidenav-item-link" href="<?php echo e(route('subcategorys.index')); ?>">
                                    <span class="nav-text">Subcategory List</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- Shipping charge list -->
                <li>
                    <a class="sidenav-item-link" href="<?php echo e(route('delevarycharge.index')); ?>">
                        <i class="mdi mdi-truck-fast"></i>
                        <span class="nav-text">Shipping Charge</span>
                    </a>
                </li>

                <hr>
                <!-- Markating setting list -->
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)">
                        <i class="mdi mdi-chart-bar"></i>
                        <span class="nav-text">Markating</span> <b class="caret"></b>
                    </a>
                    <div class="collapse">
                        <ul class="sub-menu" id="vendors" data-parent="#sidebar-menu">
                            <li class="">
                                <a class="sidenav-item-link" href="<?php echo e(route('markatingSetting.index')); ?>">
                                    <span class="nav-text">Markating setting</span>
                                </a>
                            </li>

                            <li class="">
                                <a class="sidenav-item-link" href="<?php echo e(route('visitors')); ?>">
                                    <span class="nav-text">Visitor Count</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="<?php echo e(route('sms.index')); ?>">
                                    <span class="nav-text">SMS</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="<?php echo e(route('mails.index')); ?>">
                                    <span class="nav-text">Mail</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <hr>

                <!-- Site setting list -->
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)">
                        <i class="mdi mdi-settings"></i>
                        <span class="nav-text">Site setting</span> <b class="caret"></b>
                    </a>
                    <div class="collapse">
                        <ul class="sub-menu" id="vendors" data-parent="#sidebar-menu">
                            <li class="">
                                <a class="sidenav-item-link" href="<?php echo e(route('setting.index')); ?>">
                                    <span class="nav-text">Setting</span>
                                </a>
                            </li>

                            <li class="">
                                <a class="sidenav-item-link" href="<?php echo e(route('banner.index')); ?>">
                                    <span class="nav-text">Banner</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="<?php echo e(route('review.index')); ?>">
                                    <span class="nav-text">Review</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="<?php echo e(route('users.index')); ?>">
                                    <span class="nav-text">Users</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <hr>
                <!-- Addtional Page list -->
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)">
                        <i class="mdi mdi-dns-outline"></i>
                        <span class="nav-text">Addtional Page</span> <b class="caret"></b>
                    </a>
                    <div class="collapse">
                        <ul class="sub-menu" id="vendors" data-parent="#sidebar-menu">
                            <li class="">
                                <a class="sidenav-item-link" href="<?php echo e(route('about.index')); ?>">
                                    <span class="nav-text">About Us</span>
                                </a>
                            </li>

                            <li class="">
                                <a class="sidenav-item-link" href="<?php echo e(route('privacypolicy.index')); ?>">
                                    <span class="nav-text">Privaci policy</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="<?php echo e(route('termandcondition.index')); ?>">
                                    <span class="nav-text">Terms & Condition</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</div>
<?php /**PATH F:\all project\insectcontrol\resources\views/backend/layouts/sidebar.blade.php ENDPATH**/ ?>