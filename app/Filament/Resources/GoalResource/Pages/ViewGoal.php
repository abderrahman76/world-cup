<?php

namespace App\Filament\Resources\GoalResource\Pages;

use App\Filament\Resources\GoalResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewGoal extends ViewRecord
{
    protected static string $resource = GoalResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
