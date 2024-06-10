<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OrganizationApplicationMst
 * 
 * @property int $id
 * @property int|null $user_id
 * @property int|null $company_id
 * @property string|null $application_format
 * @property string|null $bcc_or_organization
 * @property string|null $status
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Company|null $company
 * @property User|null $user
 * @property Collection|ApplicationAttachment[] $application_attachments
 * @property Collection|OrganizationApplicationDtl[] $organization_application_dtls
 *
 * @package App\Models
 */
class OrganizationApplicationMst extends Model
{
	protected $table = 'organization_application_mst';

	protected $casts = [
		'user_id' => 'int',
		'company_id' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int'
	];

	protected $fillable = [
		'user_id',
		'company_id',
		'application_format',
		'bcc_or_organization',
		'status',
		'created_by',
		'updated_by'
	];

	public function company()
	{
		return $this->belongsTo(Company::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function application_attachments()
	{
		return $this->hasMany(ApplicationAttachment::class, 'org_app_mst_id');
	}

	public function organization_application_dtls()
	{
		return $this->hasMany(OrganizationApplicationDtl::class, 'org_app_mst_id');
	}
}
