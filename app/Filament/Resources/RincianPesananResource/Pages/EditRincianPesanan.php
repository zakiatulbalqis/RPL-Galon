<?php

namespace App\Filament\Resources\RincianPesananResource\Pages;

use App\Filament\Resources\RincianPesananResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRincianPesanan extends EditRecord
{
    protected static string $resource = RincianPesananResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
