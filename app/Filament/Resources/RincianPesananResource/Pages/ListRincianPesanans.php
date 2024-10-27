<?php

namespace App\Filament\Resources\RincianPesananResource\Pages;

use App\Filament\Resources\RincianPesananResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRincianPesanans extends ListRecords
{
    protected static string $resource = RincianPesananResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
