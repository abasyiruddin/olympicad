<?php

namespace App\Filament\Widgets;

use App\Models\News;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Users', User::count())
                ->description('All registered users')
                ->descriptionIcon('heroicon-m-users')
                ->color('success')
                ->chart([7, 3, 4, 5, 6, 3, 5, 3]),
            
            Stat::make('Total News', News::count())
                ->description('All news articles')
                ->descriptionIcon('heroicon-m-newspaper')
                ->color('info')
                ->chart([3, 5, 7, 6, 5, 8, 10, 12]),
            
            Stat::make('Published News', News::where('status', 'published')->count())
                ->description('Live articles')
                ->descriptionIcon('heroicon-m-check-circle')
                ->color('warning')
                ->chart([2, 3, 4, 5, 4, 6, 7, 8]),
        ];
    }
}
