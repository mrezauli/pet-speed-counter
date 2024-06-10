<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OrganizationApplicationDtl
 * 
 * @property int $id
 * @property int|null $org_app_mst_id
 * @property string|null $subject
 * @property string|null $to_email
 * @property string|null $to_person
 * @property string|null $from_email
 * @property Carbon|null $date_email
 * @property string|null $read_email
 * @property string|null $yours_only
 * @property string|null $letter_no
 * @property string|null $reference_no
 * @property string|null $email_description
 * @property string|null $status
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property OrganizationApplicationMst|null $organization_application_mst
 *
 * @package App\Models
 */
class OrganizationApplicationDtl extends Model
{
	protected $table = 'organization_application_dtls';

	protected $casts = [
		'org_app_mst_id' => 'int',
		'date_email' => 'datetime',
		'created_by' => 'int',
		'updated_by' => 'int'
	];

	protected $fillable = [
		'org_app_mst_id',
		'subject',
		'to_email',
		'to_person',
		'from_email',
		'date_email',
		'read_email',
		'yours_only',
		'letter_no',
		'reference_no',
		'email_description',
		'status',
		'created_by',
		'updated_by'
	];

	public function organization_application_mst()
	{
		return $this->belongsTo(OrganizationApplicationMst::class, 'org_app_mst_id');
	}
}
