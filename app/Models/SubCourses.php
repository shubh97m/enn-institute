<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCourses extends Model
{
   	protected  $table 		='sub_courses';
	protected $fillable 	= ['name','image','course_id','description', 'created_at','updated_at','status'];

	public function maincourse(){
        return $this->hasone('App\Models\MainCourses','id','course_id');
    }

	public static function list($fetch='array',$where='',$keys=['*'],$order='id-asc'){
        $table_subcourse = self::select($keys)
        ->with([
            'maincourse' => function($q){
                $q->select('id','name');
            },
        ])->where('status','active');        
        if($where){
            $table_subcourse->whereRaw($where);
        }
                
        if(!empty($order)){
            $order = explode('-', $order);
            $table_subcourse->orderBy($order[0],$order[1]);
        }
        if (!empty($limit)) {
            $table_subcourse->limit($limit);
        }
        if($fetch === 'array'){
            $list = $table_subcourse->get();
            return json_decode(json_encode($list ), true );
        }
        elseif($fetch === 'paginate'){
            $list = $table_subcourse->paginate(1);
            return json_decode(json_encode($list ), true );
        }else if($fetch === 'obj'){
            return $table_subcourse->limit($limit)->get();                
        }else if($fetch === 'single'){
            return $table_subcourse->get()->first();
        }else if($fetch === 'count'){
            return $table_subcourse->get()->count();
        }else{
            return $table_subcourse->limit($limit)->get();
        }
    }
}
