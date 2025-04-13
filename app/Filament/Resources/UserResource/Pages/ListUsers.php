<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }

    // protected function getTableActions(): array
    // {
    //     return [
    //         Actions\Action::make('approve')
    //             ->label('Approve')
    //             ->color('success')
    //             ->visible(fn ($record) => $record->status !== 'approved')
    //             ->action(fn ($record) => $record->update(['status' => 'approved'])),

    //         Actions\Action::make('reject')
    //             ->label('Reject')
    //             ->color('danger')
    //             ->visible(fn ($record) => $record->status !== 'rejected')
    //             ->action(fn ($record) => $record->update(['status' => 'rejected'])),
    //     ];
    // }

    
}
