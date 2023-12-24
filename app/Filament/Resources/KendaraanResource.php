<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KendaraanResource\Pages;
use App\Filament\Resources\KendaraanResource\RelationManagers;
use App\Models\Kendaraan;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Blade;

class KendaraanResource extends Resource
{
    protected static ?string $model = Kendaraan::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('Nama')->required(),
                        TextInput::make('No_Kendaraan')->required(),
                        TextInput::make('No_Kursi')->required(),
                        Select::make('Jenis_Kendaraan')
                            ->options([
                                'Bus class VIP'=>'Bus class VIP',
                                'Bus eksekutif'=>'Bus eksekutif',
                                'Bus high class VVIP'=>'Bus high class VVIP',
                                'Bus ekonomi AC'=>'Bus ekonomi AC'
                            ]),
                        Select::make('Tujuan')
                            ->options([
                                'Jakarta'=>'Jakarta',
                                'Bandung'=>'Bandung',
                                'Lintas Sumatra'=>'Lintas Sumatra',
                                'Surabaya'=>'Surabaya', 
                                'Bali'=>'Bali'
                            ]),    
                        TextInput::make('Harga_satuan'),    
                        
                                    
                                
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('Nama')->searchable(),
                TextColumn::make('No_Kendaraan')->searchable(),
                TextColumn::make('No_Kursi')->searchable(),
                TextColumn::make('Jenis_Kendaraan')->searchable(),
                TextColumn::make('Tujuan')->searchable(),
                TextColumn::make('Harga_satuan')->searchable(),
                
                    
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\Action::make('pdf') 
                    ->label('PDF')
                    ->color('success')
                    ->icon('heroicon-o-document-download')
                    ->url(fn (Kendaraan $record) => route('kendaraanpdf', $record))
                    ->openUrlInNewTab(),  
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);

            return $table
            ->actions([
                ViewAction::make()
                    ->form([
                        TextInput::make('title')
                            ->required()
                            ->maxLength(255),
                        // ...
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
            'index' => Pages\ListKendaraans::route('/'),
            'create' => Pages\CreateKendaraan::route('/create'),
            'edit' => Pages\EditKendaraan::route('/{record}/edit'),
        ];
    }    
}
