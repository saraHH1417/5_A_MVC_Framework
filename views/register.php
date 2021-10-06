<?php
/* @var $model \app\models\User */
?>

<h1> Create an account</h1>
    <?php $form = \app\core\Form\Form::begin('' , 'post') ?>
        <div class="row">
            <div class="col">
                <?php echo $form->field($model, 'firstName') ?>
            </div>
            <div class="col">
                <?php echo $form->field($model, 'lastName') ?>
            </div>
        </div>
        <?php echo $form->field($model, 'email')->emailField() ?>
        <?php echo $form->field($model, 'password')->passwordField() ?>
        <?php echo $form->field($model, 'passwordConfirm')->passwordField() ?>

        <button type="submit" class="btn btn-primary">Submit</button>
    <?php \app\core\Form\Form::end() ?>
<!--<form  action="" method="post">-->
<!--    <div class="row">-->
<!--        <div class="col">-->
<!--            <div class="form-group">-->
<!--                <label>First Name</label>-->
<!--                <input type="text" name="firstName" class="form-control" id="exampleCheck1">-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col">-->
<!--            <div class="form-group">-->
<!--                <label>Last Name</label>-->
<!--                <input type="text" name="lastName" class="form-control" id="exampleCheck1">-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="form-group">-->
<!--        <label for="exampleInputEmail1" class="form-label">Email address</label>-->
<!--        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">-->
<!--        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
<!--    </div>-->
<!--    <div class="form-group">-->
<!--        <label for="exampleInputPassword1" class="form-label">Password</label>-->
<!--        <input type="password" name="password" class="form-control" id="exampleInputPassword1">-->
<!--    </div>-->
<!--    <div class="form-group">-->
<!--        <label for="exampleInputPassword1" class="form-label">Confirm Password</label>-->
<!--        <input type="password" name="passwordConfirm" class="form-control" id="exampleInputPassword2">-->
<!--    </div>-->
<!--    <button type="submit" class="btn btn-primary">Submit</button>-->
<!--</form>-->
