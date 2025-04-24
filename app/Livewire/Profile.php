<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class Profile extends Component
{
    use WithFileUploads;

    public $photo;

    public function uploadPhoto()
    {
        $this->validate([
            'photo' => 'image|max:1024',
        ]);

        $user = User::find(Auth::id())->update([
            'photo' => $this->photo->store('photos', 'public'),
        ]);

        session()->flash('message', 'Photo uploaded successfully.');

        $this->reset('photo');

        return redirect()->route('profile');
    }

    public function render()
    {
        return view('livewire.profile');
    }
}
