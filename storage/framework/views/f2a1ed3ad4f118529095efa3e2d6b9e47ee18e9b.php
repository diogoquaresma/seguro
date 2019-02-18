<!doctype html>
<html>
    <head>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">        <title></title>

    </head>
    <body>
<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <p><strong>Opps Something went wrong</strong></p>
        <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
<?php echo Form::open(['url' => '/update/', 'class' => 'form-horizontal']); ?>

        <fieldset>

            <legend>Legend</legend>

            <!-- Email -->
            <div class="form-group">
                <?php echo Form::label('name', 'Name:', ['class' => 'col-lg-2 control-label']); ?>

                <div class="col-lg-10">
                    <?php echo Form::text('name', $value = $client['name'], ['required' => 'required','class' => 'form-control', 'placeholder' => 'Name']); ?>

                    <?php echo e(Form::hidden('id', $client['id'])); ?>

                </div>
            </div>

            <!-- Submit Button -->
            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    <?php echo Form::submit('Submit', ['class' => 'btn btn-primary'] ); ?>

                </div>
            </div>

        </fieldset>

        <?php echo Form::close(); ?>


    </div>





    </body>

</html>
