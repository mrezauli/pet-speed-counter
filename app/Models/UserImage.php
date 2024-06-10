<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UserImage
 * 
 * @property int $id
 * @property string|null $title
 * @property string|null $description
 * @property string|null $image
 * @property string|null $thumbnail
 * @property string|null $status
 * @property int|null $user_id
 * @property int $created_by
 * @property int $updated_by
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class UserImage extends Model
{
	protected $table = 'user_image';

	protected $casts = [
		'user_id' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int'
	];

	protected $fillable = [
		'title',
		'description',
		'image',
		'thumbnail',
		'status',
		'user_id',
		'created_by',
		'updated_by'
	];
}
