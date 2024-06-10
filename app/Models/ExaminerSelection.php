<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ExaminerSelection
 * 
 * @property int $id
 * @property int|null $examiner_id
 * @property int|null $company_id
 * @property int|null $designation_id
 * @property int|null $exam_code_id
 * @property Carbon|null $exam_date
 * @property string|null $status
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Company|null $company
 * @property Designation|null $designation
 * @property ExamCode|null $exam_code
 * @property User|null $user
 *
 * @package App\Models
 */
class ExaminerSelection extends Model
{
	protected $table = 'examiner_selection';

	protected $casts = [
		'examiner_id' => 'int',
		'company_id' => 'int',
		'designation_id' => 'int',
		'exam_code_id' => 'int',
		'exam_date' => 'datetime',
		'created_by' => 'int',
		'updated_by' => 'int'
	];

	protected $fillable = [
		'examiner_id',
		'company_id',
		'designation_id',
		'exam_code_id',
		'exam_date',
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

	public function user()
	{
		return $this->belongsTo(User::class, 'examiner_id');
	}
}
