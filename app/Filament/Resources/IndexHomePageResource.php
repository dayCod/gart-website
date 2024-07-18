<?php

namespace App\Filament\Resources;

use App\Filament\Resources\IndexHomePageResource\Pages;
use App\Filament\Resources\IndexHomePageResource\RelationManagers;
use App\Models\IndexHomePage;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class IndexHomePageResource extends Resource
{
    protected static ?string $model = IndexHomePage::class;

    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static ?string $navigationLabel = 'Index Home Page';

    protected static ?string $modelLabel = 'Index Home Page';

    protected static ?string $navigationGroup = 'Setting';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make([
                    Forms\Components\TextInput::make('hero_title')
                        ->label('Hero Title')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('cta_whatsapp')
                        ->label('Whatsapp CTA Number')
                        ->prefix('+62')
                        ->required()
                        ->maxLength(255)
                        ->formatStateUsing(fn ($state): string => "62$state"),
                    Forms\Components\Textarea::make('hero_description')
                        ->label('Hero Description')
                        ->rows(4)
                        ->required()
                        ->columnSpanFull(),
                ])
                ->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('hero_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('cta_whatsapp')
                    ->searchable(),
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
