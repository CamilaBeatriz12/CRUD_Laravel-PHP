<?php $__env->startSection('content'); ?>
    <h1 class="text-center">Cadastro de Produtos</h1> <hr>

    <div class="text-center mt-3 mb-4">
        <a href="<?php echo e(url('prods/create')); ?>"><button class="btn btn-success"> Novo Cadastro </button></a>
    </div>

    <div class="col-8 m-auto">
        <?php echo csrf_field(); ?>
        <table class="table text-center">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Preço</th>
                <th scope="col">Descrição</th>
                <th scope="col">Ações</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $prod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prods): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($prods -> id); ?></th>
                    <td><?php echo e($prods -> name); ?></td>
                    <td><?php echo e($prods -> preco); ?></td>
                    <td><?php echo e($prods -> descricao); ?></td>
                    <td>
                        <a href="<?php echo e(url("prods/$prods->id")); ?>"> <button class="btn btn-dark">Visualizar</button></a>
                        <a href="<?php echo e(url("prods/$prods->id/edit")); ?>"> <button class="btn btn-primary">Editar</button></a>
                        <a href="<?php echo e(url("prods/$prods->id")); ?>" class="js-del"> <button class="btn btn-danger">Deletar</button></a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\resources\views/index.blade.php ENDPATH**/ ?>