<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class DomainsTable extends Table {
	public function validationDefault(Validator $validator){
		return $validator;
	}
}