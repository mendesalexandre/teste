<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    const PUBLISH = 'publish';
    const FUTURE = 'future';
    const DRAFT = 'draft';
    const PENDING = 'pending';
    // const PRIVATE = 'private';

    public function index()
    {
        $posts = Post::query()->where('status', self::PUBLISH);

        return response()->json(['data' => $posts], 200);
    }
}
