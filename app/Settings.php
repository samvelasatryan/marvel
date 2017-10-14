<?php 

namespace Awards;

use Illuminate\Database\Eloquent\Model;
use Serverfireteam\Panel\ObservantTrait;

class Settings extends Model {
	use ObservantTrait;
	
    protected $table = 'settings';

}
