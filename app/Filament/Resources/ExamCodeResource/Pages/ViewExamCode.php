<?php

namespace App\Filament\Resources\ExamCodeResource\Pages;

use App\Filament\Resources\ExamCodeResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewExamCode extends ViewRecord
{
    protected static string $resource = ExamCodeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
