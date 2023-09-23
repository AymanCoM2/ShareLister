<?php

namespace App\Livewire;

use Cloudinary\Configuration\Configuration;
use Cloudinary\Api\Upload\UploadApi;
use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class Profileeditmodal extends Component
{
    use WithFileUploads;

    public $userName;
    public $userImage;
    public $userLabel;
    public $userEmail;

    #[Rule('image')] // 1MB Max
    public $userProfileImage;
    public function render()
    {
        return view('livewire.Profile.profileeditmodal');
    }

    public function mount()
    {
        /**
         * Those lines Work when putting them in mount
         * NOT working if i cut them and put them in render ?
         * WHY
         */
        $userModelForProfile  = request()->user();
        $this->userName = $userModelForProfile->name;
        $this->userEmail = $userModelForProfile->email;
        $this->userLabel = $userModelForProfile->label;
        $this->userImage = $userModelForProfile->image;
    }

    public function updateProfileData()
    {
        $resultArray  = null;
        if ($this->userProfileImage) {
            Configuration::instance([
                'cloud' => [
                    'cloud_name' => 'dj0x80lsi',
                    'api_key' => '511596894376763',
                    'api_secret' => 'KJVaUOXqoSxhkhQWMtjj98wnT8U'
                ],
                'url' => [
                    'secure' => true
                ]
            ]);
            $resultArray  = (new UploadApi())->upload($this->userProfileImage->getRealPath(), $options = []);
        }
        // Making the Loader Here Before the Upload is Done
        // dd($resultArray['url']);
        // Validate the Data // then Save // Close Modal
        $user = User::find(request()->user()->id); //^ Getting the User model From thr DB ;
        $user->name  = $this->userName;
        $user->email = $this->userEmail;
        $user->label = $this->userLabel;
        if ($resultArray) {
            $user->image = $resultArray['url'];
        }
        $user->save();
        // $this->render();
        $this->dispatch('profile-updated');
    }
}
