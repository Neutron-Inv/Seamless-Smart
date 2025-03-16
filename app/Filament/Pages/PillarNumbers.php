<?php

namespace App\Filament\Pages;

use App\Models\Project;
use Filament\Pages\Page;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;
use Illuminate\Database\Eloquent\Builder;
use Filament\Notifications\Notification;

class PillarNumbers extends Page implements Tables\Contracts\HasTable
{
    use Tables\Concerns\InteractsWithTable;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static string $view = 'filament.pages.pillar-numbers';

    public static function getNavigationLabel(): string
    {
        return 'Pillar Numbers';
    }

    public function table(Table $table): Table
    {
        return $table
            ->query(Project::query())
            ->columns([
                TextColumn::make('id')->label('ID')->sortable(),
                TextColumn::make('pillar_nos')
                    ->label('Pillar Numbers')
                    ->formatStateUsing(function ($state) {
                        if (empty($state)) {
                            return '';
                        }
                        return implode(', ', explode(',', $state));
                    }),
                TextColumn::make('date_registered')->label('Date')->date(),
            ])
            ->filters([
                SelectFilter::make('year')
                    ->label('Select Year')
                    ->options($this->getYears())
                    ->query(function (Builder $query, $state) {
                        if ($state['value'] != NULL) { // Check if $state has a value
                            $query->whereYear('date_registered', $state);
                        }
                    }),

                SelectFilter::make('quarter')
                    ->label('Select Quarter')
                    ->options([
                        '1' => 'Q1 (Jan - Mar)',
                        '2' => 'Q2 (Apr - Jun)',
                        '3' => 'Q3 (Jul - Sep)',
                        '4' => 'Q4 (Oct - Dec)',
                    ])
                    ->query(function (Builder $query, $state) {
                        if ($state['value'] != NULL) { // Check if $state has a value
                            $query->whereRaw('QUARTER(date_registered) = ?', [$state]);
                        }
                    }),
            ])
            ->headerActions([
                Tables\Actions\Action::make('countPillars')
                    ->label('Count Pillar Numbers')
                    ->action(function (PillarNumbers $livewire) {
                        $totalPillars = $livewire->countTotalPillars($livewire->getTable()->getQuery()); // Pass the filtered query
                        Notification::make()
                            ->success()
                            ->title("Total Pillar Numbers (Filtered): {$totalPillars}")
                            ->send();
                    }),
            ])
            ->bulkActions([
                ExportBulkAction::make()
                    ->label('Export Data'),
            ]);
    }

    private function getYears(): array
    {
        return Project::selectRaw('YEAR(date_registered) as year')
            ->distinct()
            ->orderByDesc('year')
            ->pluck('year', 'year')
            ->toArray();
    }

    private function countTotalPillars(Builder $query): int // Accept the query builder
    {
        $projects = $query->get(); // Use the filtered query
        $totalPillars = 0;
        foreach ($projects as $project) {
            if (!empty($project->pillar_nos)) {
                $totalPillars += count(explode(',', $project->pillar_nos));
            }
        }
        return $totalPillars;
    }
}