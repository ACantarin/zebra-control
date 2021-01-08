<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\ArbitroRepository;
use Illuminate\Http\Request;

class ArbitrosController extends Controller
{
    private $arbitroRepo;

    public function __construct()
    {
        $this->arbitroRepo = new ArbitroRepository;
    }

    public function index()
    {
        $data = $this->arbitroRepo->getAll();

        return response()->json([
            'data' => $data
        ], 200);
    }

    public function get(Request $request)
    {
        return response()->json([
            'data' => $this->arbitroRepo->get($request['id'])
        ], 200);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data = $this->arbitroRepo->save($data);
    }

    public function destroy($id)
    {
        return $this->arbitroRepo->delete($id);
    }
}