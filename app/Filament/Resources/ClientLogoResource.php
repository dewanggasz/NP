<?php

namespace App\Filament\Resources;

use Filament\Tables\Columns\ViewColumn;
use App\Models\ClientLogo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use App\Filament\Resources\ClientLogoResource\Pages; // <— ini tambahan penting

class ClientLogoResource extends Resource
{
    protected static ?string $model = ClientLogo::class;
    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationLabel = 'Our Clients';
    protected static ?string $pluralModelLabel = 'Client Logos';

    public static function form(Form $form): Form
    {
        return $form->schema([
            FileUpload::make('logo_path')
                ->label('Upload Logo')
                ->disk('public')
                ->directory('clients')
                ->image()
                ->required()
                ->afterStateUpdated(fn ($state, callable $set) => $set('logo_name', basename($state)))
                ->dehydrated(),

            TextInput::make('logo_name')
                ->label('Nama File Logo')
                ->maxLength(255)
                ->dehydrated(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ViewColumn::make('logo_path')
                    // ->disk('public')
                    ->view('filament.tables.columns.preview-logo')
                    ->label('Logo')
                    ->extraAttributes(['class' => 'w-40'])
                    ->getStateUsing(fn ($record) => $record), // ini penting: kirim data record,
                    // ->circular(),
                
                TextColumn::make('logo_name')
                    ->label('Nama File')
                    ->wrap(),

                TextColumn::make('updated_at')
                    ->label('Last Updated')
                    ->dateTime('d M Y H:i'),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListClientLogos::route('/'),
            'create' => Pages\CreateClientLogo::route('/create'),
            'edit' => Pages\EditClientLogo::route('/{record}/edit'),
        ];
    }
}
