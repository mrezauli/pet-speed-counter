<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TemplateExtraInformation
 * 
 * @property int $id
 * @property int|null $org_app_mst_id
 * @property string|null $extra_information_type
 * @property string|null $extra_information
 * @property string|null $status
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class TemplateExtraInformation extends Model
{
	protected $table = 'template_extra_information';

	protected $casts = [
		'org_app_mst_id' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int'
	];

	protected $fillable = [
		'org_app_mst_id',
		'extra_information_type',
		'extra_information',
		'status',
		'created_by',
		'updated_by'
	];
}
