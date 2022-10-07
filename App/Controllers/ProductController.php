<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Product;

class ProductController extends BaseController {
    public function index() {
        $viewName = 'product.index';
        $data = [];
        return $this->render($viewName, $data);
    }

    public function show() {
        $viewName = 'product.list';
        $data1 = [
            'id' => 3,
            'name' => 'Iphone 14',
            'price' => 12000000,
            'array' => [
                'Xanh',
                'Đỏ',
                'Tím',
                'Vàng'
            ]
        ];;
        return $this->render($viewName, $data1);
    }

    public function create() {
        // Hiển thị danh sách sản phẩm bằng render() của BladeOne
        // file view ở new-mvc/App/Views/product/index.blade.php
        $viewName = 'product.create';
        // data view cần biến $name và $price
        $data2 = [];

        return $this->render($viewName, $data2);
    }

    public function detail($id) {
        $viewName = 'product.detail';

        $data3 = [
            'id' => 3,
            'name' => 'Iphone 14',
            'price' => 12000000,
            'color' => 'xanh',
            'chip' => 'A16',
            'ram' => '7GB',
            'rom' => '16GB',
        ];

        return $this->render($viewName, $data3);
    }
}
