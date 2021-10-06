<?php
/** @var  $this \sarahh1417\phpmvc\View */
/** @var  $model \app\models\contactForm */

use sarahh1417\phpmvc\Form\TextareaField;

$this->title = 'Contact';
?>

<h1> Contact Us</h1>
<?php  $form = \sarahh1417\phpmvc\Form\Form::begin('' , 'post')?>

<?php echo $form->field($model, 'subject') ?>
<?php echo $form->field($model, 'email')->emailField() ?>
<?php echo new TextareaField($model , 'body') ?>

<button type="submit" class="btn btn-primary">Submit</button>

<?php  \sarahh1417\phpmvc\Form\Form::end();?>

