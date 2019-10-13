<?php

use Illuminate\Database\Seeder;
use App\sexo;


class sexo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sexo= new sexo();
        $sexo->id=1;
        $sexo->sexo="Femenino";
        $sexo->save();

        $sexo= new sexo();
        $sexo->id=2;
        $sexo->sexo="Masculino";
        $sexo->save();
    }
}
