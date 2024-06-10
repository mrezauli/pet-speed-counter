<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class QselectionTypingTest
 * 
 * @property int $id
 * @property int|null $qbank_typing_id
 * @property int|null $company_id
 * @property int|null $designation_id
 * @property int|null $exam_code_id
 * @property Carbon|null $exam_date
 * @property string|null $exam_type
 * @property string|null $shift
 * @property string|null $status
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Company|null $company
 * @property Designation|null $designation
 * @property ExamCode|null $exam_code
 * @property QbankTypingTest|null $qbank_typing_test
 *
 * @package App\Models
 */
class QselectionTypingTest extends Model
{
	protected $table = 'qselection_typing_test';

	protected $casts = [
		'qbank_typing_id' => 'int',
		'company_id' => 'int',
		'designation_id' => 'int',
		'exam_code_id' => 'int',
		'exam_date' => 'datetime',
		'created_by' => 'int',
		'updated_by' => 'int'
	];

	protected $fillable = [
		'qbank_typing_id',
		'company_id',
		'designation_id',
		'exam_code_id',
		'exam_date',
		'exam_type',
		'shift',
		'status',
		'created_by',
		'updated_by'
	];

	public function company()
	{
		return $this->belongsTo(Company::class);
	}

	public function designation()
	{
		return $this->belongsTo(Designation::class);
	}

	public function exam_code()
	{
		return $this->belongsTo(ExamCode::class);
	}

	public function qbank_typing_test()
	{
		return $this->belongsTo(QbankTypingTest::class, 'qbank_typing_id');
	}
}
