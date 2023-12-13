<?php

namespace App\Controllers;

use App\Core\Controller;

class Pemeliharaan extends Controller
{
     public object $model;

     public function __construct()
     {
          parent::cekLogin();

          $this->model = new \App\Models\Pemeliharaan();
     }

     public function index()
     {
          $data['rows'] = $this->model->show();
          $this->dashboard('/pemeliharaan/index', $data);
     }

     public function input()
     {
          $this->dashboard('/pemeliharaan/input');
     }

     public function save()
     {
          $this->model->save();
          header('location:' . URL . '/pemeliharaan');
     }

     public function edit($id)
     {
          $data['row'] = $this->model->edit($id);
          $this->dashboard('pemeliharaan/edit', $data);
     }

     public function update()
     {
          $this->model->update();
          header('location:' . URL . '/pemeliharaan');
     }

     public function delete($id)
	{
		$this->model->delete($id);
		header('location:' . URL . '/pemeliharaan');
	}
}