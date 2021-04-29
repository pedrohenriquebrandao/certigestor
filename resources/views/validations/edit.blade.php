<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar dados da solicitação') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-6">
            <div>
                <button onclick="window.location.href = '{{ route("validations") }}'" class="bg-green-500 hover:bg-green-800 text-gray-100 font-bold py-2 px-4 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                    </svg>
                    <span>Voltar</span>
                </button>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4">
                <div class="p-6 bg-white border-b border-gray-200">
                    @foreach($validations as $validation)
                    <form method="post" action="{{ route('validations.update', $validation->id) }}">
                        @csrf

                        <!-- Ticket -->
                        <div>
                            <x-label for="ticket" :value="__('TICKET')" />

                            <x-input id="ticket" class="block mt-1 w-full" type="text" name="ticket"
                                value="{{ $validation->ticket }}" required autofocus />
                        </div>

                        <!-- CPF -->
                        <div class="mt-4">
                            <x-label for="cpf" :value="__('CPF')" />

                            <x-input id="cpf" class="block mt-1 w-full" type="text" name="cpf" value="{{ $validation->cpf }}"
                                autofocus />
                        </div>

                        <!-- CNPJ -->
                        <div class="mt-4">
                            <x-label for="cnpj" :value="__('CNPJ')" />

                            <x-input id="cnpj" class="block mt-1 w-full" type="text" name="cnpj" value="{{ $validation->cnpj     }}"
                                 autofocus />
                        </div>

                        <!-- Name -->
                        <div class="mt-4">
                            <x-label for="name" :value="__('NOME')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $validation->name }}"
                                required autofocus />
                        </div>

                        <!-- Phone -->
                        <div class="mt-4">
                            <x-label for="phone" :value="__('TELEFONE')" />

                            <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" value="{{ $validation->phone }}"
                                required autofocus />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-label for="email" :value="__('EMAIL')" />

                            <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                            value="{{ $validation->email}}" required />
                        </div>

                        <!-- Type -->
                        <div class="mt-4">
                            <x-label for="type" :value="__('MODELO DE CERTIFICADO')" />

                            <div class="mt-2">
                                <label class="inline-flex items-center">
                                   <p>
                                       {{ $validation->type }}
                                   </p>
                                </label>
                            </div>
                        </div>

                        <!-- Validity -->
                        <div class="mt-4">
                            <x-label for="validity" :value="__('VALIDADE')" />

                            <div class="mt-2">
                                <label class="inline-flex items-center mr-6">
                                    <input type="radio" class="form-radio" name="validity" value="1 ano" {{ $validation->validity == "1 ano" ? 'checked' : '' }}>
                                    <span class="ml-2">1 ano</span>
                                </label>
                                <label class="inline-flex items-center mr-6">
                                    <input type="radio" class="form-radio" name="validity" value="3 anos" {{ $validation->validity == "3 anos" ? 'checked' : '' }}>
                                    <span class="ml-2">3 anos</span>
                                </label>
                            </div>
                        </div>

                        <!-- Price -->
                        <div class="mt-4">
                            <x-label for="price" :value="__('VALOR')" />

                            <x-input id="price" class="block mt-1 w-full" type="text" name="price" value="{{ $validation->price}}"
                                required autofocus />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                {{ __('Atualizar') }}
                            </x-button>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
