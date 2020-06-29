<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Denunciante Model
 *
 * @property \App\Model\Table\DenunciaTable|\Cake\ORM\Association\HasMany $Denuncia
 *
 * @method \App\Model\Entity\Denunciante get($primaryKey, $options = [])
 * @method \App\Model\Entity\Denunciante newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Denunciante[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Denunciante|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Denunciante|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Denunciante patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Denunciante[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Denunciante findOrCreate($search, callable $callback = null, $options = [])
 */
class DenuncianteTable extends Table
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

        $this->setTable('denunciante');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        
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

       /* $validator
            ->scalar('ci')
            ->maxLength('ci', 10)
            ->allowEmpty('ci');

        $validator
            ->scalar('ci_exp')
            ->maxLength('ci_exp', 5)
            ->allowEmpty('ci_exp');

        $validator
            ->scalar('fecha_nacimento')
            ->maxLength('fecha_nacimento', 20)
            ->allowEmpty('fecha_nacimento');

        $validator
            ->scalar('lugar_nacimiento')
            ->maxLength('lugar_nacimiento', 100)
            ->allowEmpty('lugar_nacimiento');

        $validator
            ->scalar('sexo')
            ->maxLength('sexo', 1)
            ->allowEmpty('sexo');

        $validator
            ->scalar('procedencia')
            ->maxLength('procedencia', 10)
            ->allowEmpty('procedencia');

        $validator
            ->scalar('edad')
            ->maxLength('edad', 3)
            ->allowEmpty('edad');

        $validator
            ->scalar('celular')
            ->maxLength('celular', 10)
            ->allowEmpty('celular');

        $validator
            ->scalar('nombres')
            ->maxLength('nombres', 50)
            ->allowEmpty('nombres');

        $validator
            ->scalar('ap_paterno')
            ->maxLength('ap_paterno', 50)
            ->allowEmpty('ap_paterno');

        $validator
            ->scalar('ap_materno')
            ->maxLength('ap_materno', 50)
            ->allowEmpty('ap_materno');

        $validator
            ->scalar('ap_casada')
            ->maxLength('ap_casada', 50)
            ->allowEmpty('ap_casada');

        $validator
            ->scalar('estado_civil')
            ->maxLength('estado_civil', 50)
            ->allowEmpty('estado_civil');

        $validator
            ->scalar('instrucción')
            ->maxLength('instrucción', 50)
            ->allowEmpty('instrucción');

        $validator
            ->scalar('ocupacion')
            ->maxLength('ocupacion', 50)
            ->allowEmpty('ocupacion');

        $validator
            ->scalar('numero_hijos')
            ->maxLength('numero_hijos', 2)
            ->allowEmpty('numero_hijos');

        $validator
            ->scalar('municipio')
            ->maxLength('municipio', 30)
            ->allowEmpty('municipio');

        $validator
            ->scalar('direccion')
            ->maxLength('direccion', 100)
            ->allowEmpty('direccion');

        $validator
            ->scalar('distrito')
            ->maxLength('distrito', 2)
            ->allowEmpty('distrito');

        $validator
            ->scalar('idioma')
            ->maxLength('idioma', 15)
            ->allowEmpty('idioma');*/

        return $validator;
    }
}
