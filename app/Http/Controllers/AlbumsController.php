<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use DB;

class AlbumsController extends Controller
{
    public function index(Request $request){

        $sql = 'select * from albums WHERE 1=1';

        $where = [];

        if($request->has('id')){

            $where['id'] = $request->get('id');
            $sql .= " AND ID=:id";
        }

        if($request->has('album_name')){

            $where['album_name'] = $request->get('album_name');
            $sql .= " AND album_name=:album_name";
        }

        return DB::select($sql, $where);
    }
}
