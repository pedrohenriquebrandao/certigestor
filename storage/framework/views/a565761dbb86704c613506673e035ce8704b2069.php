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
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-6">
            <div>
                <button onclick="window.location.href = '<?php echo e(route("validations")); ?>'"
                    class="bg-purple-500 hover:bg-purple-800 text-gray-100 font-bold py-2 px-4 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                    </svg>
                    <span>Voltar</span>
                </button>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table-fixed w-full">
                        <?php $__currentLoopData = $validations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $validation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="text-2xl text-center mb-4">
                            <?php echo e($validation->name); ?>

                        </div>

                        <div class="md:container md:mx-auto">
                            <div class="md:grid-cols-2 hover:bg-gray-100 md:space-y-0 space-y-1 p-2 border-b">
                                <p class="text-gray-600">
                                    <b>Ticket</b>
                                </p>
                                <p>
                                    <?php echo e($validation->ticket); ?>

                                </p>
                            </div>
                            <?php if($validation->cpf != null): ?>
                            <div class="md:grid-cols-2 hover:bg-gray-100 md:space-y-0 space-y-1 p-2 border-b">
                                <p class="text-gray-600">
                                    <b>CPF</b>
                                </p>
                                <p>
                                    <?php echo e($validation->cpf); ?>

                                </p>
                            </div>
                            <?php endif; ?>
                            <?php if($validation->cnpj != null): ?>
                            <div class="md:grid-cols-2 hover:bg-gray-100 md:space-y-0 space-y-1 p-2 border-b">
                                <p class="text-gray-600">
                                    <b>CNPJ</b>
                                </p>
                                <p>
                                    <?php echo e($validation->cnpj); ?>

                                </p>
                            </div>
                            <?php endif; ?>
                            <div class="md:grid-cols-2 hover:bg-gray-100 md:space-y-0 space-y-1 p-2 border-b">
                                <p class="text-gray-600">
                                    <b>Telefone</b>
                                </p>
                                <p>
                                    <?php echo e($validation->phone); ?>

                                </p>
                            </div>
                            <div class="md:grid-cols-2 hover:bg-gray-100 md:space-y-0 space-y-1 p-2 border-b">
                                <p class="text-gray-600">
                                    <b>Email</b>
                                </p>
                                <p>
                                    <?php echo e($validation->email); ?>

                                </p>
                            </div>
                            <!-- Type -->
                            <div class="md:grid-cols-2 hover:bg-gray-100 md:space-y-0 space-y-1 p-2 border-b">
                                <p class="text-gray-600">
                                    <b>Modelo de Certificado</b>
                                </p>
                                <p>
                                    <?php echo e($validation->type); ?>

                                </p>
                            </div>
                        </div>

                        <!-- Price -->
                        <div class="md:grid-cols-2 hover:bg-gray-100 md:space-y-0 space-y-1 p-2 border-b">
                            <p class="text-gray-600">
                                <b>Validade</b>
                            </p>
                            <p>
                                <?php echo e($validation->validity); ?>

                            </p>
                        </div>

                        <!-- Validity -->
                        <div class="md:grid-cols-2 hover:bg-gray-100 md:space-y-0 space-y-1 p-2 border-b">
                            <p class="text-gray-600">
                                <b>Valor</b>
                            </p>
                            <p>
                                <?php echo e($validation->price); ?>

                            </p>
                        </div>
                        <!-- Date -->
                        <div class="md:grid-cols-2 hover:bg-gray-100 md:space-y-0 space-y-1 p-2">
                            <p class="text-gray-600">
                                <b>Data de emissão</b>
                            </p>
                            <p>
                                <?php echo e($validation->created_at->format('d/m/Y')); ?>

                            </p>
                        </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                </table>
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
<?php /**PATH C:\Projetos\certigestor\resources\views/validations/show.blade.php ENDPATH**/ ?>