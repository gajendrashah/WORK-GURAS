<?php

namespace App\Http\Repositories;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\UploadedFile;
use function is_array;

class ProductImageRepository 
{

    private static $path = '/images/products';

    public function findImage($productId)
    {
        return ProductImage::where('product_id', $productId)
            ->get();
    }

    public function save($data)
    {
        return ProductImage::create($data);
    }

    public function update($id, $data)
    {
        /* @var Product $product */
        $product = ProductImage::find($id);

        return $product->update($data);
    }

    public function upload($file, $path = '')
    {
        /* @var UploadedFile $file */
        $ext = $file->getClientOriginalExtension();
        $fileName = date('Y-m-d-h-i-s') . '-' . $ext;
        $filePath = $path == '' ? self::$path : $path;

        $file->move(public_path($filePath), $fileName);
        return $fileName;
    }

    public function uploadFile($file)
    {
        /* @var UploadedFile $file */
        $imageName = $file->getClientOriginalName();
        $fileName = date('Y-m-d-h-i-s') . '-' . str_random(12) . '.' . $imageName;
        $file->move(public_path() . Product::$path, $fileName);
        return Product::$path . $fileName;
    }

    public function delete($ids)
    {
        if (is_array($ids)) {
            return ProductImage::destroy($ids);
        } else {
            $data = $this->find($ids);
            $data->delete();
        }
    }

    public function deleteByProductId($productId) 
    {
        return ProductImage::where('product_id', $productId)->delete();
    }

    public function find($id)
    {
        return ProductImage::find($id);
    }

}
