<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
	protected  $table 		='gallery';
	protected $fillable 	= ['id', 'title', 'image','gallery_category_id','status',  'created_at',  'updated_at'];

    public function category(){
        return $this->hasOne('\App\Models\GalleryCategory','id','gallery_category_id');
    } 
	public static function list($fetch='array',$where='',$keys=['*'],$order='id-desc'){
		
        $table_subcourse = self::select($keys)->where('status','active')
        ->with([
            'category' => function($q) {
                $q->select('id', 'name');
                
            }
        ]);        
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
