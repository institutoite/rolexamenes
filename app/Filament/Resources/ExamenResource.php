<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExamenResource\Pages;
use App\Filament\Resources\ExamenResource\RelationManagers;
use App\Models\Examen;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\HtmlString;

class ExamenResource extends Resource
{
    protected static ?string $model = Examen::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('titulo')
                    ->required()
                    ->maxLength(255),
                Forms\Components\RichEditor::make('descripcion')
                    ->required()  // Puedes eliminar este si no es obligatorio
                    ->columnSpanFull(),
                Forms\Components\DateTimePicker::make('fecha')
                    ->required(),
                Forms\Components\Toggle::make('vigente')
                    ->required(),
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('titulo')
                    ->searchable(),
                    Tables\Columns\TextColumn::make('descripcion')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->formatStateUsing(function ($state) {
                        return new HtmlString($state);  // Usamos HtmlString directamente para permitir que se renderice HTML
                    }),
                Tables\Columns\TextColumn::make('fecha')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\IconColumn::make('vigente')
                ->boolean(),
                Tables\Columns\TextColumn::make('user.name')
                    ->numeric()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                    
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
            'index' => Pages\ListExamens::route('/'),
            'create' => Pages\CreateExamen::route('/create'),
            'edit' => Pages\EditExamen::route('/{record}/edit'),
        ];
    }
}
