<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ExamTime
 * 
 * @property int $id
 * @property string|null $exam_type
 * @property int|null $exam_time
 * @property string|null $status
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class ExamTime extends Model
{
	protected $table = 'exam_time';

	protected $casts = [
		'exam_time' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int'
	];

	protected $fillable = [
		'exam_type',
		'exam_time',
		'status',
		'created_by',
		'updated_by'
	];
}
