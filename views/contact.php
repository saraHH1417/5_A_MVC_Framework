<?php
/** @var  $this \app\core\View */
/** @var  $model \app\models\contactForm */

use app\core\Form\TextareaField;

$this->title = 'Contact';
?>

<h1> Contact Us</h1>
<?php  $form = \app\core\Form\Form::begin('' , 'post')?>

<?php echo $form->field($model, 'subject') ?>
<?php echo $form->field($model, 'email')->emailField() ?>
<?php echo new TextareaField($model , 'body') ?>

<button type="submit" class="btn btn-primary">Submit</button>

<?php  \app\core\Form\Form::end();?>

