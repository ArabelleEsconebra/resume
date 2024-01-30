<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FavoritesModel;
use CodeIgniter\HTTP\ResponseInterface;

class FavoritesController extends BaseController
{
    public function index()
    {
        $favorites_model = new FavoritesModel();
        $favorites = $favorites_model->findAll();

        $array = [
            "favorites" => $favorites,
        ];

        return view('github/index', $array);
    }

    public function create()
    {
        return view('github/create');
    }

    public function edit($id)
    {
        $favorites_model = new FavoritesModel();
        $favorites = $favorites_model->where('id', $id)->first();

        return view('github/edit', [
            "user_id" => $id,
            "qwerty" => $favorites,
        ]);
    }

    public function store()
    {
        $vtuber_name = esc($this->request->getPost('vtuber_name'));
        $vtuber_description = esc($this->request->getPost('vtuber_description'));

        $favorites_data = [
            'vtuber_name' => $vtuber_name,
            'vtuber_description' => $vtuber_description,
        ];

        $favorites_model = new FavoritesModel();
        $favorites_model->insert($favorites_data);

        return redirect()->back();
    }

    public function update($id)
    {
        $vtuber_name = esc($this->request->getPost('vtuber_name'));
        $vtuber_description = esc($this->request->getPost('vtuber_description'));

        $favorites_data = [
            'vtuber_name' => $vtuber_name,
            'vtuber_description' => $vtuber_description,
        ];

        $favorites_model = new FavoritesModel();

        $favorites = $favorites_model->where('id', $id)
            ->set($favorites_data)
            ->update();

        return redirect()->back();
    }

}
