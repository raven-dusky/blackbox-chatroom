<div>
    <div class="terminal-card">
        <header>Welcome to the #General</header>
    </div>
    <div class="terminal-card terminal-chat">
        <div wire:poll.2s>
            @foreach($messages as $message)
                <div class="message">
                    @if(!$message->user->is_banned)
                        @if(Auth::user()->is_moderator)
                        <p><span>[{{ $message->created_at->format('H:i:s') }}]</span> <strong class="{{ $message->user->is_moderator ? 'terminal-chat-badge' : '' }}">{{ $message->user->name }}</strong>: {{ $message->text }}<span>
                        <a wire:click="deleteMessage({{ $message->id }})">(delete)</a>
                        @if(Auth::user()->is_moderator)
                            @if($message->user_id !== Auth::id() && !$message->user->is_moderator)
                                <a wire:click="banChatMember({{ $message->id }})">(ban)</a>
                            @endif
                        @endif
                        </span></p>
                        @else
                        <p><span>[{{ $message->created_at->format('H:i:s') }}]</span> <strong class="{{ $message->user->is_moderator ? 'terminal-chat-badge' : '' }}">{{ $message->user->name }}</strong>: {{ $message->text }}</p>
                        @endif
                    @else
                        @if(Auth::user()->name == $message->user->name)
                            <p><span>[{{ $message->created_at->format('H:i:s') }}]</span> <strong>{{ $message->user->name }}</strong>: <em>You have been banned from the chat.</em></p>
                        @else
                            <p><span>[{{ $message->created_at->format('H:i:s') }}]</span> <strong>{{ $message->user->name }}</strong>: <em>This user has been banned from the chat.</em></p>
                        @endif
                    @endif
                </div>
            @endforeach
        </div>
    </div>
    @if(!Auth::user()->is_banned)
        <input class="terminal-chat-input" type="text" name="text" placeholder="Type your message here..." wire:model="message" wire:keydown.enter="sendMessage">
    @else
        <input class="terminal-chat-input" type="text" name="text" placeholder="You have been banned from the chat." disabled>
    @endif
</div>
