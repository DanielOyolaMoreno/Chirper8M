<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Chirps;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChirpSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::take(3)->get();

        $bulos = [ // Cambia $memes a $bulos para claridad
            [
                'url' => 'https://lh5.googleusercontent.com/proxy/T95LA4l2vP0GgqZnNYVdEwD_ZvcfsPEcndvNq3W8Vr3duhk1tby4U1LLt1AXYQtEu_Ylgz2qXThatllebhA_WrM8q0tvL1Nw0WAXbdaJ9Rqmk5E7n-akSD-rOLeUzqASqywncHxM669J7vlg2Gyfyoofk-R4',
                'texto' => 'Los datos de la DGT desmontan el mito: los hombres protagonizan el 80% de los accidentes mortales y el 90% de las infracciones por alcohol y drogas. Aunque las mujeres tienen accidentes leves en ciudad, su conducción es mucho más segura, responsable y menos costosa para las aseguradoras.',
            ],
            [
                'url' => 'https://gcdn.emol.cl/hombres/files/2015/07/machismo-2.jpg',
                'texto' => 'Las mujeres han alcanzado en 2025 máximos históricos de ocupación, liderando sectores clave como la medicina, la biotecnología y la educación. Además, ocupan casi el 40% de los puestos directivos en España, demostrando que son el motor principal del crecimiento económico y la innovación científica actual.',
            ],
            [
                'url' => 'https://i.pinimg.com/564x/8b/9a/7b/8b9a7bd303db6f89311d32f38ce92424.jpg',
                'texto' => "La igualdad de género no es un capricho, sino un derecho fundamental que reconoce la dignidad y autonomía de la mujer. Minimizar sus experiencias o burlarse de ellas perpetúa injusticias y estereotipos dañinos. Empoderar a las mujeres significa respetar su voz, apoyar sus decisiones y valorar su contribución en todos los ámbitos de la vida.",
            ],
        ];

        foreach ($bulos as $bulo) { // Cambia $memes a $bulos, $meme a $bulo
            $users->random()->chirps()->create([ // Cambia memes() a bulos()
                'image_url' => $bulo['url'], // Cambia meme_url a image_url
                'mensaje' => $bulo['texto'], // Cambia explicacion a mensaje
            ]);
        }
    }
}