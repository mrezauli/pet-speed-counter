<?php

namespace App\Filament\Resources\ExamCodeResource\Pages;

use App\Filament\Resources\ExamCodeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListExamCodes extends ListRecords
{
    protected static string $resource = ExamCodeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
