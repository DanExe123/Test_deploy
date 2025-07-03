<?php declare(strict_types=1);

namespace App\Livewire\HR\Profile\Modal;

use LivewireUI\Modal\ModalComponent;

class HrProfilePicture extends ModalComponent
{
    public function render()
    {
        return view('livewire.hr.profile.modal.hr-profile-picture');
    }

    public static function modalMaxWidth(): string
    {
        return '4xl';
    }


}
