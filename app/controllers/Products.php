<?php

namespace App\Controllers;

use App\Core\Controller;

class Products extends Controller
{
	public object $model;

	public function __construct()
	{
		parent::cekLogin();

		$this->model = new \App\Models\Product();
	}

	public function index()
	{
		$data['rows'] = $this->model->show();
		$this->dashboard('products/index', $data);
	}

	public function input()
	{
		$this->dashboard('products/input');
	}

	public function save()
	{
		$this->model->save();
		header('location:' . URL . '/products');
	}

	public function edit($id)
	{
		$data['row'] = $this->model->edit($id);
		$this->dashboard('products/edit', $data);
	}

	public function update()
	{
		$this->model->update();
		header('location:' . URL . '/products');
	}

	public function delete($id)
	{
		$this->model->delete($id);
		header('location:' . URL . '/products');
	}
}
