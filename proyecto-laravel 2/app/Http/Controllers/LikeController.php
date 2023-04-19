<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Like;

class LikeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $user = \Auth::user();
        $likes = Like::where('users_id', $user->id)
                ->orderBY('id','desc')
                ->simplePaginate(5);

        return view('like.index',[
            'likes'=>$likes
        ]);

    }
    public function like($image_id){
        //Recoger datos de usuarios y la imagen 
        $user = \Auth::user();
        
        //condicion para ver si el like existe y no duplicarlo 
        $isset_like = Like::where('users_id',$user->id)
                    ->where('image_id',$image_id)
                    ->count();

        if($isset_like == 0){

        
        $like = new Like();
        $like->users_id = $user->id;
        $like->image_id = (int) $image_id;

        //Guardar 
        $like->save();
        
        return response()->json([
            'like'=>$like
        ]);  
        }else{
            return response()->json([
                'message'=> 'El like ya existe'
            ]);

        }



    }

    public function dislike($image_id){
        //Recoger datos de usuarios y la imagen 
        $user = \Auth::user();
        
        //condicion para ver si el like existe y no duplicarlo 
        $like = Like::where('users_id',$user->id)
                    ->where('image_id',$image_id)
                    ->first();

        if($like){

        //eliminar like 
        $like->delete();
        
        return response()->json([
            'like'=>$like,
            'message'=> 'Has dado dislike correctamente'
        ]);  
        }else{
            return response()->json([
                'message'=> 'El like no existe'
            ]);

        }

    }

    

}
