<?php

namespace App\Filament\Admin\Resources\FoodResource\Pages;

use App\Filament\Admin\Resources\FoodResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFood extends CreateRecord
{
    protected static string $resource = FoodResource::class;
}
