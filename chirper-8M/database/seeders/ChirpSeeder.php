<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class ChirpSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::take(3)->get();

        $bulos = [ // Cambia $memes a $bulos para claridad
            [
                'bulo' => 'Las mujeres conducen peor que los hombres',
                'texto' => 'Los datos de la DGT desmontan el mito: los hombres protagonizan el 80% de los accidentes mortales y el 90% de las infracciones por alcohol y drogas. Aunque las mujeres tienen accidentes leves en ciudad, su conducción es mucho más segura, responsable y menos costosa para las aseguradoras.',
            ],
            [
                'bulo' => 'Las mujeres han alcanzado en 2025 máximos históricos de ocupación, liderando sectores clave como la medicina, la biotecnología y la educación. Además, ocupan casi el 40% de los puestos directivos en España, demostrando que son el motor principal del crecimiento económico y la innovación científica actual.',
                'texto' => 'Las mujeres han alcanzado en 2025 máximos históricos de ocupación, liderando sectores clave como la medicina, la biotecnología y la educación. Además, ocupan casi el 40% de los puestos directivos en España, demostrando que son el motor principal del crecimiento económico y la innovación científica actual.',
            ],
            [
                'bulo' => 'La igualdad de género no es un capricho, sino un derecho fundamental que reconoce la dignidad y autonomía de la mujer. Minimizar sus experiencias o burlarse de ellas perpetúa injusticias y estereotipos dañinos. Empoderar a las mujeres significa respetar su voz, apoyar sus decisiones y valorar su contribución en todos los ámbitos de la vida.',
                'texto' => 'La igualdad de género no es un capricho, sino un derecho fundamental que reconoce la dignidad y autonomía de la mujer. Minimizar sus experiencias o burlarse de ellas perpetúa injusticias y estereotipos dañinos. Empoderar a las mujeres significa respetar su voz, apoyar sus decisiones y valorar su contribución en todos los ámbitos de la vida.',
            ],
        ];

        foreach ($bulos as $bulo) { // Cambia $memes a $bulos, $meme a $bulo
            $users->random()->chirps()->create([ // Cambia memes() a bulos()
                'bulo' => $bulo['bulo'],
                'mensaje' => $bulo['texto'],
            ]);
        }
    }
}
