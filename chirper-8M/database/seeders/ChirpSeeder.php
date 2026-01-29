<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class ChirpSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::take(3)->get();

        $bulos = [
            [
                'bulo' => 'Las mujeres conducen peor que los hombres',
                'texto' => 'Datos DGT: l hombres causan 80% de accidentes mortales y 90% de infracciones por drogas/alcohol. Aunque ellas tienen golpes leves en ciudad, su conducción es más segura y barata para las aseguradoras.',
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
                'texto' => 'No son privilegios, es justicia. El Art. 9.2 de la Constitución obliga a remover obstáculos para una igualdad real. Las acciones positivas compensan desventajas de partida históricas y estructurales.',
            ],
            [
                'bulo' => 'Las mujeres son menos competentes en trabajos técnicos y científicos',
                'texto' => 'Falso. En España, las mujeres obtienen el 54% de los títulos universitarios con mejor rendimiento medio (Min. Universidades). La brecha en STEM es cultural: a igual capacidad, los estereotipos alejan a las niñas de la ciencia.',
            ],
            [
                'bulo' => 'Las mujeres son más emocionales e irracionales que los hombres',
                'texto' => 'Meta-análisis de estudios cerebrales (Univ. Tel Aviv) no hallaron dimorfismo sexual claro en cerebros humanos. La supuesta "irracionalidad" es un prejuicio histórico para deslegitimar su criterio.',
            ],
            [
                'bulo' => 'Las mujeres no son aptas para roles de liderazgo',
                'texto' => 'Error económico. El Peterson Institute (22.000 empresas) probó que pasar de 0% al 30% de mujeres directivas aumenta un 15% la rentabilidad. El liderazgo diverso es más eficiente y rentable.',
            ],
            [
                'bulo' => 'Las mujeres prefieren trabajos menos exigentes',
                'texto' => 'No es preferencia, es carga de cuidados. El 94% de las personas que no buscan empleo por cuidar a dependientes son mujeres (EPA). La falta de corresponsabilidad frena sus carreras.',
            ],
            [
                'bulo' => 'Las mujeres son menos interesadas en la política',
                'texto' => 'Falso. La ONU estima que las mujeres son el 26% de parlamentarios mundiales (subiendo desde el 11% en 1995). No falta interés, faltaban derechos y sobran techos de cristal partidistas.',
            ],
            [
                'bulo' => 'La violencia de género no existe, la violencia no tiene género',
                'texto' => 'Datos del CGPJ y Ministerio del Interior: más del 85% de las víctimas de violencia en la pareja son mujeres. Es un problema estructural de desigualdad, no casos aislados bi direccionales al 50%.',
            ],
            [
                'bulo' => 'Las feministas quieren acabar con la familia',
                'texto' => 'El feminismo busca democratizar los cuidados. Según el INE, las mujeres dedican el doble de tiempo a hogar y familia que los hombres. Se busca reparto equitativo, no destrucción de vínculos.',
            ],
            [
                'bulo' => 'Ya hay igualdad real, las leyes ahora discriminan al hombre',
                'texto' => 'El Foro Económico Mundial estima 130 años para cerrar la brecha de género global. Las leyes de acción positiva son herramientas temporales para corregir desventajas históricas de partida, no discriminación.',
            ],
            [
                'bulo' => 'El techo de cristal es un mito, no suben porque no quieren',
                'texto' => 'Siendo el 58% de tituladas universitarias, ocupan menos del 30% de puestos directivos en el IBEX 35. Las barreras invisibles y la falta de conciliación frenan el ascenso, no la falta de ambición.',
            ],
            [
                'bulo' => 'El acoso callejero son solo piropos',
                'texto' => 'Estudios de Plan International: el 66% de jóvenes ha sufrido acoso callejero. Genera inseguridad y miedo, no agrado. Si no hay consentimiento, opinar sobre el cuerpo ajeno es agresión, no halago.',
            ],
            
        ];

        foreach ($bulos as $bulo) {
            $users->random()->chirps()->create([
                'bulo' => $bulo['bulo'],
                'mensaje' => $bulo['texto'],
            ]);
        }
    }
}
