<?php
namespace App\Http\Services;

use App\Models\Product;

class ProductService
{
	public function create($data)
    {
        return Product::create($data);
    }

    public function update($product, $data)
    {
        return $product->update($data);
    }

    public function delete($product)
    {
        return $this->update($product, ['status' => true]);
        // return $product->delete();
    }
}

?>
