<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class SuspendRevokeApproval extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    
    protected $table = 'SUSPEND_REVOKE_APPROVAL';

    protected $primaryKey = 'SUSPEND_REVOKE_APPROVAL_ID';

    public $timestamps = false;
}