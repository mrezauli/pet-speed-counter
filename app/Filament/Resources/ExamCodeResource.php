<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExamCodeResource\Pages;
use App\Filament\Resources\ExamCodeResource\RelationManagers;
use App\Models\ExamCode;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ExamCodeResource extends Resource
{
    protected static ?string $model = ExamCode::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('exam_code_name')
                    ->required()
                    ->maxLength(64),
                Forms\Components\TextInput::make('company_id')
                    ->numeric()
                    ->default(null),
                Forms\Components\TextInput::make('designation_id')
                    ->numeric()
                    ->default(null),
                Forms\Components\DatePicker::make('exam_date'),
                Forms\Components\TextInput::make('exam_type'),
                Forms\Components\TextInput::make('shift'),
                Forms\Components\TextInput::make('status'),
                Forms\Components\TextInput::make('created_by')
                    ->numeric()
                    ->default(null),
                Forms\Components\TextInput::make('updated_by')
                    ->numeric()
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('exam_code_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('company_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('designation_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('exam_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('exam_type'),
                Tables\Columns\TextColumn::make('shift'),
                Tables\Columns\TextColumn::make('status'),
                Tables\Columns\TextColumn::make('created_by')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('updated_by')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListExamCodes::route('/'),
            'create' => Pages\CreateExamCode::route('/create'),
            'view' => Pages\ViewExamCode::route('/{record}'),
            'edit' => Pages\EditExamCode::route('/{record}/edit'),
        ];
    }
}
