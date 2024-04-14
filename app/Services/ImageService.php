<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageService
{
    public function all()
    {
        $images = DB::table('images')->select('*')->get();

        return $images;
    }
    public function one($id)
    {
        $image = DB::table('images')->select('*')->where('id', $id)->first();

        return $image;
    }
    public function create($image)
    {
        $imageName = $image->store('/uploads');

        DB::table('images')->insert([
            'name' => $imageName
        ]);
    }
    public function update($id, $image)
    {
        $this->deleteFromServer($id);

        $imageName = $image->store('/uploads');

        DB::table('images')->where('id', $id)->update(['name' => $imageName]);
    }
    public function delete($id)
    {
        $this->deleteFromServer($id);

        DB::table('images')->where('id', $id)->delete();
    }

    public function deleteFromServer($id)
    {
        $image = DB::table('images')->select('*')->where('id', $id)->first();
        Storage::delete($image->name);
    }
}
