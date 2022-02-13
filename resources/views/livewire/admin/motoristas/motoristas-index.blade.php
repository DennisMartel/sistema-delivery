<div>
    <div class="row g-3 mb-4 align-items-center justify-content-between">
        <div class="col-auto">
            <h1 class="app-page-title mb-0">Motoristas</h1>
        </div>
    </div>

    <x-table-responsive>
        <x-slot name="header_table">
            <div class="row g-1 align-items-center">
                <div class="d-flex align-items-center w-auto">
                    Mostrar
                    <select wire:model="cant" class="form-select mx-1">
                        <option selected value="15">15</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                    Entradas
                </div>
                <form class="app-search-form mx-4" autocomplete="off">
                    <input type="text" wire:model="q" placeholder="Buscar" name="search" class="form-control search-input">
                    <button type="submit" class="btn search-btn btn-primary" value="Search">
                        <svg class="svg-inline--fa fa-search fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                            <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                        </svg>
                    </button>
                </form>
                <button class="btn ms-auto w-auto btn-success text-white">Crear usuario</button>
            </div>
            <!--//row-->
        </x-slot>

        <thead>
            <tr>
                <th class="cell" role="button" wire:click="order('name')">
                    Motorista 
                    <svg class="ms-2 float-end" width="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </th>
                <th class="cell" role="button" wire:click="order('id')">
                    Edad
                    <svg class="ms-2 float-end" width="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </th>
                <th class="cell">Acciones</th>
            </tr>
        </thead>
        <tbody wire:init="loadData">
            @forelse ($users as $user)
                <tr>
                    <td class="cell">
                        <div class="item p-3">
                            <div class="row gx-2 justify-content-between align-items-center">
                                <div class="col-auto">
                                    <img class="rounded-circle shadow-sm" width="40" height="40"
                                        src="{{ $user->profile_photo_url }}" alt="{{ $user->name }}">
                                </div>
                                <!--//col-->
                                <div class="col">
                                    <div class="info">
                                        <div class="desc">{{ $user->name }}</div>
                                        <div class="meta">{{ $user->email }}</div>
                                    </div>
                                </div>
                                <!--//col-->
                            </div>
                            <!--//row-->
                            <a class="link-mask" href="notifications.html"></a>
                        </div>
                    </td>
                    <td></td>
                    <td></td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">
                        <div class="d-flex justify-content-center py-2">
                            <div class="spinner-border text-success" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </x-table-responsive>
    @if (count($users) > 0)
        <nav class="app-pagination">
            <ul class="pagination justify-content-center">
                {{ $users->links() }}
            </ul>
        </nav>
    @endif

</div>
