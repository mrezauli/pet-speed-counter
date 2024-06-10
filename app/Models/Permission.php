<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Permission
 * 
 * @property int $id
 * @property string|null $title
 * @property string|null $route_url
 * @property string|null $description
 * @property int $created_by
 * @property int $updated_by
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Collection|Role[] $roles
 *
 * @package App\Models
 */
class Permission extends Model
{
	protected $table = 'permissions';

	protected $casts = [
		'created_by' => 'int',
		'updated_by' => 'int'
	];

	protected $fillable = [
		'title',
		'route_url',
		'description',
		'created_by',
		'updated_by'
	];

	public function roles()
	{
		return $this->belongsToMany(Role::class)
					->withPivot('id', 'status', 'created_by', 'updated_by')
					->withTimestamps();
	}
}
