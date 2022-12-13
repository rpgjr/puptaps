<!--
    cards
    1. Show number of students in current batch
    2. Show Number of current active forms
    3. Show number of students responded in those forms
-->
<div class="row">
    <div class="col-8 sub-container-box pt-3 pb-0">
        <div class="registered-user-chart">
            <div class="d-flex justify-content-between align-items-center">
                <p class="fs-4 fw-bold mb-2">Registered Users</p>
                <p class="mb-2">200</p>
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
