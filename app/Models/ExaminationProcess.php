<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ExaminationProcess
 * 
 * @property int $id
 * @property int|null $company_id
 * @property int|null $designation_id
 * @property int|null $exam_code_id
 * @property Carbon|null $exam_date
 * @property string|null $exam_type
 * @property string|null $shift
 * @property int|null $sl_from
 * @property int|null $sl_to
 * @property string|null $status
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Company|null $company
 * @property Designation|null $designation
 * @property ExamCode|null $exam_code
 *
 * @package App\Models
 */
class ExaminationProcess extends Model
{
	protected $table = 'examination_process';

	protected $casts = [
		'company_id' => 'int',
		'designation_id' => 'int',
		'exam_code_id' => 'int',
		'exam_date' => 'datetime',
		'sl_from' => 'int',
		'sl_to' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int'
	];

	protected $fillable = [
		'company_id',
		'designation_id',
		'exam_code_id',
		'exam_date',
		'exam_type',
		'shift',
		'sl_from',
		'sl_to',
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
}
