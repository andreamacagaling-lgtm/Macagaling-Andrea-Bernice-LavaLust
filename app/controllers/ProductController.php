<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Controller: ProductController
 * 
 * Automatically generated via CLI.
 */
class ProductController extends Controller {

    public function __construct() {
        parent::__construct();
        $this->call->model('ProductModel');
    }

    public function ProductViews() {
        $data['products'] = $this->ProductModel->get_all();
        $this->call->view('ProductViews', $data);
    }

    public function index() {
        $data['products'] = $this->ProductModel->get_all();
        $this->call->view('ProductViews', $data);
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'product_name' => $this->io->post('product_name'),
                'description'  => $this->io->post('description'),
                'price'        => $this->io->post('price'),
                'quantity'     => $this->io->post('quantity')
            ];

            if ($this->ProductModel->insert_product($data)) {
                header('Location: /ProductViews');
                exit();
            }
        }
        $this->call->view('products/create');
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'product_name' => $this->io->post('product_name'),
                'description'  => $this->io->post('description'),
                'price'        => $this->io->post('price'),
                'quantity'     => $this->io->post('quantity')
            ];

            if ($this->ProductModel->update_product($id, $data)) {
                header('Location: /ProductViews');
                exit();
            }
        }

        $data['product'] = $this->ProductModel->get_one($id);
        $this->call->view('products/edit', $data);
    }

    public function delete($id) {
        $this->ProductModel->delete_product($id);
        header('Location: /ProductViews');
        exit();
    }
}