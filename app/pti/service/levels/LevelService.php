<?php

namespace App\pti\service\levels;

class LevelService{

    //Get Level Data function
    public function getLevelData()
    {

    }

        //Store Level Data function
    public function storeLevelData($levelModel, $request)
    {
        return $levelModel::updateORCreate(['id'=> $request->edit_id],
        [
            'name' => $request ->level_name,
            'status' => $request ->level_status,
            'description' => $request->description
        ]
        
        );
    }

            //Delete Level Data function
    public function deleteLevelData()
    {
        return $levelModel::delete();
    }

}