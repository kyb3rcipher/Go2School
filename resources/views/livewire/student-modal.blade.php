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
                                                    <h5 class="card-title">{{ $student->name ?? 'IDK'}}</h5>
                                                    <p class="card-text">#ID: {{ $student->id ?? 'IDK'}}</p>
                                                </div>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">Gender: {{ $student->gender ?? 'IDK' }}</li>
                                                    <li class="list-group-item">Phone: {{ $student->phone ?? 'PHONE' }}</li>
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
                                                            <td>{{ $student->name ?? 'IDK' }}</td>
                                                            <th>Last Name:</th>
                                                            <td>{{ $student->last_name ?? 'IDK' }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Email:</th>
                                                            <td>{{ $student->email ?? 'IDK' }}</td>
                                                            <th>Birthday:</th>
                                                            <td>{{ $student->birthday ?? 'IDK' }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Address:</th>
                                                            <td>{{ $student->address ?? 'IDK' }}</td>
                                                            <th></th>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Blood Type:</th>
                                                            <td>{{ $student->blood_type ?? 'IDK' }}</td>
                                                            <th>Phone:</th>
                                                            <td>{{ $student->phone ?? 'IDK' }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Gender:</th>
                                                            <td colspan="3">{{ $student->gender ?? 'IDK' }}</td>
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