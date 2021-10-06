<?php
/* @var $model \app\models\User */
/** @var $form \sarahh1417\phpmvc\Form\Form */
/** @var  $this \sarahh1417\phpmvc\View */
$this->title = 'Login';
?>


    <h1>Log in</h1>
<?php $form = \sarahh1417\phpmvc\Form\Form::begin('' , 'post') ?>

    <?php echo $form->field($model, 'email')->emailField() ?>
    <?php echo $form->field($model, 'password')->passwordField() ?>

    <button type="submit" class="btn btn-primary">Submit</button>
<?php \sarahh1417\phpmvc\Form\Form::end() ?>