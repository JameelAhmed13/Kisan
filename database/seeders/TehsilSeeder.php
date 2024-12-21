<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TehsilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $aryTehsils = [
            ["tehsilID" => 1, "name" =>'Chaman', "districtID" => 1],
            ["tehsilID" => 2, "name" =>'Shahrag',"districtID" => 2],
            ["tehsilID" => 3, "name" =>'Zarghoon Ghar', "districtID" =>2],
            ["tehsilID" =>4,  "name" => 'Dobandi', "districtID" =>3],
            ["tehsilID" =>5, "name" => 'Gulistan', "districtID" =>3],
            ["tehsilID" =>6, "name" => 'Barshore', "districtID" =>4],
            ["tehsilID" =>7, "name" => 'Bostan', "districtID" =>4],
            ["tehsilID" =>8, "name" => 'Huramzai', "districtID" =>4],
            ["tehsilID" =>9, "name" => 'Kakar khurasan', "districtID" =>10],
            ["tehsilID" =>10, "name" =>'Karezat', "districtID" =>4],
            ["tehsilID" =>11, "name" =>'Nana Sahib', "districtID" =>4],
            ["tehsilID" =>12, "name" =>'Saranan', "districtID" =>4],
            ["tehsilID" =>13, "name" =>'City', "districtID" =>5],
            ["tehsilID" =>14, "name" =>'KUCHLAK', "districtID" =>5],
            ["tehsilID" =>15, "name" =>'PANJPAI', "districtID" =>5],
            ["tehsilID" =>16, "name" =>'SADDAR', "districtID" =>5],
            ["tehsilID" =>17, "name" =>'SARYAAB', "districtID" =>5],
            ["tehsilID" =>18, "name" =>'Saryaab', "districtID" =>5],
            ["tehsilID" =>19, "name" =>'Luni', "districtID" =>6],
            ["tehsilID" =>20, "name" =>'Luni 2', "districtID" =>6],
            ["tehsilID" =>21, "name" =>'Luni', "districtID" =>6],
            ["tehsilID" =>22, "name" =>'Thal Chutyali', "districtID" =>6],
            ["tehsilID" =>23, "name" =>'Muslim Bagh', "districtID" =>7],
            ["tehsilID" =>24, "name" =>'Bori', "districtID" =>8],
            ["tehsilID" =>25, "name" =>'Makhter', "districtID" =>8],
            ["tehsilID" =>26, "name" =>'Sherani', "districtID" =>9],
            ["tehsilID" =>27, "name" =>'Kakar Khurasan.', "districtID" =>10],
            ["tehsilID" =>28, "name" =>'Sanjavi', "districtID" =>11],
            ["tehsilID" =>29, "name" =>'Gazg', "districtID" =>12],
            ["tehsilID" =>30, "name" =>'Johan', "districtID" =>12],
            ["tehsilID" =>31, "name" =>'Mangocher', "districtID" =>12],
            ["tehsilID" =>32, "name" =>'Patkin', "districtID" =>13],
            ["tehsilID" =>33, "name" =>'Sar', "districtID" =>13],
            ["tehsilID" =>34, "name" =>'Tohmulk', "districtID" =>13],
            ["tehsilID" =>35, "name" =>'Zehri', "districtID" =>14],
            ["tehsilID" =>36, "name" =>'Karkh', "districtID" =>14],
            ["tehsilID" =>37, "name" =>'Moola', "districtID" =>14],
            ["tehsilID" =>38, "name" =>'Naal', "districtID" =>14],
            ["tehsilID" =>39, "name" =>'Surab', "districtID" =>14],
            ["tehsilID" =>40, "name" =>'Zehri', "districtID" =>14],
            ["tehsilID" =>41, "name" =>'Dasht', "districtID" =>15],
            ["tehsilID" =>42, "name" =>'Kirdgap', "districtID" =>15],
            ["tehsilID" =>43, "name" =>'Dasht e Goran', "districtID" =>17],
            ["tehsilID" =>44, "name" =>'Gidder', "districtID" =>17],
            ["tehsilID" =>45, "name" =>'Mehr Abad', "districtID" =>17],
            ["tehsilID" =>46, "name" =>'Basima', "districtID" =>18],
            ["tehsilID" =>47, "name" =>'Mashkel', "districtID" =>18],
            ["tehsilID" =>48, "name" =>'Gishkore', "districtID" =>19],
            ["tehsilID" =>49, "name" =>'Jahoo', "districtID" =>19],
            ["tehsilID" =>50, "name" =>'Mashkai', "districtID" =>19],
            ["tehsilID" =>51, "name" =>'Suntsar', "districtID" =>20],
            ["tehsilID" =>52, "name" =>'Jiwani', "districtID" =>20],
            ["tehsilID" =>53, "name" =>'Ormara', "districtID" =>20],
            ["tehsilID" =>54, "name" =>'Pasni', "districtID" =>20],
            ["tehsilID" =>55, "name" =>'Bela', "districtID" =>21],
            ["tehsilID" =>56, "name" =>'Duregi', "districtID" =>21],
            ["tehsilID" =>57, "name" =>'Gadani', "districtID" =>21],
            ["tehsilID" =>58, "name" =>'Hub', "districtID" =>21],
            ["tehsilID" =>59, "name" =>'Kanraj', "districtID" =>21],
            ["tehsilID" =>60, "name" =>'Lakhra', "districtID" =>21],
            ["tehsilID" =>61, "name" =>'Layari', "districtID" =>21],
            ["tehsilID" =>62, "name" =>'Sonmiani', "districtID" =>21],
            ["tehsilID" =>63, "name" =>'Uthal', "districtID" =>21],
            ["tehsilID" =>64, "name" =>'Panjgur', "districtID" =>22],
            ["tehsilID" =>65, "name" =>'Paroome', "districtID" =>22],
            ["tehsilID" =>66, "name" =>'Dhadar.', "districtID" =>23],
            ["tehsilID" =>67, "name" =>'Bhag', "districtID" =>23],
            ["tehsilID" =>68, "name" =>'Dhadar', "districtID" =>23],
            ["tehsilID" =>69, "name" =>'Khattan', "districtID" =>23],
            ["tehsilID" =>70, "name" =>'MACH', "districtID" =>23],
            ["tehsilID" =>71, "name" =>'Sanni', "districtID" =>23],
            ["tehsilID" =>72, "name" =>'Kut Mundal', "districtID" =>24],
            ["tehsilID" =>73, "name" =>'Lehri', "districtID" =>24],
            ["tehsilID" =>74, "name" =>'Sangan', "districtID" =>24],
            ["tehsilID" =>75, "name" =>'Gandawah', "districtID" =>25],
            ["tehsilID" =>76, "name" =>'Baba Kot', "districtID" =>26],
            ["tehsilID" =>77, "name" =>'Chattar', "districtID" =>26],
            ["tehsilID" =>78, "name" =>'CHATTAR', "districtID" =>26],
            ["tehsilID" =>79, "name" =>'D M Jamali', "districtID" =>26],
            ["tehsilID" =>80, "name" =>'Dera Murad Jamali', "districtID" =>26],
            ["tehsilID" =>81, "name" =>'Landhi Shreef', "districtID" =>26],
            ["tehsilID" =>82, "name" =>'Tamboo', "districtID" =>32],
            ["tehsilID" =>83, "name" =>'Tamboo', "districtID" =>26],
            ["tehsilID" =>84, "name" =>'123', "districtID" =>26],
            ["tehsilID" =>85, "name" =>'UC- 14', "districtID" =>26],
            ["tehsilID" =>86, "name" =>'Gandakha', "districtID" =>27],
            ["tehsilID" =>87, "name" =>'JhatPat', "districtID" =>27],
            ["tehsilID" =>88, "name" =>'Sohbatpur 1', "districtID" =>28],
            ["tehsilID" =>89, "name" =>'DERGI', "districtID" =>28],
            ["tehsilID" =>90, "name" =>'Fareedabad', "districtID" =>28],
            ["tehsilID" =>91, "name" =>'Hairdin', "districtID" =>28],
            ["tehsilID" =>92, "name" =>'KHUDA E DAD', "districtID" =>28],
            ["tehsilID" =>93, "name" =>'Manjhi Pur', "districtID" =>28],
            ["tehsilID" =>94, "name" =>'MC', "districtID" =>28],
            ["tehsilID" =>95, "name" =>'NOOR PUR', "districtID" =>28],
            ["tehsilID" =>96, "name" =>'NOZ BAND', "districtID" =>28],
            ["tehsilID" =>97, "name" =>'Panhwer', "districtID" =>28],
            ["tehsilID" =>98, "name" =>'Saeed Muhammad Kandrani',"districtID" => 28],
            ["tehsilID" =>99, "name" =>'Sanhari', "districtID" =>28],
            ["tehsilID" =>100,"name" => 'Sub Tehsil Loti', "districtID" =>31],
            ["tehsilID" =>101,"name" => 'Tehsil Sui', "districtID" =>31],
            ["tehsilID" =>102,"name" => 'Maiwand', "districtID" =>32],
            ["tehsilID" =>103,"name" => 'Girsani', "districtID" =>32],
            ["tehsilID" =>104,"name" => 'Kahan', "districtID" =>32],
            ["tehsilID" =>105,"name" => 'Durg', "districtID" =>33],
            ["tehsilID" =>106,"name" => 'Kingri', "districtID" =>33],
            ["tehsilID" =>107,"name" => 'Saddar', "districtID" =>33],
            ["tehsilID" =>108,"name" => 'Tiar Essot', "districtID" =>33],
            ["tehsilID" =>109,"name" => 'Toisar', "districtID" =>33],
            ["tehsilID" =>110,"name" => 'Zimiri Plasin', "districtID" =>33],
            ["tehsilID" =>111,"name" => 'Harnai', "districtID" =>2],
            ["tehsilID" =>112,"name" => 'Killa Abdullah', "districtID" =>3],
            ["tehsilID" =>113,"name" => 'Pishin', "districtID" =>4],
            ["tehsilID" =>114,"name" => 'Duki', "districtID" =>6],
            ["tehsilID" =>115,"name" => 'Killa Saifullah', "districtID" =>7],
            ["tehsilID" =>116,"name" => 'Zhob', "districtID" =>10],
            ["tehsilID" =>117,"name" => 'Ziarat', "districtID" =>11],
            ["tehsilID" =>118,"name" => 'Kalat', "districtID" =>12],
            ["tehsilID" =>119,"name" => 'Kharan', "districtID" =>13],
            ["tehsilID" =>120,"name" => 'Sar Kharan', "districtID" =>13],
            ["tehsilID" =>121,"name" => 'Khuzdar', "districtID" =>14],
            ["tehsilID" =>122,"name" => 'Mastung', "districtID" =>15],
            ["tehsilID" =>123,"name" => 'Noshki', "districtID" =>16],
            ["tehsilID" =>124,"name" => 'Washuk', "districtID" =>18],
            ["tehsilID" =>125,"name" => 'Awaran', "districtID" =>19],
            ["tehsilID" =>126,"name" => 'Gwadar', "districtID" =>20],
            ["tehsilID" =>127,"name" => 'Sibi', "districtID" =>24],
            ["tehsilID" =>129,"name" => 'Sohbat Pur', "districtID" =>28],
            ["tehsilID" =>130,"name" => 'Usta Muhammad', "districtID" =>29],
            ["tehsilID" =>131,"name" => 'Barkhan', "districtID" =>30],
            ["tehsilID" =>132,"name" => 'Dera Bugti', "districtID" =>31],
            ["tehsilID" =>133,"name" => 'Kohlu', "districtID" =>32],
            ["tehsilID" =>134,"name" => 'Khanraj', "districtID" =>21],
            ["tehsilID" =>135,"name" => 'Mand', "districtID" =>35],
            ["tehsilID" =>136,"name" => 'Tump', "districtID" =>35],
            ["tehsilID" =>137,"name" => 'Turbat', "districtID" =>35],
            ["tehsilID" =>138,"name" => 'Balnigor', "districtID" =>35],
            ["tehsilID" =>139,"name" => 'Buleda', "districtID" =>35],
            ["tehsilID" =>140,"name" => 'Dasth', "districtID" =>35],
            ["tehsilID" =>141,"name" => 'Hoshab', "districtID" =>35],
            ["tehsilID" =>142,"name" => 'Zamuran', "districtID" =>35],
            ["tehsilID" =>143,"name" => 'Gayab', "districtID" =>35],
            ["tehsilID" =>144,"name" => 'Solband', "districtID" =>35],
            ["tehsilID" =>145,"name" => 'Dalbandin', "districtID" =>35],
            ["tehsilID" =>146,"name" => 'Nokundi', "districtID" =>35],
            ["tehsilID" =>147,"name" => 'Taftan', "districtID" =>35],
            ["tehsilID" =>148,"name" => 'Chahgai', "districtID" =>35],
            ["tehsilID" =>149,"name" => 'Nag', "districtID" =>18],
        ];

        foreach ($aryTehsils as $aryTehsil) {
            DB::table('tehsil')->insert([
                'tehsilID' => $aryTehsil['tehsilID'],
                'name' => $aryTehsil['name'],
                'districtID' => $aryTehsil['districtID'],
            ]);
        }
    }



}