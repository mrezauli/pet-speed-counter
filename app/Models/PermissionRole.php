<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PermissionRole
 * 
 * @property int $id
 * @property int|null $permission_id
 * @property int|null $role_id
 * @property string|null $status
 * @property int $created_by
 * @property int $updated_by
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Permission|null $permission
 * @property Role|null $role
 *
 * @package App\Models
 */
class PermissionRole extends Model
{
	protected $table = 'permission_role';

	protected $casts = [
		'permission_id' => 'int',
		'role_id' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int'
	];

	protected $fillable = [
		'permission_id',
		'role_id',
		'status',
		'created_by',
		'updated_by'
	];

	public function permission()
	{
		return $this->belongsTo(Permission::class);
	}

	public function role()
	{
		return $this->belongsTo(Role::class);
	}
}
