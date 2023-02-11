<?php

namespace App\Http\Livewire\Backend;

use App\Models\Education;
use App\Models\EducationSubject;
use App\Models\Experience;
use App\Models\PersonalDetails;
use App\Models\Responsibility;
use App\Models\Skill;
use Livewire\Component;

class Dashboard extends Component
{
    public Skill $skill;
    public Experience $experience;
    public Responsibility $responsibility;
    public Education $education;
    public PersonalDetails $personalDetails;
    public EducationSubject $educationSubject;

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
        $this->skill = $this->makeBlankSkill();
        $this->experience = $this->makeBlankExperience();
        $this->responsibility = $this->makeBlankResponsibility();
        $this->education = $this->makeBlankEducation();
        $this->personalDetails = $this->makeBlankPersonalDetails();
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
            'personalDetails.name' => 'required',
            'personalDetails.email' => 'required',
            'personalDetails.phone' => 'required',
            'personalDetails.about' => 'required',
            'personalDetails.address' => 'required',
            'personalDetails.city' => 'required',
            'personalDetails.state' => 'required',
            'personalDetails.zip' => 'required',
            'personalDetails.country' => 'required',
            'personalDetails.website' => 'required',
            'personalDetails.github' => 'required',
            'personalDetails.linkedin' => 'required',
            'personalDetails.twitter' => 'required',
            'personalDetails.facebook' => 'required',
            'personalDetails.instagram' => 'required',
            'personalDetails.youtube' => 'required',
        ];
    
    }

    public function render()
    {
        return view('livewire.backend.dashboard');
    }
}
