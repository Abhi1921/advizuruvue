<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Utility\ValidationUtil;
use App\Models\states;
use Illuminate\Http\Request;

class StatesController extends Controller
{
    use ValidationUtil;

    /**
     * For showing State view
     *
     * @return View responce blade view with data
     */
    public function index(Request $request)
    {
        return view('admin.modules.states.list', [
            "name" => $request->name,
            "offset" => $request->offset,
            "q" => $request->q,
        ]);
    }

    /**
     * For getting states listing
     *
     * @param Request $request request body from client
     * @return Json responce data with http responce code
     */
    public function listStates(Request $request)
    {
        $query = states::query();
        $offset = 10;
        if ($request->offset != null && $request->offset != '') {
            $offset = $request->offset;
        }
        if ($request->name != null && $request->name != '') {
            $query->where('first_name', 'like', "%$request->name%");
        }

        $items = $query->orderBy('id', 'desc')->paginate($offset);

        $data = [
            'rows' => view('admin.modules.states.list_rows',
                [
                    'items' => $items,
                ]
            )->render(),
            'pagination' => view('admin.inc.pagination', ['result' => $items])->render(),
        ];
        return response()->json($data, 200);
    }

     /**
     * For showing states add view
     *
     * @return View responce blade with data
     */
    public function create()
    {
        return view('admin.modules.states.add', [
            "item" => false,
        ]);
    }

    /**
     * For updating states data
     *
     * @param Request $request request body from client
     * @return Json responce data with http responce code
     */
    public function store(Request $request)
    {
        $valid = $this->storeStatesValidAdmin($request);
        if ($valid) {
            return $valid;
        }

        if ($request->id) {
            $user = states::find($request->id);
        } else {
            $user = new states();
        }
        $user->uuid = $request->uuid;
        $user->state = $request->state;
        
        $user->save();
        return response()->json([
            'success' => true,
            'message' => 'State Updated',
            'redirect' => "javascript: void(0)",
        ]);
    }

    /**
     * For showing states edit view
     *
     * @param Integer $id id of state
     * @return View responce blade with data
     */
    public function edit($id)
    {
        return view('admin.modules.states.add', [
            "item" => states::find($id),
        ]);
    }

    /**
     * For deleting the states
     *
     * @param Request $request request body from client
     * @return Json responce data with http responce code
     */
    public function delete(Request $request)
    {
        states::find($request->id)->delete();
        return response()->json([
            'message' => 'Deleted Successfully!',
        ], 200);
    }

    /**
     * For changing the states status
     *
     * @param Request $request request body from client
     * @return Json responce data with http responce code
     */
    public function status(Request $request)
    {
        $item = states::find($request->id);
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
