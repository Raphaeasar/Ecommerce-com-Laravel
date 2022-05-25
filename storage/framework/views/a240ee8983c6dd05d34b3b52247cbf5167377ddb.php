<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casarini Shop - Ecommerce</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <?php echo $__env->yieldContent("scriptjs"); ?>
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md bg-light pl-5 pr-5 mb-5">
        <a href="#" class="navbar-brand">Casarini Shop</a>
        <div class="collapse navbar-collapse">
            <div class="navbar-nav">
                <a class="nav-link" href="<?php echo e(route('home')); ?>">HOME</a>
                <a class="nav-link" href="<?php echo e(route('categoria')); ?>">Categorias</a>
                <a class="nav-link" href="<?php echo e(route('cadastrar')); ?>">Cadastrar</a>
                <?php if(!Auth::user()): ?>
                <a class="nav-link" href="<?php echo e(route('logar')); ?>">Logar</a>
                <?php else: ?>
                <a class="nav-link" href="<?php echo e(route('compra_historico')); ?>">Minhas compras</a>
                <a class="nav-link" href="<?php echo e(route('logar')); ?>">Logout</a>
                <?php endif; ?>
            </div>
        </div>
        <a href="<?php echo e(route('ver_carrinho')); ?>" class="btn btn-sm"><i class="fa fa-shopping-cart"></i></a>
    </nav>

    <div class="container">
        <div class="row">
            <?php if(Auth::user()): ?>
            <div class="col-12">
                <p class="text-right">Seja bem vindo, <?php echo e(Auth::user()->nome); ?>, <a href="<?php echo e(route('sair')); ?>">sair</a></p>
            </div>
            <?php endif; ?>

            <?php if($message = Session::get("err")): ?>
            <div class="col-12">
                <div class="alert alert-danger"><?php echo e($message); ?></div>
            </div>
            <?php endif; ?>

            <?php if($message = Session::get("ok")): ?>
            <div class="col-12">
                <div class="alert alert-sucess"><?php echo e($message); ?></div>
            </div>
            <?php endif; ?>

            <!--Nesta DIV teremos uma area que os outros arquivos irão adicionar conteúdo -->
            <?php echo $__env->yieldContent("conteudo"); ?>
        </div>
    </div>

    <!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
-->
</body>

</html><?php /**PATH C:\xampp\htdocs\lara-teste\resources\views/layout.blade.php ENDPATH**/ ?>