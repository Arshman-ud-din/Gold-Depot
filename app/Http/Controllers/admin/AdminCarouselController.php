<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCarouselImageRequest;
use App\Models\Carousel;
use Illuminate\Http\Request;

class AdminCarouselController extends Controller
{

    public function index()
    {

        $carouselimages = Carousel::all();
        return view('screens.admin.carousel.show', get_defined_vars());
    }
    public function create()
    {

        return view('screens.admin.carousel.index');
    }


    public function store(StoreCarouselImageRequest $request)
    {

        if ($imagesfiles = $request->file('images')) {
            // dd($imagesfiles);

            foreach ($imagesfiles as $image) {
                // dump($image);
                $imagename = time() . '.' . $image->getClientOriginalName();
                $image->move(public_path('images/carousel'), $imagename);

                Carousel::create([
                    'images' => $imagename,
                ]);

            }


        }
        return redirect()->route('admincarousel.index')->with('createcarousel', 'Carousel Image Has Been Created');;


    }
    public function edit($id)
    {

        $carouselimages = Carousel::find($id);


        return view('screens.admin.carousel.edit', get_defined_vars());

    }
    public function update(Request $request, $id)
    {

        $carouselimages = Carousel::find($id);

        if ($imagesfiles = $request->file(key: 'images')) {
            $galleryimage = $carouselimages->images;

            foreach ($imagesfiles as $image) {
                if (isset($galleryimage)) {
                    $imagename = time() . '_' . $image->getClientOriginalName();
                    $image->move(public_path('images/carousel'), $imagename);

                    $carouselimages->update([
                        'images' => $imagename ?? $galleryimage,
                    ]);
                }
            }
        }


        return redirect()->route('admincarousel.index', get_defined_vars())->with('updatecarousel', 'Carousel Image Has Been Updated');

    }

    public function delete($id)
    {

        Carousel::find($id)->delete();


        return redirect()->route('admincarousel.index')->with('deletecarousel', 'Carousel Has Been Deleted');

    }


}
