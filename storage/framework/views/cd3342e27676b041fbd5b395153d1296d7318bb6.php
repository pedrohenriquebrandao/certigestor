<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header'); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Validações')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <button onclick="window.location.href = '<?php echo e(route('validations.create')); ?>'"
                class="bg-gray-500 hover:bg-gray-600 text-gray-100 font-bold py-2 px-4 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                <span>Nova solicitação</span>
            </button>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4">
                <div class="p-6 bg-white border-b border-gray-200">
                    <?php if($validations->count() == 0): ?>
                        Ainda não existem registros
                    <?php else: ?>   
                    <table class="table-fixed w-full">
                        <thead>
                            <tr>
                                <th class="w-1/4 px-4 py-2">Ticket</th>
                                <th class="w-1/2 px-4 py-2">Nome/Razão Social</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $validations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $validation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="border px-4 py-2"><?php echo e($validation->ticket); ?></td>
                                <td class="border px-4 py-2"><?php echo e($validation->name); ?></td>
                                <td class="border px-4 py-2 text-gray-800">
                                    <div>
                                        <button onclick="window.location.href = '<?php echo e(route('validations.show', $validation->id)); ?>'"
                                            class="bg-green-500 hover:bg-green-800 text-gray-100 font-bold py-2 px-4 items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                            </svg>
                                            <span>Abrir</span>
                                        </button>
                                        <button onclick="window.location.href = '<?php echo e(route('validations.destroy', $validation->id)); ?>'"
                                            class="bg-red-500 hover:bg-red-800 text-gray-100 font-bold py-2 px-4 items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <span>Apagar</span>
                                        </button>
                                        <button onclick="window.location.href = '<?php echo e(route('validations.edit', $validation->id)); ?>'"
                                            class="bg-blue-500 hover:bg-blue-800 text-gray-100 font-bold py-2 px-4 items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                            <span>Editar</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH C:\Projetos\certigestor\resources\views/validations/index.blade.php ENDPATH**/ ?>