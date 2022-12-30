<?php

namespace App\Filament\Resources\EmployeeResource\Widgets;

use App\Models\Country;
use App\Models\Employee;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class EmployeesStateOverview extends BaseWidget
{
    protected function getCards(): array
    {
        $us = Country::where('country_code', 'us')->withCount('employees')->first();
        $mx = Country::where('country_code', 'mx')->withCount('employees')->first();

        return [
            Card::make('All Employees', Employee::all()->count()),
            Card::make('Employees Us', $us->employees_count),
            Card::make('Average time on page', $us->employees_count),
        ];
    }
}
