<div>
    @if(session('message'))
        <div class="terminal-alert">
            {{ session('message') }}
        </div>
    @endif
    <div class="termina-photo-container">
        <figure>
            @if(Auth::user()->photo)
                <img src="{{ Storage::url(Auth::user()->photo) }}" height="200" width="200" alt="Profile picture">
            @else
                <img src="" height="200" width="200" alt="Profile picture">
            @endif
        </figure>
        <div class="terminal-btn-photo-group">
            <form wire:submit.prevent="uploadPhoto">
                <div class="terminal-btn-group">
                    <input type="file" wire:model="photo">
                    <button class="btn btn-default" type="submit">Upload</button>
                </div>
            </form>
        </div>
    </div>
    <div class="termina-profile-info">
        <ul>
            <li>#ID: {{ Auth::id() }}</li>
            <li>Username: {{ Auth::user()->name }}</li>
            <li>E-mail: {{ Auth::user()->email }}</li>
            <li>Moderator: {{ Auth::user()->is_moderator ? 'Yes' : 'No' }}</li>
            <li>Registration: {{ Auth::user()->created_at }}</li>
            <li>(total) Messages: {{ Auth::user()->messages->count() }}</li>
        </ul>
    </div>
</div>
