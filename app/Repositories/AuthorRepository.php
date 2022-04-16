<?php
namespace App\Repositories;
use App\Models\Author;
use http\Env\Request;


class AuthorRepository extends BaseRepository
{
    public function getTable()
    {
        return 'authors';
    }

    public function store($request)
    {
        $author = new Author();
        $author->name = $request->name;
        $author->avatar = $request->avatar;
        $author->gender = $request->gender;
        $author->date_of_birth = $request->date_of_birth;
        $author->biography = $request->biography;
        $author->information = $request->information;
        $author->save();

    }

    public function update($request,$id)
    {
        $author = Author::find($id);
        $author->name = $singer->name;
        $author->avatar = $singer->avatar;
        $author->gender = $request->gender;
        $author->date_of_birth = $request->date_of_birth;
        $author->biography = $request->biography;
        $author->information = $request->information;
        $author->save();

    }


}

?>
