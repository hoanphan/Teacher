<?php
    use \yii\helpers\Url;
?>

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
    <li class="">
        <a href="index.html">
            <i class="menu-icon fa fa-tachometer"></i>
            <span class="menu-text"> Bảng điều khiển </span>
        </a>

        <b class="arrow"></b>
    </li>

    <li class="">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-desktop"></i>
            <span class="menu-text">
								Thông tin
							</span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-caret-right"></i>

                   Bậc
                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="<?=Url::toRoute("bac/index")?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Danh sách bậc
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="<?=Url::toRoute('bac/create')?>">
                        <a href="two-menu-1.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Thêm mới bặc
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-caret-right"></i>

                    Ngạch
                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="<?=Url::toRoute("ngach/index")?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Danh sách
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="<?=Url::toRoute('ngach/create')?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Thêm mới
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>

            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-caret-right"></i>

                    Phòng ban - khoa
                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="<?=Url::toRoute("phong-khoa/index")?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Danh sách
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="<?=Url::toRoute('phong-khoa/create')?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Thêm mới
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-caret-right"></i>

                    Tổ bộ môn
                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="<?=Url::toRoute("to-bo-mon/index")?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                          Danh sách
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="<?=Url::toRoute('to-bo-mon/create')?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Thêm mới
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-caret-right"></i>

                    Lớp
                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="<?=Url::toRoute("lop/index")?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Danh sách
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="<?=Url::toRoute('lop/create')?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Thêm mới
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-caret-right"></i>

                    Giáo viên
                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="<?=Url::toRoute("teacher/index")?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Danh sách
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="<?=Url::toRoute('teacher/create')?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Thêm mới
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-caret-right"></i>

                    Môn học
                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="<?=Url::toRoute("mon-hoc/index")?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Danh sách
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="<?=Url::toRoute('mon-hoc/create')?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Thêm mới
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>


        </ul>
    </li>





    <li class="active open">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-list"></i>
            <span class="menu-text"> Nhiệm vụ tại bậc </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="active">
                <a href="<?=Url::toRoute("nhiem-vu-bac/index")?>">
                    <i class="menu-icon fa fa-caret-right"></i>
                  Danh sách
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="<?=Url::toRoute("nhiem-vu-bac/create")?>">
                    <i class="menu-icon fa fa-caret-right"></i>
                   Thêm
                </a>

                <b class="arrow"></b>
            </li>
        </ul>
    </li>

    <li class="">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-pencil-square-o"></i>
            <span class="menu-text"> Bậc Tncc </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="">
                <a href="<?php echo Url::toRoute('bac-tccn/index')?>">
                    <i class="menu-icon fa fa-caret-right"></i>
                   Danh sách
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="<?php echo Url::toRoute('bac-tccn/create')?>">
                    <i class="menu-icon fa fa-caret-right"></i>
                  Thêm
                </a>

                <b class="arrow"></b>
            </li>
        </ul>
    </li>
    <li class="">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-pencil-square-o"></i>
            <span class="menu-text"> Bảng II </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="">
                <a href="<?php echo Url::toRoute('bang-ii/index')?>">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Danh sách
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="<?php echo Url::toRoute('bang-ii/create')?>">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Thêm
                </a>

                <b class="arrow"></b>
            </li>
        </ul>
    </li>
    <li class="">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-pencil-square-o"></i>
            <span class="menu-text"> Bảng III </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="">
                <a href="<?php echo Url::toRoute('bang-iii/index')?>">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Danh sách
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="<?php echo Url::toRoute('bang-iii/create')?>">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Thêm
                </a>

                <b class="arrow"></b>
            </li>
        </ul>
    </li>
    <li class="">
        <a href="widgets.html">
            <i class="menu-icon fa fa-list-alt"></i>
            <span class="menu-text"> Widgets </span>
        </a>

        <b class="arrow"></b>
    </li>

    <li class="">
        <a href="calendar.html">
            <i class="menu-icon fa fa-calendar"></i>

            <span class="menu-text">
								Calendar

								<span class="badge badge-transparent tooltip-error" title="2 Important Events">
									<i class="ace-icon fa fa-exclamation-triangle red bigger-130"></i>
								</span>
							</span>
        </a>

        <b class="arrow"></b>
    </li>

    <li class="">
        <a href="gallery.html">
            <i class="menu-icon fa fa-picture-o"></i>
            <span class="menu-text"> Gallery </span>
        </a>

        <b class="arrow"></b>
    </li>

    <li class="">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-tag"></i>
            <span class="menu-text"> More Pages </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="">
                <a href="profile.html">
                    <i class="menu-icon fa fa-caret-right"></i>
                    User Profile
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="inbox.html">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Inbox
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="pricing.html">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Pricing Tables
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="invoice.html">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Invoice
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="timeline.html">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Timeline
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="email.html">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Email Templates
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="login.html">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Login &amp; Register
                </a>

                <b class="arrow"></b>
            </li>
        </ul>
    </li>

    <li class="">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-file-o"></i>

            <span class="menu-text">
								Other Pages

								<span class="badge badge-primary">5</span>
							</span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="">
                <a href="faq.html">
                    <i class="menu-icon fa fa-caret-right"></i>
                    FAQ
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="error-404.html">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Error 404
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="error-500.html">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Error 500
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="grid.html">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Grid
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="blank.html">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Blank Page
                </a>

                <b class="arrow"></b>
            </li>
        </ul>
    </li>
</ul><!-- /.nav-list -->

<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
    <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
</div>