<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function save(Request $request){
        //Validacion 
        $validate = $this->validate($request,[
            'image_id' => 'integer|required',
            'content' => 'string|required'
        ]);    
        //Recoger datos
        $user = \Auth::user();
        $image_id = $request->input('image_id');
        $content = $request->input('content');

        //Asigno los valores a mi nuevo objeto a guardar
        $comment = new Comment();
        $comment->users_id = $user->id;
        $comment->image_id = $image_id;
        $comment->content = $content;
        //guaradar en la base de datos
        $comment->save();
        //redirecion
        return redirect()->route('image.detail',['id'=>$image_id])
                                ->with([

                                'message' => 'Has publicado tu comentario correctamente']);
    }

    public function delete($id){
        //conseguir datos del usuario identificado
        $user = \Auth::user();

        //conseguir obejto del comentario 
        $comment = Comment::find($id);

        //comprobar si soy el dueño del comentario o  de la publicacion 
        if ($user && ($comment->users_id == $user->id || $comment->image->users_id == $user->id)){
            $comment->delete();
            return redirect()->route('image.detail',['id'=>$comment->image->id])
                                ->with([

                                'message' => 'Comentado eliminado correctamente']);
    
        }else{
            return redirect()->route('image.detail',['id'=>$comment->image->id])
                                ->with([

                                'message' => 'El comentario no se ha eliminado']);
        }

    }
}
