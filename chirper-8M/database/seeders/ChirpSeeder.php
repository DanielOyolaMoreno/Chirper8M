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
                'bulo' => 'Las mujeres exageran el acoso',
                'texto' => 'Más del 90% de las mujeres han sufrido acoso verbal o físico alguna vez. La mayoría no denuncia. Si fuera exageración, las cifras no serían tan constantes en todos los países.',
            ],
            [
                'bulo' => 'Las mujeres denuncian falso para aprovecharse',
                'texto' => 'Las denuncias falsas por violencia sexual o de género no llegan ni al 0,1–0,3%. En cambio, la mayoría de agresiones ni siquiera se denuncian.',
            ],
            [
                'bulo' => 'Las mujeres cobran igual que los hombres por el mismo trabajo',
                'texto' => 'En España, las mujeres cobran de media un 23% menos que los hombres. La brecha salarial no se explica solo por diferencias en formación, experiencia o tipo de contrato. Incluso en puestos idénticos, las mujeres ganan menos.',
            ],
            [
                'bulo' => 'Las mujeres tienen más privilegios legales que los hombres',
                'texto' => 'Las leyes de igualdad buscan corregir desigualdades históricas. No otorgan privilegios, sino que promueven la igualdad de oportunidades y protegen a quienes están en desventaja.',
            ],
            [
                'bulo' => 'Las mujeres son menos competentes en trabajos técnicos y científicos',
                'texto' => 'Numerosos estudios demuestran que no hay diferencias innatas en capacidad intelectual entre hombres y mujeres. Las diferencias en representación se deben a factores sociales y culturales, no a capacidades.',
            ],
            [
                'bulo' => 'Las mujeres son más emocionales e irracionales que los hombres',
                'texto' => 'Las investigaciones en neurociencia muestran que hombres y mujeres procesan las emociones de manera similar. Las diferencias percibidas son resultado de estereotipos y expectativas sociales.',
            ],
            [
                'bulo' => 'Las mujeres no son aptas para roles de liderazgo',
                'texto' => 'Estudios indican que las mujeres líderes suelen ser tan efectivas como los hombres. La falta de representación femenina en altos cargos se debe a barreras estructurales y sesgos de género, no a falta de capacidad.',
            ],
            [
                'bulo' => 'Las mujeres prefieren trabajos menos exigentes',
                'texto' => 'Las elecciones profesionales de las mujeres están influenciadas por normas sociales y responsabilidades familiares. Muchas mujeres optan por carreras menos remuneradas debido a la falta de apoyo para equilibrar trabajo y vida personal.',
            ],
            [
                'bulo' => 'Las mujeres son menos interesadas en la política',
                'texto' => 'La participación política de las mujeres ha aumentado significativamente. Las barreras culturales y estructurales han limitado su participación histórica, pero el interés y la implicación están en aumento.',
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
