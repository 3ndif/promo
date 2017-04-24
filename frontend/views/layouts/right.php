
<div class="aside-right">
    <a href="/new-obiavo"><button class="btn-change">Подать объявление</button></a>

    <div class="hr-black"></div>

    <div class="sidebar-menu">
        <ul class="list-unstyled">
            <?php if (Yii::$app->user->isGuest) { ?>
            <li><a href="<?= yii\helpers\Url::toRoute('/login')?>">Вход</a></li>
            <li><a href="<?= yii\helpers\Url::toRoute('/registration')?>">Регистрация</a></li>
            <?php } ?>

            <?php if (!Yii::$app->user->isGuest) { ?>
            <li><a href="<?= yii\helpers\Url::toRoute('/im')?>">Личный кабинет</a></li>
            <li><a href="<?= yii\helpers\Url::toRoute('/logout')?>">Выйти</a></li>
            <?php } ?>
        </ul>
    </div>
</div>