
<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Sign In | MySleep';

$fieldOptions1 = [
    'options' => ['class' => 'form-group has-feedback'],
   
];

$fieldOptions2 = [
    'options' => ['class' => 'form-group has-feedback'],
  
];
?>








        <!--========== HEADER ==========-->
        <header class="navbar-fixed-top s-header js__header-sticky js__header-overlay">
            <!-- Navbar -->
            <div class="s-header__navbar">
                <div class="s-header__container">
                    <div class="s-header__navbar-row">
                        <div class="s-header__navbar-row-col">
                            <!-- Logo -->
                            <div class="s-header__logo">
                                <a href="index.html" class="s-header__logo-link">
                                    <img class="s-header__logo-img s-header__logo-img-default" src="img/logoMySleepWhite.png" alt="MySleep Logo">
                                    <img class="s-header__logo-img s-header__logo-img-shrink" src="img/logoMySleepBlack.png" alt="MySleep Logo">
                                </a>
                            </div>
                            <!-- End Logo -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Navbar -->
        </header>
        <!--========== END HEADER ==========-->

        <!--========== PROMO BLOCK ==========-->
        <div class="s-promo-block-v1 g-bg-color--primary-to-blueviolet-ltr g-fullheight--md">
            <div class="container g-ver-center--md g-padding-y-100--xs">
                <div class="row g-hor-centered-row--md g-margin-t-30--xs g-margin-t-20--sm">
                    <div class="col-lg-6 col-sm-6 g-hor-centered-row__col g-text-center--xs g-text-left--md g-margin-b-60--xs g-margin-b-0--md">
                        <div class="s-promo-block-v1__square-effect g-margin-b-60--xs">
                            <h1 class="g-font-size-32--xs g-font-size-45--sm g-font-size-50--lg g-color--white">A Sleep Monitoring<br> Application</h1>
                            <p class="g-font-size-20--xs g-font-size-26--md g-color--white g-margin-b-0--xs">Facilitating the follow-up of patients<br>with sleep disorders</p>
                        </div>
                        <!--<span class="g-display-block--xs g-display-inline-block--lg g-margin-b-10--xs g-margin-b-10--lg">
                            <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" class="s-btn s-btn--xs s-btn--white-brd g-padding-x-30--xs g-radius--50">
                                <span class="s-btn__element--left">
                                    <i class="g-font-size-32--xs ti-apple"></i>
                                </span>
                                <span class="s-btn__element--right g-padding-x-10--xs">
                                    <span class="g-display-block--xs g-font-size-11--xs">Download on the</span>
                                    <span class="g-font-size-16--xs">App Store</span>
                                </span>
                            </a>
                        </span>-->
                        <span class="g-padding-x-0--xs g-padding-x-10--lg">
                            <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" class="s-btn s-btn--xs s-btn--white-brd g-padding-x-30--xs g-radius--50">
                                <span class="s-btn__element--left">
                                    <i class="g-font-size-32--xs ti-android"></i>
                                </span>
                                <span class="s-btn__element--right g-padding-x-10--xs">
                                    <span class="g-display-block--xs g-font-size-11--xs">Download on</span>
                                    <span class="g-font-size-16--xs">Google Play</span>
                                </span>
                            </a>
                        </span>
                    </div>


   <!--========== FORM ==========-->




                    <div class="col-lg-2"></div>
                    <div class="col-lg-4 col-sm-4 g-hor-centered-row__col">
                        <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                          <?php $form = ActiveForm::begin(['options' => ['class'=>'center-block g-width-350--xs g-bg-color--white-opacity-lightest g-box-shadow__blueviolet-v1 g-padding-x-40--xs g-padding-y-60--xs g-radius--4'],'id' => 'login-form', 'enableClientValidation' => false]); ?>

                                <div class="g-text-center--xs g-margin-b-40--xs">
                                    <h2 class="g-font-size-30--xs g-color--white">MySleep Portal</h2>
                                </div>
                                <div class="g-margin-b-30--xs">
                                     <?= $form
            ->field($model, 'username', $fieldOptions1)
            ->label(false)
            ->textInput([  'class'=>'form-control s-form-v3__input',   'placeholder' => $model->getAttributeLabel('username')  ]) ?>
                                </div>
                                <div class="g-margin-b-30--xs">
                                    <?= $form
            ->field($model, 'password', $fieldOptions2)
            ->label(false)
            ->passwordInput([ 'class'=>'form-control s-form-v3__input',  'placeholder' => $model->getAttributeLabel('password')]) ?>
                                </div>
                                <div class="g-text-center--xs">
                                  
             <?= Html::submitButton('Sign in', ['class' => 'text-uppercase btn-block s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-50--xs g-margin-b-20--xs', 'name' => 'login-button']) ?>

                                    <a class="g-color--white g-font-size-13--xs" href="#">Forgot Password?</a>
                                </div>
                      


    <?php ActiveForm::end(); ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>


   <!--========== END FORM ==========-->



        <!--========== END PROMO BLOCK ==========-->
        
        <!--========== FOOTER ==========-->
        <footer class="g-bg-color--dark">
            <!-- Links -->
            <div class="g-hor-divider__dashed--white-opacity-lightest">
                <div class="container g-padding-y-80--xs">
                    <div class="row">
                        <div class="col-sm-2 g-margin-b-20--xs g-margin-b-0--md">
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="index.html" target="_blank">Home</a></li>
                                
                                 <!--=========
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="index.html" target="_blank">About</a></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="contacts.html" target="_blank">Contact</a></li> ==========-->
                            </ul>
                        </div>
                        <div class="col-sm-2 g-margin-b-40--xs g-margin-b-0--md">
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                            
                            <!--========== MANTIDOS CASO TENHA TERMOS E CONDIÇÕES (DIRECIONADO PARA faq)==========-->
                            
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="faq.html" target="_blank">Privacy Policy</a></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="faq.html" target="_blank">Terms &amp; Conditions</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-1 s-footer__logo g-padding-y-50--xs g-padding-y-0--md">
                            <h3 class="g-font-size-18--xs g-color--white">MySleep</h3>
                            <p class="g-color--white-opacity">We promote a daily and usual follow-up of patients' nights of sleep, in order to facilitate the diagnosis and treatment of sleep disorders.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Links -->
        </footer>
        <!--========== END FOOTER ==========-->