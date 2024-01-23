@extends('layouts.main')
@section('content')
    <div class="container contact-us-container animate__animated animate__bounce animate__fadeInDown py-5">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8" style="background-color: #e7f0e7; padding: 30px; border-radius: 30px;">
                <h2 class="text-black">
                    Apply Now
                </h2>
                <p class="p-b-3" style="font-size: 18px; text-align: justify; color: black;">
                    To apply for the desired job, we recommend reading the job requirements
                    carefuly then if you found yourself qualified for it, simply fill in the below form and
                    click APPLY NOW.
                </p>
                <form autocomplete="off" method="POST" action="{{ route('cv.store') }}" enctype="multipart/form-data"
                    id="create-form" autocomplete="off">
                    @csrf

                    <style>
                        input[type=text] {
                            width: 100%;
                            padding: 12px 20px;
                            margin: 8px 0;
                            box-sizing: border-box;
                            border: 1px solid black;
                            -webkit-transition: 0.5s;
                            transition: 0.5s;
                            outline: none;
                        }

                        input[type=text]:focus {
                            border: 1px solid black;
                        }
                    </style>

                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                            <label class="text-black" style="color: black;">Name*</label>
                            <input type="text" name="name" class="form-control " value="">
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                            <label class="text-black" style="color: black;">Phone</label>
                            <input type="text" name="phone" class="form-control " value="">
                        </div>
                    </div>

                    <div class="col-lg-12 py-3">
                        <div class="form-group">
                            <label class="text-black" style="color: black;">Additional Note</label>
                            <input type="text" name="additional_note" class="form-control " value="">
                        </div>
                    </div>

                    <div class="col-lg-12 py-3">
                        <div class="form-group">
                            <label for="img" style="color: black;">
                                Select your CV to upload
                            </label>
                            <br>
                            <input type="file" name="attachment_file" accept=".doc, .docx, .pdf"
                                class="form-control-file" required>
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="custom_btn bg_default_orange wow fadeInUp2" data-wow-delay=".5s">
                            APPLY NOW
                            <span>
                                <i class="fal fa-arrow-right"></i>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreCv', '#create-form') !!}
@endsection
