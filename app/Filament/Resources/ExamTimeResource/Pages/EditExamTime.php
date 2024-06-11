<?php

namespace App\Filament\Resources\ExamTimeResource\Pages;

use App\Filament\Resources\ExamTimeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditExamTime extends EditRecord
{
    protected static string $resource = ExamTimeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
