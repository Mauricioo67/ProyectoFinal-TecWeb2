<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Monedas Model
 *
 * @method \App\Model\Entity\Moneda newEmptyEntity()
 * @method \App\Model\Entity\Moneda newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Moneda> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Moneda get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Moneda findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Moneda patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Moneda> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Moneda|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Moneda saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Moneda>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Moneda>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Moneda>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Moneda> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Moneda>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Moneda>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Moneda>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Moneda> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MonedasTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('monedas');
        $this->setDisplayField('nombre');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 100)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->scalar('codigo')
            ->maxLength('codigo', 10)
            ->requirePresence('codigo', 'create')
            ->notEmptyString('codigo');

        $validator
            ->scalar('simbolo')
            ->maxLength('simbolo', 10)
            ->requirePresence('simbolo', 'create')
            ->notEmptyString('simbolo');

        $validator
            ->scalar('pais')
            ->maxLength('pais', 100)
            ->allowEmptyString('pais');

        $validator
            ->decimal('tasa_cambio')
            ->allowEmptyString('tasa_cambio');

        $validator
            ->boolean('activa')
            ->allowEmptyString('activa');

        return $validator;
    }
}
