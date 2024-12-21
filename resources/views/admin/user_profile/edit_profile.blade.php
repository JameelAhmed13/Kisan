@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select2/dist/css/select2.css') }}">
@endsection

@section('main_content')
<div class="container-fluid">
  <div class="row page-title">
      <div class="col-sm-6">
          <h3>Edit Profile</h3>
      </div>
      <div class="col-sm-6">
          <nav>
              <ol class="breadcrumb justify-content-sm-end align-items-center">
                  <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                          <svg class="svg-color">
                              <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                          </svg></a></li>
                  <li class="breadcrumb-item">User</li>
                  <li class="breadcrumb-item active">Edit Profile</li>
              </ol>
          </nav>
      </div>
  </div>
</div>
    <!-- Container-fluid starts-->
    <form action="{{ route('admin.user.update-profile') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container-fluid edit-profile">
            <div class="row">
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">My Profile</h4>
                            <div class="card-options"><a class="card-options-collapse" href="#"
                                    data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a
                                    class="card-options-remove" href="#" data-bs-toggle="card-remove"><i
                                        class="fe fe-x"></i></a></div>
                        </div>
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="profile-title">
                                    <div class="d-flex">

                                        @isset($image)
                                            <img src="{{ $image->getUrl() }}" alt="Image" class="img-70 rounded-circle">
                                        @else
                                            <img src="{{ asset('assets/images/profile.png') }}" alt="Image" class="img-70 rounded-circle">
                                        @endisset
                                        <div class="flex-grow-1">
                                            <h5 class="mb-1">
                                                {{ ucfirst(auth()->user()->name) }}
                                            </h5>
                                            <p>DESIGNER</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Image</label>
                                <input class="form-control form-control-sm" type="file" name="image">
                            </div>
                            <div class="mb-3">
                                <h6 class="form-label">Bio</h6>
                                <textarea class="form-control" rows="5" placeholder="Enter your bio" name="bio">{{ auth()->user()->bio }}</textarea>
                                @error('bio')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email-Address</label>
                                <input class="form-control" placeholder="your-email@domain.com" name="email"
                                    value="{{ auth()->user()->email }}">
                                @error('email')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input class="form-control" type="password" name="password" placeholder="Enter Password"
                                    value="{{ auth()->user()->password }}">
                                @error('password')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Confirm Password</label>
                                <input class="form-control" type="password" name="confirm_password"
                                    placeholder="Enter Confirm Password" value="{{ auth()->user()->password }}">
                                @error('confirm_password')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card col-xl-8">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Edit Profile</h4>
                        <div class="card-options"><a class="card-options-collapse" href="#"
                                data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a
                                class="card-options-remove" href="#" data-bs-toggle="card-remove"><i
                                    class="fe fe-x"></i></a></div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Email address<span> *</span></label>
                                    <input class="form-control" type="email" placeholder="Email" name="email"
                                        value="{{ auth()->user()?->email }}">
                                    @error('email')
                                        <span class="text-danger">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">First Name<span> *</span></label>
                                    <input class="form-control" type="text" placeholder="First Name" name="first_name"
                                        value="{{ ucfirst(auth()->user()?->name) }}">
                                    @error('first_name')
                                        <span class="text-danger">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button class="btn btn-primary" type="submit">Update Profile</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- Container-fluid ends-->
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            var countryId = '{{ Auth::user()->country_id }}';
            $.ajax({
                url: "{{ route('admin.user.get-states') }}",
                type: "GET",
                data: {
                    country_id: countryId,
                    _token: '{{ csrf_token() }}'
                },
                dataType: 'json',
                success: function(result) {
                    $.each(result.states, function(key, value) {
                        $("#state").append(
                            '<option value="' + value.id + '">' + value.name + '</option>');
                    });
                    $("#state").val('{{ Auth::user()->state_id }}');
                }
            });

            $('#country').on('change', function() {
                var idCountry = this.value;
                $("#state").html('');
                $.ajax({
                    url: "{{ route('admin.user.get-states') }}",
                    type: "GET",
                    data: {
                        country_id: idCountry,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(result) {
                        $.each(result.states, function(key, value) {
                            $("#state").append('<option value="' + value.id + '">' +
                                value.name + '</option>');
                        });
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#country_code').select2({
                templateResult: function(option) {
                    if (option.element && option.element.dataset.image) {
                        return $('<span><img src="' + option.element.dataset.image + '" width="20" height="15" /> ' + option.text + '</span>');
                    }
                    return  option.text;
                }
            });
        });
    </script>
@endsection
