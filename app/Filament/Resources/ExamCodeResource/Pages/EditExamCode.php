<?php

namespace App\Filament\Resources\ExamCodeResource\Pages;

use App\Filament\Resources\ExamCodeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditExamCode extends EditRecord
{
    protected static string $resource = ExamCodeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
