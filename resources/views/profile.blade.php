@extends('layouts.auth')

@section('content')
<!---page Title --->
<!---page Title --->
<section class="bg-img pt-15 pb-20" data-overlay="7" style="background-image: url(../images/front-end-img/background/bg-8.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <h2 class="page-title text-white">Registration</h2>
                    <ol class="breadcrumb bg-transparent justify-content-center">
                        <li class="breadcrumb-item"><a href="#" class="text-white-50"><i class="mdi mdi-home-outline"></i></a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Registration</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-50">
    <div class="container">
        <div class="row justify-content-center g-0">
            <div class="col-lg-10 col-md-5 col-12">
                <div class="box box-body">
                    <div class="box box-solid bg-dark">
                        <div class="box-header with-border">
                            <h3 class="box-title">Student Medical registration</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                            </div>
                        </div>

                        <!-- /.box-header -->
                        <div class="box-body wizard-content">
                            <form action="{{route('process')}}" method="POST" enctype="multipart/form-data" class="tab-wizard wizard-circle wizard clearfix" role="application" id="steps-uid-1">
                                <div class="steps clearfix">
                                    <ul role="tablist">
                                        <li role="tab" class="first {{!empty(auth()->user()->profile->phone) ? "done" : "current" }}" aria-disabled="false" aria-selected="true">
                                            <a id="steps-t-0" href="#steps-h-0" aria-controls="steps-p-0">
                                                <span class="current-info audible">current step: </span>
                                                <span class="step">1</span> Personal Info
                                            </a>
                                        </li>
                                        <li role="tab" class="{{!empty(auth()->user()->profile->phone)  ? (!empty(auth()->user()->profile->allergy) ? "done" : "current") : "disabled" }}" aria-disabled="true">
                                            <a id="steps-t-1" href="#steps-h-1" aria-controls="steps-p-1">
                                                <span class="step">2</span> Medical Information
                                            </a>
                                        </li><li role="tab" class="{{!empty(auth()->user()->profile->allergy) ? (!empty(auth()->user()->profile->image->path) ? "done" : "current") : "disabled" }}" aria-disabled="true">
                                            <a id="steps-t-2" href="#steps-h-2" aria-controls="steps-p-2">
                                                <span class="step">3</span> Upload Passport
                                            </a>
                                        </li>
                                        <li role="tab" class="{{ !empty(auth()->user()->profile->image->path) ? "done" : "" }} last" aria-disabled="true">
                                            <a id="steps-t-3" href="#steps-h-3" aria-controls="steps-p-3">
                                                <span class="step">4</span> Complete
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="content clearfix">

                                <!-- Step 1 -->
                                @csrf
                                <h6 id="steps-h-0" tabindex="-1" class="title {{!empty(auth()->user()->profile->phone) ? "" : "current" }}">Personal Info</h6>
                                <section class="bg-hexagons-dark body {{!empty(auth()->user()->profile->phone) ? "" : "current" }}" id="1" role="tabpanel" style="{{!empty(auth()->user()->profile->phone) ? "display: none;" : "" }}" aria-labelledby="steps-h-0" aria-hidden="false">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="firstName5">First Name :</label>
                                                <input type="text" class="form-control" name="first_name" value="{{auth()->user()->first_name ?? old('first_name')}}">
                                                @error('first_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="lastName1">Last Name :</label>
                                                <input type="text" class="form-control" name="last_name" value="{{auth()->user()->last_name ?? old('last_name')}}">
                                                @error('last_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="emailAddress1">Email Address :</label>
                                                <input type="email" class="form-control" id="emailAddress1" name="email" value="{{auth()->user()->email ?? old('email')}}">
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="phoneNumber1">Phone Number :</label>
                                                <input type="tel" class="form-control" name="phone" value="{{auth()->user()->profile->phone ?? old('phone')}}" id="phoneNumber1">
                                                @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="phoneNumber1">Address :</label>

                                                <textarea name="address" class="form-control" id="phoneNumber1">{{auth()->user()->profile->address ?? old('address')}}</textarea>
                                                @error('address')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="date1">Date of Birth :</label>
                                                <input type="date" class="form-control" name="d_o_b" id="date1" value="{{auth()->user()->profile->d_o_b ?? old('d_o_b')}}">

                                                @error('d_o_b')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                </section>




                                <!-- Step 2 -->
                                @php
                                    // dd(empty(auth()->user()->profile->allergy));
                                @endphp
                                <h6 id="steps-h-1" tabindex="-1" class="title {{!empty(auth()->user()->profile->phone)  ? "current" : "" }}">Medical Information</h6>
                                <section class="bg-hexagons-dark body {{!empty(auth()->user()->profile->phone)  ? (!empty(auth()->user()->profile->allergy) ? "" : "current") : "" }}" id="2" role="tabpanel" aria-labelledby="steps-h-1" style="{{!empty(auth()->user()->profile->phone)  ? (!empty(auth()->user()->profile->allergy) ? "display:none" : "") : "display:none" }}" aria-hidden="true">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="blood_group">Blood group:</label>
                                                <input type="text" name="blood_group" value="{{auth()->user()->profile->blood_group ?? old('blood_group')}}" class="form-control" id="blood_group">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="genotype">Genotype:</label>
                                                <input type="text" class="form-control"  name="genotype" value="{{auth()->user()->profile->genotype ?? old('genotype')}}" id="genotype">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="allergy1">Allergies:</label>
                                                <textarea name="allergy" id="allergy1" rows="6" class="form-control">{{(auth()->user()->profile->allergy) ?? old('allergy')}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <!-- Step 3 -->
                                <h6 id="steps-h-2" tabindex="-1" class="title">Passport</h6>
                                <section class="bg-hexagons-dark body {{!empty(auth()->user()->profile->allergy) ? (!empty(auth()->user()->profile->image->path) ? "" : "current") : ""}}" id="3" role="tabpanel" aria-labelledby="steps-h-2" style="{{!empty(auth()->user()->profile->allergy) ? (!empty(auth()->user()->profile->image->path) ? "display:none" : "") : "display:none" }}" aria-hidden="true">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="int1">Upload Passport :</label>
                                                <input type="file" name='image' type="image/jpg" class="form-control" id="int1">
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <!-- Profile Image -->
                                            <div class="box bg-yellow bg-deathstar-dark">
                                              <div class="box-body box-profile">
                                                <img class="profile-user-img rounded img-fluid mx-auto d-block" src="{{auth()->user()->profile->image->path ?? ""}}" alt="User profile picture">

                                              </div>
                                              <!-- /.box-body -->
                                            </div>
                                            <!-- /.box -->
                                          </div>
                                    </div>
                                </section>
                                <!-- Step 4 -->
                                <h6 id="steps-h-3" tabindex="-1" class="title">Preview</h6>

                                <section class="bg-hexagons-dark body {{!empty(auth()->user()->profile->image->path)  ? "current" : "" }}" id="4" role="tabpanel" aria-labelledby="steps-h-3" style="{{empty(auth()->user()->profile->image->path) ? "display: none;" : "" }}" aria-hidden="true">
                                    <div class="row">

                                        <div class="col-xl-4 col-lg-5">
                                          <!-- Profile Image -->
                                          <div class="box bg-yellow bg-deathstar-dark">
                                            <div class="box-body box-profile">
                                              <img class="profile-user-img rounded img-fluid mx-auto d-block" src="{{auth()->user()->profile->image->path ?? ""}}" alt="User profile picture">

                                              <h2 class="profile-username text-center mb-0">{{(auth()->user()->first_name ?? "")." ".(auth()->user()->last_name ?? "")}}</h2>

                                              <h4 class="text-center mt-0"><i class="fa fa-envelope-o mr-10"></i>{{auth()->user()->email ?? ""}}</h4>


                                              <div class="row">

                                                {{-- <h2 class="title w-p100 mt-10 mb-0 p-20">Last Transactions</h2>
                                                <div class="col-12">
                                                    <div class="media-list media-list-hover w-p100 mt-0">
                                                        <h5 class="media media-single py-10 px-0 w-p100 justify-content-between">
                                                              <p>
                                                              <i class="fa fa-circle text-red pr-10 font-size-12"></i>Deal number 1548
                                                              <span class="subtitle pl-20 mt-10">by<span class="text-red">Johen Doe</span></span>
                                                              </p>
                                                              <p class="text-right pull-right"><span class="badge badge-sm badge-danger mb-10">sell</span><br>0.12458921 BTC</p>
                                                        </h5>
                                                        <h5 class="media media-single py-10 px-0 w-p100 justify-content-between">
                                                              <p>
                                                              <i class="fa fa-circle text-success pr-10 font-size-12"></i>Deal number 1548
                                                              <span class="subtitle pl-20 mt-10">by<span class="text-success">Johen Doe</span></span>
                                                              </p>
                                                              <p class="text-right pull-right"><span class="badge badge-sm badge-success mb-10">sell</span><br>0.12458921 BTC</p>
                                                        </h5>
                                                        <h5 class="media media-single py-10 px-0 w-p100 justify-content-between">
                                                              <p>
                                                              <i class="fa fa-circle text-success pr-10 font-size-12"></i>Deal number 1548
                                                              <span class="subtitle pl-20 mt-10">by<span class="text-success">Johen Doe</span></span>
                                                              </p>
                                                              <p class="text-right pull-right"><span class="badge badge-sm badge-success mb-10">sell</span><br>0.12458921 BTC</p>
                                                        </h5>
                                                        <h5 class="media media-single py-10 px-0 w-p100 justify-content-between">
                                                              <p>
                                                              <i class="fa fa-circle text-red pr-10 font-size-12"></i>Deal number 1548
                                                              <span class="subtitle pl-20 mt-10">by<span class="text-red">Johen Doe</span></span>
                                                              </p>
                                                              <p class="text-right pull-right"><span class="badge badge-sm badge-danger mb-10">sell</span><br>0.12458921 BTC</p>
                                                        </h5>
                                                        <h5 class="media media-single py-10 px-0 w-p100 justify-content-between">
                                                              <p>
                                                              <i class="fa fa-circle text-success pr-10 font-size-12"></i>Deal number 1548
                                                              <span class="subtitle pl-20 mt-10">by<span class="text-success">Johen Doe</span></span>
                                                              </p>
                                                              <p class="text-right pull-right"><span class="badge badge-sm badge-success mb-10">sell</span><br>0.12458921 BTC</p>
                                                        </h5>
                                                    </div>
                                                </div> --}}
                                              </div>
                                            </div>
                                            <!-- /.box-body -->
                                          </div>
                                          <!-- /.box -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-xl-8 col-lg-7">

                                          <div class="box box-solid bg-black">
                                            <div class="box-header with-border">
                                              <h3 class="box-title">Personal details</h3>
                                            </div>
                                            <!-- /.box-header -->
                                            <div class="box-body">
                                              <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                      <label class="col-sm-2 col-form-label">First Name</label>
                                                      <div class="col-sm-10">
                                                        <input class="form-control" type="text" value="{{auth()->user()->first_name ?? ""}}" readonly placeholder="Johon">
                                                      </div>
                                                    </div>
                                                    <div class="form-group row">
                                                      <label class="col-sm-2 col-form-label">Last Name</label>
                                                      <div class="col-sm-10">
                                                        <input class="form-control" type="text" value="{{auth()->user()->last_name ?? ""}}" readonly  placeholder="Doe">
                                                      </div>
                                                    </div>
                                                    <div class="form-group row">
                                                      <label class="col-sm-2 col-form-label">Email Adress</label>
                                                      <div class="col-sm-10">
                                                        <input class="form-control" type="email" value="{{auth()->user()->email ?? ""}}" readonly  placeholder="johone@dummy.com">
                                                      </div>
                                                    </div>
                                                    <div class="form-group row">
                                                      <label class="col-sm-2 col-form-label">Phone Number</label>
                                                      <div class="col-sm-10">
                                                        <input class="form-control" type="tel" value="{{auth()->user()->profile->phone ?? ""}}" readonly  placeholder="123 456 7890">
                                                      </div>
                                                    </div>

                                                </div>
                                                <!-- /.col -->
                                              </div>
                                              <!-- /.row -->
                                            </div>
                                            <!-- /.box-body -->
                                          </div>
                                          <!-- /.box -->
                                          <div class="box box-solid bg-black">
                                            <div class="box-header with-border">
                                              <h3 class="box-title">Personal address</h3>
                                            </div>
                                            <!-- /.box-header -->
                                            <div class="box-body">
                                              <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                      <label class="col-sm-2 col-form-label">Street</label>
                                                      <div class="col-sm-10">
                                                        <input class="form-control" type="text" value="{{auth()->user()->profile->address ?? "" }}" readonly placeholder="A-458, Lorem Ipsum, city">
                                                      </div>
                                                    </div>
                                                    <div class="form-group row">
                                                      <label class="col-sm-2 col-form-label">Date of Birth</label>
                                                      <div class="col-sm-10">
                                                        <input class="form-control" type="date" value="{{auth()->user()->profile->d_o_b ?? ""}}" readonly >
                                                      </div>
                                                    </div>
                                                                                                   </div>
                                                <!-- /.col -->
                                              </div>
                                              <!-- /.row -->
                                            </div>
                                            <!-- /.box-body -->
                                          </div>
                                          <!-- /.box -->
                                          <div class="box box-solid bg-black">
                                            <div class="box-header with-border">
                                              <h3 class="box-title">Medical Information</h3>
                                            </div>
                                            <!-- /.box-header -->
                                            <div class="box-body">
                                              <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                      <label class="col-sm-2 col-form-label">Blood group</label>
                                                      <div class="col-sm-10">
                                                        <input class="form-control" type="text" value="{{auth()->user()->profile->blood_group ?? ""}}" readonly >
                                                      </div>
                                                    </div>
                                                    <div class="form-group row">
                                                      <label class="col-sm-2 col-form-label">Genotype</label>
                                                      <div class="col-sm-10">
                                                        <input class="form-control" type="text" value="{{auth()->user()->profile->genotype ?? ""}}" readonly >
                                                      </div>
                                                    </div>
                                                    <div class="form-group row">
                                                      <label class="col-sm-2 col-form-label">Allergies</label>
                                                      <div class="col-sm-10">
                                                        <input class="form-control" type="text" value="{{(auth()->user()->profile->allergy) ??"" }}" readonly>
                                                      </div>
                                                    </div>

                                                </div>
                                                <!-- /.col -->
                                              </div>
                                              <!-- /.row -->
                                            </div>
                                            <!-- /.box-body -->
                                          </div>
                                          <!-- /.box -->

                                        </div>
                                        <!-- /.col -->
                                      </div>
                                </section>

                            </div>
                            <button type="submit" id="submit" class="d-none"></button>
                            <div class="actions clearfix">
                                <ul role="menu" aria-label="Pagination">
                                    <li class="disabled" aria-disabled="true">
                                        <a href="#previous" onclick="previous()" role="menuitem">Previous</a>
                                    </li>

                                    <li aria-hidden="false" style="{{!empty(auth()->user()->profile->image->path) ? "display: none;" : "" }}" aria-disabled="false">
                                        <a href="#next" onclick=" document.getElementById('submit').click()" role="menuitem">Next</a>
                                    </li>
                                    <li style="{{empty(auth()->user()->profile->image->path) ? "display: none;" : "" }};" aria-hidden="true">
                                        <a href="#finish" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();" role="menuitem">Submit</a>
                                    </li>
                                </ul>
                            </div>
                        </form>
                    </div>
                    <!-- /.box-body -->
                </div>

            </div>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </section>
<script>

    function previous(){
        let current = +document.querySelectorAll("section.current")[0].getAttribute('id');

        var previous = current - 1

       document.getElementById(parseInt(current)).setAttribute('style','display:none;');
       document.getElementById(parseInt(previous)).setAttribute('style','');
       document.getElementById(parseInt(current)).classList.remove('current');
       document.getElementById(parseInt(previous)).classList.add('current');


    }

</script>
@endsection






