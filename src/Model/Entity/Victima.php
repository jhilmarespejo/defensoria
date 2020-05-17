<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Victima Entity
 *
 * @property int $id
 * @property string $ci
 * @property string $ci_exp
 * @property string $fecha_nacimento
 * @property string $lugar_nacimiento
 * @property string $sexo
 * @property string $procedencia
 * @property string $edad
 * @property string $celular
 * @property string $nombres
 * @property string $ap_paterno
 * @property string $ap_materno
 * @property string $ap_casada
 * @property string $estado_civil
 * @property string $instrucción
 * @property string $ocupacion
 * @property string $numero_hijos
 * @property string $municipio
 * @property string $direccion
 * @property string $distrito
 * @property string $idioma
 *
 * @property \App\Model\Entity\Denuncium[] $denuncia
 */
class Victima extends Entity
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
        'ci' => true,
        'ci_exp' => true,
        'fecha_nacimento' => true,
        'lugar_nacimiento' => true,
        'sexo' => true,
        'procedencia' => true,
        'edad' => true,
        'celular' => true,
        'nombres' => true,
        'ap_paterno' => true,
        'ap_materno' => true,
        'ap_casada' => true,
        'estado_civil' => true,
        'instrucción' => true,
        'ocupacion' => true,
        'numero_hijos' => true,
        'municipio' => true,
        'direccion' => true,
        'distrito' => true,
        'idioma' => true,
        'denuncia' => true
    ];
}
