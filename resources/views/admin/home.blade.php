<x-admin-layout>
    <h1 class="app-page-title">Panel administrativo</h1>

    <div class="row g-2 mb-4">
        <x-card-panel>
            <x-slot name="title">Pedidos</x-slot>
            <x-slot name="data">10</x-slot>
        </x-card-panel>

        <x-card-panel>
            <x-slot name="title">Vehiculos</x-slot>
            <x-slot name="data">4</x-slot>
        </x-card-panel>

        <x-card-panel>
            <x-slot name="title">motoristas</x-slot>
            <x-slot name="data">2</x-slot>
        </x-card-panel>
        
        <x-card-panel>
            <x-slot name="title">Rutas</x-slot>
            <x-slot name="data">1</x-slot>
        </x-card-panel>
    </div>
    <!--//row-->


</x-admin-layout>
