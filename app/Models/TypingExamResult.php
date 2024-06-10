<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TypingExamResult
 * 
 * @property int $id
 * @property int|null $qselection_typing_id
 * @property int|null $user_id
 * @property string|null $exam_type
 * @property int|null $exam_time
 * @property bool|null $started
 * @property bool|null $completed
 * @property string|null $original_text
 * @property string|null $answered_text
 * @property string|null $process_text
 * @property int|null $total_words
 * @property int|null $typed_words
 * @property int|null $inserted_words
 * @property int|null $deleted_words
 * @property float|null $accuracy
 * @property float|null $wpm
 * @property int $total_given_character
 * @property int $total_type_character
 * @property int $total_type_correctd_character
 * @property int $given_word_special_char
 * @property int $type_word_special_char
 * @property int $correct_word_special_char
 * @property int $given_word_space
 * @property int $typed_word_space
 * @property string|null $status
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class TypingExamResult extends Model
{
	protected $table = 'typing_exam_result';

	protected $casts = [
		'qselection_typing_id' => 'int',
		'user_id' => 'int',
		'exam_time' => 'int',
		'started' => 'bool',
		'completed' => 'bool',
		'total_words' => 'int',
		'typed_words' => 'int',
		'inserted_words' => 'int',
		'deleted_words' => 'int',
		'accuracy' => 'float',
		'wpm' => 'float',
		'total_given_character' => 'int',
		'total_type_character' => 'int',
		'total_type_correctd_character' => 'int',
		'given_word_special_char' => 'int',
		'type_word_special_char' => 'int',
		'correct_word_special_char' => 'int',
		'given_word_space' => 'int',
		'typed_word_space' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int'
	];

	protected $fillable = [
		'qselection_typing_id',
		'user_id',
		'exam_type',
		'exam_time',
		'started',
		'completed',
		'original_text',
		'answered_text',
		'process_text',
		'total_words',
		'typed_words',
		'inserted_words',
		'deleted_words',
		'accuracy',
		'wpm',
		'total_given_character',
		'total_type_character',
		'total_type_correctd_character',
		'given_word_special_char',
		'type_word_special_char',
		'correct_word_special_char',
		'given_word_space',
		'typed_word_space',
		'status',
		'created_by',
		'updated_by'
	];
}
