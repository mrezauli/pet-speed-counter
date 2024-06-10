<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ExamCode
 * 
 * @property int $id
 * @property string $exam_code_name
 * @property int|null $company_id
 * @property int|null $designation_id
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
 * @property Collection|ExaminationProcess[] $examination_processes
 * @property Collection|ExaminerSelection[] $examiner_selections
 * @property Collection|QselectionAptitudeTest[] $qselection_aptitude_tests
 * @property Collection|QselectionTypingTest[] $qselection_typing_tests
 *
 * @package App\Models
 */
class ExamCode extends Model
{
	protected $table = 'exam_code';

	protected $casts = [
		'company_id' => 'int',
		'designation_id' => 'int',
		'exam_date' => 'datetime',
		'created_by' => 'int',
		'updated_by' => 'int'
	];

	protected $fillable = [
		'exam_code_name',
		'company_id',
		'designation_id',
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

	public function examination_processes()
	{
		return $this->hasMany(ExaminationProcess::class);
	}

	public function examiner_selections()
	{
		return $this->hasMany(ExaminerSelection::class);
	}

	public function qselection_aptitude_tests()
	{
		return $this->hasMany(QselectionAptitudeTest::class);
	}

	public function qselection_typing_tests()
	{
		return $this->hasMany(QselectionTypingTest::class);
	}
}
