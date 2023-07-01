<?php $__env->startSection('content'); ?>
    <h1 class="text-center">Visualizar</h1> <hr>

    <div class="col-8 m-auto">
        Nome: <?php echo e($prod->name); ?> <br>
        Preço: <?php echo e($prod->preco); ?> <br>
        Descrição: <?php echo e($prod->descricao); ?> <br>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\resources\views/show.blade.php ENDPATH**/ ?>