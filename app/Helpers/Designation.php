<?php
//app/Helpers/Modules.php
namespace App\Helpers;
 
use Illuminate\Support\Facades\DB;
use Session;

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

    public static function getSessionField($session_id, $field) 
    {
        $session = DB::table('sessions')->where('cid',Session::get('cid'))->where('id',$session_id)->first();
        return $session->$field;
    }

    public static function getCategoryField($category_id, $field) 
    {
        $category = DB::table('categories')->where('cid',Session::get('cid'))->where('is_active','1')->where('id',$category_id)->first();
        return $category->$field;
    }

    public static function getClassField($class_id, $field) 
    {
        $class = DB::table('classes')->where('cid',Session::get('cid'))->where('is_active','1')->where('id',$class_id)->first();
        return $class->$field;
    }

    public static function getSectionField($section_id, $field) 
    {
        $section = DB::table('sections')->where('cid',Session::get('cid'))->where('is_active','1')->where('id',$section_id)->first();
        return $section->$field;
    }

    public static function getLevelField($level_id, $field) 
    {
        $level = DB::table('levels')->where('cid',Session::get('cid'))->where('is_active','1')->where('id',$level_id)->first();
        return $level->$field;
    }

    public static function getTransHeadField($trans_head_id, $field) 
    {
        $transHead = DB::table('transaction_head')->where('cid',Session::get('cid'))->where('id',$trans_head_id)->first();
        return $transHead->$field;
    }

    public static function getTransTypeField($trans_type_id, $field) 
    {
        $transType = DB::table('transaction_type')->where('id',$trans_type_id)->first();
        return $transType->$field;
    }
}