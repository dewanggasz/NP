<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PekerjaanResource\Pages;
use App\Filament\Resources\PekerjaanResource\RelationManagers;
use App\Models\Pekerjaan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Grid;
use Filament\Tables\Columns\DateColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\DateTimeColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Forms\Components\RichEditor;

class PekerjaanResource extends Resource
{
    protected static ?string $model = Pekerjaan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Lowongan Kerja';
    protected static ?string $modelLabel = 'Lowongan Kerja';
    
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(2)->schema([ // dua kolom
                    TextInput::make('role')->label('Judul Pekerjaan')->required(),
                    TextInput::make('location')->label('Lokasi')->default('Yogyakarta, Indonesia'),
                    Select::make('type')->label('Jenis Pekerjaan')->options([
                        'Full Time' => 'Full Time',
                        'Part Time' => 'Part Time',
                        'Internship' => 'Internship',
                        'Remote' => 'Remote',
                    ])->required(),
                    TextInput::make('category')->label('Kategori'),
                    TextInput::make('position')->label('Posisi'),
                    TextInput::make('salary')->label('Gaji'),
                    DatePicker::make('deadline')->label('Batas Akhir Pendaftaran'),
                    Textarea::make('cover_description')->label('Deskripsi Singkat'),
                ]),
                RichEditor::make('responsibilities')
                    ->disableToolbarButtons([
                        'blockquote',
                        'strike',
                        'attachFiles',
                    ])
                    ->label('Tanggung Jawab')
                    ->columnSpanFull(),
                RichEditor::make('education')
                    ->disableToolbarButtons([
                            'blockquote',
                            'strike',
                            'attachFiles',
                        ])
                    ->label('Kualifikasi Pendidikan')
                    ->columnSpanFull(),
                RichEditor::make('experience')
                    ->disableToolbarButtons([
                            'blockquote',
                            'strike',
                            'attachFiles',
                        ])
                    ->label('Pengalaman yang Dibutuhkan')
                    ->columnSpanFull(),
                RichEditor::make('benefits')
                    ->disableToolbarButtons([
                            'blockquote',
                            'strike',
                            'attachFiles',
                        ])
                    ->label('Keuntungan / Benefit')
                    ->columnSpanFull(),
                RichEditor::make('additional')
                    ->disableToolbarButtons([
                            'blockquote',
                            'strike',
                            'attachFiles',
                        ])
                    ->label('Informasi Tambahan')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('role')->label('Judul')->searchable()->sortable(),
                TextColumn::make('location')->label('Lokasi'),
                TextColumn::make('type')->label('Tipe'),
                TextColumn::make('deadline')
                    ->label('Deadline')
                    ->formatStateUsing(fn ($state) => \Carbon\Carbon::parse($state)->format('d-m-Y')), // Memformat tanggal
                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->formatStateUsing(fn ($state) => \Carbon\Carbon::parse($state)->format('d-m-Y H:i')), // Memformat tanggal dan waktu
            ])
            ->filters([
                SelectFilter::make('type')
                    ->label('Tipe Pekerjaan')
                    ->options([
                        'Full Time' => 'Full Time',
                        'Shifting' => 'Shifting',
                        'Intern' => 'Intern',
                        'Project Based' => 'Project Based',
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ])
            ->headerActions([
                
            ])
            ->defaultSort('created_at', 'desc');
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
            'index' => Pages\ListPekerjaans::route('/'),
            'create' => Pages\CreatePekerjaan::route('/create'),
            'edit' => Pages\EditPekerjaan::route('/{record}/edit'),
        ];
    }
}
