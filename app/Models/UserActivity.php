<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UserActivity
 * 
 * @property int $id
 * @property string|null $action_name
 * @property string|null $action_url
 * @property string|null $action_details
 * @property string|null $action_table
 * @property Carbon|null $date
 * @property int|null $user_id
 * @property int $created_by
 * @property int $updated_by
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class UserActivity extends Model
{
	protected $table = 'user_activity';

	protected $casts = [
		'date' => 'datetime',
		'user_id' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int'
	];

	protected $fillable = [
		'action_name',
		'action_url',
		'action_details',
		'action_table',
		'date',
		'user_id',
		'created_by',
		'updated_by'
	];
}
