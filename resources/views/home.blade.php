@extends('layouts.auth')

@section('content')
<!---page Title --->
<!---page Title --->
<section class="bg-img pt-15 pb-20" data-overlay="7" style="background-color: lawngreen;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <h2 class="page-title text-white">Candidate List</h2>
                    <ol class="breadcrumb bg-transparent justify-content-center">
                        <li class="breadcrumb-item"><a href="#" class="text-white-50"><i class="mdi mdi-home-outline"></i></a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Canditates</li>
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
                            <h3 class="box-title">Candidate list</h3>


                        </div>
                        <div class="box-body wizard-content">
                            <div class="row justify-content-center">

                                    <div class="box-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">First Name</th>
                                                        <th scope="col">Last Name</th>
                                                        <th scope="col">Handle</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach (\App\Models\Users::where('role','!=','admin') as $student)

                                                    <tr>
                                                        <th scope="row">{{$student->id}}</th>
                                                        <td>{{$student->first_name}}</td>
                                                        <td>{{$student->last_name}}</td>
                                                        <td class="text-center"> <a href="{{route('candidate',['id'=>$candidate->id])}}"><button class="btn-sm btn-warning">View Candidate </button></a> </td>
                                                    </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>

            </div>
        </div>
    </div>
</section>
    @endsection

