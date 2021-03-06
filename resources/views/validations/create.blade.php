<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Criar nova soliticação') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-6">
            <div>
                <button onclick="window.location.href = '{{ route("validations") }}'"
                    class="bg-green-500 hover:bg-green-800 text-gray-100 font-bold py-2 px-4 items-center">
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
                    <form method="post" action="{{ route('validations.store') }}">
                        @csrf

                        <!-- Ticket -->
                        <div>
                            <x-label for="ticket" :value="__('TICKET')" />

                            <x-input id="ticket" class="block mt-1 w-full" type="text" name="ticket"
                                :value="old('ticket')" autofocus />
                        </div>

                        <!-- CPF -->
                        <div class="mt-4">
                            <x-label for="cpf" :value="__('CPF')" />

                            <x-input id="cpf" class="block mt-1 w-full" type="text" name="cpf" :value="old('cpf')"
                                autofocus />
                        </div>

                        <!-- CNPJ -->
                        <div class="mt-4">
                            <x-label for="cnpj" :value="__('CNPJ')" />

                            <x-input id="cnpj" class="block mt-1 w-full" type="text" name="cnpj" :value="old('cnpj')"
                                autofocus />
                        </div>

                        <!-- Name -->
                        <div class="mt-4">
                            <x-label for="name" :value="__('NOME / RAZÃO SOCIAL')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                                required autofocus />
                        </div>

                        <!-- Phone -->
                        <div class="mt-4">
                            <x-label for="phone" :value="__('TELEFONE')" />

                            <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')"
                                required autofocus />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-label for="email" :value="__('EMAIL')" />

                            <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="old('email')" required />
                        </div>

                        <!-- Type -->
                        <div class="mt-4">
                            <x-label for="type" :value="__('MODELO DE CERTIFICADO')" />

                            <div class="mt-2">
                                <label class="inline-flex items-center mr-6">
                                    <input type="radio" class="form-radio" name="type" value="e-CNPJ A1">
                                    <span class="ml-2">e-CNPJ A1</span>
                                </label>
                                <label class="inline-flex items-center mr-6">
                                    <input type="radio" class="form-radio" name="type" value="e-CNPJ A3">
                                    <span class="ml-2">e-CNPJ A3</span>
                                </label>
                                <label class="inline-flex items-center mr-6">
                                    <input type="radio" class="form-radio" name="type" value="e-CPF A1">
                                    <span class="ml-2">e-CPF A1</span>
                                </label>
                                <label class="inline-flex items-center mr-6">
                                    <input type="radio" class="form-radio" name="type" value="e-CPF A3">
                                    <span class="ml-2">e-CPF A3</span>
                                </label>
                            </div>
                        </div>

                        <!-- Validity -->
                        <div class="mt-4">
                            <x-label for="validity" :value="__('VALIDADE')" />

                            <div class="mt-2">
                                <label class="inline-flex items-center mr-6">
                                    <input type="radio" class="form-radio" name="validity" value="1 ano">
                                    <span class="ml-2">1 ano</span>
                                </label>
                                <label class="inline-flex items-center mr-6">
                                    <input type="radio" class="form-radio" name="validity" value="3 anos">
                                    <span class="ml-2">3 anos</span>
                                </label>
                            </div>
                        </div>

                        <!-- Price -->
                        <div class="mt-4">
                            <x-label for="price" :value="__('VALOR')" />

                            <x-input id="price" class="block mt-1 w-full" type="text" name="price" :value="old('price')"
                                required autofocus />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                {{ __('Criar') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
