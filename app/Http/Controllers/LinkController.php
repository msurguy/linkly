<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;
use Illuminate\Support\Facades\Auth;

class LinkController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    return Auth::user()->links();
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create(Request $request)
  {
      $validatedData = $request->validate([
          'link' => 'required|url|max:2048'
      ]);

      $link = new Link;
      $link->title = $request->title || '';
      $link->destination = $request->link;

      if (Auth::user()){
          $link->user_id = Auth::user()->id;
      }

      return $link;

  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
}

?>