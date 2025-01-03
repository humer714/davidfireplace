@extends('admin.master.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/plugins/jquery-auto-complete/jquery.auto-complete.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/plugins/select2/css/select2.min.css') }}">
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('assets/js/plugins/summernote/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/plugins/simplemde/simplemde.min.css') }}">
@endsection
@section('content')
    <div class="content">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                {{ session('success') }}
            </div>
        @endif


        <form action="{{ route('city.update', $city) }}" method="post" enctype="multipart/form-data">
            @method('patch')
            @csrf
            <div class="row">

                <div class="col-lg-8 col-12">
                    <div class="block  block-themed">
                        <div class="block-header bg-gd-dusk">
                            <h3 class="block-title">City Edit</h3>
                        </div>
                        <div class="block-content">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group ">
                                        <label class="col-lg-12" for="title">Title</label>
                                        <div class="col-lg-12">
                                            <input type="text"
                                                class="form-control form-control-lg @error('title') is-invalid @enderror"
                                                required name="title" value="{{ $city->title }}" required>

                                            @if ($errors->has('title'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('title') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group ">
                                        <label class="col-lg-12" for="slug">Slug</label>
                                        <div class="col-lg-12">
                                            <input type="text"
                                                class="form-control form-control-lg @error('slug') is-invalid @enderror"
                                                required name="slug" value="{{ $city->slug }}" required>

                                            @if ($errors->has('slug'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('slug') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group ">
                                        <label class="col-lg-12" for="contact_number">Contact Number</label>
                                        <div class="col-lg-12">
                                            <input type="text"
                                                class="form-control form-control-lg @if ($errors->has('contact_number')) is-invalid @endif"
                                                name="contact_number" placeholder="Enter Contact Number"
                                                value="{{ $city->contact_number }}">
                                            @if ($errors->has('contact_number'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('contact_number') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group ">
                                        <label class="col-lg-12" for="state_id">State</label>
                                        <div class="col-lg-12">
                                            <select
                                                class="form-control form-control-lg @if ($errors->has('state_id')) is-invalid @endif"
                                                required name="state_id">
                                                <option value="">Select State</option>
                                                @foreach ($states as $item)
                                                    <option value="{{ $item->id }}"
                                                        @if ($city->state_id == $item->id) selected @endif>
                                                        {{ $item->title }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('slug'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('slug') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group ">
                                        <label class="col-lg-12" for="facebook">Facebook Link</label>
                                        <div class="col-lg-12">
                                            <input type="text"
                                                class="form-control form-control-lg @if ($errors->has('facebook')) is-invalid @endif"
                                                name="facebook" placeholder="Enter Facebook Link"
                                                value="{{ old('facebook') ?? $city->facebook }}">
                                            @if ($errors->has('facebook'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('facebook') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group ">
                                        <label class="col-lg-12" for="instagram">Instagram Link</label>
                                        <div class="col-lg-12">
                                            <input type="text"
                                                class="form-control form-control-lg @if ($errors->has('instagram')) is-invalid @endif"
                                                name="instagram" placeholder="Enter Instagram Link"
                                                value="{{ old('instagram') ?? $city->instagram }}">
                                            @if ($errors->has('instagram'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('instagram') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group ">
                                        <label class="col-lg-12" for="twitter">Twitter Link</label>
                                        <div class="col-lg-12">
                                            <input type="text"
                                                class="form-control form-control-lg @if ($errors->has('twitter')) is-invalid @endif"
                                                name="twitter" placeholder="Enter Twitter Link"
                                                value="{{ old('twitter') ?? $city->twitter }}">
                                            @if ($errors->has('twitter'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('twitter') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group ">
                                        <label class="col-lg-12" for="linkedIn">LinkedIn Link</label>
                                        <div class="col-lg-12">
                                            <input type="text"
                                                class="form-control form-control-lg @if ($errors->has('linkedIn')) is-invalid @endif"
                                                name="linkedIn" placeholder="Enter LinkedIn Link"
                                                value="{{ old('linkedIn') ?? $city->linkedIn }}">
                                            @if ($errors->has('linkedIn'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('linkedIn') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group ">
                                        <label class="col-lg-12" for="yelp">Yelp Link</label>
                                        <div class="col-lg-12">
                                            <input type="text"
                                                class="form-control form-control-lg @if ($errors->has('yelp')) is-invalid @endif"
                                                name="yelp" placeholder="Enter Yelp Link"
                                                value="{{ old('yelp') ?? $city->yelp }}">
                                            @if ($errors->has('yelp'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('yelp') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group ">
                                        <label class="col-lg-12" for="yellow_pages">Yellow Pages Link</label>
                                        <div class="col-lg-12">
                                            <input type="text"
                                                class="form-control form-control-lg @if ($errors->has('yellow_pages')) is-invalid @endif"
                                                name="yellow_pages" placeholder="Enter Yellow Pages Link"
                                                value="{{ old('yellow_pages') ?? $city->yellow_pages }}">
                                            @if ($errors->has('yellow_pages'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('yellow_pages') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="col-lg-12" for="google_map">Google Map (url)</label>
                                        <div class="col-lg-12">
                                            <textarea class="form-control form-control-lg @if ($errors->has('google_map')) is-invalid @endif" required
                                                name="google_map" placeholder="Enter google map iframe  url only in location">
                                                {{ $city->google_map }}
                                            </textarea>
                                            @if ($errors->has('google_map'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('google_map') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group ">
                                        <div class="col-lg-12">
                                            <label class="col-form-label" for="description">Description</label>
                                        </div>
                                        <div class="col-lg-12">
                                            <textarea class="js-summernote form-control-lg" id="js-summernote" name="description">{{ $city->description }}</textarea>

                                            @if ($errors->has('description'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('description') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="col-lg-12" for="excerpt">2nd Description</label>
                                        <div class="col-lg-12">
                                            <textarea class="js-summernote form-control-lg" name="excerpt">{{ $city->excerpt }}</textarea>
                                            @if ($errors->has('excerpt'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('excerpt') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                            </div>
{{-- 
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="col-lg-12" for="dynamic_url">Dynamic URLs</label>
                                    <div id="dynamic-url-container">
                                        <!-- Existing URLs -->
                                        @if (!empty($city->dynamic_url))
                                            @foreach ($city->dynamic_url as $url)
                                                <div class="col-lg-12 input-group mb-2">
                                                    <input type="text" class="form-control form-control-lg" required
                                                        name="dynamic_url[]" placeholder="Enter dynamic URL"
                                                        value="{{ $url }}">
                                                    <button type="button"
                                                        class="btn btn-danger remove-url-btn">-</button>
                                                </div>
                                            @endforeach
                                        @endif

                                        <!-- Placeholder for new URLs -->
                                        <div class="col-lg-12 input-group mb-2">
                                            <input type="text" class="form-control form-control-lg"
                                                name="dynamic_url[]" placeholder="Enter dynamic URL">
                                            <button type="button" class="btn btn-success add-url-btn">+</button>
                                        </div>
                                    </div>
                                    @if ($errors->has('dynamic_url'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('dynamic_url') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div> --}}

                            <div id="dynamic-url-container">
                                <!-- Existing URLs -->
                                @if (!empty($city->dynamic_url))
                                    @foreach (array_filter($city->dynamic_url) as $url) <!-- Filter null values -->
                                        <div class="col-lg-12 input-group mb-2">
                                            <input type="text" class="form-control form-control-lg" required
                                                name="dynamic_url[]" placeholder="Enter dynamic URL"
                                                value="{{ $url }}">
                                            <button type="button" class="btn btn-danger remove-url-btn">-</button>
                                        </div>
                                    @endforeach
                                @endif
                            
                                <!-- Placeholder for new URLs -->
                                <div class="col-lg-12 input-group mb-2">
                                    <input type="text" class="form-control form-control-lg"
                                        name="dynamic_url[]" placeholder="Enter dynamic URL">
                                    <button type="button" class="btn btn-success add-url-btn">+</button>
                                </div>
                            </div>

                            

                            <div class="form-group row">
                                <div class="col-lg-6 ml-auto">
                                    <button type="submit" class="btn btn-alt-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-4 col-12">


                    <div class="block block-themed">
                        <div class="block-header bg-gd-dusk">
                            <h3 class="block-title">Upload Image</h3>
                        </div>

                        <div class="block-content block-content-full text-center">
                            <img class="img-avatar img-avatar-thumb"
                                src="{{ $city->image ?? asset('assets/media/avatars/avatar1.jpg') }}" alt="">
                        </div>

                        <div class="block-content">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group ">
                                        <label class="col-lg-12" for="image">Upload Image</label>
                                        <div class="col-lg-12">
                                            <input type="file"
                                                class="form-control form-control-lg @if ($errors->has('image')) is-invalid @endif"
                                                name="image" value="{{ $city->image }}">
                                            @if ($errors->has('image'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('image') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    {{-- end  image info --}}


                    {{--  order info --}}
                    <div class="block  block-themed">
                        <div class="block-header bg-gd-dusk">
                            <h3 class="block-title">City Status</h3>
                        </div>
                        <div class="block-content">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="col-lg-12">Status</label>
                                        <div class="col-lg-12">
                                            <div class="custom-control custom-radio custom-control-inline mb-5">
                                                <input class="custom-control-input" type="radio" name="status"
                                                    value="1" {{ $city->status == '1' ? 'checked' : '' }}
                                                    id="check1">
                                                <label class="custom-control-label" for="check1">Active</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline mb-5">
                                                <input class="custom-control-input" type="radio" name="status"
                                                    value="0" {{ $city->status == '0' ? 'checked' : '' }}
                                                    id="check2">
                                                <label class="custom-control-label" for="check2">Deactive</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    {{--  order info --}}


                    {{--  tags info --}}
                    <div class="block  block-themed">
                        <div class="block-header bg-gd-dusk">
                            <h3 class="block-title">Service Tags</h3>
                        </div>
                        <div class="block-content">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group row">
                                        <label class="col-lg-12" for="example-tags1">Meta Tag</label>
                                        <div class="col-lg-12">
                                            <input type="text"
                                                class="js-tags-input form-control form-control-lg @if ($errors->has('meta_tag')) is-invalid @endif"
                                                data-height="34px" id="example-tags1" name="meta_tag"
                                                value="{{ $city->meta_tag }}">

                                            @if ($errors->has('meta_tag'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('meta_tag') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group row">
                                        <label class="col-lg-12" for="meta_title">Meta Title</label>
                                        <div class="col-lg-12">
                                            <input type="text"
                                                class="form-control form-control-lg @if ($errors->has('meta_title')) is-invalid @endif"
                                                name="meta_title" value="{{ $city->meta_title }}">

                                            @if ($errors->has('meta_title'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('meta_title') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group row">
                                        <label class="col-lg-12" for="meta_description">Meta Description</label>
                                        <div class="col-lg-12">
                                            <input type="text"
                                                class="form-control form-control-lg @if ($errors->has('meta_description')) is-invalid @endif"
                                                name="meta_description" value="{{ $city->meta_description }}">

                                            @if ($errors->has('meta_description'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('meta_description') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>


                            </div>

                        </div>
                    </div>
                    {{--  end tags info --}}


                </div>



            </div>
        </form>



    </div>
@endsection
@section('script')
    <!-- Page JS Plugins -->
    <script src="{{ asset('assets/js/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/simplemde/simplemde.min.js') }}"></script>

    <!-- Page JS Helpers (Summernote + CKEditor + SimpleMDE plugins) -->
    <script>
        jQuery(function() {
            Codebase.helpers(['summernote']);
        });
    </script>


    <script src="{{ asset('assets/js/plugins/jquery-auto-complete/jquery.auto-complete.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.js') }}"></script>
    <!-- Page JS Helpers (Flatpickr + BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Input + Range Sliders + Tags Inputs plugins) -->
    <script>
        jQuery(function() {
            Codebase.helpers(['select2', 'tags-inputs']);
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const container = document.getElementById('dynamic-url-container');

            // Add new input field
            container.addEventListener('click', function(event) {
                if (event.target && event.target.classList.contains('add-url-btn')) {
                    const newInputGroup = document.createElement('div');
                    newInputGroup.className = 'col-lg-12 input-group mb-2';
                    newInputGroup.innerHTML = `
                    <input type="text" class="form-control form-control-lg" name="dynamic_url[]" placeholder="Enter dynamic URL">
                    <button type="button" class="btn btn-danger remove-url-btn">-</button>
                `;
                    container.appendChild(newInputGroup);
                }
            });

            // Remove input field
            container.addEventListener('click', function(event) {
                if (event.target && event.target.classList.contains('remove-url-btn')) {
                    event.target.closest('.input-group').remove();
                }
            });
        });
    </script>
@endsection
