<?php $__env->startSection('content'); ?>
    <h1 class="text-center"><?php if(isset($prod)): ?> Editar <?php else: ?> Cadastrar <?php endif; ?></h1> <hr>

    <div class="col-8 m-auto">

        <?php if(isset($errors) && count($errors)>0): ?>
            <div class="text-center mt-4 mb-4 p-2 alert-danger">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $erro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($erro); ?> <br>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>

        <?php if(isset($prod)): ?>
            <form name="formEdit" id="formEdit" method="post" action="<?php echo e(url("prods/$prod->id")); ?>">
            <?php echo method_field('PUT'); ?>
        <?php else: ?>
            <form name="formCad" id="formCad" method="post" action="<?php echo e(url('prods')); ?>">
        <?php endif; ?>


            <?php echo csrf_field(); ?>
            <input class="form-control mt-2 mb-2" type="text" name="name" id="name" placeholder="Nome" value="<?php echo e($prod->name ?? ''); ?>" required>
            <input class="form-control mt-2 mb-2" type="text" name="preco" id="preco" placeholder="Preço" value="<?php echo e($prod->preco ?? ''); ?>" required>
            <input class="form-control mt-2 mb-2" type="text" name="descricao" id="descricao" placeholder="Descrição" value="<?php echo e($prod->descricao ?? ''); ?>" required>
            <input class="btn btn-primary mt-2 mb-2" type="submit" value=<?php if(isset($prod)): ?> Editar <?php else: ?> Cadastrar <?php endif; ?>>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\resources\views/create.blade.php ENDPATH**/ ?>