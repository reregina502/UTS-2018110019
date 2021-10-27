<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PokePoke extends Controller
{
    public function tampil()
    {
        $result = DB::select("select * from pokemons");
        return view('home', ['pokemons' => $result]);
    }


    public function menu_home($kategori = "")
    {
        if ($kategori == "Lowest_Number") {
            $result = DB::select("SELECT * from pokemons order by id ASC");
        } elseif ($kategori == "Highest_Number") {
            $result = DB::select("SELECT * from pokemons order by id DESC");
        } elseif ($kategori == "A-Z") {
            $result = DB::select("SELECT * from pokemons order by name ASC");
        } elseif ($kategori == "Z-A") {
            $result = DB::select("SELECT * from pokemons order by name DESC");
        } else {
            $result = DB::select("SELECT * from pokemons");
        }

        if ($kategori == "surpriseme") {
            $result = DB::select("select * from pokemons");
            shuffle($result);
        }

        return view('home', ['pokemons' => $result]);
    }

    public function detail_pokemon($id = "")
    {
        $result = DB::select("select * from pokemons where id = $id");
        $evolve = DB::select("select * from pokemons");

        return view('detail')->with('evolution', $result)->with('evolutions', $evolve);
    }

    public function search_from_list(Request $name)
    {
        $nama = $name->nama;
        $result = DB::select("SELECT * FROM pokemons where name like '%$nama%'");

        return view('home', ['pokemons' => $result]);
    }
}
