<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UserLoginHistory
 * 
 * @property int $id
 * @property int|null $user_id
 * @property Carbon|null $login_time
 * @property Carbon|null $logout_time
 * @property string|null $ip_address
 * @property Carbon|null $date
 * @property int $created_by
 * @property int $updated_by
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class UserLoginHistory extends Model
{
	protected $table = 'user_login_history';

	protected $casts = [
		'user_id' => 'int',
		'login_time' => 'datetime',
		'logout_time' => 'datetime',
		'date' => 'datetime',
		'created_by' => 'int',
		'updated_by' => 'int'
	];

	protected $fillable = [
		'user_id',
		'login_time',
		'logout_time',
		'ip_address',
		'date',
		'created_by',
		'updated_by'
	];
}
