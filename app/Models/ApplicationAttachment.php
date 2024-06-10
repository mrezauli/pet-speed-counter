<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ApplicationAttachment
 * 
 * @property int $id
 * @property int|null $org_app_mst_id
 * @property string|null $application_attachment_path
 * @property string|null $attachment_type
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
class ApplicationAttachment extends Model
{
	protected $table = 'application_attachment';

	protected $casts = [
		'org_app_mst_id' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int'
	];

	protected $fillable = [
		'org_app_mst_id',
		'application_attachment_path',
		'attachment_type',
		'status',
		'created_by',
		'updated_by'
	];

	public function organization_application_mst()
	{
		return $this->belongsTo(OrganizationApplicationMst::class, 'org_app_mst_id');
	}
}
