<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="block">
                <div class="container px-4 py-4 mx-auto">
                    <h3 class="block text-xl text-gray-700 font-semibold mb-3"></h3>
                    <div class="flex">
                        <div class="w-1/2">
                            <div class="rounded-md p-6 bg-white shadow">
                                <div class="mb-2 pb-2">
                                    <h3 class="font-semibold text-lg text-gray-600">Validações</h3>
                                    <p class="text-sm text-gray-500">Total Mensal</p>
                                </div>
                                <div id="chartdiv" class="w-full" style="height: 240px"></div>
                            </div>
                        </div>
                        <div class="w-1/2 ml-4">
                            <div class="rounded-md p-6 bg-white shadow">
                                <div class="mb-2 pb-2">
                                    <h3 class="font-semibold text-lg text-gray-600">Produtos</h3>
                                    <p class="text-sm text-gray-500">Tipos de Certificado Digital</p>
                                </div>
                                <div id="chartdiv2" class="w-full" style="height: 240px"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
           
        </div>
    </div>

    
</x-app-layout>
