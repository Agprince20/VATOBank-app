<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transfer extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function sender(): BelongsTo
    { 
        return $this->belongsTo(User::class, 'sender_id');  
    }
    public function senderAccount(): BelongsTo
    { 
        return $this->belongsTo(Accounts::class, 'sender_account_id');  
    }

    public function recepient(): BelongsTo
    { 
        return $this->belongsTo(User::class, 'recipient_id');   
    }
    public function recepientAccount(): BelongsTo
    { 
        return $this->belongsTo(Accounts::class,'recipient_account_id');  
    }
}
