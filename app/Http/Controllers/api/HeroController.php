<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Hero;

class HeroController extends Controller
{

	public function index()
	{
		return Hero::all();
	}


	public function store(Request $request)
	{
		Hero::create($request->all());
	}

	public function show($id)
	{
		return Hero::findOrFail($id);
	}

	public function update(Request $request, $id)
	{
		$hero = Hero::findOrFail($id);
		$hero->update($request->all());

		return Hero::findOrFail($id);
	}

	public function destroy($id)
	{
		$hero = Hero::findOrFail($id);
		$hero->delete();

		return 204;
	}
}
