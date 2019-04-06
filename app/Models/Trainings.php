<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trainings extends Model
{
  	protected  $table 		='trainings';
	protected $fillable 	= ['course_id', 'training_type', 'status', 'created_at','updated_at'];

    public function maincourse(){
        return $this->hasone('App\Models\MainCourses','id','course_id');
    }

	public static function list($fetch='array',$where='',$keys=['*'],$order='id-asc'){
        $table_trainings = self::select($keys)
        ->with([
            'maincourse' => function($q){
                $q->select('id','name');
            },
        ])->where('status','active');        
        if($where){
            $table_trainings->whereRaw($where);
        }
                
        if(!empty($order)){
            $order = explode('-', $order);
            $table_trainings->orderBy($order[0],$order[1]);
        }
        if (!empty($limit)) {
            $table_trainings->limit($limit);
        }
        if($fetch === 'array'){
            $list = $table_trainings->get();
            return json_decode(json_encode($list ), true );
        }
        elseif($fetch === 'paginate'){
            $list = $table_trainings->paginate(1);
            return json_decode(json_encode($list ), true );
        }else if($fetch === 'obj'){
            return $table_trainings->limit($limit)->get();                
        }else if($fetch === 'single'){
            return $table_trainings->get()->first();
        }else if($fetch === 'count'){
            return $table_trainings->get()->count();
        }else{
            return $table_trainings->limit($limit)->get();
        }
    }
}
