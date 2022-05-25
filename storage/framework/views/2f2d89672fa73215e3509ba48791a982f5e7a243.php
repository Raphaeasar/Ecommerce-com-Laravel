
<?php $__env->startSection("scriptjs"); ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(function() {
        //JQUERY --- ONLOAD --- Ao carregar a pagina
        $("#cpf").mask("000.000.000-00");
        $("#cep").mask("00000-000");
        $("#estado").mask("AA");
    })
</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("conteudo"); ?>
<div class="col-12">
    <div class="col-12">
        <h2 class="mb-3">Cadastrar Cliente</h2>
    </div>

    <form action="<?php echo e(route('cadastrar_cliente')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    Nome: <input type="text" name="nome" class="form-control" />
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    E-mail: <input type="email" name="email" class="form-control" />
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    CPF: <input type="text" name="cpf" id="cpf" class="form-control" />
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    Senha: <input type="password" name="password" class="form-control" />
                </div>
            </div>
            <div class="col-8">
                <div class="form-group">
                    Endereço: <input type="text" name="endereco" class="form-control" />
                </div>
            </div>
            <div class="col-1">
                <div class="form-group">
                    Número: <input type="text" name="numero" class="form-control" />
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    Complemento: <input type="text" name="complemento" class="form-control" />
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    Cidade: <input type="text" name="cidade" class="form-control" />
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    CEP: <input type="text" name="cep" id="cep" class="form-control" required />
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    Estado: <input type="text" name="estado" id="estado" class="form-control" />
                </div>
            </div>
        </div>
        <input type="submit" value="Cadastrar" class="btn btn-success btn-sm" />
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lara-teste\resources\views/cadastrar.blade.php ENDPATH**/ ?>