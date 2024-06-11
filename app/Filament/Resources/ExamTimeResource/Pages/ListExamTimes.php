<?php

namespace App\Filament\Resources\ExamTimeResource\Pages;

use App\Filament\Resources\ExamTimeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListExamTimes extends ListRecords
{
    protected static string $resource = ExamTimeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
