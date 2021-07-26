<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Storage;
use App\PhotoGalerryItems;

class Files extends Model
{
    public function desletefile($src){
    	unlink(public_path($src));
    	return 'Complete';	
    }
}
