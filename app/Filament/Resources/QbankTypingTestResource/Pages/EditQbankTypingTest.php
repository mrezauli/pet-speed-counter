<?php

namespace App\Filament\Resources\QbankTypingTestResource\Pages;

use App\Filament\Resources\QbankTypingTestResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditQbankTypingTest extends EditRecord
{
    protected static string $resource = QbankTypingTestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
