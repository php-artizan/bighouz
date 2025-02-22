<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\PreventDemoModeChanges;

class Country extends Model
{
    use PreventDemoModeChanges;

    /**
     * Get the Zone that owns the Country
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function zone()
    {
        return $this->belongsTo(Zone::class);
    }

    public function scopeIsEnabled($query)
    {
        return $query->where('status', '1');
    }
    
}
