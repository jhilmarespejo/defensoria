<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DenunciaFixture
 *
 */
class DenunciaFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'denuncia';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'victima_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'agresor_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'fecha_atencion' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'forma_ingreso_servicio' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'tipologia' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'agresion' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'testimonio_denunciante' => ['type' => 'string', 'length' => 500, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'descripcion_denuncia' => ['type' => 'string', 'length' => 500, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'parentesco_agresor' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'acciones_inmediatas' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'acciones_coordinadas' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'fecha_resultado' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'resultados_obtenidos' => ['type' => 'string', 'length' => 250, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'num_paginas_adjuntas' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'nombre_funcionario_accion' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'fk_denuncia_agresor1_idx' => ['type' => 'index', 'columns' => ['agresor_id'], 'length' => []],
            'fk_denuncia_victima' => ['type' => 'index', 'columns' => ['victima_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_denuncia_agresor1' => ['type' => 'foreign', 'columns' => ['agresor_id'], 'references' => ['agresor', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_denuncia_victima' => ['type' => 'foreign', 'columns' => ['victima_id'], 'references' => ['victima', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'victima_id' => 1,
                'agresor_id' => 1,
                'fecha_atencion' => 'Lorem ipsum dolor ',
                'forma_ingreso_servicio' => 'Lorem ipsum dolor sit amet',
                'tipologia' => 'Lorem ipsum dolor sit amet',
                'agresion' => 'Lorem ipsum dolor sit amet',
                'testimonio_denunciante' => 'Lorem ipsum dolor sit amet',
                'descripcion_denuncia' => 'Lorem ipsum dolor sit amet',
                'parentesco_agresor' => 'Lorem ipsum dolor ',
                'acciones_inmediatas' => 'Lorem ipsum dolor sit amet',
                'acciones_coordinadas' => 'Lorem ipsum dolor sit amet',
                'fecha_resultado' => 'Lorem ipsum dolor ',
                'resultados_obtenidos' => 'Lorem ipsum dolor sit amet',
                'num_paginas_adjuntas' => 'Lorem ip',
                'nombre_funcionario_accion' => 'Lorem ipsum dolor sit amet'
            ],
        ];
        parent::init();
    }
}
