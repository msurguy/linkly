<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;
use Illuminate\Support\Facades\Auth;
use Vinkla\Hashids\Facades\Hashids;

class LinkController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
      if (!Auth::user()){
          return redirect('/')->with('Please log in to see your links');
      }

      return Auth::user()->links;
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create(Request $request)
  {
      // Make sure that the link is present, is a valid URL and less than 2048 chars
      // If the link is invalid, redirect back to the same page, preserving the input
      $request->validate([
          'link' => 'required|url|max:2048'
      ]);

      // Here is where we could scan the DB for presence of the same link and return that link info instead (only if the link doesn't belong to any users):

      /*

       $existingLink = Link::whereNull('user_id')->where('destination', $request->link)->first();
      if($existingLink){
          return redirect('/')->with('slug', $existingLink->slug);
      }

      Possible optimizations:
      - Separate the DB records for orphan links (without users) and links belonging to users, for faster search
      - Create an MD5 hash of full link and use that as unique identifier (potentially can be faster since links can be up to 2048 chars, where md5 is 32 chars
      - Take a part of the MD5 hash instead of using full hash

      */

      // If validation passed, create an instance of Link model (and insert DB record)
      $link = new Link;
      $link->title = $request->title || '';
      $link->destination = $request->link;

      // If the user is logged in, attach the link to this user
      if (Auth::user()){
          $link->user_id = Auth::user()->id;
      }

      $link->save(); // Necessary in order to retrieve the ID of the created link

      // Encode the ID with Hashids library (convert to base 62 + reduce possibility of swear words in the slug)
      $link->slug = Hashids::encode($link->id);

      $link->save(); // Update the link DB record with the slug

      // Return just the slug of the link
      return redirect('/')->with('link', ['destination' => $link->destination, 'slug'=>$link->slug]);
      //return $link->slug;
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