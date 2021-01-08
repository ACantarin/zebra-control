<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\EquipeRepository;
use Illuminate\Http\Request;

class EquipesController extends Controller
{
    private $equipeRepo;

    public function __construct()
    {
        $this->equipeRepo = new EquipeRepository;
    }

    public function index()
    {
        $data = $this->equipeRepo->getAll();

        return response()->json([
            'data' => $data
        ], 200);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data = $this->equipeRepo->save($data);
    }

    public function destroy($id)
    {
        return $this->equipeRepo->delete($id);
    }
}