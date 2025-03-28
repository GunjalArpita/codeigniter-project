<?php

namespace App\Controllers;

use App\Models\ArttypeModel;
use CodeIgniter\Controller;

class ArttypeController extends Controller
{
    public function index()
    {
        $model = new ArttypeModel();
        $data['arttypes'] = $model->findAll();
        return view('arttype/index', $data);
    }

    public function create()
    {
        return view('arttype/create');
    }

    public function store()
    {
        $model = new ArttypeModel();
        $data = [
            'arttypename' => $this->request->getPost('arttypename'),
        ];
        $model->insert($data);
        return redirect()->to('/arttype');
    }

    public function edit($id)
    {
        $model = new ArttypeModel();
        $data['arttype'] = $model->find($id);
        return view('arttype/edit', $data);
    }

    public function update($id)
    {
        $model = new ArttypeModel();
        $data = [
            'arttypename' => $this->request->getPost('arttypename'),
        ];
        $model->update($id, $data);
        return redirect()->to('/arttype');
    }

    public function delete($id)
    {
        $model = new ArttypeModel();
        $model->delete($id);
        return redirect()->to('/arttype');
    }
    public function view()
{
    $model = new ArttypeModel();
    $data['arttypes'] = $model->findAll();
    
    return view('arttype/view', $data);
}


}
