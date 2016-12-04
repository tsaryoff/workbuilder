<?php

use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php $this->beginBody() ?>
<div class="wraper">
    <div class="mask">
        <div class="container">
            <nav class="navbar navbar-default first">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand logo" href="#">Work Builder</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="btn btn-default in" href="#" role="button">Войти</a></li>
                            <li><a class="btn btn-default reg" href="#">Регистрация</a></li>
                            <li><a class="btn btn-default vac" href="#">Разместить вакансию</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>


            <nav class="navbar navbar-default last">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">Создать резюме <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">Найти вакансию</a></li>
                            <li><a href="#">Конкурсы компаний</a></li>
                            <li><a href="#">Горячие предложения</a></li>
                            <li><a href="#">Вакансии за рубежом</a></li>
                            <li><a href="#">Для студентов</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->

                </div><!-- /.container-fluid -->
            </nav>
            <div class="header-blocks">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <div class="caption">
                                <div class="service-block service-block-default no-margin-bottom">
                                    <i class="icon-lg rounded-x icon icon-badge"></i>
                                    <h2 class="heading-sm">Web Design &amp; Development</h2>
                                    <p>Donec id elit non mi porta gravida at eget metus id elit mi egetine. Fusce dapibus</p>
                                    <ul class="list-unstyled">
                                        <li>Responsive Web Desgin</li>
                                        <li>E-commerce</li>
                                        <li>App &amp; Icon Design</li>
                                        <li>Logo &amp; Brand Design</li>
                                        <li>Mobile Development</li>
                                        <li>UI/UX Design</li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <div class="caption">

                                <p>...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <div class="caption">

                                <p> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>