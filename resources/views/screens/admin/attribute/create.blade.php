@extends('layout.admin.app')

@section('content')
    <main class="app-main">
        <div class="app-content-header">



            <div class="container">
                <div class="form-container">
                    <div class="form-header">
                        <h1>Add Attributes</h1>
                    </div>

                    <form method="post" action="{{ route('adminattribute.store') }}">
                        @csrf
                        <div class="form-section">
                            <h2>Add Attributes</h2>
                            <div class="input-group">
                                <label for="companyName">Name</label>
                                <input type="text" id="companyName" name="name" value="{{ old('name') }}" required>
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- Buttons --}}
                            <div class="input-group d-flex justify-content-start" style="margin-top: 20px;">
                                <button type="submit" class="btn btn-outline-warning btn-lg"
                                    style="margin-right: 10px;">Add Attributes</button>
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
