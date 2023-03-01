<?php $__env->startSection('gTitulo'); ?>
    Users list in Table
<?php $__env->stopSection(); ?>

<?php $__env->startSection('gContent'); ?>

    <div class="bg-white-100 px-2 py-2 border-t border-gray-300 sm:px-4">
        <div class="flex bg-white px-3 py-3 sm:px-4">
            <input 
                type="text" 
                wire:model="buscar"
                class="form-input rounded-md shadow-sm p-3 block w-full" 
                placeholder="Buscar Usuarios"
            />
            <div class="form-input rounded-md shadow-sm p-3 block ml-6">
                <select wire:model="porPagina" class="out-line-none">
                    <option value="4">4 por página</option>
                    <option value="8">8 por página</option>
                    <option value="16">16 por página</option>
                    <option value="32">32 por página</option>
                </select>
            </div>
            <?php if( $buscar != '' ): ?>
                <div class="form-input rounded-md shadow-sm p-3 block ml-6">
                    <button wire:click="limpiar" class="form-input rounded-md shadow mt-1 ml-6 block">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            <?php endif; ?>
        </div>
        
        <?php if($users->count()): ?>
            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                    <tr>
                        <td class="px-6 py-3 gb-gray-50 text-left text-xs leading-4 font-medium text-red-500">Identidad</td>
                        <td class="px-6 py-3 gb-gray-50 text-left text-xs leading-4 font-medium text-red-500">Nombre Completo /
                            Correo</td>
                        <td class="px-6 py-3 gb-gray-50 text-left text-xs leading-4 font-medium text-red-500">Pais / Dirección
                        </td>
                        <td class="px-6 py-3 gb-gray-50 text-left text-xs leading-4 font-medium text-red-500">Categoria</td>
                        <td class="px-6 py-3 gb-gray-50 text-left text-xs leading-4 font-medium text-red-500">Celular</td>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="px-1 py-1 whitespace-nowrap"><?php echo e($user->cedula); ?></td>
                            <td class="px-1 py-1 whitespace-nowrap">
                                <?php echo e($user->nombres . ' ' . $user->apellidos); ?> <br>
                                <?php echo e($user->email); ?>

                            </td>
                            <td class="px-1 py-1 whitespace-nowrap">
                                <?php echo e($user->pais); ?> <br>
                                <?php echo e($user->direccion); ?>

                            </td>
                            <td class="px-1 py-1 whitespace-nowrap"><?php echo e($user->categoria->name); ?></td>
                            <td class="px-1 py-1 whitespace-nowrap"><?php echo e($user->celular); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>

            <div class="bg-white px-2 py-2 border-t border-gray-300 sm:px-4">
                <?php echo e($users->links('pagination::tailwind')); ?>

            </div>
        <?php else: ?>
            <div class="bg-white px-2 py-2 border-t border-gray-300 sm:px-4">
                No hay resultados para la busqueda realizada con la palabra <?php echo e($buscar); ?>. <br>
                En la pagina <?php echo e($page); ?> en la página <?php echo e($porPagina); ?>

            </div>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Desarrollo\Aplicaciones\gml\gmlsoftware\resources\views/livewire/users-table.blade.php ENDPATH**/ ?>