;
<?php $__env->startSection("conteudo"); ?>;

<div class="col-12">
    <h2>Minhas compras</h2>
</div>

<div class="col-12">
    <table class="table table-bordered">
        <tr>
            <th>Data da Compra</th>
            <th>Situação</th>
            <th></th>
        </tr>
        <?php $__currentLoopData = $lista; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ped): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($ped->datapedido->format("d/m/Y H:i")); ?></td>
            <td><?php echo e($ped->status); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lara-teste\resources\views/compra/historico.blade.php ENDPATH**/ ?>