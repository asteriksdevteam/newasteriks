<?php

namespace App\Traits;

use Illuminate\Http\Request;

trait ImageTrait {

    /**
     * @param Request $request
     * @return $this|false|string
     */
    public function verifyAndUpload($file, $folder) 
    {
        $imageName = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path($folder), $imageName);
        return $folder.'/'.$imageName;
    }
}