@extends('layouts.app')

@section('title')
<title>EconProdigy 4.0 Admin</title>
@stop

@section('script')
<script>
    window.page = 'ep';
</script>
@stop

@section('content')

<div id="econprodigy">

    <div class="flex-center position-ref">
        
        <div id="fullpage" class="content w-100">

            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Team Name</th>
                        <th scope="col">University Name</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">University ID</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($teams as $team)

                        @foreach ($team->applicants as $applicant)

                            <tr>
                                <th scope="row">{{ $team->id }}</th>
                                <td>{{ $team->team_name }}</td>
                                <td>{{ $team->university_name }}</td>
                                <td>{{ $applicant->name }}</td>
                                <td>{{ $applicant->phone_no }}</td>
                                <td>{{ $applicant->email }}</td>
                                <td>{{ $applicant->uni_id }}</td>
                            </tr>

                        @endforeach

                    @endforeach

                </tbody>
            </table>

        </div>

    </div>
</div>

@stop