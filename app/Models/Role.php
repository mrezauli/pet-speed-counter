<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 * 
 * @property int $id
 * @property string|null $title
 * @property string|null $slug
 * @property string|null $status
 * @property int $created_by
 * @property int $updated_by
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Collection|Permission[] $permissions
 *
 * @package App\Models
 */
class Role extends Model
{
	protected $table = 'role';

	protected $casts = [
		'created_by' => 'int',
		'updated_by' => 'int'
	];

	protected $fillable = [
		'title',
		'slug',
		'status',
		'created_by',
		'updated_by'
	];

	public function permissions()
	{
		return $this->belongsToMany(Permission::class)
					->withPivot('id', 'status', 'created_by', 'updated_by')
					->withTimestamps();
	}
}
