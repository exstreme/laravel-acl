<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(Request $request)
    {
        try {
            $this->validate($request, [
                'field_1' => 'required|max:50',
                'field_2' => 'required|max:50'
            ]);
        } catch (ValidationException $e) {
            return response()->json('error',404);
        }

        $post = Post::updateOrCreate($request->all());

        redirect('/home');
    }

    public function delete()
    {

    }

    public function show()
    {

    }
}
