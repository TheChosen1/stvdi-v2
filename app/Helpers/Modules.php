<?php
//app/Helpers/Modules.php
namespace App\Helpers;
 
use Illuminate\Support\Facades\DB;
 
class Modules {
    /**
     * @param int $user_id User-id
     * 
     * @return string
     */
    public static function getModule($value) 
    {
        $modules = DB::table('modules_group')->where('is_admin','=','NIL')->orWhere('is_admin','=',$value)->get();
        return $modules;
    }
    public static function getModuleList($mgid) 
    {
        $moduleList = DB::table('modules')->where('module_group_id','=',$mgid)->where('tree_view_list','=','1')->get();
        return $moduleList;
    } 
    public static function getModuleListPermit($cid, $rid, $mid) 
    {
        $moduleListPermit = DB::table('roles_permissions')->where('cid','=',$cid)->where('role_id','=',$rid)->where('module_id','=',$mid)->get();
        if (count($moduleListPermit) > 1){
            return $moduleListPermit;  
        }else{
            return null;
        }
        
    }        
}