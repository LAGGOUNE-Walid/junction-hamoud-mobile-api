<?php

namespace App\Http\Livewire;

use App\Models\Report;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class ReportTable extends DataTableComponent {

    public function columns(): array {
        return [
            Column::make('User', "user.name")->searchable(),
            Column::make('Product', "product_id"),
            Column::make('Coordinates', "coordinates"),
            Column::make('Location', "location")->searchable(),
            Column::make('Date', "created_at")->sortable(),
        ];
    }

    public function query(): Builder
    {
        return Report::query();
    }
}
