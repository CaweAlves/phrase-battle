<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            <button class="bg-blue-500 text-sm font-medium h-9 rounded-md px-3 text-white">Novo jogo</button>
        </h2>
    </x-slot>

    <div class="p-4 overflow-auto">
        <div class="flex items-center justify-between text-lg font-medium">
            <h3>Historico de Partidas</h3>
            <Button
                class="whitespace-nowrap text-sm font-medium bg-[#2563Eb] text-white hover:bg-sky-400 h-9 rounded-md px-3">
                Novo Jogo
            </Button>
        </div>

        <div class="mt-4 grid gap-4">
            <div class="rounded-lg border border-gray-300 shadow-sm">
                <div class="flex justify-between">
                    <div class="flex flex-col space-x-1.5 p-6">
                        <h3 class="whitespace-nowrap text-2xl font-semibold leading-none tracking-tight">Amigos do
                            Bairro</h3>
                        <p class="text-sm text-gray-600">24 de Agosto, 2024</p>
                    </div>
                    <div class="flex flex-col space-x-1.5 p-6">
                        <h3 class="whitespace-nowrap text-lg text-gray-800 font-medium leading-none tracking-tight">
                            Tema: Cotidiano</h3>
                        <p class="text-sm text-gray-600">Rounds: 5</p>
                    </div>
                </div>
                <div class="p-6">
                    <div class="grid gap-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <span class="relative flex shrink-0 overflow-hidden rounded-full w-8 h-8">
                                    <img class="aspect-square h-full w-full" alt="Icone de Jogador" src="">
                                </span>
                                <div class="py-0.5">
                                    <div>John Doe</div>
                                    <div class="text-xs text-gray-600">@johndoe</div>
                                </div>
                            </div>
                            <div class="text-sm font-medium">1° Lugar</div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <span class="relative flex shrink-0 overflow-hidden rounded-full w-8 h-8">
                                    <img class="aspect-square h-full w-full" alt="Icone de Jogador" src="">
                                </span>
                                <div class="py-0.5">
                                    <div>John Doe</div>
                                    <div class="text-xs text-gray-600">@johndoe</div>
                                </div>
                            </div>
                            <div class="text-sm font-medium">2° Lugar</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
