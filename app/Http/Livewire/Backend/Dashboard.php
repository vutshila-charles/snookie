<?php

namespace App\Http\Livewire\Backend;

use App\Models\Education;
use App\Models\EducationSubject;
use App\Models\Experience;
use App\Models\PersonalDetails;
use App\Models\Responsibility;
use App\Models\Skill;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\TemporaryUploadedFile;

class Dashboard extends Component
{
    use WithFileUploads;
    public Skill $skill;
    public Experience $experience;
    public Responsibility $responsibility;
    public Education $education;
    public PersonalDetails $personalDetails;
    public EducationSubject $educationSubject;
    public $user;
    public $image;

    public function makeBlankSkill()
    {
        return  $this->skill = new Skill();
    }
    public function makeBlankExperience()
    {
        return  $this->experience = new Experience();
    }
    public function makeBlankResponsibility()
    {
        return  $this->responsibility = new Responsibility();
    }
    public function makeBlankEducation()
    {
        return  $this->education = new Education();
    }
    public function makeBlankPersonalDetails()
    {
        return  $this->personalDetails = new PersonalDetails();
    }
    public function makeBlankEducationSubject()
    {
        return  $this->educationSubject = new EducationSubject();
    }
    public function mount()
    {
        $this->user = User::find(auth()->user()->id);
        $this->skill = $this->makeBlankSkill();
        $this->experience = $this->makeBlankExperience();
        $this->responsibility = $this->makeBlankResponsibility();
        $this->education = $this->makeBlankEducation();
        if(auth()->user()->personalDetails){
            $this->personalDetails = auth()->user()->personalDetails;
        }else{
            $this->personalDetails = $this->makeBlankPersonalDetails();
        }
        // $this->personalDetails = $this->makeBlankPersonalDetails();
        $this->educationSubject = $this->makeBlankEducationSubject();
    }
    public function rules()
    {
        return [
            // 'skill.name' => 'required',
            // 'skill.level' => 'required',
            // 'experience.company' => 'required',
            // 'experience.start_date' => 'required',
            // 'experience.end_date' => 'required',
            // 'experience.position' => 'required',
            // 'experience.reason_for_leaving' => 'required',
            // 'experience.description' => 'required',
            // 'responsibility.name' => 'required',
            // 'education.school' => 'required',
            // 'education.degree' => 'required',
            // 'education.field_of_study' => 'required',
            // 'education.start_date' => 'required',
            // 'education.end_date' => 'required',
            // 'education.grade' => 'required',
            // 'education.activities' => 'required',
            // 'education.description' => 'required',
            // 'education.city' => 'required',
            // 'education.state' => 'required',
            // 'education.country' => 'required',
            // 'education.zip' => 'required',
            // 'education.website' => 'required',
            'personalDetails.name'      => 'nullable',
            'personalDetails.email'     => 'nullable',
            'personalDetails.phone'     => 'nullable',
            'personalDetails.about'     => 'nullable',
            'personalDetails.address'   => 'nullable',
            'personalDetails.city'      => 'nullable',
            'personalDetails.state'     => 'nullable',
            'personalDetails.zip'       => 'nullable',
            'personalDetails.country'   => 'nullable',
            'personalDetails.website'   => 'nullable',
            'personalDetails.github'    => 'nullable',
            'personalDetails.linkedin'  => 'nullable',
            'personalDetails.twitter'   => 'nullable',
            'personalDetails.facebook'  => 'nullable',
            'personalDetails.instagram' => 'nullable',
            'personalDetails.youtube'   => 'nullable',
        ];
    
    }
    public function savePersonalDetails()
    {
        $this->personalDetails->user_id = auth()->user()->id;
        $this->personalDetails->email   = auth()->user()->email;
        //$this->user->profile_path_photo = $this->image;
        $this->personalDetails->save();
    }

    public function render()
    {
        return view('livewire.backend.dashboard');
    }
}
