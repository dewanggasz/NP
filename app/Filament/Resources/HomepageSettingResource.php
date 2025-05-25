<?php

namespace App\Filament\Resources;

use Filament\Tables\Columns\ViewColumn;
use App\Filament\Resources\HomepageSettingResource\Pages;
use App\Filament\Resources\HomepageSettingResource\RelationManagers;
use App\Models\HomepageSetting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Resources\Pages\CreateRecord;



class HomepageSettingResource extends Resource
{
    protected static ?string $model = HomepageSetting::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    //Mengubah Nama Panel Homepage Setting
    protected static ?string $navigationLabel = 'Hero Content';
    protected static ?string $modelLabel = 'Hero Content';
    protected static ?string $pluralModelLabel = 'Hero Contents';

    public static function form(Form $form): Form
    {
        return $form->schema([
            FileUpload::make('hero_video_path')
                ->disk('public')
                ->directory('homepage')
                ->maxSize(10000)
                ->acceptedFileTypes(['video/mp4'])
                ->afterStateUpdated(function ($state, callable $set) {
                    $set('hero_video_name', basename($state));
                })
                ->dehydrated(), // ini penting juga


            TextInput::make('hero_video_name')
                ->label('Nama Video')
                ->maxLength(255)
                ->dehydrated(),

            FileUpload::make('hero_image_path')
                ->disk('public')
                ->directory('homepage')
                ->acceptedFileTypes(['image/png', 'image/jpg', 'image/jpeg'])
                ->afterStateUpdated(function ($state, callable $set) {
                    $set('hero_image_name', basename($state));
                })
                ->dehydrated(), // ini penting

            TextInput::make('hero_image_name')
                ->label('Nama Gambar')
                ->maxLength(255)
                ->dehydrated(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ViewColumn::make('hero_video_path') // kolom mana saja boleh, hanya trigger
                    ->label('Nama File')
                    ->view('filament.tables.columns.preview-file')
                    ->extraAttributes(['class' => 'w-40']) // opsional styling
                    ->getStateUsing(fn ($record) => $record), // ini penting: kirim data record

                TextColumn::make('format')
                    ->label('Format File')
                    ->getStateUsing(function ($record) {
                        $path = $record->hero_video_path ?? $record->hero_image_path;
                        return pathinfo($path, PATHINFO_EXTENSION);
                    }),

                TextColumn::make('updated_at')
                    ->label('Last Updated')
                    ->dateTime('d M Y H:i'),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(), // filter data yang dihapus (soft delete)
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

    public static function canCreate(): bool
    {
        return true; // hilangkan tombol "Create"
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHomepageSettings::route('/'),
            'create' => Pages\CreateHomepageSetting::route('/create'),
            'edit' => Pages\EditHomepageSetting::route('/{record}/edit'),
        ];
    }
}
