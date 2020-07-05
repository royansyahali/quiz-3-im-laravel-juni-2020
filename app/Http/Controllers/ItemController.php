<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\artikelModel;
;
class ItemController extends Controller
{
    public function index(){
        $data_artikel = artikelModel::getAll();
        return view('artikels.index',compact('data_artikel'));
    }

    public function create(){
        return view('artikels.form');
    }

    public function store(Request $request){
        // dd($request->all());
        $data_form = artikelModel::insertTable($request->all());
        return redirect('/items');
    }

    public function show($id){
        $data_id = artikelModel::getId($id);
        // dd($data_id);
        $array = (array) $data_id;
        $array['tag'] = explode(" ",$array['tag']);
        return view('artikels.show',compact('array'));
    }

    public function edit($id){
        $item = artikelModel::getId($id);
        return view('artikels.edit',compact('item'));
    }
    public function update(Request $request, $id){
        artikelModel::updateTable($request->all(),$id);
        return redirect('items');
    }
    public function destroy($id){
        artikelModel::deleteTable($id);
        return redirect('items');
    }
}
