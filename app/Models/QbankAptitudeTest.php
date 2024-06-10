<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class QbankAptitudeTest
 * 
 * @property int $id
 * @property string|null $title
 * @property string|null $question_type
 * @property string|null $original_file_path
 * @property string|null $image_file_path
 * @property string|null $status
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Collection|QselectionAptitudeTest[] $qselection_aptitude_tests
 *
 * @package App\Models
 */
class QbankAptitudeTest extends Model
{
	protected $table = 'qbank_aptitude_test';

	protected $casts = [
		'created_by' => 'int',
		'updated_by' => 'int'
	];

	protected $fillable = [
		'title',
		'question_type',
		'original_file_path',
		'image_file_path',
		'status',
		'created_by',
		'updated_by'
	];

	public function qselection_aptitude_tests()
	{
		return $this->hasMany(QselectionAptitudeTest::class, 'qbank_aptitude_id');
	}
}
