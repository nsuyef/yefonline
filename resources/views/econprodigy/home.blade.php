@extends('layouts.app')

@section('title')
<title>EconProdigy 4.0</title>
@stop

@section('script')
<script>
    window.page = 'ep';
</script>
@stop

@section('content')

<div id="econprodigy">

    <div class="loader flex-center">
        <div class="spinner"></div>
    </div>


    <div class="flex-center position-ref">
        
        <div id="fullpage" class="content w-100 h-100">
            
            <div id="masthead" class="section fp-auto-height fp-auto-height-responsive">

                <div class="background"></div>
                
                <img src="/images/ep/nsu.png" class="nsu">
                <img src="/images/ep/sbe.png" class="sbe">

                <div class="logos m-b-md">
                    <img src="/images/ep/ipdc.png" class="ipdc mx-auto d-block">
                    <img src="/images/ep/presents.png" class="pres mx-auto d-block">
                    <img src="/images/ep/ep.png" class="ep mx-auto d-block">
                </div>
                
                <div id="mainbuttons" class="row">
                    <div class="next text-center mr-4">
                        <button class="skew-button" type="button">
                            <span>Details</span>
                        </button>
                    </div>
                    <div class="register text-center">
                        <button class="skew-button" type="button">
                            <span>Register Now</span>
                        </button>
                    </div>
                </div>

            </div>

            <div id="about" class="section fp-auto-height fp-auto-height-responsive">

                <div class="container">

                    <div class="mb-5">
                        <h2 class="word mb-4">econprodigy</h2>
                        <h3 class="phonetic mb-2">/ɛkəˈn,prɒdɪʤɪ/</h3>
                        <p><em>noun</em></p>
                        <div class="descholder text-justify">
                            <p>
                                EconProdigy is an inter-university Policy Making Competition; the largest of its kind. This is the flagship event of Young Economists’ Forum (YEF) constructed to provide undergraduate level students of the country from every discipline with a platform to actively engage in dialogues revolving around real economic issues and consequentially develop policies that solve them. This year, YEF is back with EconProdigy 4.0, and the theme of this year’s competition is Corporate Social Responsibility in Economic Development. Being a global issue at the centre of much discourse, growing in importance over time, this theme will give the participants an opportunity to stamp their mark on the topic and formulate their own policies to address it. The entire event is evaluated by highly educated individuals both in the fields of academia and business landscape.
                            </p>
                        </div>
                    </div>
                    
                    <!-- <div class="text-center mt-6">
                        <strong>
                            Please make sure you have read and understood the Terms and Conditions Properly.
                        </strong>
                    </div> -->
                </div>

                <div class="next text-center">
                    <button class="skew-button" type="button">
                        <span>Continue</span>
                    </button>
                </div>

            </div>

            <div id="registration" class="section fp-auto-height fp-auto-height-responsive flex-center">

                <div class="bottom-background"></div>
    
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="title mb-6 text-center">
                                REGISTRATION
                            </div>

                            @if ($errors->any())
                                <script type="text/javascript">
                                    window.error = true
                                </script>
                                <div class="alert alert-danger">
                                    <ul style="margin-top: 1rem;">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if (session('success'))
                                <script type="text/javascript">
                                    window.postsuccess = true;
                                </script>
                            @endif

                            <form action="" method="post" class="shadow-sm p-3 mb-5 rounded mx-auto">
                                @csrf
                                    
                                <div class="form-label-group">
                                    <input type="text" id="team-name" name="team_name" class="form-control" placeholder="Team Name" autofocus>
                                    <label for="team-name">Team Name</label>
                                </div>

                                <div class="form-label-group">
                                    <input type="text" id="uni-name" name="university_name" class="form-control" placeholder="University Name">
                                    <label for="uni-name">University Name</label>
                                </div>
                                    
                                <div class="mb-4"></div>

                                <ul class="nav nav-tabs nav-fill mb-3" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="p1-tab" data-toggle="tab" href="#p1" role="tab" aria-controls="p1" aria-selected="true"><b>Team Leader</b></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="p2-tab" data-toggle="tab" href="#p2" role="tab" aria-controls="p2" aria-selected="false"><b>Participant 2</b></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="p3-tab" data-toggle="tab" href="#p3" role="tab" aria-controls="p3" aria-selected="false"><b>Participant 3</b></a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div id="p1" class="tab-pane fade show active" role="tabpanel" aria-labelledby="p1-tab">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-label-group">
                                                    <input type="text" id="name-1" name="teamleader[name]" class="form-control" placeholder="Name">
                                                    <label for="name-1">Name</label>
                                                </div>
                                                <div class="form-label-group">
                                                    <input type="text" id="phone-1" name="teamleader[phone]" class="form-control" placeholder="Phone">
                                                    <label for="phone-1">Phone</label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-label-group">
                                                    <input type="text" id="email-1" name="teamleader[email]" class="form-control" placeholder="Email">
                                                    <label for="email-1">Email</label>
                                                </div>
                                                <div class="form-label-group">
                                                    <input type="text" id="uni-id-1" name="teamleader[university_id]" class="form-control" placeholder="University ID">
                                                    <label for="uni-id-1">University ID</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="p2" class="tab-pane fade" role="tabpanel" aria-labelledby="p2-tab">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-label-group">
                                                    <input type="text" id="name-2" name="participant[2][name]" class="form-control" placeholder="Name">
                                                    <label for="name-2">Name</label>
                                                </div>
                                                <div class="form-label-group">
                                                    <input type="text" id="phone-2" name="participant[2][phone]" class="form-control" placeholder="Phone">
                                                    <label for="phone-2">Phone</label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-label-group">
                                                    <input type="text" id="email-2" name="participant[2][email]" class="form-control" placeholder="Email">
                                                    <label for="email-2">Email</label>
                                                </div>
                                                <div class="form-label-group">
                                                    <input type="text" id="uni-id-2" name="participant[2][university_id]" class="form-control" placeholder="University ID">
                                                    <label for="uni-id-2">University ID</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="p3" class="tab-pane fade" role="tabpanel" aria-labelledby="p3-tab">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-label-group">
                                                    <input type="text" id="name-3" name="participant[3][name]" class="form-control" placeholder="Name">
                                                    <label for="name-3">Name</label>
                                                </div>
                                                <div class="form-label-group">
                                                    <input type="text" id="phone-3" name="participant[3][phone]" class="form-control" placeholder="Phone">
                                                    <label for="phone-3">Phone</label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-label-group">
                                                    <input type="text" id="email-3" name="participant[3][email]" class="form-control" placeholder="Email">
                                                    <label for="email-3">Email</label>
                                                </div>
                                                <div class="form-label-group">
                                                    <input type="text" id="uni-id-3" name="participant[3][university_id]" class="form-control" placeholder="University ID">
                                                    <label for="uni-id-3">University ID</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div id="submitholder" class="align-items-end">
                                    <button type="submit" class="btn btn-block btn-default border">Submit</button>
                                </div>
                            </form>

                            <div id="terms" class="accordion">
                                
                                <div class="card border-0">
                                    <div class="card-header col-sm-6 mx-auto border-0 bg-white" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link border-0 mx-auto collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                <b>Terms & Conditions</b>
                                            </button>
                                        </h5>
                                    </div>
                                    <div class="col-md-6 mx-auto">
                                        <div id="collapseOne" class="justify-text collapse col-md-12" aria-labelledby="headingOne" data-parent="#terms">
                                            <div class="card-body">
                                                (1) Teams must have no less than 2 members and no more than 3 members.
                                                (2) Registration fee: 600 taka only.
                                                (3) All members of each team must be from the same University. Failure to comply may result in disqualification.
                                                (4) All members must be currently enrolled under an undergraduate programme. If found to be otherwise, immediate disqualification may occur.
                                                (5) At least one member of each team must be present at the Workshop of the event.
                                                (6) Plagiarism of information and / or content at any stage of the competition without reference may lead to disqualification.
                                                (7) NSU YEF reserves the rights to take actions in upholding or adding to the aforementioned rules.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="success" class="section fp-auto-height fp-auto-height-responsive d-none">

                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 mx-auto">
                            <div class="flex-center">

                                <div class="mr-5">
                                    <div class="check_mark hide">
                                        <div class="sa-icon sa-success animate">
                                            <span class="sa-line sa-tip animateSuccessTip"></span>
                                            <span class="sa-line sa-long animateSuccessLong"></span>
                                            <div class="sa-placeholder"></div>
                                            <div class="sa-fix"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3 text-justify">
                                    <h1 class="h1">Congratulations!</h1>
                                    <p>The registration process is almost complete. To finish the registration process, please pay <b>600 taka</b> and collect your receipt on the day of the Workshop. For further queries, mail us at econprodigy@yefonline.net or inbox us in our <a href="https://www.facebook.com/NSU.YEF/">Facebook page</a>.</p>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>

@stop