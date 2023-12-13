<?php

namespace App\Controllers;

use App\Core\Controller;

class PemilikTernak extends Controller
{
	public object $model;

	public function __construct()
	{
		parent::cekLogin();

		$this->model = new \App\Models\Pemilik();
	}

	public function index()
	{
		$data['rows'] = $this->model->show();
		$this->dashboard('pemilikternak/index', $data);
	}

	public function input()
	{
		$this->dashboard('pemilikternak/input');
	}

	public function save()
	{
		$this->model->save();
		header('location:' . URL . '/pemilikternak');
	}

	public function edit($id)
	{
		$data['row'] = $this->model->edit($id);
		$this->dashboard('pemilikternak/edit', $data);
	}

	public function update()
	{
		$this->model->update();
		header('location:' . URL . '/pemilikternak');
	}

	public function delete($id)
	{
		$this->model->delete($id);
		header('location:' . URL . '/pemilikternak');
	}
}
