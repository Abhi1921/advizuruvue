<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Utility\ValidationUtil;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    use ValidationUtil;

    /**
     * For showing users view
     *
     * @return View responce blade view with data
     */
    public function index(Request $request)
    {
        return view('admin.modules.users.list', [
            "name" => $request->name,
            "offset" => $request->offset,
            "q" => $request->q,
        ]);
    }

    /**
     * For getting users listing
     *
     * @param Request $request request body from client
     * @return Json responce data with http responce code
     */
    public function listUsers(Request $request)
    {
        $query = User::query();
        $offset = 10;
        if ($request->offset != null && $request->offset != '') {
            $offset = $request->offset;
        }
        if ($request->name != null && $request->name != '') {
            $query->where('first_name', 'like', "%$request->name%");
        }

        $items = $query->orderBy('id', 'desc')->paginate($offset);

        $data = [
            'rows' => view('admin.modules.users.list_rows',
                [
                    'items' => $items,
                ]
            )->render(),
            'pagination' => view('admin.inc.pagination', ['result' => $items])->render(),
        ];
        return response()->json($data, 200);
    }

     /**
     * For showing users add view
     *
     * @return View responce blade with data
     */
    public function create()
    {
        return view('admin.modules.users.add', [
            "item" => false,
        ]);
    }

    /**
     * For updating users data
     *
     * @param Request $request request body from client
     * @return Json responce data with http responce code
     */
    public function store(Request $request)
    {
        $valid = $this->storeUsersValidAdmin($request);
        if ($valid) {
            return $valid;
        }

        if ($request->id) {
            $user = User::find($request->id);
        } else {
            $user = new User();
        }
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->save();
        return response()->json([
            'success' => true,
            'message' => 'User Updated',
            'redirect' => "javascript: void(0)",
        ]);
    }

    /**
     * For showing users edit view
     *
     * @param Integer $id id of users
     * @return View responce blade with data
     */
    public function edit($id)
    {
        return view('admin.modules.users.add', [
            "item" => User::find($id),
        ]);
    }

    /**
     * For deleting the users
     *
     * @param Request $request request body from client
     * @return Json responce data with http responce code
     */
    public function delete(Request $request)
    {
        User::find($request->id)->delete();
        return response()->json([
            'message' => 'Deleted Successfully!',
        ], 200);
    }

    /**
     * For changing the users status
     *
     * @param Request $request request body from client
     * @return Json responce data with http responce code
     */
    public function status(Request $request)
    {
        $item = User::find($request->id);
        if ($item->status == '1') {
            $item->status = '0';
        } else {
            $item->status = '1';
        }

        $item->save();

        return response()->json([
            'message' => 'Status Changed Successfully',
        ], 200);
    }

}
