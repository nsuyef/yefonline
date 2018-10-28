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
            
            @foreach ($teams as $team)

                @foreach ($team->applicants as $applicant)

                    {{ dd($applicant->name) }} 

                @endforeach

            @endforeach

        </div>

    </div>
</div>

@stop