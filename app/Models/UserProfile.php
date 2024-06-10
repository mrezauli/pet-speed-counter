<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UserProfile
 * 
 * @property int $id
 * @property int|null $user_id
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $address
 * @property string|null $telephone_number
 * @property Carbon|null $date_of_birth
 * @property string|null $slug
 * @property int $created_by
 * @property int $updated_by
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class UserProfile extends Model
{
	protected $table = 'user_profile';

	protected $casts = [
		'user_id' => 'int',
		'date_of_birth' => 'datetime',
		'created_by' => 'int',
		'updated_by' => 'int'
	];

	protected $fillable = [
		'user_id',
		'first_name',
		'last_name',
		'address',
		'telephone_number',
		'date_of_birth',
		'slug',
		'created_by',
		'updated_by'
	];
}
