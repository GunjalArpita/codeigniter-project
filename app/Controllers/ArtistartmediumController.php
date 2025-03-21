<?php

namespace App\Controllers;

use App\Models\ArtistartmediumModel;
use App\Models\ArtmediumModel;
use App\Models\ArtistModel;
use CodeIgniter\Controller;

class ArtistartmediumController extends Controller
{
    public function index()
    {
        $model = new ArtistartmediumModel();
        $data['artistartmediums'] = $model->findAll();

        return view('artistartmedium/index', $data);
    }

    public function create()
    {
        $artistModel = new \App\Models\ArtistModel();
        $artmediumModel = new \App\Models\ArtmediumModel();

        $data['artists'] = $artistModel->findAll();
        $data['artmediums'] = $artmediumModel->findAll();

        return view('artistartmedium/create', $data);
    }

    public function store()
    {
        $model = new ArtistartmediumModel();
        $model->insert([
            'artistid' => $this->request->getPost('artistid'),
            'artmediumid' => $this->request->getPost('artmediumid'),
        ]);

        return redirect()->to('/artistartmedium');
    }

    public function delete($artistid, $artmediumid)
    {
        $model = new ArtistartmediumModel();
        $model->where(['artistid' => $artistid, 'artmediumid' => $artmediumid])->delete();

        return redirect()->to('/artistartmedium');
    }
}
