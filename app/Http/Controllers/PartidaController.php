<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\PartidaRepository;
use Illuminate\Http\Request;

class PartidasController extends Controller
{
    private $partidaRepo;

    public function __construct()
    {
        $this->partidaRepo = new PartidaRepository;
    }

    public function index()
    {
        $data = $this->partidaRepo->getAll();

        return response()->json(['data' => $data], 200);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data = $this->partidaRepo->save($data);
    }

    public function destroy($id)
    {
        return $this->partidaRepo->delete($id);
    }
}