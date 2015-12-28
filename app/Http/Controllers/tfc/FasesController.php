<?php

namespace App\Http\Controllers\tfc;

use App\Entities\tfc\Fases;
use App\Entities\tfc\FasesWeek;
use App\Entities\tfc\Matches;
use App\Entities\tfc\Teams;
use App\Helpers\FixtureHelper;
use App\Http\Repositories\tfc\FasesRepo as Repo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\ImagesHelper;



class FasesController extends Controller {

    public   $module;
    public   $repo;
    public   $view ;
    public   $form;
    public   $data;
    public   $request;
    public   $rules;
    public   $rulesEdit;


    public function __construct(Repo $repo)
    {
        $module = 'fases';

        //data from entities
        $this->repo                 = $repo;
        $this->data['models']       = $repo->ListAll();
        $this->data['tableHeader']  = $repo->tableHeader();

        //data for views
        $this->view                 = 'tfc.'.$module.'.index';
        $this->form                 = 'tfc.'.$module.'.form';
        $this->detail               = 'tfc.'.$module.'.detail';
        $this->data['sectionName']  = 'Fechas';


        //images
        $this->data['imgQuantityMax']   = 0;
        $this->data['imagePath']        = null;
        $this->data['entityImg']        = null;

        //selects
        //$this->data['roomsTypes']      = RoomsTypes::lists('name','id');
        $this->data['teams']             = Teams::all();

        //data for validation
        $this->rules                = $this->repo->Rules();
        $this->rulesEdit            = $this->repo->RulesEdit();

        //data routes
        $this->data['route']        = 'seasons';
        $this->data['routeEdit']    = $module.'GetEdit';
        $this->data['routeDel']     = $module.'GetDel';
        $this->data['routeNew']     = $module.'GetNew';
        $this->data['routePostNew'] = $module.'PostNew';
        $this->data['routePostEdit']= $module.'PostEdit';

    }

    public function requestCustom($request = null)
    {
        $newRequest = $request;

        return $newRequest;
    }

    //go to form new
    public function getNew($id = null)
    {
        $this->data['tournaments_id'] = $id;
        return view($this->form)->with($this->data);
    }


    public function postNew(Request $request, ImagesHelper $image)
    {

        // validation rules form repo
        $this->validate($request, $this->rules);

        $teams = $request->all()['team'];

        $fixture = new  FixtureHelper($teams);
        $fixture->setAleatorio(false);
        $fixture->setFechaLibre('Libre');
        $fixture->tablaDeCruces();

        // method crear in repo
        $model = $this->repo->create($request);
                $model->Teams()->attach($teams);

        for ($f = 1; $f <= count($fixture->getCruces()); $f++) {

            // agrga week
            $week           = new FasesWeek();
            $week->name     = $f;
            $week->fases_id = $model->id;
            $week->save();

            for ($c = 1; $c <= $fixture->partidosXFechas() ; $c++) {

                //agrega matches
                $match = new Matches();
                $match->name = $c;
                $match->fases_week_id = $week->id;
                $match->home_teams_id = $fixture->getCruces()[$f][$c]['A'];
                $match->away_teams_id = $fixture->getCruces()[$f][$c]['B'];

                $match->save();

            }

        }





        // if has image uploaded
        if($request->hasFile('image'))
        {
            $image->upload($this->data['entityImg'], $model->id  ,$request->file('image') ,$this->data['imagePath']);
        }

        // redirect with errors messages language
        return redirect()->route($this->data['route'])->withErrors(trans('messages.newItem'));

    }

    public function getDetail($id = null)
    {
        $this->data['week']     = FasesWeek::where('fases_id',$id)->get();




        return view($this->detail)->with($this->data);
    }
}