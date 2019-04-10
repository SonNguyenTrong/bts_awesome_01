<?php

namespace App\Http\Controllers;

use App\Models\Day;
use App\Models\Tour;
use Illuminate\Http\Request;
use App\Http\Requests\DayStoreRequest;
use App\Repositories\Day\DayRepositoryInterface;
use App\Repositories\Image\ImageRepositoryInterface;
use App\Repositories\Tour\TourRepositoryInterface;

class DayController extends Controller
{   
    private $dayRepoRepository;
    private $imageRepoRepository;
    private $tourRepoRepository;

    public function __construct(ImageRepositoryInterface $image, DayRepositoryInterface $day, TourRepositoryInterface $tour)
    {
        $this->imageRepository = $image;
        $this->dayRepository = $day;
        $this->tourRepository = $tour;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
        $day = $this->dayRepository->create([
            'start_at' => $request->days->start_date,
            'end_at' => $request->days->end_date,
            'description' => $request->days->description,
            'province_id' => '0',
            'tour_id' => $request->tourId,
        ]);

        $image = $this->imageRepository->saveImage($request->images);
        foreach ($image as $key => $value){
            $createimage = $this->imageRepository->firstOrCreate(['name' => $value],['name' => $value]);
            $day->images()->attach($createimage->id);
        }
        return response([
            'result' => 'success'
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
