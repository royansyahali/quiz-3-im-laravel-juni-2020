<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class artikelModel{

    public static function getAll(){
        $data_artikel = DB::table('artikels')->get();
        return $data_artikel;
    }
    public static function insertTable($request){
        $request['slug'] = Str::slug($request['judul']);
        $data_form = DB::table('artikels')->insert([
            'judul' => $request["judul"],
            'isi' => $request["isi"],
            'tag' => $request["tag"],
            'slug' => $request["slug"],
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        return $data_form;
    }
    public static function getId($id){
        $data_id = DB::table('artikels')->find($id);
        return $data_id;
    }

    public static function updateTable($request,$id){
        $request['slug'] = Str::slug($request['judul']);
        $data_id = DB::table('artikels')->where('id',$id)->update([
            'judul' => $request["judul"],
            'isi' => $request["isi"],
            'tag' => $request["tag"],
            'slug' => $request["slug"],
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()

        ]);
        return $data_id;
    }

    public static function deleteTable($id){
        $data_id = DB::table('artikels')->where('id',$id)->delete();
    }


}
