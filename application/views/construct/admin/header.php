<div class="sidebar-panel">
    <div class="brand">
        <a href="javascript:;" data-toggle="sidebar" class="toggle-offscreen hidden-lg-up">
            <i class="material-icons">menu</i>
        </a>
        <a class="brand-logo">
            <img class="expanding-hidden" src="<?php echo assets_url(); ?>images/logo-panel.png" alt="UServ Logo" style="max-height: 30px"/>
        </a>
    </div>
    <div class="nav-profile dropdown">
        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
            <div class="user-image">
                <?php if(!user_session()['photo']): ?>
                    <img src="<?php echo base_url();?>uploads/account/avatar.jpg" class="avatar img-circle" alt="Profile Picture">
                <?php else: ?>
                    <img src="<?php echo base_url();?>uploads/account/<?php echo (user_session()['photo']); ?>" class="avatar img-circle" alt="Profile Picture">
                <?php endif; ?> 
            </div>
            <div class="user-info expanding-hidden">
                <?php echo user_session()['first_name']; ?> <?php echo user_session()['last_name']; ?>
                <small class="bold">
                    <?php if( user_session()['role'] == 1 ): ?>
                        <span><?php echo user_session()['position']; ?></span>
                    <?php elseif( user_session()['role'] == 2): ?>
                        <span class="text-info">Administrator</span>
                    <?php else: ?>
                        <span class="text-danger">Developer</span>
                    <?php endif; ?>
                </small>
            </div>
        </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="<?php echo base_url(); ?>logout">Logout</a>
        </div>
    </div>
    <nav>
        <p class="nav-title">NAVIGATION</p>
        <ul class="nav">
            <li>
                <a href="<?php echo base_url(); ?>account/dashboard">
                    <i class="material-icons tcolor1">home</i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    <span class="menu-caret"><i class="material-icons">arrow_drop_down</i></span>
                    <i class="material-icons tcolor1">assignment</i>
                    <span>Transactions</span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="<?php echo base_url(); ?>account/transactions/pending">
                            <span>Pending Transactions</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>account/transactions/all">
                            <span>All Transactions</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</div>