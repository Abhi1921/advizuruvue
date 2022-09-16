<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Utility\ValidationUtil;
use App\Models\MasterData;
use Illuminate\Http\Request;

class MastersController extends Controller
{
    use ValidationUtil;

    /**
     * For showing masters view
     *
     * @return View responce blade view with data
     */
    public function index(Request $request)
    {
        return view('admin.modules.masters.list', [
            "name" => $request->name,
            "offset" => $request->offset,
            "q" => $request->q,
        ]);
    }

    /**
     * For getting masters listing
     *
     * @param Request $request request body from client
     * @return Json responce data with http responce code
     */
    public function listMasters(Request $request)
    {
        $query = MasterData::query();
        $offset = 10;
        if ($request->offset != null && $request->offset != '') {
            $offset = $request->offset;
        }
        if ($request->name != null && $request->name != '') {
            $query->where('first_name', 'like', "%$request->name%");
        }

        $items = $query->orderBy('id', 'desc')->paginate($offset);

        $data = [
            'rows' => view('admin.modules.masters.list_rows',
                [
                    'items' => $items,
                ]
            )->render(),
            'pagination' => view('admin.inc.pagination', ['result' => $items])->render(),
        ];
        return response()->json($data, 200);
    }

     /**
     * For showing masters add view
     *
     * @return View responce blade with data
     */
    public function create()
    {
        return view('admin.modules.masters.add', [
            "item" => false,
        ]);
    }

    /**
     * For updating masters data
     *
     * @param Request $request request body from client
     * @return Json responce data with http responce code
     */
    public function store(Request $request)
    {
        $valid = $this->storeMastersValidAdmin($request);
        if ($valid) {
            return $valid;
        }

        if ($request->id) {
            $user = MasterData::find($request->id);
        } else {
            $user = new MasterData();
        }
        $user->name = $request->name;
        $user->type = $request->type;
        
        $user->save();
        return response()->json([
            'success' => true,
            'message' => 'Master Updated',
            'redirect' => "javascript: void(0)",
        ]);
    }

    /**
     * For showing masters edit view
     *
     * @param Integer $id id of masters
     * @return View responce blade with data
     */
    public function edit($id)
    {
        return view('admin.modules.masters.add', [
            "item" => MasterData::find($id),
        ]);
    }

    /**
     * For deleting the masters
     *
     * @param Request $request request body from client
     * @return Json responce data with http responce code
     */
    public function delete(Request $request)
    {
        MasterData::find($request->id)->delete();
        return response()->json([
            'message' => 'Deleted Successfully!',
        ], 200);
    }

    /**
     * For changing the masters status
     *
     * @param Request $request request body from client
     * @return Json responce data with http responce code
     */
    public function status(Request $request)
    {
        $item = MasterData::find($request->id);
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
