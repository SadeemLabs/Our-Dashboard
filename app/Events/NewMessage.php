<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NewMessage implements ShouldBroadcast {
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $channel;
    public $message;

    public function __construct($channel, $message) {
        $this->channel = $channel;
        $this->message = $message;
    }

    public function broadcastOn() {
        return new Channel($this->channel);
    }

    public function broadcastAs() {
        return 'new.message';
    }
}