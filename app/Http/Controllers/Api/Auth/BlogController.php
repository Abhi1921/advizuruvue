<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserBlog;
use Auth;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function blog(Request $request)
    {
        DB::beginTransaction();
        try {
            $user = UserBlog::where('id', $request->id)
                ->first();
            if (!$user)
                $user = new UserBlog();
            $user->user_id =Auth::user()->id;
            $user->title = $request->title;
            $user->skills = $request->skills;
            $user->image = $request->image;
            $user->description = $request->description;
            $user->status = $request->status ?: 1;
            $user->save();

            DB::commit();
            return response()->json([
                'status' => '200 ok',
                'error' => false,
                'message' => 'Blog data stored',
                'data' => $user,
            ], 201);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status' => '200',
                'error' => true,
                'message' => $e,
            ], 400);
        }
    }

    public function destroyBlog(UserBlog $id)
    {
        $id->delete();
        return response()->json([
            'success' => true,
            'message' => 'Blog deleted successfully',
        ]);
    }
    // Crud specialize

    public function listBlog(UserBlog $User)
    {
        $user = Auth::user();
        $users = UserBlog::where('user_id', $user->id)->orderBy('id')->get();

        return response()->json([
            'success' => true,
            "user" => $users,
            'message' => 'Blog list',
        ]);
    }
}
