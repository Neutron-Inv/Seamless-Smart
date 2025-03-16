<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use Carbon\Carbon;
use App\Models\Project; // Replace with your actual model

class PillarNumbersQuarterlyCount extends BaseWidget
{
    protected static ?int $sort = 1; // Order of the widget

    protected function getCards(): array
    {
        // Get the start and end of the current quarter
        $startOfQuarter = Carbon::now()->firstOfQuarter();
        $endOfQuarter = Carbon::now()->lastOfQuarter();

        // Count the total pillar numbers used in the current quarter
        $pillarCount = Project::whereBetween('date_registered', [$startOfQuarter, $endOfQuarter])
                ->get()
                ->sum(fn($model) => count(explode(',', $model->pillar_nos))); // Modify this if pillar_nos is stored as an array or JSON

        return [
            Card::make('Pillars Used This Quarter', $pillarCount)
                ->description('Total pillars used')
                ->url(route('filament.admin.pages.pillar-numbers'))
                ->color('primary'), // You can change the color
        ];
    }
}
