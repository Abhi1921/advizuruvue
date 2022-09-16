<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Utility\ValidationUtil;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    use ValidationUtil;

    /**
     * For showing city view
     *
     * @return View responce blade view with data
     */
    public function index(Request $request)
    {
        return view('admin.modules.city.list', [
            "name" => $request->name,
            "offset" => $request->offset,
            "q" => $request->q,
        ]);
    }

    /**
     * For getting city listing
     *
     * @param Request $request request body from client
     * @return Json responce data with http responce code
     */
    public function listCity(Request $request)
    {
        $query = City::query();
        $offset = 10;
        if ($request->offset != null && $request->offset != '') {
            $offset = $request->offset;
        }
        if ($request->name != null && $request->name != '') {
            $query->where('first_name', 'like', "%$request->name%");
        }

        $items = $query->orderBy('id', 'desc')->paginate($offset);

        $data = [
            'rows' => view('admin.modules.city.list_rows',
                [
                    'items' => $items,
                ]
            )->render(),
            'pagination' => view('admin.inc.pagination', ['result' => $items])->render(),
        ];
        return response()->json($data, 200);
    }

     /**
     * For showing city add view
     *
     * @return View responce blade with data
     */
    public function create()
    {
        return view('admin.modules.city.add', [
            "item" => false,
        ]);
    }

    /**
     * For updating city data
     *
     * @param Request $request request body from client
     * @return Json responce data with http responce code
     */
    public function store(Request $request)
    {
        $valid = $this->storeCityValidAdmin($request);
        if ($valid) {
            return $valid;
        }

        if ($request->id) {
            $user = City::find($request->id);
        } else {
            $user = new City();
        }
        $user->uuid = $request->uuid;
        $user->city = $request->city;
        
        $user->save();
        return response()->json([
            'success' => true,
            'message' => 'City Updated',
            'redirect' => "javascript: void(0)",
        ]);
    }

    /**
     * For showing city edit view
     *
     * @param Integer $id id of masters
     * @return View responce blade with data
     */
    public function edit($id)
    {
        return view('admin.modules.city.add', [
            "item" => City::find($id),
        ]);
    }

    /**
     * For deleting the city
     *
     * @param Request $request request body from client
     * @return Json responce data with http responce code
     */
    public function delete(Request $request)
    {
        City::find($request->id)->delete();
        return response()->json([
            'message' => 'Deleted Successfully!',
        ], 200);
    }

    /**
     * For changing the city status
     *
     * @param Request $request request body from client
     * @return Json responce data with http responce code
     */
    public function status(Request $request)
    {
        $item = City::find($request->id);
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


