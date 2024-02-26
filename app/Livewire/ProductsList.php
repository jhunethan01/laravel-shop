<?php

namespace App\Livewire;

use Livewire\Component;
use App\Http\Controllers\ProductController;


class ProductsList extends Component
{
    public $products = [];
    public $selectedProducts = [];
    private $productController;

    public function mount()
    {
        $this->productController = new ProductController;
        $this->products = $this->productController->render()->getData()['products'];
    }

    public function render()
    {
        $comparisonKeyList = [
            'Name',
            'Info 1',
            'Info 2',
            'Info 3',
            'Image',
            'Colour',
            'Material',
            'Range',
            'Size',
            'Oven Safe',
            'Dishwasher Safe',
            'Wash By Hand',
            'Guarantee Period',
            'Price',
        ];
        return view('livewire.products-list', [
            'products' => $this->products,
            'selectedProducts' => $this->selectedProducts,
            'comparisonKeyList' => $comparisonKeyList
        ]);
    }

    public function selectItem($sku)
    {
        if ($this->checkItemSelected($sku)) {
            $this->selectedProducts = array_filter($this->selectedProducts, function ($item) use ($sku) {
                return $item['sku'] !== $sku;
            });
        } else {
            if (count($this->selectedProducts) >= 4) {
                session()->flash('error', 'You can only compare up to 4 items');
                return;
            }

            $this->productController = new ProductController;
            $res = $this->productController->getProductBySku($sku);
            $data = json_decode($res->getContent(),true);
            
            $this->selectedProducts = array_merge($this->selectedProducts, array($data));
        }
    }

    public function checkitemSelected($sku)
    {
        foreach ($this->selectedProducts as $key => $item) {
            if ($item['sku'] == $sku) {
                return true;
            }
        }
        return false;
    }

}
