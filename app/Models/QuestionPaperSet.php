<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class QuestionPaperSet
 * 
 * @property int $id
 * @property string|null $question_set_title
 * @property string|null $status
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class QuestionPaperSet extends Model
{
	protected $table = 'question_paper_set';

	protected $casts = [
		'created_by' => 'int',
		'updated_by' => 'int'
	];

	protected $fillable = [
		'question_set_title',
		'status',
		'created_by',
		'updated_by'
	];
}
