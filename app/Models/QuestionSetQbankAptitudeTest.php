<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class QuestionSetQbankAptitudeTest
 * 
 * @property int $id
 * @property int|null $qbank_aptitude_id
 * @property int|null $question_set_id
 * @property string|null $question_mark
 * @property string|null $status
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class QuestionSetQbankAptitudeTest extends Model
{
	protected $table = 'question_set_qbank_aptitude_test';

	protected $casts = [
		'qbank_aptitude_id' => 'int',
		'question_set_id' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int'
	];

	protected $fillable = [
		'qbank_aptitude_id',
		'question_set_id',
		'question_mark',
		'status',
		'created_by',
		'updated_by'
	];
}
