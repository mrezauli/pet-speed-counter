<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class QselectionAptitudeTest
 * 
 * @property int $id
 * @property string|null $question_type
 * @property int|null $question_set_id
 * @property int|null $qbank_aptitude_id
 * @property int|null $company_id
 * @property int|null $designation_id
 * @property int|null $exam_code_id
 * @property Carbon|null $exam_date
 * @property string|null $shift
 * @property string|null $status
 * @property float|null $question_marks
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Company|null $company
 * @property Designation|null $designation
 * @property ExamCode|null $exam_code
 * @property QbankAptitudeTest|null $qbank_aptitude_test
 * @property Collection|AptitudeExamResult[] $aptitude_exam_results
 * @property Collection|FileDownloadPermission[] $file_download_permissions
 *
 * @package App\Models
 */
class QselectionAptitudeTest extends Model
{
	protected $table = 'qselection_aptitude_test';

	protected $casts = [
		'question_set_id' => 'int',
		'qbank_aptitude_id' => 'int',
		'company_id' => 'int',
		'designation_id' => 'int',
		'exam_code_id' => 'int',
		'exam_date' => 'datetime',
		'question_marks' => 'float',
		'created_by' => 'int',
		'updated_by' => 'int'
	];

	protected $fillable = [
		'question_type',
		'question_set_id',
		'qbank_aptitude_id',
		'company_id',
		'designation_id',
		'exam_code_id',
		'exam_date',
		'shift',
		'status',
		'question_marks',
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

	public function qbank_aptitude_test()
	{
		return $this->belongsTo(QbankAptitudeTest::class, 'qbank_aptitude_id');
	}

	public function aptitude_exam_results()
	{
		return $this->hasMany(AptitudeExamResult::class, 'qselection_aptitude_id');
	}

	public function file_download_permissions()
	{
		return $this->hasMany(FileDownloadPermission::class, 'qselection_aptitude_id');
	}
}
