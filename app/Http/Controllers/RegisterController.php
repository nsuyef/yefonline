<?php

namespace App\Http\Controllers;

use App\Team;
use App\Applicant;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public static function form(Request $request) {
        $data = $request->all();

        $data = $request->validate([
            'team_name' => 'required',
            'university_name' => 'required',

            'teamleader.name' => 'required|max:150',
            'teamleader.phone' => 'required|digits:11|unique:applicants,phone_no',
            'teamleader.email' => 'required|email|max:100|unique:applicants,email',
            'teamleader.university_id' => 'required|unique:applicants,uni_id',

            'participant.2.name' => 'required|max:150',
            'participant.2.phone' => 'required|digits:11|unique:applicants,phone_no',
            'participant.2.email' => 'required|email|max:100|unique:applicants,email',
            'participant.2.university_id' => 'required|unique:applicants,uni_id',

            'participant.3.name' => 'nullable|max:150|required_with_all:participant.3.phone,participant.3.email,participant.3.uni_id',
            'participant.3.phone' => 'nullable|digits:11|unique:applicants,phone_no|required_with_all:participant.3.name,participant.3.email,participant.3.uni_id',
            'participant.3.email' => 'nullable|email|max:100|unique:applicants,email|required_with_all:participant.3.phone,participant.3.name,participant.3.uni_id',
            'participant.3.university_id' => 'nullable|unique:applicants,uni_id|required_with_all:participant.3.phone,participant.3.name,participant.3.name',
        ]);

        $team = new Team;
        $team->team_name = $data['team_name'];
        $team->university_name = $data['university_name'];
        $team->save();

        $leader = new Applicant();
        $leader->name = $data['teamleader']['name'];
        $leader->phone_no = $data['teamleader']['phone'];
        $leader->email = $data['teamleader']['email'];
        $leader->uni_id = $data['teamleader']['university_id'];
        $team->applicants()->save($leader);

        foreach ($data['participant'] as $participant) {
            if ($participant['name'] != null) {
                $applicant = new Applicant();
                $applicant->name = $participant['name'];
                $applicant->phone_no = $participant['phone'];
                $applicant->email = $participant['email'];
                $applicant->uni_id = $participant['university_id'];
                $team->applicants()->save($applicant);
            }
        }

        return back()->with('success', true);

    }

    private static function recursiveFind(array $array, $needle) {
        $iterator = new \RecursiveArrayIterator($array);
        $recursive = new \RecursiveIteratorIterator($iterator, \RecursiveIteratorIterator::SELF_FIRST);
        $return = [];
        foreach ($recursive as $key => $value) {
          if ($key === $needle) {
            $return[] = $value;
          }
        } 
        return $return;
      }

}
