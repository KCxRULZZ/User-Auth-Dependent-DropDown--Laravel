<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Filter Members</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <div class="container mt-4">
        <h1>Filter Members</h1>

        <!-- Filter Form -->
        <form id="filterForm" action="{{ route('members.filter') }}" method="GET">
            <div class="row">
                <div class="col-md-3">
                    <label for="region_id">Select Region:</label>
                    <select name="region_id" id="region" class="form-control">
                        <option value="">-- Select Region --</option>
                        @foreach ($regions as $region)
                            <option value="{{ $region->id }}" {{ isset($region_id) && $region_id == $region->id ? 'selected' : '' }}>
                                {{ $region->region_name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-3">
                    <label for="country_id">Select Country:</label>
                    <select name="country_id" id="country" class="form-control">
                        <option value="">-- Select Country --</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <label for="city_id">Select City:</label>
                    <select name="city_id" id="city" class="form-control">
                        <option value="">-- Select City --</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <label for="position_id">Select Position:</label>
                    <select name="position_id" id="position" class="form-control">
                        <option value="">-- Select Position --</option>
                        @foreach ($positions as $position)
                            <option value="{{ $position->id }}" {{ isset($position_id) && $position_id == $position->id ? 'selected' : '' }}>
                                {{ $position->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Filter</button>
        </form>

        <hr>

        <!-- Member List -->
        <h2>Members</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>City</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($members as $member)
                    <tr>
                        <td>{{ $member->id }}</td>
                        <td>{{ $member->name }}</td>
                        <td>{{ $member->position->name ?? 'N/A' }}</td>
                        <td>{{ $member->city->city_name ?? 'N/A' }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No members found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- AJAX for Dependent Dropdowns -->
    <script type="text/javascript">
        $(document).ready(function () {
            $('#region').change(function () {
                let regionId = $(this).val();
                $('#country').empty().append('<option value="">-- Select Country --</option>');
                $('#city').empty().append('<option value="">-- Select City --</option>');

                if (regionId) {
                    $.ajax({
                        url: "/getCountry/" + regionId,
                        type: "GET",
                        success: function (data) {
                            $.each(data, function (key, country) {
                                $('#country').append('<option value="' + country.id + '">' + country.country_name + '</option>');
                            });
                        }
                    });
                }
            });

            $('#country').change(function () {
                let countryId = $(this).val();
                $('#city').empty().append('<option value="">-- Select City --</option>');

                if (countryId) {
                    $.ajax({
                        url: "/getCity/" + countryId,
                        type: "GET",
                        success: function (data) {
                            $.each(data, function (key, city) {
                                $('#city').append('<option value="' + city.id + '">' + city.city_name + '</option>');
                            });
                        }
                    });
                }
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
