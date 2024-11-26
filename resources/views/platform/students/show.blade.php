@extends('layouts.platform')

@section('title', 'Students')

@section('content')
<h1 class="h3 mb-3 text-gray-800"><i class="bi bi-person-lines-fill"></i> Show Students</h1>
<nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('platform-index') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('students.index') }}"><i class="bi bi-people me-2 h6"></i> Students</a></li>
        <li class="breadcrumb-item active">Show Students</li>
    </ol>
</nav>

<div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
    @foreach ($students as $student)
    <div class="col d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
            <img src="https://media.istockphoto.com/id/1386479313/photo/happy-millennial-afro-american-business-woman-posing-isolated-on-white.jpg?s=612x612&w=0&k=20&c=8ssXDNTp1XAPan8Bg6mJRwG7EXHshFO5o0v9SIj96nY=" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $student->name }} {{ $student->last_name }}</h5>
                <p class="card-text">
                    Grade: {{ $student->group->grade ?? 'Without grade' }}° <br>
                    Group: {{ $student->group->group ?? 'Without group' }} <br>
                    Carrer: {{ $student->group->carreer ?? 'Without carreer' }} <br>
                </p>
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#studentModal">View <i class="bi bi-eye h5"></i></a>
            </div>
        </div>
    </div>
    @endforeach 
</div>

<!-- Student info modal -->
<div class="modal fade" id="studentModal" tabindex="-1" aria-labelledby="studentModal" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="studentModal">Student</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
            <div class="container">
                <div class="row justify-content-start">
                    <div class="col">
                        <div class="row pt-2">
                            <div class="col ps-4">
                                <div class="mb-4">
                                    <div class="row">
                                        <div class="col-sm-4 col-md-3">
                                            <div class="card bg-light">
                                                <div class="px-5 pt-2"><img src="https://media.istockphoto.com/id/1386479313/photo/happy-millennial-afro-american-business-woman-posing-isolated-on-white.jpg?s=612x612&amp;w=0&amp;k=20&amp;c=8ssXDNTp1XAPan8Bg6mJRwG7EXHshFO5o0v9SIj96nY=" class="rounded-3 card-img-top" alt="Profile photo"></div>
                                                <div class="card-body">
                                                    <h5 class="card-title">Mr. Presley Ebert Schneider</h5>
                                                    <p class="card-text">#ID: 1</p>
                                                </div>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">Gender: Femenine</li>
                                                    <li class="list-group-item">Phone: (646) 809-0103</li>
                                                </ul>
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-8 col-md-9">
                                            <div class="p-3 mb-3 border rounded bg-white">
                                                <h6>Student Information</h6>
                                                <table class="table table-responsive mt-3">
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">First Name:</th>
                                                            <td>Mr. Presley Ebert</td>
                                                            <th>Last Name:</th>
                                                            <td>Schneider</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Email:</th>
                                                            <td>rozella73@gmail.com</td>
                                                            <th>Birthday:</th>
                                                            <td>1978-09-26</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Address:</th>
                                                            <td>53641 Oswald Prairie Melvinaview, NE 74879-3245</td>
                                                            <th></th>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Blood Type:</th>
                                                            <td>A+</td>
                                                            <th>Phone:</th>
                                                            <td>(646) 809-0103</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Gender:</th>
                                                            <td colspan="3">Femenine</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            
                                            <div class="p-3 mb-3 border rounded bg-white">
                                                <h6>Parents' Information</h6>
                                                <table class="table table-responsive mt-3">
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Father's Name:</th>
                                                            <td></td>
                                                            <th>Mother's Name:</th>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Father's Phone:</th>
                                                            <td></td>
                                                            <th>Mother's Phone:</th>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Address:</th>
                                                            <td colspan="3"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
            
                                            <div class="p-3 mb-3 border rounded bg-white">
                                                <h6>Academic Information</h6>
                                                <table class="table table-responsive mt-3">
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Class:</th>
                                                            <td></td>
                                                            <th>Board Reg. No.:</th>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Section:</th>
                                                            <td colspan="3"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>
@endsection