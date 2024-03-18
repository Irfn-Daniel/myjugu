<?php

namespace Database\Seeders;

use App\Models\District;
use App\Models\LLG;
use App\Models\Province;
use App\Models\Village;
use App\Models\Ward;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // truncate table
        // Province::truncate();
        // District::truncate();
        // LLG::truncate();
        // Ward::truncate();
        // Village::truncate();

        $this->province();
        $this->district();
        $this->llg();
        $this->ward();
        $this->village();
    }

    private function province() {
        $provincelist = DB::table('province_list')
        ->select('province')
        ->groupBy('province')
        ->get();
        
        $insertData = [];

        foreach ($provincelist as $list) {
            array_push($insertData, [
                'name' => $list->province,
                'created_at' => now(),
            ]);
        }
        // insert data
        Province::insert($insertData);
    }

    private function district() {
        $provincelist = DB::table('province_list')
        ->select('district', 'province')
        ->where('district', '!=', null)
        ->groupBy('district', 'province')
        ->get();
        
        $insertData = [];

        foreach ($provincelist as $list) {
            $provinces = Province::where('name', $list->province)->first();
            array_push($insertData, [
                'province_id' => $provinces->id,
                'name' => $list->district,
                'created_at' => now(),
            ]);
        }
        $insertData = collect($insertData)->sortBy('province_id')->values()->all();

        // insert data
        District::insert($insertData);
    }

    private function llg() {
        $provincelist = DB::table('province_list')
        ->select('district', 'llg')
        ->where('llg', '!=', null)
        ->groupBy('district', 'llg')
        ->get();
        
        $insertData = [];

        foreach ($provincelist as $list) {
            $district = District::where('name', $list->district)->first();
            array_push($insertData, [
                'district_id' => $district->id,
                'name' => $list->llg,
                'created_at' => now(),
            ]);
        }
        $insertData = collect($insertData)->sortBy('district_id')->values()->all();

        // insert data
        LLG::insert($insertData);
    }

    private function ward() {
        $provincelist = DB::table('province_list')
        ->select('llg', 'ward')
        ->where('ward', '!=', null)
        ->groupBy('llg', 'ward')
        ->get();
        
        $insertData = [];

        foreach ($provincelist as $list) {
            $llg = LLG::where('name', $list->llg)->first();
            array_push($insertData, [
                'llg_id' => $llg->id,
                'name' => $list->ward,
                'created_at' => now(),
            ]);
        }
        $insertData = collect($insertData)->sortBy('llg_id')->values()->all();

        // insert data
        Ward::insert($insertData);
    }

    private function village() {
        $provincelist = DB::table('province_list')
        ->select('ward', 'village')
        ->where('village', '!=', null)
        ->groupBy('ward', 'village')
        ->get();
        
        $insertData = [];

        foreach ($provincelist as $list) {
            $ward = Ward::where('name', $list->ward)->first();
            array_push($insertData, [
                'ward_id' => $ward->id,
                'name' => $list->village,
                'created_at' => now(),
            ]);
        }
        $insertData = collect($insertData)->sortBy('ward_id')->values()->all();

        // insert data
        Village::insert($insertData);
    }
}
