<div class="main-container">
    <div class="main-content">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="login-container">
                    <div class="center">
                        <h1>
                            <i class="ace-icon fa fa-leaf green"></i>
                            <span class="red">Ace</span>
                            <span class="white" id="id-text2">Application</span>
                        </h1>
                        <h4 class="blue" id="id-company-text">&copy; Company Name</h4>
                    </div>

                    <div class="space-6"></div>

                    <div class="position-relative">
                        <div id="login-box" class="login-box visible widget-box no-border">
                            <div class="widget-body">
                                <div class="widget-main">
                                    <h4 class="header blue lighter bigger">
                                        <i class="ace-icon fa fa-coffee green"></i>
                                        Please Enter Your Information
                                    </h4>
                                    <div class="space-6"></div>
                                    <?php
                                    use yii\helpers\Html;
                                    use yii\widgets\ActiveForm;

                                    $form = ActiveForm::begin([
                                        'id' => 'login-form',
                                    ]) ?>

                                    <form>
                                        <fieldset>
                                            <label class="block clearfix">
														<span class="block input-icon input-icon-right">

													            <?= $form->field($loginForm, 'username')->textInput(['class' => 'form-control', "placeholder" => "Username"])->label(false) ?>
                                                            <i class="ace-icon fa fa-user"></i>
														</span>
                                            </label>

                                            <label class="block clearfix">
														<span class="block input-icon input-icon-right">
                                                            <?= $form->field($loginForm, 'password')->passwordInput(['class' => 'form-control', "placeholder" => "Password"]) ->label(false)?>

                                                            <i class="ace-icon fa fa-lock"></i>
														</span>
                                            </label>

                                            <div class="space"></div>

                                            <div class="clearfix">
                                                <label class="inline">
                                                    <?= $form->field($loginForm, 'rememberMe')->checkbox()?>
                                                </label>

                                                <button type="submit"
                                                        class="width-35 pull-right btn btn-sm btn-primary">
                                                    <i class="ace-icon fa fa-key"></i>
                                                    <span class="bigger-110">Login</span>
                                                </button>
                                            </div>

                                            <div class="space-4"></div>
                                        </fieldset>
                                        <?php ActiveForm::end() ?>
                                        <div class="space-6"></div>
                                </div><!-- /.widget-main -->
                            </div><!-- /.widget-body -->
                        </div><!-- /.login-box -->


                    </div><!-- /.position-relative -->

                    <div class="navbar-fixed-top align-right">
                        <br/>
                        &nbsp;
                        <a id="btn-login-dark" href="#">Dark</a>
                        &nbsp;
                        <span class="blue">/</span>
                        &nbsp;
                        <a id="btn-login-blur" href="#">Blur</a>
                        &nbsp;
                        <span class="blue">/</span>
                        &nbsp;
                        <a id="btn-login-light" href="#">Light</a>
                        &nbsp; &nbsp; &nbsp;
                    </div>
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.main-content -->
</div><!-- /.main-container -->