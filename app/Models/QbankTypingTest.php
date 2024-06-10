<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class QbankTypingTest
 * 
 * @property int $id
 * @property string|null $exam_type
 * @property string|null $typing_question
 * @property string|null $status
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Collection|QselectionTypingTest[] $qselection_typing_tests
 *
 * @package App\Models
 */
class QbankTypingTest extends Model
{
	protected $table = 'qbank_typing_test';

	protected $casts = [
		'created_by' => 'int',
		'updated_by' => 'int'
	];

	protected $fillable = [
		'exam_type',
		'typing_question',
		'status',
		'created_by',
		'updated_by'
	];

	public function qselection_typing_tests()
	{
		return $this->hasMany(QselectionTypingTest::class, 'qbank_typing_id');
	}
}
