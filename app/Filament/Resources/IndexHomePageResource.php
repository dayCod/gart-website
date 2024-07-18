<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\IndexHomePage;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\IndexHomePageResource\Pages;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use App\Filament\Resources\IndexHomePageResource\RelationManagers;

class IndexHomePageResource extends Resource
{
    protected static ?string $model = IndexHomePage::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Index Home Page';

    protected static ?string $modelLabel = 'Index Home Page';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make([
                    Forms\Components\TextInput::make('hero_title')
                        ->label('Hero Title')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\Textarea::make('hero_description')
                        ->label('Hero Description')
                        ->rows(4)
                        ->required()
                        ->columnSpanFull(),
                    SpatieMediaLibraryFileUpload::make('index_hero_image')
                        ->image()
                        ->imageEditor()
                        ->imageEditorAspectRatios([
                            '16:9',
                            '4:3',
                            '1:1',
                        ])
                        ->label('Hero Image')
                        ->required()
                        ->openable()
                        ->downloadable()
                        ->columnSpanFull()
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('hero_title'),
                Tables\Columns\TextColumn::make('hero_description')
                    ->limit(50)
                    ->tooltip(function (TextColumn $column): ?string {
                        return strlen($column->getState()) <= $column->getCharacterLimit()
                            ? null
                            : $column->getState();
                    }),
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
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListIndexHomePages::route('/'),
            'create' => Pages\CreateIndexHomePage::route('/create'),
            'view' => Pages\ViewIndexHomePage::route('/{record}'),
            'edit' => Pages\EditIndexHomePage::route('/{record}/edit'),
        ];
    }
}
