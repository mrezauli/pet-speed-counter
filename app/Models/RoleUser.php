<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RoleUser
 * 
 * @property int $id
 * @property int|null $role_id
 * @property int|null $user_id
 * @property string|null $remember_token
 * @property string|null $status
 * @property int $created_by
 * @property int $updated_by
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class RoleUser extends Model
{
	protected $table = 'role_user';

	protected $casts = [
		'role_id' => 'int',
		'user_id' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int'
	];

	protected $hidden = [
		'remember_token'
	];

	protected $fillable = [
		'role_id',
		'user_id',
		'remember_token',
		'status',
		'created_by',
		'updated_by'
	];
}
