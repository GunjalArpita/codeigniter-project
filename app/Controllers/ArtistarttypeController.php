<?php

namespace App\Controllers;

use App\Models\ArtistarttypeModel;
use App\Models\ArtTypeModel;
use App\Models\ArtistModel;
use CodeIgniter\Controller;

class ArtistarttypeController extends Controller
{
    public function index()
    {
        $model = new ArtistarttypeModel();
        $data['artistarttypes'] = $model->findAll();

        return view('artistarttype/index', $data);
    }

    public function create()
    {
        $artistModel = new \App\Models\ArtistModel();
        $arttypeModel = new \App\Models\ArtTypeModel();

        $data['artists'] = $artistModel->findAll();
        $data['arttypes'] = $arttypeModel->findAll();

        return view('artistarttype/create', $data);
    }

    public function store()
    {
        $model = new ArtistarttypeModel();
        $model->insert([
            'artistid' => $this->request->getPost('artistid'),
            'arttypeid' => $this->request->getPost('arttypeid'),
        ]);

        return redirect()->to('/artistarttype');
    }

    public function delete($artistid, $arttypeid)
    {
        $model = new ArtistarttypeModel();
        $model->where(['artistid' => $artistid, 'arttypeid' => $arttypeid])->delete();

        return redirect()->to('/artistarttype');
    }
}
