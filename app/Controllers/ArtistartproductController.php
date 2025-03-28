<?php

namespace App\Controllers;

use App\Models\ArtistartproductModel;
use App\Models\ArtistModel;
use App\Models\ArtProductModel;
use CodeIgniter\Controller;

class ArtistartproductController extends Controller
{
    public function index()
    {
        $model = new ArtistartproductModel();
        $data['artistartproducts'] = $model->findAll();

        return view('artistartproduct/index', $data);
    }

    public function create()
    {
        $artistModel = new \App\Models\ArtistModel();
        $artproductModel = new \App\Models\ArtProductModel();

        $data['artists'] = $artistModel->findAll();
        $data['artproducts'] = $artproductModel->findAll();

        return view('artistartproduct/create', $data);
    }

    public function store()
    {
        $model = new ArtistartproductModel();
        $model->insert([
            'artistid' => $this->request->getPost('artistid'),
            'artproductid' => $this->request->getPost('artproductid'),
        ]);

        return redirect()->to('/artistartproduct');
    }

    public function delete($artistid, $artproductid)
    {
        $model = new ArtistartproductModel();
        $model->where(['artistid' => $artistid, 'artproductid' => $artproductid])->delete();

        return redirect()->to('/artistartproduct');
    }
}
