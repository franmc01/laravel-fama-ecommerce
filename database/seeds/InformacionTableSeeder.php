<?php

use App\Informacion;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class InformacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pageinfo= new Informacion();
        $pageinfo->celular='0985002808';
        $pageinfo->telefono='0985002808';
        $pageinfo->correo='anyomoal@hotmail.com';
        $pageinfo->facebook='https://www.facebook.com/yoelangel.moreiraalava';
        $pageinfo->instagram='https://www.instagram.com/iamfrancis98/';
        $pageinfo->twitter='https://twitter.com/GpsFrancisco';
        $pageinfo->horariosemana_abrir=Carbon::createFromTime(8,0,0)->format('H:i');
        $pageinfo->horariosemana_cerrar=Carbon::createFromTime(17,0,0)->format('H:i');
        $pageinfo->horariofinsemana_abrir=Carbon::createFromTime(8,0,0)->format('H:i');
        $pageinfo->horariofinsemana_cerrar=Carbon::createFromTime(16,0,0)->format('H:i');
        $pageinfo->save();
    }
}
