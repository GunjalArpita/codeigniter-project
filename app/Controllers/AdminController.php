<?php

namespace App\Controllers;

use App\Models\AdminModel;
use CodeIgniter\Controller;

class AdminController extends Controller
{
    protected $adminModel;

    public function __construct()
    {
        $this->adminModel = new AdminModel();
        helper(['url', 'form', 'session']);
    }

    // Show Login Form
    public function loginForm()
    {
        return view('admin/login');
    }

    // Handle Login
    public function login()
    {
        $session = session();
        $adminEmail = $this->request->getPost('adminemail');
        $adminPass = $this->request->getPost('adminpass');

        $admin = $this->adminModel->where('adminemail', $adminEmail)->first();

        if ($admin && $admin['adminpass'] === $adminPass) { // Plain text password check (Consider Hashing)
            $session->set(['adminid' => $admin['adminid'], 'isLoggedIn' => true]);
            return redirect()->to('/admin');
        } else {
            $session->setFlashdata('error', 'Invalid Email or Password');
            return redirect()->to('/admin/login');
        }
    }

    // Show Admin Dashboard
    public function dashboard()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/admin/login');
        }
        return view('admin/dashboard');
    }

    // Logout
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/admin/login');
    }

    // Create Admin
    public function create()
    {
        if ($this->request->getMethod() === 'post') {
            $data = [
                'adminemail' => $this->request->getPost('adminemail'),
                'adminpass' => $this->request->getPost('adminpass') // Consider Hashing Password
            ];
            $this->adminModel->save($data);
            return redirect()->to('/admin');
        }
        return view('admin/create');
    }

    // Read All Admins
    public function index()
    {
        $data['admins'] = $this->adminModel->findAll();
        return view('admin/index', $data);
    }

    // Update Admin
    public function edit($id)
    {
        $admin = $this->adminModel->find($id);
        if ($this->request->getMethod() === 'post') {
            $data = [
                'adminemail' => $this->request->getPost('adminemail'),
                'adminpass' => $this->request->getPost('adminpass')
            ];
            $this->adminModel->update($id, $data);
            return redirect()->to('/admin');
        }
        return view('admin/edit', ['admin' => $admin]);
    }

    // Delete Admin
    public function delete($id)
    {
        $this->adminModel->delete($id);
        return redirect()->to('/admin');
    }
}
