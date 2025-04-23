<div>
    <div class="terminal-card">
        <header>Welcome to the #General</header>
    </div>
    <div class="terminal-card terminal-chat">
        <div wire:poll.2s>
            @foreach($messages as $message)
                <div class="message">
                    @if(Auth::user()->is_moderator)
                    <p><span>[{{ $message->created_at->format('H:i:s') }}]</span> <strong class="{{ $message->user->is_moderator ? 'terminal-chat-badge' : '' }}">{{ $message->user->name }}</strong>: {{ $message->text }}<span>
                    <a wire:click="deleteMessage({{ $message->id }})">(delete)</a>
                    </span></p>
                    @else
                    <p><span>[{{ $message->created_at->format('H:i:s') }}]</span> <strong class="{{ $message->user->is_moderator ? 'terminal-chat-badge' : '' }}">{{ $message->user->name }}</strong>: {{ $message->text }}</p>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
    <input class="terminal-chat-input" type="text" name="text" placeholder="Type your message here..." wire:model="message" wire:keydown.enter="sendMessage">
</div>
