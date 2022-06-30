<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Mannschaft;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        DB::table('mannschafts')->insert(['Name'=>'Katar', 'Code'=>'QAT', 'Flagge'=>'ger.png', 'group'=>'A']);
        DB::table('mannschafts')->insert(['Name'=>'Ecuador', 'Code'=>'ECU', 'Flagge'=>'ger.png', 'group'=>'A']);
        DB::table('mannschafts')->insert(['Name'=>'Senegal', 'Code'=>'SEN', 'Flagge'=>'ger.png', 'group'=>'A']);
        DB::table('mannschafts')->insert(['Name'=>'Niederlande', 'Code'=>'NED', 'Flagge'=>'ger.png', 'group'=>'A']);

        DB::table('mannschafts')->insert(['Name'=>'England', 'Code'=>'ENG', 'Flagge'=>'ger.png', 'group'=>'B']);
        DB::table('mannschafts')->insert(['Name'=>'Iran', 'Code'=>'IRN', 'Flagge'=>'ger.png', 'group'=>'B']);
        DB::table('mannschafts')->insert(['Name'=>'USA', 'Code'=>'USA', 'Flagge'=>'ger.png', 'group'=>'B']);
        DB::table('mannschafts')->insert(['Name'=>'Wales', 'Code'=>'WAL', 'Flagge'=>'ger.png', 'group'=>'B']);

        DB::table('mannschafts')->insert(['Name'=>'Argentinien', 'Code'=>'ARG', 'Flagge'=>'ger.png', 'group'=>'C']);
        DB::table('mannschafts')->insert(['Name'=>'Saudi-Arabien', 'Code'=>'KSA', 'Flagge'=>'ger.png', 'group'=>'C']);
        DB::table('mannschafts')->insert(['Name'=>'Mexiko', 'Code'=>'MEX', 'Flagge'=>'ger.png', 'group'=>'C']);
        DB::table('mannschafts')->insert(['Name'=>'Polen', 'Code'=>'POL', 'Flagge'=>'ger.png', 'group'=>'C']);

        DB::table('mannschafts')->insert(['Name'=>'Frankreich', 'Code'=>'FRA', 'Flagge'=>'ger.png', 'group'=>'D']);
        DB::table('mannschafts')->insert(['Name'=>'Australien', 'Code'=>'AUS', 'Flagge'=>'ger.png', 'group'=>'D']);
        DB::table('mannschafts')->insert(['Name'=>'Dänemark', 'Code'=>'DEN', 'Flagge'=>'ger.png', 'group'=>'D']);
        DB::table('mannschafts')->insert(['Name'=>'Tunesien', 'Code'=>'TUN', 'Flagge'=>'ger.png', 'group'=>'D']);

        DB::table('mannschafts')->insert(['Name'=>'Spanien', 'Code'=>'ESP', 'Flagge'=>'ger.png', 'group'=>'E']);
        DB::table('mannschafts')->insert(['Name'=>'Costa Rica', 'Code'=>'CRC', 'Flagge'=>'ger.png', 'group'=>'E']);
        DB::table('mannschafts')->insert(['Name'=>'Deutschland', 'Code'=>'GER', 'Flagge'=>'ger.png', 'group'=>'E']);
        DB::table('mannschafts')->insert(['Name'=>'Japan', 'Code'=>'JPN', 'Flagge'=>'ger.png', 'group'=>'E']);

        DB::table('mannschafts')->insert(['Name'=>'Belgien', 'Code'=>'BEL', 'Flagge'=>'ger.png', 'group'=>'F']);
        DB::table('mannschafts')->insert(['Name'=>'Kanada', 'Code'=>'CAN', 'Flagge'=>'ger.png', 'group'=>'F']);
        DB::table('mannschafts')->insert(['Name'=>'Marokko', 'Code'=>'MAR', 'Flagge'=>'ger.png', 'group'=>'F']);
        DB::table('mannschafts')->insert(['Name'=>'Kroatien', 'Code'=>'CRO', 'Flagge'=>'ger.png', 'group'=>'F']);

        DB::table('mannschafts')->insert(['Name'=>'Brasilien', 'Code'=>'BRA', 'Flagge'=>'ger.png', 'group'=>'G']);
        DB::table('mannschafts')->insert(['Name'=>'Serbien', 'Code'=>'SRB', 'Flagge'=>'ger.png', 'group'=>'G']);
        DB::table('mannschafts')->insert(['Name'=>'Schweiz', 'Code'=>'SUI', 'Flagge'=>'ger.png', 'group'=>'G']);
        DB::table('mannschafts')->insert(['Name'=>'Kamerun', 'Code'=>'CMR', 'Flagge'=>'ger.png', 'group'=>'G']);

        DB::table('mannschafts')->insert(['Name'=>'Portugal', 'Code'=>'POR', 'Flagge'=>'ger.png', 'group'=>'H']);
        DB::table('mannschafts')->insert(['Name'=>'Ghana', 'Code'=>'GHA', 'Flagge'=>'ger.png', 'group'=>'H']);
        DB::table('mannschafts')->insert(['Name'=>'Uruguay', 'Code'=>'URU', 'Flagge'=>'ger.png', 'group'=>'H']);
        DB::table('mannschafts')->insert(['Name'=>'Südkorea', 'Code'=>'KOR', 'Flagge'=>'ger.png', 'group'=>'H']);



        DB::table('spiels') ->insert(['heim_id' => '3', 'gast_id' => '4' , 'group' => 'A' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-21 11:00:00' , 'spielort' => 'al-Thumama Stadium']);
        DB::table('spiels') ->insert(['heim_id' => '5', 'gast_id' => '6' , 'group' => 'B' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-21 14:00:00' , 'spielort' => 'Khalifa International Stadium']);
        DB::table('spiels') ->insert(['heim_id' => '1', 'gast_id' => '2' , 'group' => 'A' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-21 17:00:00' , 'spielort' => 'al-Bayt Stadium']);
        DB::table('spiels') ->insert(['heim_id' => '7', 'gast_id' => '8' , 'group' => 'B' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-21 20:00:00' , 'spielort' => 'Ahmed bin Ali Stadium']);
        DB::table('spiels') ->insert(['heim_id' => '9', 'gast_id' => '10' , 'group' => 'C' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-22 11:00:00' , 'spielort' => 'Lusail Stadium']);
        DB::table('spiels') ->insert(['heim_id' => '15', 'gast_id' => '16' , 'group' => 'D' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-22 14:00:00' , 'spielort' => 'Education City Stadium']);
        DB::table('spiels') ->insert(['heim_id' => '11', 'gast_id' => '12' , 'group' => 'C' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-22 17:00:00' , 'spielort' => 'Stadium 974']);
        DB::table('spiels') ->insert(['heim_id' => '13', 'gast_id' => '14' , 'group' => 'D' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-22 20:00:00' , 'spielort' => 'al-Janoub Stadium']);
        DB::table('spiels') ->insert(['heim_id' => '23', 'gast_id' => '24' , 'group' => 'F' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-23 11:00:00' , 'spielort' => 'al-Bayt Stadium']);
        DB::table('spiels') ->insert(['heim_id' => '19', 'gast_id' => '20' , 'group' => 'E' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-23 14:00:00' , 'spielort' => 'Khalifa International Stadium']);
        DB::table('spiels') ->insert(['heim_id' => '17', 'gast_id' => '18' , 'group' => 'E' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-23 17:00:00' , 'spielort' => 'al-Thumama Stadium']);
        DB::table('spiels') ->insert(['heim_id' => '21', 'gast_id' => '22' , 'group' => 'F' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-23 20:00:00' , 'spielort' => 'Ahmed bin Ali Stadium']);
        DB::table('spiels') ->insert(['heim_id' => '27', 'gast_id' => '28' , 'group' => 'G' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-24 11:00:00' , 'spielort' => 'al-Janoub Stadium']);
        DB::table('spiels') ->insert(['heim_id' => '31', 'gast_id' => '31' , 'group' => 'H' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-24 14:00:00' , 'spielort' => 'Education City Stadium']);
        DB::table('spiels') ->insert(['heim_id' => '28', 'gast_id' => '29' , 'group' => 'H' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-24 17:00:00' , 'spielort' => 'Stadium 974']);
        DB::table('spiels') ->insert(['heim_id' => '25', 'gast_id' => '26' , 'group' => 'G' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-24 20:00:00' , 'spielort' => 'Lusail Stadium']);
        DB::table('spiels') ->insert(['heim_id' => '8', 'gast_id' => '6' , 'group' => 'B' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-25 11:00:00' , 'spielort' => 'Ahmed bin Ali Stadium']);
        DB::table('spiels') ->insert(['heim_id' => '1', 'gast_id' => '3' , 'group' => 'A' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-25 14:00:00' , 'spielort' => 'al-Thumama-Stadium']);
        DB::table('spiels') ->insert(['heim_id' => '4', 'gast_id' => '2' , 'group' => 'A' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-25 17:00:00' , 'spielort' => 'Khalifa International Stadium']);
        DB::table('spiels') ->insert(['heim_id' => '5', 'gast_id' => '7' , 'group' => 'B' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-25 20:00:00' , 'spielort' => 'al-Bayt Stadium']);
        DB::table('spiels') ->insert(['heim_id' => '16', 'gast_id' => '14' , 'group' => 'D' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-26 11:00:00' , 'spielort' => 'al-Janoub Stadium']);
        DB::table('spiels') ->insert(['heim_id' => '12', 'gast_id' => '10' , 'group' => 'C' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-26 14:00:00' , 'spielort' => 'Education City Stadium']);
        DB::table('spiels') ->insert(['heim_id' => '13', 'gast_id' => '15' , 'group' => 'D' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-26 17:00:00' , 'spielort' => 'Stadium 974']);
        DB::table('spiels') ->insert(['heim_id' => '9', 'gast_id' => '11' , 'group' => 'C' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-26 20:00:00' , 'spielort' => 'Lusail Stadium']);
        DB::table('spiels') ->insert(['heim_id' => '18', 'gast_id' => '20' , 'group' => 'E' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-27 11:00:00' , 'spielort' => 'Ahmed bin Ali Stadium']);
        DB::table('spiels') ->insert(['heim_id' => '23', 'gast_id' => '21' , 'group' => 'F' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-27 14:00:00' , 'spielort' => 'al-Thumama Stadium']);
        DB::table('spiels') ->insert(['heim_id' => '24', 'gast_id' => '22' , 'group' => 'F' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-27 17:00:00' , 'spielort' => 'Khalifa International Stadium']);
        DB::table('spiels') ->insert(['heim_id' => '17', 'gast_id' => '19' , 'group' => 'E' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-27 20:00:00' , 'spielort' => 'al-Bayt Stadium']);
        DB::table('spiels') ->insert(['heim_id' => '28', 'gast_id' => '26' , 'group' => 'G' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-28 11:00:00' , 'spielort' => 'al-Janoub Stadium']);
        DB::table('spiels') ->insert(['heim_id' => '32', 'gast_id' => '30' , 'group' => 'H' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-28 14:00:00' , 'spielort' => 'Education City Stadium']);
        DB::table('spiels') ->insert(['heim_id' => '25', 'gast_id' => '27' , 'group' => 'G' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-28 17:00:00' , 'spielort' => 'Stadium 974']);
        DB::table('spiels') ->insert(['heim_id' => '29', 'gast_id' => '31' , 'group' => 'H' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-28 20:00:00' , 'spielort' => 'Lusail Stadium']);
        DB::table('spiels') ->insert(['heim_id' => '4', 'gast_id' => '1' , 'group' => 'A' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-29 16:00:00' , 'spielort' => 'al-Bayt Stadium']);
        DB::table('spiels') ->insert(['heim_id' => '2', 'gast_id' => '3' , 'group' => 'A' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-29 16:00:00' , 'spielort' => 'Khalifa International Stadium']);
        DB::table('spiels') ->insert(['heim_id' => '6', 'gast_id' => '7' , 'group' => 'B' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-29 20:00:00' , 'spielort' => 'al-Thumama Stadium']);
        DB::table('spiels') ->insert(['heim_id' => '8', 'gast_id' => '5' , 'group' => 'B' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-29 20:00:00' , 'spielort' => 'Ahmed bin Ali Stadium']);
        DB::table('spiels') ->insert(['heim_id' => '16', 'gast_id' => '13' , 'group' => 'D' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-30 16:00:00' , 'spielort' => 'Education City Stadium']);
        DB::table('spiels') ->insert(['heim_id' => '14', 'gast_id' => '15' , 'group' => 'D' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-30 16:00:00' , 'spielort' => 'al-Janoub Stadium']);
        DB::table('spiels') ->insert(['heim_id' => '10', 'gast_id' => '11' , 'group' => 'C' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-30 20:00:00' , 'spielort' => 'Lusail Stadium']);
        DB::table('spiels') ->insert(['heim_id' => '9', 'gast_id' => '12' , 'group' => 'C' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-11-30 20:00:00' , 'spielort' => 'Stadium 974']);
        DB::table('spiels') ->insert(['heim_id' => '22', 'gast_id' => '23' , 'group' => 'F' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-12-01 16:00:00' , 'spielort' => 'al-Thumama Stadium']);
        DB::table('spiels') ->insert(['heim_id' => '24', 'gast_id' => '21' , 'group' => 'F' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-12-01 16:00:00' , 'spielort' => 'Ahmed bin Ali Stadium']);
        DB::table('spiels') ->insert(['heim_id' => '18', 'gast_id' => '19' , 'group' => 'E' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-12-01 20:00:00' , 'spielort' => 'al-Bayt Stadium']);
        DB::table('spiels') ->insert(['heim_id' => '20', 'gast_id' => '17' , 'group' => 'E' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-12-01 20:00:00' , 'spielort' => 'Khalifa International Stadium']);
        DB::table('spiels') ->insert(['heim_id' => '30', 'gast_id' => '31' , 'group' => 'H' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-12-02 16:00:00' , 'spielort' => 'al-Janoub Stadium']);
        DB::table('spiels') ->insert(['heim_id' => '32', 'gast_id' => '29' , 'group' => 'H' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-12-02 16:00:00' , 'spielort' => 'Education City Stadium']);
        DB::table('spiels') ->insert(['heim_id' => '26', 'gast_id' => '27' , 'group' => 'G' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-12-02 20:00:00' , 'spielort' => 'Stadium 974']);
        DB::table('spiels') ->insert(['heim_id' => '28', 'gast_id' => '25' , 'group' => 'G' , 'tore_heim' => '0' , 'tore_gast' => '0' , 'spielzeit' => '2022-12-02 20:00:00' , 'spielort' => 'Lusail Stadium']);
    
        
    }
}

