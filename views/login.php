<?php
/* @var $model \app\models\User */
/** @var $form \app\core\Form\Form */
/** @var  $this \app\core\View */
$this->title = 'Login';
?>


    <h1>Log in</h1>
<?php $form = \app\core\Form\Form::begin('' , 'post') ?>

    <?php echo $form->field($model, 'email')->emailField() ?>
    <?php echo $form->field($model, 'password')->passwordField() ?>

    <button type="submit" class="btn btn-primary">Submit</button>
<?php \app\core\Form\Form::end() ?>