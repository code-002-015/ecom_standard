<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class ActivityLog extends Model
{
    protected $table = 'cms_activity_logs';
    protected $fillable = ['log_by', 'activity_type', 'dashboard_activity', 'activity_desc', 'activity_date',
        'db_table', 'old_value', 'new_value', 'reference'];
    public $timestamps = false;

    public function admin()
    {
        return $this->belongsTo(User::class, 'log_by');
    }
}
