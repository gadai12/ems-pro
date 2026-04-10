<?php

namespace App\Filament\Resources\Transactions\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;

class TransactionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('user_id')
                    ->relationship('user', 'name')
                    ->searchable()
                    ->required(),
                Select::make('category_id')
                    ->relationship('category', 'name')
                    ->searchable()
                    ->required(),
                TextInput::make('amount')
                    ->numeric()
                    ->prefix('$')
                    ->required(),
                DatePicker::make('date')
                    ->default(now())
                    ->required(),
                Select::make('type')
                    ->options([
                        'expense' => 'Expense',
                        'income' => 'Income',
                    ])
                    ->required(),
                Textarea::make('description')
                    ->columnSpanFull(),
            ]);
    }
}
