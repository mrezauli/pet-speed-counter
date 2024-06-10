<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Company
 * 
 * @property int $id
 * @property string $company_name
 * @property string|null $address_one
 * @property string|null $address_two
 * @property string|null $address_three
 * @property string|null $address_four
 * @property string|null $contact_person
 * @property string|null $designation
 * @property string|null $phone
 * @property string|null $mobile
 * @property string|null $email
 * @property string|null $web_address
 * @property string|null $status
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|ExamCode[] $exam_codes
 * @property Collection|ExaminationProcess[] $examination_processes
 * @property Collection|ExaminerSelection[] $examiner_selections
 * @property Collection|OrganizationApplicationMst[] $organization_application_msts
 * @property Collection|QselectionAptitudeTest[] $qselection_aptitude_tests
 * @property Collection|QselectionTypingTest[] $qselection_typing_tests
 *
 * @package App\Models
 */
class Company extends Model
{
	protected $table = 'company';

	protected $casts = [
		'created_by' => 'int',
		'updated_by' => 'int'
	];

	protected $fillable = [
		'company_name',
		'address_one',
		'address_two',
		'address_three',
		'address_four',
		'contact_person',
		'designation',
		'phone',
		'mobile',
		'email',
		'web_address',
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

	public function organization_application_msts()
	{
		return $this->hasMany(OrganizationApplicationMst::class);
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
