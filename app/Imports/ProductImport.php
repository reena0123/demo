<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Models\Product;
use App\Models\Brand;

class ProductImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
    	foreach ($collection as $key => $data) {
    		if ($key === 0) {
    			continue;
    		}else{
    			
    			if (!empty($data[0]) && 
    				!empty($data[1]) && 
    				!empty($data[2]) && 
    				!empty($data[3]) && 
    				!empty($data[4])) {
    				
	    			Product::create([
	    				"name" => $data[0],
	    				"brand_id" => $this->getBrandIdByName($data[1]),
	    				"size" => $data[2],
	    				"color" => $data[3],
	    				"serial_number" => $data[4]
	    			]);
    			}
    		}
    	}
        
    }

    private function getBrandIdByName(string $brandName): int|false
    {
    	$brand = Brand::where("name",$brandName)->first();

    	if(!empty($brand)){
    		return $brand->id;
    	}

    	return false;
    }
}
