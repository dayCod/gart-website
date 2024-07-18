<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\AboutUs;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\AboutUsResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

class AboutUsResource extends Resource
{
    protected static ?string $model = AboutUs::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'About Us';

    protected static ?string $modelLabel = 'About Us';

    protected static ?string $pluralLabel = 'About Us';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make([
                    Forms\Components\TextInput::make('title')
                        ->label('Title')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('background_title')
                        ->label('Background Title')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('sub_title')
                        ->label('Sub Title')
                        ->required()
                        ->maxLength(255),
                    SpatieMediaLibraryFileUpload::make('about_us_image')
                        ->image()
                        ->imageEditor()
                        ->imageEditorAspectRatios([
                            '16:9',
                            '4:3',
                            '1:1',
                        ])
                        ->label('About Us Image')
                        ->required()
                        ->openable()
                        ->downloadable()
                        ->columnSpanFull()
                ]),
                Section::make([
                    Repeater::make('stories')
                        ->schema([
                            RichEditor::make('content')
                                ->toolbarButtons([
                                    'bold',
                                    'italic',
                                    'underline',
                                ])
                                ->columnSpanFull()
                        ])
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('background_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sub_title')
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
            'index' => Pages\ListAboutUs::route('/'),
            'create' => Pages\CreateAboutUs::route('/create'),
            'view' => Pages\ViewAboutUs::route('/{record}'),
            'edit' => Pages\EditAboutUs::route('/{record}/edit'),
        ];
    }
}
