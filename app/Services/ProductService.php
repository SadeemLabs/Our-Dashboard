<?php

namespace App\Services;

use App\Interfaces\ProductRepositoryInterface;

class ProductService {
    private $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository) {
        $this->productRepository = $productRepository;
    }

    public function getProduct($id) {
        return $this->productRepository->find($id);
    }

    public function createProduct(array $data) {
        return $this->productRepository->create($data);
    }

    public function updateProduct($id, array $data) {
        return $this->productRepository->update($id, $data);
    }

    public function deleteProduct($id) {
        return $this->productRepository->delete($id);
    }
}
