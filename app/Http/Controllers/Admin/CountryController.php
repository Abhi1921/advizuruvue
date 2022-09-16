<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Utility\ValidationUtil;
use App\Models\country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    use ValidationUtil;

    /**
     * For showing countries view
     *
     * @return View responce blade view with data
     */
    public function index(Request $request)
    {
        return view('admin.modules.countries.list', [
            "name" => $request->name,
            "offset" => $request->offset,
            "q" => $request->q,
        ]);
    }

    /**
     * For getting countries listing
     *
     * @param Request $request request body from client
     * @return Json responce data with http responce code
     */
    public function listCountry(Request $request)
    {
        $query = country::query();
        $offset = 10;
        if ($request->offset != null && $request->offset != '') {
            $offset = $request->offset;
        }
        if ($request->name != null && $request->name != '') {
            $query->where('first_name', 'like', "%$request->name%");
        }

        $items = $query->orderBy('id', 'desc')->paginate($offset);

        $data = [
            'rows' => view('admin.modules.countries.list_rows',
                [
                    'items' => $items,
                ]
            )->render(),
            'pagination' => view('admin.inc.pagination', ['result' => $items])->render(),
        ];
        return response()->json($data, 200);
    }

     /**
     * For showing countries add view
     *
     * @return View responce blade with data
     */
    public function create()
    {
        return view('admin.modules.countries.add', [
            "item" => false,
        ]);
    }

    /**
     * For updating countries data
     *
     * @param Request $request request body from client
     * @return Json responce data with http responce code
     */
    public function store(Request $request)
    {
        $valid = $this->storeCountryValidAdmin($request);
        if ($valid) {
            return $valid;
        }

        if ($request->id) {
            $user = country::find($request->id);
        } else {
            $user = new country();
        }
        $user->uuid = $request->uuid;
        $user->country = $request->country;
        
        $user->save();
        return response()->json([
            'success' => true,
            'message' => 'Country Updated',
            'redirect' => "javascript: void(0)",
        ]);
    }

    /**
     * For showing countries edit view
     *
     * @param Integer $id id of country
     * @return View responce blade with data
     */
    public function edit($id)
    {
        return view('admin.modules.countries.add', [
            "item" => country::find($id),
        ]);
    }

    /**
     * For deleting the country
     *
     * @param Request $request request body from client
     * @return Json responce data with http responce code
     */
    public function delete(Request $request)
    {
        country::find($request->id)->delete();
        return response()->json([
            'message' => 'Deleted Successfully!',
        ], 200);
    }

    /**
     * For changing the country status
     *
     * @param Request $request request body from client
     * @return Json responce data with http responce code
     */
    public function status(Request $request)
    {
        $item = country::find($request->id);
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
