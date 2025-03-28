<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ArtistModel;

class ArtistController extends Controller
{
    protected $artistModel;

    public function __construct()
    {
        $this->artistModel = new ArtistModel();
        session();
    }

    // Show Login Form
    public function login()
    {
        return view('artist/login');
    }

    // Handle Authentication
    public function authenticate()
    {
        $email = $this->request->getPost('artistemail');

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return redirect()->to('/artist/login')->with('error', 'Invalid Email.');
        }

        $artist = $this->artistModel->where('artistemail', $email)->first();

        if (!$artist) {
            return redirect()->to('/artist/login')->with('error', 'Email not found.');
        }

        session()->set([
            'artist_logged_in' => true,
            'artistid' => $artist['artistid'],
            'artistname' => $artist['artistname']
        ]);

        return redirect()->to('/artist/dashboard')->with('success', 'Login successful.');
    }

    // Logout Function
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/artist/login')->with('success', 'Logged out successfully.');
    }

    // Display All Artists
    public function index()
    {
        $data['artists'] = $this->artistModel->findAll();
        return view('artist/index', $data);
    }

    public function create()
    {
        return view('artist/create');
    }

    public function store()
    {
        $artistModel = new ArtistModel();
    
        $data = [
            'adminid' => 2,  // Default admin ID (or fetch from session if needed)
            'artistname' => $this->request->getPost('artistname'),
            'artistmno' => $this->request->getPost('artistmno'),
            'artistemail' => $this->request->getPost('artistemail'),
            'artistaddress' => $this->request->getPost('artistaddress'),
            'artistexperience' => $this->request->getPost('artistexperience'),
            'artistfamous' => $this->request->getPost('artistfamous'),
        ];
    
        $artistModel->insert($data);
    
        return redirect()->to(site_url('artist/dashboard'))->with('success', 'Artist added successfully.');
    }
    

    public function dashboard()
    {
        if (!session()->get('artist_logged_in')) {
            return redirect()->to('/artist/login')->with('error', 'Please login first.');
        }

        return view('artist/dashboard');
    }

    
    // Show Edit Artist Form
    public function edit($id)
    {
        $data['artist'] = $this->artistModel->find($id);
        
        if (!$data['artist']) {
            return redirect()->to('/artist')->with('error', 'Artist not found.');
        }

        return view('artist/edit', $data);
    }

    // Update Artist Details
    public function update($id)
    {
        $rules = [
            'adminid'          => 'required|numeric',
            'artistname'       => 'required|min_length[3]|max_length[100]',
            'artistmno'        => 'required|numeric|min_length[10]|max_length[12]',
            'artistemail'      => 'required|valid_email',
            'artistaddress'    => 'required|max_length[255]',
            'artistexperience' => 'required|numeric',
            'artistfamous'     => 'required|max_length[100]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->to("/artist/edit/$id")->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = $this->request->getPost();
        if ($this->artistModel->update($id, $data)) {
            return redirect()->to('/artist')->with('success', 'Artist updated successfully.');
        }

        return redirect()->to("/artist/edit/$id")->with('error', 'Failed to update artist.');
    }

    // Delete Artist Safely
    public function delete($id)
    {
        $artist = $this->artistModel->find($id);
        if (!$artist) {
            return redirect()->to('/artist')->with('error', 'Artist not found.');
        }

        if ($this->artistModel->delete($id)) {
            return redirect()->to('/artist')->with('success', 'Artist deleted successfully.');
        }

        return redirect()->to('/artist')->with('error', 'Failed to delete artist.');
    }
    public function view()
{
    $data['artists'] = $this->artistModel->findAll();
    return view('artist/view', $data);
}

}
