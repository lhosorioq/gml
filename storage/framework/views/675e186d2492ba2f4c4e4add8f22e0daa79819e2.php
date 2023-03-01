

<?php $__env->startSection('gTitulo'); ?>
    Users list
<?php $__env->stopSection(); ?>

<?php $__env->startSection('gContent'); ?>

    <?php if($users->count()): ?>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5">
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="p-2 w-80">
                <div class="p-1 bg-white rounded shadow-md">
                    <a href="<?php echo e(route('editar', $user )); ?>" title="<?php echo e($user->nombres); ?>">
                        <h2 class="text-center font-bold text-gray-800"><?php echo e($user->nombres . ' ' . $user->apellidos); ?></h2>
                        <p class="text-gray-600 text-sm">
                            Identidad: <?php echo e($user->cedula); ?> <br>
                            Correo: <?php echo e($user->email); ?> <br>
                            Categoria: <strong><?php echo e($user->categoria->name); ?></strong> <br>
                            Pais: <?php echo e($user->pais); ?> <br>
                            Dirección: <?php echo e($user->direccion); ?> <br>
                            Celular: <?php echo e($user->celular); ?> <br>
                        </p>
                    </a>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="mt-6">
            <?php echo e($users->links('pagination::tailwind')); ?>

        </div>
    <?php else: ?>
        <p class="text-gray-600 text-center">
            Sin usuarios registrados.
        </p>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('shared.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Desarrollo\Aplicaciones\gml\gmlsoftware\resources\views/user/index.blade.php ENDPATH**/ ?>