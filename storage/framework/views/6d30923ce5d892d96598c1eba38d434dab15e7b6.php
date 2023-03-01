

<?php $__env->startSection('gTitulo'); ?>
    New User
<?php $__env->stopSection(); ?>

<?php $__env->startSection('gContent'); ?>
    <div class="md:flex md:justify-center md:gap md:items-center">
        <div class="md:w-4/12">
            <img src="<?php echo e(asset('img/logoGML.png')); ?>" alt="Logo Empresarial">
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-md shadow-xl">
            <form action="<?php echo e(route('crear')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="mb-4">
                    <label for="nombres" class="mb-2 block text-gray-400">Nombres / Firts Name</label>
                    <?php $__errorArgs = ['nombres'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            <?php echo e($message); ?>

                        </p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <input 
                        id="nombres"
                        name="nombres"
                        type="text"
                        value="<?php echo e(@old('nombres')); ?>"
                        placeholder="Su nombre / firtsName"
                        class="border p-3 w-full rounded <?php $__errorArgs = ['nombres'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 rounded <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    >
                    
                    <label for="apellidos" class="mb-2 block text-gray-400">Apellido / Last Name</label>
                    <?php $__errorArgs = ['apellidos'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            <?php echo e($message); ?>

                        </p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <input 
                        id="apellidos"
                        name="apellidos"
                        type="text"
                        value="<?php echo e(@old('apellidos')); ?>"
                        placeholder="Su apellido / lastName"
                        class="border p-3 w-full rounded <?php $__errorArgs = ['apellidos'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 rounded <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    >
                    <label for="cedula" class="mb-2 block text-gray-400">Cédula / DNI</label>
                    <?php $__errorArgs = ['cedula'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            <?php echo e($message); ?>

                        </p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <input 
                        id="cedula"
                        name="cedula"
                        type="number"
                        value="<?php echo e(@old('cedula')); ?>"
                        placeholder="Su cedula / DNI"
                        class="border p-3 w-full rounded <?php $__errorArgs = ['cedula'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 rounded <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    >
                    <label for="email" class="mb-2 block text-gray-400">Cuenta de correo / e-mail</label>
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            <?php echo e($message); ?>

                        </p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <input 
                        id="email"
                        name="email"
                        type="email"
                        value="<?php echo e(@old('email')); ?>"
                        placeholder="Cuenta de correo / e-mail"
                        class="border p-3 w-full rounded <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 rounded <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    >

                    <label for="categoria" class="mb-2 block text-gray-400">Categoria / Category</label>
                    <select 
                        id="countries" 
                        name="categoria"
                        value="<?php echo e(@old('categoria')); ?>"
                        class="border p-3 w-full rounded <?php $__errorArgs = ['categoria'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 rounded <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    >
                        <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($categoria->id); ?>"
                                <?php if( old('categoria') == $categoria->id ): ?>
                                    selected="selected"
                                <?php endif; ?>
                            ><?php echo e($categoria->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    
                    <label for="pais" class="mb-2 block text-gray-400">Pais / country</label>
                    <select 
                        id="countries" 
                        name="pais"
                        value="<?php echo e(@old('pais')); ?>"
                        class="border p-3 w-full rounded <?php $__errorArgs = ['pais'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 rounded <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    >
                        <?php $__currentLoopData = $paises; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pais): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option
                                <?php if( old('pais') == $pais->name->common ): ?>
                                    selected="selected"
                                <?php endif; ?>
                            ><?php echo e($pais->name->common); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <label for="direccion" class="mb-2 block text-gray-400">Dirreccion / Address</label>
                    <?php $__errorArgs = ['direccion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            <?php echo e($message); ?>

                        </p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <input 
                        id="direccion"
                        name="direccion"
                        value="<?php echo e(@old('direccion')); ?>"
                        type="text"
                        placeholder="Dirreccion / Address"
                        class="border p-3 w-full rounded <?php $__errorArgs = ['direccion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 rounded <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    >
                    <label for="celular" class="mb-2 block text-gray-400">Numero celular / Cellphone Number</label>
                    <?php $__errorArgs = ['celular'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            <?php echo e($message); ?>

                        </p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <input 
                        id="celular"
                        name="celular"
                        value="<?php echo e(@old('celular')); ?>"
                        type="number"
                        placeholder="Numero celular / Cellphone Number"
                        class="border p-3 w-full rounded <?php $__errorArgs = ['celular'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 rounded <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    >
                    <input 
                        type="submit"
                        value="Crear Usuario / Create User"
                        class="bg-sky-600 hover:bg-sky-800 transition-colors cursor-pointer w-full p-3 text-white rounded-lg mt-4"
                    >
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('shared.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Desarrollo\Aplicaciones\gml\gmlsoftware\resources\views/user/new.blade.php ENDPATH**/ ?>