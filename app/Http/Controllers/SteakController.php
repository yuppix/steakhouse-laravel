<?php
namespace App\Http\Controllers;

use App\Models\Steak;

class SteakController extends Controller
{

  public function list() {

    $steaks = Steak::latest()->get();      

    return view('steaks.list', [
      'steaks' => $steaks,
    ]);
  }

  public function show($id) {
    
    $steak = Steak::findOrFail($id);

    return view('steaks.show', ['steak' => $steak]);
  }

  public function create() {
    return view('steaks.create');
  }

  public function store() {

    $steak = new Steak();

    $steak->customername = request('customername');
    $steak->beeftype = request('beeftype');
    $steak->doneness = request('doneness');
    $steak->sidedish = request('sidedish');
    $steak->sauces = request('sauces');

    $steak->save();

    return redirect('/')->with('mssg', 'Thanks for your order!');

  }

  public function destroy($id) {

    $steak = Steak::findOrFail($id);
    $steak->delete();

    return redirect('/steaks');

  }

}