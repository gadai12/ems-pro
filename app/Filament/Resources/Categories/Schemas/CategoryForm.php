<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\ColorPicker;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('icon')
                    ->maxLength(255),
                ColorPicker::make('color'),
                Select::make('type')
                    ->options([
                        'expense' => 'Expense',
                        'income' => 'Income',
                    ])
                    ->required(),
                Select::make('user_id')
                    ->relationship('user', 'name')
                    ->placeholder('Global / Admin only')
                    ->helperText('Leave empty to make this a global category for all users.'),
            ]);
    }
}
