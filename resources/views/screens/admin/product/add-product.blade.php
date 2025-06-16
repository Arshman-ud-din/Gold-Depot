@extends('layout.admin.app')

@section('content')
    <main class="app-main">
        <div class="app-content-header">
            <div class="container">
                <div class="form-container">
                    <div class="form-header">
                        <h1>Add Product</h1>
                    </div>

                    <form method="post" action="{{ route('adminproduct.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-section">
                            <h2>Company Information</h2>
                            <div class="input-group">
                                <label for="companyName">Product Title</label>
                                <input type="text" id="companyName" name="title" value="{{ old('title') }}">
                                @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                            </div>

                            <div class="input-group d-flex flex-column">
                                <label for="short_description">Short Description</label>
                                <textarea name="short_description" id="short_description">{{ old('short_description') }}</textarea>
                                @error('short_description')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="input-group d-flex flex-column">
                                <label for="long_description">Long Description</label>
                                <textarea name="long_description" id="long_description">{{ old('long_description') }}</textarea>
                                @error('long_description')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="input-group">
                                <label for="categories">Featured Image</label>
                                <input type="file" id="categories" name="featured_img">
                                @error('featured_img')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-group">
                                <label for="categories">Images</label>
                                <input type="file" id="categories" name="images[]" multiple>
                                @error('images')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="input-group">
                                <label for="categories">Categories</label>
                                <select id="cars" value="{{ old('catgory_id') }}" name="category_id">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="attr-variant-container">
                                <div class="to-clone">
                                    <div class="input-group">
                                        <label>Attributes</label>
                                        <select name="attribute_id[]" class="attribute-select ">
                                            <option value="" selected>Select Attribute</option>
                                            @foreach ($attrs as $attr)
                                                <option value="{{ $attr->id }}">{{ $attr->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="input-group">
                                        <label>Variants</label>
                                        <select name="variant_id[]" class="variant-select ">
                                            <option value="">Select Variant</option>
                                            @foreach ($attrs as $attr)
                                                @foreach ($attr->variants as $variant)
                                                    <option value="{{ $variant->id }}"
                                                        >
                                                        {{ $variant->name }}
                                                    </option>
                                                @endforeach
                                            @endforeach
                                        </select>
                                    </div>

                                    <button class="btn btn-sm btn-danger sub-btn mt-2" type="button">Remove</button>
                                </div>
                            </div>

                            <button class="btn btn-sm btn-primary add-btn mt-2" type="button">Add More Attribute
                                Variants</button>

                            <div class="input-group">
                                <label for="coin_price">Product Price</label>
                                <input type="number" id="coin_price" value="{{ old('price') }}" name="price">
                                @error('price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-group">
                                <label for="coin_price">Product Quantity</label>
                                <input type="number" id="coin_price" value="{{ old('quantity') }}" name="quantity">
                                @error('quantity')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                            </div>

                            <div class="input-group d-flex justify-content-start" style="margin-top: 20px;">
                                <button type="submit" class="btn btn-outline-warning btn-lg"
                                    style="margin-right: 10px;">Add Product</button>
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

                {{-- <div class="impact-sidebar">
                    <h2>Your Impact</h2>
                    <div class="impact-item">
                        <div class="impact-icon">🌱</div>
                        <div class="impact-text">
                            <h3>Plant Trees</h3>
                            <p>Help us plant 10,000 trees this year</p>
                        </div>
                    </div>
                    <div class="impact-item">
                        <div class="impact-icon">📚</div>
                        <div class="impact-text">
                            <h3>Support Education</h3>
                            <p>Provide resources for underserved schools</p>
                        </div>
                    </div>
                    <div class="impact-item">
                        <div class="impact-icon">🏥</div>
                        <div class="impact-text">
                            <h3>Improve Healthcare</h3>
                            <p>Fund medical care in rural communities</p>
                        </div>
                    </div>
                    <div class="impact-stats">
                        <div class="stat">
                            <div class="stat-number">120+</div>
                            <div class="stat-label">Corporate Partners</div>
                        </div>
                        <div class="stat">
                            <div class="stat-number">$2.4M</div>
                            <div class="stat-label">Raised This Year</div>
                        </div>
                    </div>
                </div> --}}
            </div>

        </div>


    </main>
@endsection
@push('script')
    <script>
        $(document).ready(function() {

            $(".add-btn").on("click", function(e) {
                e.preventDefault();
                console.log('working');
                let paretnContainer = $(".attr-variant-container");
                let toClone = paretnContainer.find(".to-clone").first();
                let cloned = toClone.clone();
                cloned.find('select[name="attribute_id[]"]').val('');
                paretnContainer.append(cloned);
            })

            $(document).on("click", ".sub-btn", function(e) {
                e.preventDefault();

                $(this).closest(".to-clone").remove();

            });




        })
        
        document.addEventListener("DOMContentLoaded", function() {
            ClassicEditor
                .create(document.querySelector('#short_description'))
                .catch(error => {
                    console.error(error);
                });

            ClassicEditor
                .create(document.querySelector('#long_description'))
                .catch(error => {
                    console.error(error);
                });
        });
    </script>
@endpush
