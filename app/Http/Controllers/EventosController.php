<?php


namespace App\Http\Controllers;
use App\Models\Eventos;
use App\Models\Galeria;
use Illuminate\Http\Request;

class EventosController extends Controller
{
    public function home_lista_casais()
    {
        $eventos = Eventos::limit(10)->orderBy('data_registro', 'desc')->get();
        $fotos = Galeria::where('usar_footer', true)->inRandomOrder()->limit(8)->get();
        return view('index', ['eventos' => $eventos, 'fotos' => $fotos]);
    }

    public function galeria_lista_casais()
    {
        $eventos = Eventos::orderBy('data_registro', 'desc')->paginate(12);
        $fotos = Galeria::where('usar_footer', true)->inRandomOrder()->limit(8)->get();
        $banner = $fotos[0]->image_url;
        return view ('galeria', ['eventos' => $eventos, 'fotos' => $fotos, 'banner' => $banner]);
    }

    public function carrega_galeria($id)
    {
        $evento = Eventos::findOrFail($id);
        $galeria = $evento->galeria()->get();
        $banner = Galeria::where('usar_footer', true)->where('evento_id','=',$id)->inRandomOrder()->limit(1)->get();
        $banner = $banner[0]->image_url;
        $fotos = Galeria::where('usar_footer', true)->inRandomOrder()->limit(8)->get();
        return view('galeria_album', ['galeria' => $galeria, 'banner' => $banner, 'fotos' => $fotos, 'evento' => $evento]);
    }




}
