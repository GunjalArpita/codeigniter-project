<?php

namespace App\Controllers;

use App\Models\ArtproductModel;
use CodeIgniter\Controller;


class ArtproductController extends Controller
{
    // Display all art products
    public function index()
    {
        $model = new ArtproductModel();
        $data['artproducts'] = $model->findAll();
        return view('artproduct/index', $data);
    }

    // Show form to create a new art product
    public function create()
    {
        return view('artproduct/create');
    }

    // Store a new art product in the database
    public function store()
    {
        $model = new ArtproductModel();
        $data = [
            'artproductname' => $this->request->getPost('artproductname'),
        ];
        $model->insert($data);
        return redirect()->to('/artproduct');
    }

    // Show form to edit an existing art product
    public function edit($id)
    {
        $model = new ArtproductModel();
        $data['artproduct'] = $model->find($id);
        return view('artproduct/edit', $data);
    }

    // Update the art product in the database
    public function update($id)
    {
        $model = new ArtproductModel();
        $data = [
            'artproductname' => $this->request->getPost('artproductname'),
        ];
        $model->update($id, $data);
        return redirect()->to('/artproduct');
    }

    // Delete the art product from the database
    public function delete($id)
    {
        $model = new ArtproductModel();
        $model->delete($id);
        return redirect()->to('/artproduct');
    }
    public function view()
    {
        $model = new ArtproductModel();
        $data['artproducts'] = $model->findAll();
        
        return view('artproduct/view', $data);
    }
}
