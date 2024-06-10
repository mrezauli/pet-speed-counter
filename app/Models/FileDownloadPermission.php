<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FileDownloadPermission
 * 
 * @property int $id
 * @property int|null $qselection_aptitude_id
 * @property int|null $user_id
 * @property string|null $question_type
 * @property int $open_flag
 * @property string|null $status
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property QselectionAptitudeTest|null $qselection_aptitude_test
 * @property User|null $user
 *
 * @package App\Models
 */
class FileDownloadPermission extends Model
{
	protected $table = 'file_download_permission';

	protected $casts = [
		'qselection_aptitude_id' => 'int',
		'user_id' => 'int',
		'open_flag' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int'
	];

	protected $fillable = [
		'qselection_aptitude_id',
		'user_id',
		'question_type',
		'open_flag',
		'status',
		'created_by',
		'updated_by'
	];

	public function qselection_aptitude_test()
	{
		return $this->belongsTo(QselectionAptitudeTest::class, 'qselection_aptitude_id');
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
