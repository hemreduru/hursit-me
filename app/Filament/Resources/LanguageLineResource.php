<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LanguageLineResource\Pages;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Spatie\TranslationLoader\LanguageLine;

class LanguageLineResource extends Resource
{
    protected static ?string $model = LanguageLine::class;

    protected static ?string $navigationIcon = 'heroicon-o-language';

    protected static ?string $navigationGroup = 'Settings';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('group')
                    ->required()
                    ->maxLength(255)
                    ->default('_json')
                    ->disabled(fn ($record) => $record !== null), // Disable editing group for existing
                Forms\Components\TextInput::make('key')
                    ->required()
                    ->maxLength(255)
                    ->disabled(fn ($record) => $record !== null), // Disable editing key for existing
                Forms\Components\KeyValue::make('text')
                    ->label('Translations')
                    ->keyLabel('Locale')
                    ->valueLabel('Translation')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('group')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('key')
                    ->searchable()
                    ->sortable()
                    ->wrap(),
                Tables\Columns\TextColumn::make('text')
                    ->label('Preview')
                    ->formatStateUsing(fn ($state) => is_array($state) ? json_encode($state) : $state)
                    ->limit(50),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('group')
                    ->options(fn () => LanguageLine::query()->distinct()->pluck('group', 'group')->toArray()),
            ])
            ->actions([
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
            'index' => Pages\ListLanguageLines::route('/'),
            'create' => Pages\CreateLanguageLine::route('/create'),
            'edit' => Pages\EditLanguageLine::route('/{record}/edit'),
        ];
    }
}
