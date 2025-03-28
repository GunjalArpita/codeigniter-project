<?php

namespace App\Controllers;

use App\Models\ArtmediumModel;
use CodeIgniter\Controller;

class ArtmediumController extends Controller
{
    public function index()
    {
        $model = new ArtmediumModel();
        $data['artmediums'] = $model->findAll();

        return view('artmedium/index', $data);
    }

    public function create()
    {
        return view('artmedium/create');
    }

    public function store()
    {
        $model = new ArtmediumModel();
        $model->insert([
            'artmediumname' => $this->request->getPost('artmediumname'),
        ]);

        return redirect()->to('/artmedium');
    }

    public function edit($id)
    {
        $model = new ArtmediumModel();
        $data['artmedium'] = $model->find($id);

        return view('artmedium/edit', $data);
    }

    public function update($id)
    {
        $model = new ArtmediumModel();
        $model->update($id, [
            'artmediumname' => $this->request->getPost('artmediumname'),
        ]);

        return redirect()->to('/artmedium');
    }

    public function delete($id)
    {
        $model = new ArtmediumModel();
        $model->delete($id);

        return redirect()->to('/artmedium');
    }
    public function view()
    {
        $model = new ArtmediumModel();
        $data['artmediums'] = $model->findAll();
        
        return view('artmedium/view', $data);
    }
}
