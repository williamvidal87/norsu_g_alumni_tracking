<?php

namespace App\Livewire\AdminPanel\AdminDashBoard;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\DB; 

class AdminDashboard extends Component
{
    public function render()
    {
        $alumniData = User::where('role_id', 2)
                          ->select('year_graduate', DB::raw('count(*) as count'))
                          ->groupBy('year_graduate')
                          ->orderBy('year_graduate', 'asc')
                          ->get();
        $alumniData = $alumniData->map(function ($item) {
            return [
                'batch_year' => $item->year_graduate,
                'count' => $item->count
            ];
        });



        $alumniEmployedData = User::where('role_id', 2)
        ->select('year_graduate', DB::raw('count(*) as total_count'))
        ->groupBy('year_graduate')
        ->pluck('total_count', 'year_graduate')
        ->toArray();
        $employedUsersPerYear = User::where('role_id', 2)
        ->where('employment_status_id', 1)
        ->select('year_graduate', DB::raw('count(*) as employed_count'))
        ->groupBy('year_graduate')
        ->pluck('employed_count', 'year_graduate')
        ->toArray();
        $result = [];
        foreach ($alumniEmployedData as $year => $total) {
        $employed = $employedUsersPerYear[$year] ?? 0;
        $percentage = $total > 0 ? ($employed / $total) * 100 : 0;
        $result[] = [
        'batch_year' => $year,
        'percentage' => round($percentage, 2)
        ];
        }
        usort($result, function($a, $b) {
        return $a['batch_year'] <=> $b['batch_year'];
        });
        $alumniEmployedData=$result;


        return view('livewire.admin-panel.admin-dash-board.admin-dashboard',[
            'AlumniData'    =>  User::where('role_id',2)->get(),
            'AlumniUpdatedData'    =>  User::where('role_id',2)->whereNotNull('employment_status_id')->get(),
            'EmployedData'    =>  User::where('role_id',2)->where('employment_status_id',1)->get(),
            'UnEmployedData'    =>  User::where('role_id',2)->whereNotIn('employment_status_id',[1])->get(),
            'alumniData'    =>  $alumniData,
            'alumniEmployedData'    =>  $alumniEmployedData,
        ]);
    }
}
