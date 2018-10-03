<?php
//app/Helpers/Modules.php
namespace App\Helpers;
 
use Illuminate\Support\Facades\DB;
 
class Designation {
    /**
     * @param int $user_id User-id
     * 
     * @return string
     */
    public static function getDesignation($role_id) 
    {
        $designation = DB::table('roles')->where('id',$role_id)->first();
        return $designation;
    }
}