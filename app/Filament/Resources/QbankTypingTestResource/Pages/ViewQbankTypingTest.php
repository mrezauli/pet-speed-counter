<?php

namespace App\Filament\Resources\QbankTypingTestResource\Pages;

use App\Filament\Resources\QbankTypingTestResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewQbankTypingTest extends ViewRecord
{
    protected static string $resource = QbankTypingTestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
