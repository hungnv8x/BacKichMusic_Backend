<?php
namespace App\Repositories;
use App\Models\Singer;
use http\Env\Request;


class SingerRepository extends BaseRepository
{
    public function getTable()
    {
        return 'singers';
    }

    public function store($request)
    {
        $singer = new Singer();
        $singer->category_id= $request->category_id;
        $singer->name = $request->name;
        $singer->avatar = $request->avatar;
        $singer->gender = $request->gender;
        $singer->date_of_birth = $request->date_of_birth;
        $singer->biography = $request->biography;
        $singer->band = $request->band;
        $singer->hit = $request->hit;
        $singer->information = $request->information;
        $singer->save();

    }

    public function update($request,$id)
    {
        $singer = Singer::find($id);
        $singer->name = $singer->name??$singer->name;
        $singer->avatar = $singer->avatar??$singer->avatar;
        $singer->gender = $request->gender??$singer->gender;
        $singer->category_id= $request->category_id??$singer->category_id;
        $singer->date_of_birth = $request->date_of_birth??$singer->date_of_birth;
        $singer->biography = $request->biography??$singer->biography;
        $singer->band = $request->band??$singer->band;
        $singer->hit = $request->hit??$singer->hit;
        $singer->information = $request->information??$singer->information;
        $singer->save();


    }


}

?>




