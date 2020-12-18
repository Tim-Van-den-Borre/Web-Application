<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    public function index() {
        $games = auth()->user()->games;
        return response()->json(['success' => true, 'data' => $games]);
    }
 
    public function show($id) {
        $game = auth()->user()->games()->find($id);
 
        if (!$game) {
            return response()->json(['success' => false, 'message' => 'The specified game has not been found.'], 400);
        }
        return response()->json(['success' => true, 'data' => $game->toArray()], 200);
    }
 
    public function store(Request $request) {
        $this->validate($request, ['title' => 'required', 'description' => 'required']);
 
        $game = new game();
        $game->title = $request->title;
        $game->description = $request->description;
 
        if (auth()->user()->games()->save($game)) {
            return response()->json(['success' => true, 'data' => $game->toArray()]);
        } else {
            return response()->json(['success' => false, 'message' => 'The game has not been added.'], 500);
        }
    }
 
    public function update(Request $request, $id) {
        $game = auth()->user()->games()->find($id);
 
        if (!$game) {
            return response()->json(['success' => false, 'message' => 'The specified game has not been found.'], 400);
        }
 
        $updated = $game->fill($request->all())->save();
 
        if ($updated) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false, 'message' => 'The specified game can not be updated.'], 500);
        }
    }
 
    public function destroy($id) {
        $game = auth()->user()->games()->find($id);
 
        if (!$game) {
            return response()->json(['success' => false, 'message' => 'The specified game has not been found.'], 400);
        }
 
        if ($game->delete()) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false, 'message' => 'The specified game has not been deleted.'], 500);
        }
    }
}

// Geraadpleegd op 17/12/2020. Laravel passport REST API.
// https://laravel.com/docs/8.x/passport#deploying-passport
// https://laravel.com/docs/8.x/passport#requesting-password-grant-tokensµ
// https://laravel.com/docs/8.x/passport#deploying-passport