<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Denuncia Model
 *
 * @property \App\Model\Table\VictimaTable|\Cake\ORM\Association\BelongsTo $Victima
 * @property \App\Model\Table\AgresorTable|\Cake\ORM\Association\BelongsTo $Agresor
 *
 * @method \App\Model\Entity\Denuncium get($primaryKey, $options = [])
 * @method \App\Model\Entity\Denuncium newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Denuncium[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Denuncium|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Denuncium|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Denuncium patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Denuncium[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Denuncium findOrCreate($search, callable $callback = null, $options = [])
 */
class DenunciaTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('denuncia');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Victima', [
            'foreignKey' => 'victima_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Agresor', [
            'foreignKey' => 'agresor_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('fecha_atencion')
            ->maxLength('fecha_atencion', 20)
            ->allowEmpty('fecha_atencion');

        $validator
            ->scalar('forma_ingreso_servicio')
            ->maxLength('forma_ingreso_servicio', 30)
            ->allowEmpty('forma_ingreso_servicio');

        $validator
            ->scalar('tipologia')
            ->maxLength('tipologia', 50)
            ->allowEmpty('tipologia');

        $validator
            ->scalar('agresion')
            ->maxLength('agresion', 50)
            ->allowEmpty('agresion');

        $validator
            ->scalar('testimonio_denunciante')
            ->maxLength('testimonio_denunciante', 500)
            ->allowEmpty('testimonio_denunciante');

        $validator
            ->scalar('descripcion_denuncia')
            ->maxLength('descripcion_denuncia', 500)
            ->allowEmpty('descripcion_denuncia');

        $validator
            ->scalar('parentesco_agresor')
            ->maxLength('parentesco_agresor', 20)
            ->allowEmpty('parentesco_agresor');

        $validator
            ->scalar('acciones_inmediatas')
            ->maxLength('acciones_inmediatas', 50)
            ->allowEmpty('acciones_inmediatas');

        $validator
            ->scalar('acciones_coordinadas')
            ->maxLength('acciones_coordinadas', 50)
            ->allowEmpty('acciones_coordinadas');

        $validator
            ->scalar('fecha_resultado')
            ->maxLength('fecha_resultado', 20)
            ->allowEmpty('fecha_resultado');

        $validator
            ->scalar('resultados_obtenidos')
            ->maxLength('resultados_obtenidos', 250)
            ->allowEmpty('resultados_obtenidos');

        $validator
            ->scalar('num_paginas_adjuntas')
            ->maxLength('num_paginas_adjuntas', 10)
            ->allowEmpty('num_paginas_adjuntas');

        $validator
            ->scalar('nombre_funcionario_accion')
            ->maxLength('nombre_funcionario_accion', 100)
            ->allowEmpty('nombre_funcionario_accion');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['victima_id'], 'Victima'));
        $rules->add($rules->existsIn(['agresor_id'], 'Agresor'));

        return $rules;
    }
}
