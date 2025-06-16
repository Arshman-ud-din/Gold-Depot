@extends('layout.admin.app')

@section('content')
    <main class="app-main">
        <div class="app-content-header">



            <div class="container">
                <div class="form-container">
                    <div class="form-header">
                        <h1>Add Product</h1>
                    </div>

                    <form id="donationForm" method="post" action="{{ route('adminproduct.update', $product->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-section">
                            <h2>Company Information</h2>
                            <div class="input-group">
                                <label for="companyName">Product Title</label>
                                <input type="text" id="companyName" name="title" value="{{ $product->title }}"
                                    required>
                                @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                            </div>

                            <div class="input-group d-flex flex-column">
                                <label for="short_description">Short Description</label>
                                <textarea name="short_description" id="short_description">{{ old('short_description', $product->short_description) }}</textarea>

                                @error('short_description')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="input-group d-flex flex-column">
                                <label for="long_description">Long Description</label>
                                <textarea name="long_description" id="long_description">{{ old('long_description', $product->long_description) }}</textarea>
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
                                <select name="category_id">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">
                                            {{ $product->category_id == $category->id }}
                                            {{ $category->name }}</option>
                                    @endforeach
                                </select>

                            </div>


                            <div class="attr-variant-container">
                                @foreach ($product->variants as $variant)
                                    <div class="to-clone">
                                        <div class="input-group">
                                            <label>Attribute</label>
                                            <select name="attribute_id[]" required>
                                                <option value="">Select Attribute</option>
                                                @foreach ($productAttributes as $attribute)
                                                    <option value="{{ $attribute->id }}"
                                                        {{ $variant->attribute_id == $attribute->id ? 'selected' : '' }}>
                                                        {{ $attribute->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="input-group">
                                            <label>Variant</label>
                                            <select name="variant_id[]" required>
                                                <option value="">Select Variant</option>
                                                @foreach ($variants as $var)
                                                    <option value="{{ $var->id }}"
                                                        {{ $variant->id == $var->id ? 'selected' : '' }}>
                                                        {{ $var->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <button class="btn btn-sm btn-danger sub-btn mt-2" type="button">Remove</button>
                                    </div>
                                @endforeach
                            </div>
                            <div>
                                <button class="btn btn-sm btn-primary add-btn" type="button">Add More Attribute
                                    Variants</button>

                            </div>

                            <div class="input-group">
                                <label for="coin_price">Product Price</label>
                                <input type="number" id="coin_price" value="{{ $product->price }}" name="price"
                                    required>
                                @error('price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-group">
                                <label for="coin_price">Product Quantity</label>
                                <input type="number" id="coin_price" value="{{ $product->quantity }}" name="quantity"
                                    required>
                                @error('quantity')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                            </div>


                            <div class="input-group d-flex justify-content-start" style="margin-top: 20px;">
                                <button type="submit" class="btn btn-outline-warning btn-lg"
                                    style="margin-right: 10px;">Edit Product</button>
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
