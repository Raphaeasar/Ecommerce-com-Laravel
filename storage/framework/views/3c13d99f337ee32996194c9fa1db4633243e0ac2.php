
<?php $__env->startSection("conteudo"); ?>
<h3>Carrinho</h3>

<?php if(isset($cart) && count($cart) >0): ?>


<table class="table">
    <thead>
        <tr>
            <th></th>
            <th>Nome</th>
            <th>Foto</th>
            <th>Valor</th>
            <th>Descrição</th>
        </tr>
    </thead>
    <tbody>
        <?php $total = 0; ?>
        <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $indice => $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td>
                <a href="<?php echo e(route('carrinho_excluir', [ 'indice' => $indice])); ?>" class="btn btn-danger btn-sm">
                    <i class="fa fa-trash btn-sm"></i>
                </a>
            </td>
            <td><?php echo e($p->nome); ?></td>
            <td><img src="<?php echo e(asset($p->foto)); ?>" height="50" /></td>
            <td><?php echo e($p->valor); ?></td>
            <td><?php echo e($p->descricao); ?></td>
        </tr>
        <?php $total += $p->valor; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
    <tfooter>
        <tr>
            <td colspan="5">
                Total do carrinho: R$ <?php echo e($total); ?>

            </td>
        </tr>
    </tfooter>
</table>

<form method="post" action="<?php echo e(route('carrinho_finalizar')); ?>">
    <?php echo csrf_field(); ?>
    <input type="submit" value="Finalizar Compra" class="btn btn-lg btn-success">
</form>

<?php else: ?>
<p>Nenhum item no carrinho</p>
<?php endif; ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lara-teste\resources\views/carrinho.blade.php ENDPATH**/ ?>