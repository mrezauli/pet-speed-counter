<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Designation
 * 
 * @property int $id
 * @property string $designation_name
 * @property string|null $status
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|ExamCode[] $exam_codes
 * @property Collection|ExaminationProcess[] $examination_processes
 * @property Collection|ExaminerSelection[] $examiner_selections
 * @property Collection|QselectionAptitudeTest[] $qselection_aptitude_tests
 * @property Collection|QselectionTypingTest[] $qselection_typing_tests
 *
 * @package App\Models
 */
class Designation extends Model
{
	protected $table = 'designation';

	protected $casts = [
		'created_by' => 'int',
		'updated_by' => 'int'
	];

	protected $fillable = [
		'designation_name',
		'status',
		'created_by',
		'updated_by'
	];

	public function exam_codes()
	{
		return $this->hasMany(ExamCode::class);
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
