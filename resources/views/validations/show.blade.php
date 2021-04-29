<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Validações') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-6">
            <div>
                <button onclick="window.location.href = '{{ route("validations") }}'"
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
                        @foreach($validations as $validation)
                        <div class="text-2xl text-center mb-4">
                            {{ $validation->name }}
                        </div>

                        <div class="md:container md:mx-auto">
                            <div class="md:grid-cols-2 hover:bg-gray-100 md:space-y-0 space-y-1 p-2 border-b">
                                <p class="text-gray-600">
                                    <b>Ticket</b>
                                </p>
                                <p>
                                    {{ $validation->ticket }}
                                </p>
                            </div>
                            @if ($validation->cpf != null)
                            <div class="md:grid-cols-2 hover:bg-gray-100 md:space-y-0 space-y-1 p-2 border-b">
                                <p class="text-gray-600">
                                    <b>CPF</b>
                                </p>
                                <p>
                                    {{ $validation->cpf}}
                                </p>
                            </div>
                            @endif
                            @if ($validation->cnpj != null)
                            <div class="md:grid-cols-2 hover:bg-gray-100 md:space-y-0 space-y-1 p-2 border-b">
                                <p class="text-gray-600">
                                    <b>CNPJ</b>
                                </p>
                                <p>
                                        {{ $validation->cnpj }}
                                </p>
                            </div>
                            @endif
                            <div class="md:grid-cols-2 hover:bg-gray-100 md:space-y-0 space-y-1 p-2 border-b">
                                <p class="text-gray-600">
                                    <b>Telefone</b>
                                </p>
                                <p>
                                    {{ $validation->phone }}
                                </p>
                            </div>
                            <div class="md:grid-cols-2 hover:bg-gray-100 md:space-y-0 space-y-1 p-2 border-b">
                                <p class="text-gray-600">
                                    <b>Email</b>
                                </p>
                                <p>
                                    {{ $validation->email }}
                                </p>
                            </div>
                            <!-- Type -->
                            <div class="md:grid-cols-2 hover:bg-gray-100 md:space-y-0 space-y-1 p-2 border-b">
                                <p class="text-gray-600">
                                    <b>Modelo de Certificado</b>
                                </p>
                                <p>
                                    {{ $validation->type }}
                                </p>
                            </div>
                        </div>
                        <!-- Validity -->
                        <div class="md:grid-cols-2 hover:bg-gray-100 md:space-y-0 space-y-1 p-2 border-b">
                            <p class="text-gray-600">
                                <b>Validade</b>
                            </p>
                            <p>
                                {{ $validation->validity }}
                            </p>
                        </div>
                        <!-- Price -->
                        <div class="md:grid-cols-2 hover:bg-gray-100 md:space-y-0 space-y-1 p-2">
                            <p class="text-gray-600">
                                <b>Valor</b>
                            </p>
                            <p>
                                {{ $validation->price }}
                            </p>
                        </div>
                        <!-- Date -->
                        <div class="md:grid-cols-2 hover:bg-gray-100 md:space-y-0 space-y-1 p-2">
                            <p class="text-gray-600">
                                <b>Data de emissão</b>
                            </p>
                            <p>
                                {{ $validation->created_at->format('d/m/Y') }}
                            </p>
                        </div>
                </div>
                @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
