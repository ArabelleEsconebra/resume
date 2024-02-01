<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FavoritesModel;
use CodeIgniter\HTTP\ResponseInterface;

class FavoritesController extends BaseController
{
    public function index()
    {
        
        $favorite_model = new FavoritesModel();
        $favorites = $favorite_model->findAll();

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
        $favorite_model = new FavoritesModel();
        $favorite = $favorite_model->where('id', $id)->first();

        return view('github/edit', [
            "user_id" => $id,
            "qwerty" => $favorite,
        ]);
    }

    public function store()
    {
        $vtuber_name = esc($this->request->getPost('vtuber-name'));
        $vtuber_description = esc($this->request->getPost('vtuber-description'));

        $favorite_data = [
            'vtuber_name' => $vtuber_name,
            'vtuber_description' => $vtuber_description,
        ];

        $favorite_model = new FavoritesModel();
        $favorite_model->insert($favorite_data);

        return redirect()->back();
    }

    public function update($id)
    {
        $vtuber_name = esc($this->request->getPost('vtuber-name'));
        $vtuber_description = esc($this->request->getPost('vtuber-description'));

        $favorite_data = [
            'vtuber_name' => $vtuber_name,
            'vtuber_description' => $vtuber_description,
        ];

        $favorite_model = new FavoritesModel();

        $favorite = $favorite_model->where('id', $id)
            ->set($favorite_data)
            ->update();

        return redirect()->back();
    }

    public function delete($id)
    {
        $favorite_model = new FavoritesModel();

        $favorites = $favorite_model->find($id);

        if (!$favorites) {
    
            return redirect()->to('');
        }

        $favorite_model->delete($id, 'id');

        return redirect()->to('');
    }

}
