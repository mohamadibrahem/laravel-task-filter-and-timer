<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
</head>
<body>

    <div class="container">
        <div class="card-body pt-5">
            <form class="row" method="GET" action="{{ route("employees.index") }}" enctype="multipart/form-data">
                <div class="col-md-10">
                    <label for="Number" class="visually-hidden">Number</label>
                    <input type="number" class="form-control {{ $errors->has('number') ? 'is-invalid' : '' }}" id="number" name="number" value="" placeholder="enter number between [5, 50]">
                    @if($errors->has('number'))
                        <div class="invalid-feedback">
                            {{ $errors->first('number') }}
                        </div>
                    @endif
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary mb-3 text-white">Apply</button>
            </div>
            </form>
            <div class="row py-5">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
            </div>

            <div class="row">
                <div class="col-md-12">
                    <table id="selectedColumn" class="table table-hover">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Employee Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Departments</th>
                            <th scope="col">Salary</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($results as $result)
                            @if($result->departments->count() > 0)
                            <tr>
                                <th scope="row">{{ $result->id ?? '' }}</th>
                                <td>{{ $result->employee_name ?? '' }}</td>
                                <td>{{ $result->phone_number ?? '' }}</td>
                                <td>
                                    @foreach($result->departments as $item)
                                        <span class="badge bg-secondary">{{ $item->department_name ?? '' }} - {{ $item->salary ?? '' }}</span>
                                    @endforeach
                                </td>
                                <td>{{ $result->departments->first()->salary ?? '' }}</td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#selectedColumn').DataTable({
                order: [[ 4, 'desc' ]],
            });
            $('.dataTables_length').addClass('bs-select');
        });
    </script>

</body>
</html>