<?php

namespace App\Filament\Admin\Resources\DrinkResource\Pages;

use App\Filament\Admin\Resources\DrinkResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDrink extends EditRecord
{
    protected static string $resource = DrinkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
