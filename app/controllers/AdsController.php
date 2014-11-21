<?php

class AdsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /ads
	 *
	 * @return Response
	 */
	public function index()
	{
		$ads = Post::all();
		$this->layout->content = View::make('ads.index', compact('ads'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /ads/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->content = View::make('ads.create', compact ('ad'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /ads
	 *
	 * @return Response
	 */
	public function store()
	{
		//almacenar el nuevo Anuncio = Ad
		$input = Input::all();
		$input['ad_id'] = 2; //autor temporal
		Ad::create( $input );

		return Redirect::route('ads.index')->with('message', 'Anuncio Creado, Ya No Moleste :D');

	}

	/**
	 * Display the specified resource.
	 * GET /ads/{id}
	 *
	 * @param  Ad  $ad
	 * @return Response
	 */
	public function show(Ad $ad)
	{
		$this->layout->content = View::make('ads.edit', compact('ad'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /ads/{id}/edit
	 *
	 * @param  Ad  $ad
	 * @return Response
	 */
	public function edit(Ad $ad)
	{
			$this->layout->content = View::make('ads.edit', compact('ad'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /ads/{id}
	 *
	 * @param  Ad  $ad
	 * @return Response
	 */
	public function update(Ad $ad)
	{
				$input = array_except(Input::all(), '_method');
		$ad->update($input);

		$this->layout->content = View::make('ads.show', compact('ad'))->with('message', 'Anuncio Actualizo');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /ads/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}