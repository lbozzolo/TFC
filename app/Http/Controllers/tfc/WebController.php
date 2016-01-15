<?php

namespace App\Http\Controllers\tfc;

use App\Entities\tfc\Categories;
use App\Entities\tfc\Fases;
use App\Entities\tfc\Matches;
use App\Entities\tfc\MatchesDetails;
use App\Entities\tfc\News;
use App\Entities\tfc\Galleries;
use App\Entities\tfc\Players;
use App\Entities\tfc\Sedes;
use App\Entities\tfc\Tablas;
use App\Entities\tfc\Teams;
use App\Entities\tfc\Tournaments;
use App\Http\Controllers\Controller;
use App\Http\Repositories\tfc\CategoriesRepo;
use App\Http\Repositories\tfc\TournamentsRepo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class WebController extends Controller {

    public function Index()
    {
        $data['categories'] = Categories::all();

        return view('tfc/web/index')->with($data);
    }

    public function Reglamento()
    {
        return view('tfc/web/reglamento');
    }

    public function Noticias()
    {
        $data['noticias']   = News::orderBy('date','DESC')->paginate(10);

         return view('tfc/web/noticias')->with($data);
    }

    public function Sedes()
    {
        $data['sedes'] = Sedes::all();

        return view('tfc/web/sedes')->with($data);
    }

    public function SedeDetalle($id = null)
    {
        $data['sedes'] = Sedes::find($id);

        return view('tfc/web/sede_detalle')->with($data);
    }

    public function Galeria(Galleries $galeria)
    {
        $data['galeria'] = $galeria->all();
        return view('tfc/web/galeria')->with($data);
    }

    public function Inscripcion()
    {
        $data['teams'] = Teams::orderBy('name','DESC')->lists('name','id');
        return view('tfc/web/inscripcion')->with($data);
    }

    public function Contactanos()
    {
        return view('tfc/web/contactanos');
    }

    public function Principal($id,Tournaments $torneos,Categories $categorias,Fases $fases)
    {
        $data['noticias']   = News::orderBy('date','DESC')->paginate(5);

        Session::put('categoria',$categorias->find($id));
        $data['torneos'] = $torneos->where('categories_id',$id)->get();

        return view('tfc/web/principal')->with($data);
    }

    public function Resultado($id,Tablas $tablas,MatchesDetails $detallePartidos)
    {
        $data['idFase'] = $id;
        $data['detallePartidos'] = $detallePartidos->all();
        $data['tablas'] = $tablas->where('fases_id',$id)->get();

        return view('tfc/web/resultado')->with($data);
    }
    public function ProximaFecha()
    {
        return view('tfc/web/proxima_fecha');
    }
    public function Fixture($id,Tournaments $torneos,Categories $categorias,Fases $fases)
    {
         
        $data['categoria'] = $categorias->find($id);
        $data['torneos'] = $torneos->where('categories_id',$id)->get();
        $data['fases'] = $fases->all();

        return view('tfc/web/fixture')->with($data);
    }

    public function Equipo($id,Teams $equipos,Matches $matches)
    {
        $data['matches'] = $matches->all();
        $data['equipo'] = $equipos->find($id);

        return view('tfc/web/equipo')->with($data);
    }


    public function Jugador($id,Players $jugador)
    {
        $data['jugador'] = $jugador->find($id);
        return view('tfc/web/jugador')->with($data);
    }

    public function Sancion()
    {
        return view('tfc/web/sancion');
    }
    public function Goleador()
    {
        return view('tfc/web/goleador');
    }
    public function FairPlay()
    {
        return view('tfc/web/fair_play');
    }
    public function Destacado()
    {
        return view('tfc/web/destacado');
    }
    public function Clima()
    {
        return view('tfc/web/clima');
    }

    public function LaGuapeada()
    {
        return view('tfc/web/la_guapeada');
    }



    // Inscripcion

    public function postRegistration(Request $request)
    {


        $validator = Validator::make(
            $request->all(),
            [
                'dni' =>'required|unique:players,dni',
                'last_name' => 'required',
                'name'=>'required',
                'mail'=>'required',
                'teams_id'=>'required',
                'password'=>'required'
            ]);

        if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator->messages());
        }

        $team = Teams::find($request->teams_id);

        //return  $team->password .'<br>'. $request->password;


        if($request->password != $team->password)
                return redirect()->back()->withInput()->withErrors('Password del Equipo = '.$team->name.', Incorrecto');


        $player             = new Players();
        $player->dni        = $request->dni;
        $player->name       = $request->name;
        $player->last_name  = $request->last_name;
        $player->mail       = $request->mail;
        $player->teams_id   = $request->teams_id;
        $player->status     = 1;
        $player->save();

        return redirect()->back()->withErrors('INSCRIPCION CARGADA CORRECTAMENTE. Se le enviara un mail con la confirmacion de la inscripcion.');
    }
}
