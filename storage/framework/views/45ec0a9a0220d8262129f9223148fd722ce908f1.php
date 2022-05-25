
<?php $__env->startSection("conteudo"); ?>
<div class="col-2">
    <?php if(isset($listaCategoria) && count($listaCategoria) > 0): ?>
    <div class="list-group">
        <a href="<?php echo e(route('categoria')); ?>" class="list-group-item list-group-item-action <?php if(0 == $idcategoria): ?> active <?php endif; ?>">Todas</a>
        <?php $__currentLoopData = $listaCategoria; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="<?php echo e(route('categoria_por_id', ['idcategoria' => $cat->id])); ?>" class="list-group-item list-group-item-action <?php if($cat->id == $idcategoria): ?> active <?php endif; ?>">
            <?php echo e($cat->categoria); ?></a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php endif; ?>
</div>

<div class="col-10">
    <?php echo $__env->make("_produtos", [ 'lista' => $lista ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lara-teste\resources\views/categoria.blade.php ENDPATH**/ ?>