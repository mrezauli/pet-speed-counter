<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AptitudeExamResult
 * 
 * @property int $id
 * @property int|null $qselection_aptitude_id
 * @property int|null $user_id
 * @property string|null $question_type
 * @property string|null $answer_original_file_path
 * @property string|null $answer_image_file_path
 * @property int $re_submit_flag
 * @property string|null $status
 * @property float|null $answer_marks
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property QselectionAptitudeTest|null $qselection_aptitude_test
 * @property User|null $user
 *
 * @package App\Models
 */
class AptitudeExamResult extends Model
{
	protected $table = 'aptitude_exam_result';

	protected $casts = [
		'qselection_aptitude_id' => 'int',
		'user_id' => 'int',
		're_submit_flag' => 'int',
		'answer_marks' => 'float',
		'created_by' => 'int',
		'updated_by' => 'int'
	];

	protected $fillable = [
		'qselection_aptitude_id',
		'user_id',
		'question_type',
		'answer_original_file_path',
		'answer_image_file_path',
		're_submit_flag',
		'status',
		'answer_marks',
		'created_by',
		'updated_by'
	];

	public function qselection_aptitude_test()
	{
		return $this->belongsTo(QselectionAptitudeTest::class, 'qselection_aptitude_id');
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
