<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Home extends BaseController
{
	public function __construct()
	{
	}

	public function index()
	{
		$client = $this->client;;
		$response = $client->request('GET', 'https://api.jsonstorage.net/v1/json/41624f5e-2d72-45c7-a6a0-726abc282fbc');
		$data['data'] = json_decode($response->getBody());
		return view('home', $data);
	}
	public function regist()
	{
		if (!$this->validate([
			'email' => [
				'rules' => 'required|valid_email|is_unique[users.email]',
				'errors' => [
					'required' => '{field} Harus diisi',
					"valid_email" => "Format email harus benar",
					'is_unique' => 'Email sudah digunakan sebelumnya'
				]
			],
			'password' => [
				'rules' => 'required|min_length[4]|max_length[50]',
				'errors' => [
					'required' => '{field} Harus diisi',
					'min_length' => '{field} Minimal 4 Karakter',
					'max_length' => '{field} Maksimal 50 Karakter',
				]
			],
			'name' => [
				'rules' => 'required|min_length[4]|max_length[100]',
				'errors' => [
					'required' => '{field} Harus diisi',
					'min_length' => '{field} Minimal 4 Karakter',
					'max_length' => '{field} Maksimal 100 Karakter',
				]
			],
			'alamat' => [
				'rules' => 'required|min_length[4]|max_length[100]',
				'errors' => [
					'required' => '{field} Harus diisi',
					'min_length' => '{field} Minimal 4 Karakter',
					'max_length' => '{field} Maksimal 100 Karakter',
				]
			],
		])) {
			session()->setFlashdata('error', $this->validator->listErrors());
			return redirect()->back()->withInput();
		}
		$file = $this->request->getFile('foto');
		if ($file->isValid() && !$file->hasMoved()) {
			$imageName = $file->getRandomName();
			$file->move('image/', $imageName);
		}
		$users = new UsersModel();
		$users->insert([
			'email' => $this->request->getVar('email'),
			'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
			'name' => $this->request->getVar('name'),
			'alamat' => $this->request->getVar('alamat'),
			'foto' => $imageName,
		]);
		return redirect()->to('/');
		// dd($imageName);
		// dd($this->request->getVar());
	}

	public function login()
	{
		$users = new UsersModel();
		$email = $this->request->getVar('email');
		$password = $this->request->getVar('password');
		$dataUser = $users->where([
			'email' => $email,
		])->first();
		if ($dataUser) {
			if (password_verify($password, $dataUser->password)) {
				session()->set([
					'email' => $dataUser->email,
					'name' => $dataUser->name,
					'alamat' => $dataUser->alamat,
					'foto' => $dataUser->foto,
					'logged_in' => TRUE
				]);
				return redirect()->to('/');
			} else {
				session()->setFlashdata('error', 'Email & Password Salah');
				echo 'failed';
			}
		} else {
			session()->setFlashdata('error', 'Email & Password Salah');
			echo 'failed';
		}
	}

	function logout()
	{
		session()->destroy();
		return redirect()->to('/');
	}
}
