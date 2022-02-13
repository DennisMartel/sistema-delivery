<div class="app-card app-card-orders-table shadow-sm mb-3">
    <div class="app-card-header px-2 py-2">
        {{ $header_table }}
    </div>
    <div class="app-card-body">
        <div class="table-responsive">
            <table class="table app-table-hover mb-0 text-left">
                {{ $slot }}
            </table>
        </div>
    </div>
</div>