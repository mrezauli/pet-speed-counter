<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UserResetPassword
 * 
 * @property int $id
 * @property int|null $user_id
 * @property string|null $reset_password_token
 * @property string|null $reset_password_expire
 * @property string|null $reset_password_time
 * @property int|null $status
 * @property int $created_by
 * @property int $updated_by
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class UserResetPassword extends Model
{
	protected $table = 'user_reset_password';

	protected $casts = [
		'user_id' => 'int',
		'status' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int'
	];

	protected $hidden = [
		'reset_password_token'
	];

	protected $fillable = [
		'user_id',
		'reset_password_token',
		'reset_password_expire',
		'reset_password_time',
		'status',
		'created_by',
		'updated_by'
	];
}
