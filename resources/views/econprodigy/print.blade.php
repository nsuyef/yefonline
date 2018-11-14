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
        
        <div id="fullpage" class="content container">

                    @foreach ($teams as $team)

                        @if ( $team->team_name )

                            <h3 class="header h3 title text-center my-5">Registration Form</h1>

                            <table border=1 style="width:100%">
                                <tr>
                                    <td colspan="2">
                                        <span>Team Name: {{ $team->team_name }}</span>
                                    </td>
                                    <td rowspan="2" style="width:20%">
                                        <span>Payment Status: </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <span>University Name: {{ $team->university_name }}</span>
                                    </td>
                                </tr>
                            </table>
                            <table border=1 style="width:100%; border-top: 0;">
                                <tr>
                                    <th><span>Team Leader</span></td>
                                    <th><span>Participant 1</span></td>
                                    <th><span>Participant 2</span></td>
                                </tr>
                                <tr>
                                    @foreach ($team->applicants as $applicant)
                                    <td>
                                        <span>Name: {{ $applicant->name }}</span><br>
                                        <span>ID: {{ $applicant->uni_id }}</span><br>
                                        <span>Contact No: {{ $applicant->phone_no }}</span><br>
                                        <span>Email: {{ $applicant->email }}</span>
                                    </td>
                                    @endforeach
                                </tr>
                            </table>

                            <style>
                                .dashed {border: 2px dotted #000; border-style: none none dashed; color: #fff; background-color: #fff; margin: 3em 0;}
                            </style>
                            <hr class='dashed' />

                            <h3 class="header h3 title text-center mb-5">Participant's Copy</h1>

                            <table style="width:100%;">
                                <tr>
                                    <td>
                                        <span>Team Name: {{ $team->team_name }}</span><br>
                                        <span>University: {{ $team->university_name }}</span><br>

                                        <span>Team Leader's Name: {{ $team->applicants{0}['name'] }}</span><br>
                                        <span>Team Leader's ID: {{ $team->applicants{0}['uni_id'] }}</span><br>
                                    </td>
                                    <td>
                                        <span>Contact:</span><br>

                                        @foreach ($team->applicants as $applicant)
                                        <span>{{ $applicant['phone_no'] }}</span><br>
                                        @endforeach
                                    </td>
                                </tr>
                            </table>


                            <p style="page-break-before: always"></p>

                        @endif

                    @endforeach

        </div>

    </div>
</div>

@stop