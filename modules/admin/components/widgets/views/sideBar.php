<?php
    use \yii\helpers\Url;
    use app\modules\admin\components\BaseWidget;
    use app\models\User;
?>



<ul class="nav nav-list">
    <li class="<?=BaseWidget::isActive('default')?>">
        <a href="<?=Url::toRoute(['default/index'])?>">
            <i class="menu-icon fa fa-tachometer"></i>
            <span class="menu-text"> Bảng điều khiển </span>
        </a>

        <b class="arrow"></b>
    </li>

    <li class="<?=BaseWidget::isActiveContent()?>">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-desktop"></i>
            <span class="menu-text">
								Thông tin
							</span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="<?=BaseWidget::isActive('bac')?>">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-caret-right"></i>

                   Bậc
                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="<?=BaseWidget::isActive('bac','index')?>">
                        <a href="<?=Url::toRoute("bac/index")?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Danh sách bậc
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="<?=BaseWidget::isActive('bac','create')?>">
                        <a href="<?=Url::toRoute('bac/create')?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Thêm mới bậc
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>
            <li class="<?=BaseWidget::isActive('ngach')?>">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-caret-right"></i>

                    Ngạch
                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="<?=BaseWidget::isActive('ngach','index')?>">
                        <a href="<?=Url::toRoute("ngach/index")?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Danh sách
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="<?=BaseWidget::isActive('ngach','create')?>">
                        <a href="<?=Url::toRoute('ngach/create')?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Thêm mới
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>

            <li class="<?=BaseWidget::isActive('phong-khoa')?>">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-caret-right"></i>

                    Phòng ban - khoa
                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="<?=BaseWidget::isActive('phong-khoa','index')?>">
                        <a href="<?=Url::toRoute("phong-khoa/index")?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Danh sách
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="<?=BaseWidget::isActive('phong-khoa','create')?>">
                        <a href="<?=Url::toRoute('phong-khoa/create')?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Thêm mới
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>
            <li class="<?=BaseWidget::isActive('to-bo-mon')?>">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-caret-right"></i>

                    Tổ bộ môn
                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="<?=BaseWidget::isActive("to-bo-mon","index")?>">
                        <a href="<?=Url::toRoute(['to-bo-mon/index'])?>"?>
                            <i class="menu-icon fa fa-caret-right"></i>
                          Danh sách
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="<?=BaseWidget::isActive("to-bo-mon","create")?>">
                        <a href="<?=Url::toRoute('to-bo-mon/create')?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Thêm mới
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>
            <li class="<?=BaseWidget::isActive("lop")?>">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-caret-right"></i>

                    Lớp
                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="<?=BaseWidget::isActive("lop",'index')?>">
                        <a href="<?=Url::toRoute("lop/index")?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Danh sách
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="<?=BaseWidget::isActive("lop",'create')?>">
                        <a href="<?=Url::toRoute('lop/create')?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Thêm mới
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>
            <?php if(User::isAdmin()):?>
            <li class="<?=BaseWidget::isActive("teacher")?>">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-caret-right"></i>

                    Giáo viên
                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="<?=BaseWidget::isActive("teacher",'index')?>">
                        <a href="<?=Url::toRoute("teacher/index")?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Danh sách
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="<?=BaseWidget::isActive("teacher",'create')?>">
                        <a href="<?=Url::toRoute('teacher/create')?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Thêm mới
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>
            <?php endif?>
            <li class="<?=BaseWidget::isActive("mon-hoc")?>">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-caret-right"></i>

                    Môn học
                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="<?=BaseWidget::isActive("mon-hoc",'index')?>">
                        <a href="<?=Url::toRoute("mon-hoc/index")?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Danh sách
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="<?=BaseWidget::isActive("mon-hoc",'create')?>">
                        <a href="<?=Url::toRoute('mon-hoc/create')?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Thêm mới
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>
            <li class="<?=BaseWidget::isActive("ten-dinh-muc")?>">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Tên định mức
                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="<?=BaseWidget::isActive("ten-dinh-muc",'index')?>">
                        <a href="<?=Url::toRoute("ten-dinh-muc/index")?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Danh sách
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="<?=BaseWidget::isActive("ten-dinh-muc",'create')?>">
                        <a href="<?=Url::toRoute('ten-dinh-muc/create')?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Thêm mới
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>

        </ul>
    </li>

    <li class="<?=BaseWidget::isActive('dinh-muc-cua-giao-vien')?>">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon  glyphicon glyphicon-qrcode"></i>
            <span class="menu-text">Định mức giáo viên</span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="<?=BaseWidget::isActive('dinh-muc-cua-giao-vien','index')?>">
                <a href="<?=Url::toRoute("dinh-muc-cua-giao-vien/index")?>">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Danh sách
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="<?=Url::toRoute("dinh-muc-cua-giao-vien/create")?>">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Thêm
                </a>

                <b class="arrow"></b>
            </li>
        </ul>
    </li>



    <li class="<?=BaseWidget::isActive('nhiem-vu-bac')?>">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-list"></i>
            <span class="menu-text"> Nhiệm vụ tại bậc </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="<?=BaseWidget::isActive('nhiem-vu-bac','index')?>">
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

    <li class="<?=BaseWidget::isActive('bac-tccn')?>">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-pencil-square-o"></i>
            <span class="menu-text"> Bậc TCCN </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="<?=BaseWidget::isActive('bac-tccn','index')?>">
                <a href="<?php echo Url::toRoute('bac-tccn/index')?>">
                    <i class="menu-icon fa fa-caret-right"></i>
                   Danh sách
                </a>

                <b class="arrow"></b>
            </li>

            <li class="<?=BaseWidget::isActive('bac-tccn','create')?>">
                <a href="<?php echo Url::toRoute('bac-tccn/create')?>">
                    <i class="menu-icon fa fa-caret-right"></i>
                  Thêm
                </a>

                <b class="arrow"></b>
            </li>
        </ul>
    </li>
    <li class="<?=BaseWidget::isActive('bang-ii')?>">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-pencil-square-o"></i>
            <span class="menu-text"> Bảng II </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="<?=BaseWidget::isActive('bang-ii','index')?>">
                <a href="<?php echo Url::toRoute('bang-ii/index')?>">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Danh sách
                </a>

                <b class="arrow"></b>
            </li>

            <li class="<?=BaseWidget::isActive('bang-ii','create')?>">
                <a href="<?php echo Url::toRoute('bang-ii/create')?>">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Thêm
                </a>

                <b class="arrow"></b>
            </li>
        </ul>
    </li>
    <li class="<?=BaseWidget::isActive('bang-iii')?>">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-pencil-square-o"></i>
            <span class="menu-text"> Bảng III </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="<?=BaseWidget::isActive('bang-ii','index')?>">
                <a href="<?php echo Url::toRoute('bang-iii/index')?>">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Danh sách
                </a>

                <b class="arrow"></b>
            </li>

            <li class="<?=BaseWidget::isActive('bang-iii','create')?>">
                <a href="<?php echo Url::toRoute('bang-iii/create')?>">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Thêm
                </a>

                <b class="arrow"></b>
            </li>
        </ul>
    </li>
    <li class="<?=BaseWidget::isActive('bang-v')?>">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-pencil-square-o"></i>
            <span class="menu-text"> Bảng VI </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="<?=BaseWidget::isActive('bang-v','index')?>">
                <a href="<?php echo Url::toRoute('bang-v/index')?>">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Danh sách
                </a>

                <b class="arrow"></b>
            </li>

            <li class="<?=BaseWidget::isActive('bang-v')?>">
                <a href="<?php echo Url::toRoute('bang-v/create')?>">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Thêm
                </a>

                <b class="arrow"></b>
            </li>
        </ul>
    </li>
    <?php if (User::findOne(\Yii::$app->user->id)->rule==0):?>
    <li class="<?=BaseWidget::isActive('user')?>">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-users"></i>
            <span class="menu-text"> User</span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="<?=BaseWidget::isActive('user','index')?>">
                <a href="<?php echo Url::toRoute('user/index')?>">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Danh sách
                </a>

                <b class="arrow"></b>
            </li>

            <li class="<?=BaseWidget::isActive('user')?>">
                <a href="<?php echo Url::toRoute('user/create')?>">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Thêm
                </a>

                <b class="arrow"></b>
            </li>
        </ul>
    </li>
    <?php endif;?>


</ul><!-- /.nav-list -->

<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
    <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
</div>