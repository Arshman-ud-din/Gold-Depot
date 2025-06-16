@extends('layout.admin.app')

@section('content')
    <main class="app-main">
        <div class="app-content-header">



            <div class="container">
                <div class="form-container">
                    <div class="form-header">
                        <h1>Edit Carousel Images</h1>
                    </div>

                    <form id="donationForm" method="post" action="{{route('admincarousel.update', $carouselimages->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-section">
                            <h2>Edit Carousel Images</h2>

                            <div class="input-group">
                                <label for="categories">Images</label>
                                <input type="file" id="categories" value="{{$carouselimages->images}}" name="images[]" multiple>
                                  @error('images')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>





                            {{-- Buttons --}}
                            <div class="input-group d-flex justify-content-start" style="margin-top: 20px;">
                                <button type="submit" class="btn btn-outline-warning btn-lg"
                                    style="margin-right: 10px;">Edit Carousel</button>
                            </div>
                        </div>
                    </form>


                    <div id="thankYouMessage" class="thank-you-message hidden">
                        <div class="checkmark-circle">
                            <div class="checkmark"></div>
                        </div>
                        <h2>Thank You for Your Generous Support!</h2>
                        <p>Your contribution will make a meaningful impact.</p>
                        <p>A confirmation email has been sent to your address.</p>
                        <button id="newDonationBtn" class="btn-secondary">Make Another Donation</button>
                    </div>
                </div>


            </div>

        </div>


    </main>
@endsection
