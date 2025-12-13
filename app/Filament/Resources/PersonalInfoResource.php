<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PersonalInfoResource\Pages;
use App\Filament\Resources\PersonalInfoResource\RelationManagers;
use App\Models\PersonalInfo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Resources\Concerns\Translatable;

class PersonalInfoResource extends Resource
{
    use Translatable;

    protected static ?string $model = PersonalInfo::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('full_name')
                    ->maxLength(255),
                Forms\Components\TextInput::make('hero_title'),
                Forms\Components\RichEditor::make('about_text'),
                Forms\Components\TextInput::make('cv_file')
                    ->maxLength(255),
                Forms\Components\FileUpload::make('avatar_image')
                    ->image(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('full_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('cv_file')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('avatar_image'),
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
            'index' => Pages\ListPersonalInfos::route('/'),
            'create' => Pages\CreatePersonalInfo::route('/create'),
            'edit' => Pages\EditPersonalInfo::route('/{record}/edit'),
        ];
    }
}
