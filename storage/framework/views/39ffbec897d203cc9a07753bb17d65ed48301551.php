<?php if(isset($lista)): ?>
<div class="row">
    <?php $__currentLoopData = $lista; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-3 mb-3">
        <div class="card">
            <img src="<?php echo e(asset($prod->foto)); ?>" class="card-img-top" />
            <div class="card-body">
                <h6 class="card-title"><?php echo e($prod->nome); ?> - R$ <?php echo e($prod->valor); ?></h6>
                <a href="<?php echo e(route('adicionar_carrinho', ['idproduto' => $prod->id ])); ?>" class="btn btn-sm btn-secondary">Adicionar Item</a>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\lara-teste\resources\views/_produtos.blade.php ENDPATH**/ ?>