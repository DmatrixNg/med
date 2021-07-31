@extends('layouts.auth')

@section('content')
<!---page Title --->
<!---page Title --->
<section class="bg-img pt-15 pb-20" data-overlay="7" style="background-color: lawngreen;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <h2 class="page-title text-white">Student page</h2>
                    <ol class="breadcrumb bg-transparent justify-content-center">
                        <li class="breadcrumb-item"><a href="#" class="text-white-50"><i class="mdi mdi-home-outline"></i></a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">student</li>
                    </ol>
                    <ol class="breadcrumb bg-transparent justify-content-center">
                        <li class="breadcrumb-item text-white active" aria-current="page">
                            <a class="dropdown-item active" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();"><i class="ti-lock text-mute me-2"></i> Logout</a>
                                   <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
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
                            <h3 class="box-title">Student Record</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                            </div>
                        </div>

                        <!-- /.box-header -->
                        <div class="box-body wizard-content">


                                <section class="bg-hexagons-dark body " id="4" role="tabpanel" aria-labelledby="steps-h-3" style="" aria-hidden="true">
                                    <div class="row">

                                        <div class="col-xl-4 col-lg-5">
                                          <!-- Profile Image -->
                                          <div class="box bg-yellow bg-deathstar-dark">
                                            <div class="box-body box-profile">
                                              <img class="profile-user-img rounded img-fluid mx-auto d-block" src="{{$student->profile->image->path ?? ""}}" alt="User profile picture">

                                              <h2 class="profile-username text-center mb-0">{{($student->first_name ?? "")." ".($student->last_name ?? "")}}</h2>

                                              <h4 class="text-center mt-0"><i class="fa fa-envelope-o mr-10"></i>{{$student->email ?? ""}}</h4>


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
                                                        <input class="form-control" type="text" value="{{$student->first_name ?? ""}}" readonly placeholder="Johon">
                                                      </div>
                                                    </div>
                                                    <div class="form-group row">
                                                      <label class="col-sm-2 col-form-label">Last Name</label>
                                                      <div class="col-sm-10">
                                                        <input class="form-control" type="text" value="{{$student->last_name ?? ""}}" readonly  placeholder="Doe">
                                                      </div>
                                                    </div>
                                                    <div class="form-group row">
                                                      <label class="col-sm-2 col-form-label">Email Adress</label>
                                                      <div class="col-sm-10">
                                                        <input class="form-control" type="email" value="{{$student->email ?? ""}}" readonly  placeholder="johone@dummy.com">
                                                      </div>
                                                    </div>
                                                    <div class="form-group row">
                                                      <label class="col-sm-2 col-form-label">Phone Number</label>
                                                      <div class="col-sm-10">
                                                        <input class="form-control" type="tel" value="{{$student->profile->phone ?? ""}}" readonly  placeholder="123 456 7890">
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
                                                        <input class="form-control" type="text" value="{{$student->profile->address ?? "" }}" readonly placeholder="A-458, Lorem Ipsum, city">
                                                      </div>
                                                    </div>
                                                    <div class="form-group row">
                                                      <label class="col-sm-2 col-form-label">Date of Birth</label>
                                                      <div class="col-sm-10">
                                                        <input class="form-control" type="date" value="{{$student->profile->d_o_b ?? ""}}" readonly >
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
                                                        <input class="form-control" type="text" value="{{$student->profile->blood_group ?? ""}}" readonly >
                                                      </div>
                                                    </div>
                                                    <div class="form-group row">
                                                      <label class="col-sm-2 col-form-label">Genotype</label>
                                                      <div class="col-sm-10">
                                                        <input class="form-control" type="text" value="{{$student->profile->genotype ?? ""}}" readonly >
                                                      </div>
                                                    </div>
                                                    <div class="form-group row">
                                                      <label class="col-sm-2 col-form-label">Allergies</label>
                                                      <div class="col-sm-10">
                                                        <input class="form-control" type="text" value="{{($student->profile->allergy) ??"" }}" readonly>
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

                        </form>
                    </div>
                    <!-- /.box-body -->
                </div>

            </div>
        </div>

    </section>
<script>



</script>
@endsection






