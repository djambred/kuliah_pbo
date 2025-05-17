<?php

namespace App\Filament\Admin\Resources\DrinkResource\Pages;

use App\Filament\Admin\Resources\DrinkResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDrinks extends ListRecords
{
    protected static string $resource = DrinkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
