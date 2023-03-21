<?php

namespace App\Http\Livewire\Queue;

use App\Models\Patient;
use App\Models\Queue;
use App\Models\Service;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class Create extends Component
{
    public $patient;
    public $service_id;
    public $doctor_id;
    public $main_complaint;

    public function rules(){
       return ['service_id' => 'required', 'doctor_id' => 'required','patient' => 'required'];
    }

    protected $listeners = [
        'patientSelected'
    ];

    public function patientSelected(Patient $patient){
        $this->patient = $patient;
        $this->dispatchBrowserEvent('close-model', [
            'id' => 'selectPatient'
        ]);
        $this->dispatchBrowserEvent('close-model', [
            'id' => 'newPatient'
        ]);
    }
    public function selectPatient(){
        $this->dispatchBrowserEvent('show-model', [
            'id'=> 'selectPatient'
        ]);
    }

    public function newPatient(){
        $this->dispatchBrowserEvent('show-model', [
            'id'=> 'newPatient'
        ]);
    }

    public function render()
    {
       return view('livewire.queue.create', );
    }

    public function create(){
        if(isset($this->patient)){
            $this->validate();
            $max_number =  Queue::whereDate('created_at', Carbon::today())->count();
            Queue::create([
                'queue_number' => $max_number+1,
                'has_check' => false,
                'has_drug' => false,
                'patient_id' => $this->patient->id,
                'doctor_id' => $this->doctor_id,
                'service_id' => $this->service_id,
                'main_complaint' => $this->main_complaint,
            ]);
            $this->dispatchBrowserEvent('show-message', [
                'type' => 'success',
                'message' => 'Sukses menambah data '
            ]);
            $this->redirectRoute('queue.index');
        }else{
            $this->dispatchBrowserEvent('show-message', [
                'type' => 'error',
                'message' => 'Silakan pilih pasien terlebih dahulu '
            ]);
        }
    }
}
