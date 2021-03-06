<?php
namespace App\Model\Table;

use App\Model\Entity\CasinoAmenity;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CasinoAmenities Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Casinos
 * @property \Cake\ORM\Association\BelongsTo $Masters
 */
class CasinoAmenitiesTable extends Table
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

        $this->table('casino_amenities');

        $this->belongsTo('Casinos', [
            'foreignKey' => 'casino_id',
            'joinType' => 'INNER'
        ]);
		
        $this->belongsTo('ChildMasters', [
			'className' => 'Master.Masters',
            'foreignKey' => 'master_id',
            'joinType' => 'INNER'
        ]); 
		$this->belongsTo('ParentMasters', [
            'foreignKey' => 'parent_id',
			'className' => 'Master.Masters',
            'joinType' => 'INNER'
        ]);
		
		// $this->addBehavior('Tree');
		$this->addBehavior('Translate', ['fields' => ['name']]);

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
            ->requirePresence('id', 'create')
            ->notEmpty('id');

        return $validator;
    }

    
}
