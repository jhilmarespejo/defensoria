<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Denuncium Entity
 *
 * @property int $id
 * @property int $victima_id
 * @property int $agresor_id
 * @property string $fecha_atencion
 * @property string $forma_ingreso_servicio
 * @property string $tipologia
 * @property string $agresion
 * @property string $testimonio_denunciante
 * @property string $descripcion_denuncia
 * @property string $parentesco_agresor
 * @property string $acciones_inmediatas
 * @property string $acciones_coordinadas
 * @property string $fecha_resultado
 * @property string $resultados_obtenidos
 * @property string $num_paginas_adjuntas
 * @property string $nombre_funcionario_accion
 *
 * @property \App\Model\Entity\Victima $victima
 * @property \App\Model\Entity\Agresor $agresor
 */
class Denuncium extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'victima_id' => true,
        'agresor_id' => true,
        'fecha_atencion' => true,
        'forma_ingreso_servicio' => true,
        'tipologia' => true,
        'agresion' => true,
        'testimonio_denunciante' => true,
        'descripcion_denuncia' => true,
        'parentesco_agresor' => true,
        'acciones_inmediatas' => true,
        'acciones_coordinadas' => true,
        'fecha_resultado' => true,
        'resultados_obtenidos' => true,
        'num_paginas_adjuntas' => true,
        'nombre_funcionario_accion' => true,
        'victima' => true,
        'agresor' => true
    ];
}
