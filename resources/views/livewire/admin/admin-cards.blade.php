<!--
    cards
    1. Show number of students in current batch
    2. Show Number of current active forms
    3. Show number of students responded in those forms
-->
<div class="row">
    <div class="col-8">
        <div class="sub-container-box py-3 h-100">
            <div class="registered-user-chart">
                <div class="d-flex justify-content-between align-items-center">
                    <p class="fs-4 fw-bold mb-2">Registered Users</p>
                    <p class="mb-2">Total: {{ $totalStudents }}</p>
                </div>
                <p class="text-secondary">As of {{ date('F d, Y') }}</p>
            </div>
            <div class="registeredUser">
                <canvas id="registeredUserChart"></canvas>
                <script>
                    var registeredUserData = @json($totalRegisteredUser);
                </script>
            </div>
        </div>
    </div>

    <div class="col-4">
        <div class="sub-container-box py-4 h-100">
            <h3 class="my-3">New Accounts</h3>
            <table class="table table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                    <th scope="col" class="col-4">Last Name</th>
                    <th scope="col" class="col-3">Course</th>
                    <th scope="col" class="col-2">Batch</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($listOfNewAccounts as $alum)
                      <tr>
                          <td class="py-3">{{ $alum->last_name }}</td>
                          <td class="py-3">{{ $alum->course_id }}</td>
                          <td class="py-3">{{ $alum->batch }}</td>
                      </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
