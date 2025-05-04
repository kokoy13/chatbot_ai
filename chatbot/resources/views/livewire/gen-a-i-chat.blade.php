<div class="chat-box">
    <h2>💬 Chat dengan AI</h2>

    @foreach($messages as $msg)
    <div class="message {{ $msg['role'] }}">
        <div class="text">{{ $msg['text'] }}</div>
    </div>
    @endforeach

    <!-- Loading spinner -->
    @if ($isLoading)
        <div class="text-center">
            <div class="spinner-border text-primary" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    @endif
        
    <form wire:submit.prevent="sendPrompt">
        <input wire:model.defer="prompt" type="text" placeholder="Ketik pesan..." required>
        <button type="submit">Kirim</button>
    </form>


</div>
