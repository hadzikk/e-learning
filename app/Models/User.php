<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_user', 'user_id', 'course_id')->withTimestamps();
    }

    public function quizResults()
    {
        return $this->hasMany(QuizResult::class);
    }

    public function unenroll($courseId)
    {
        // Hapus riwayat pengguna terkait kursus
        $this->courses()->detach($courseId);
        
        // Reset riwayat quiz results terkait course yang di-unenroll
        $quizzesToDelete = QuizResult::whereIn('quiz_id', function ($query) use ($courseId) {
            $query->select('id')
                ->from('quizzes')
                ->where('module_id', function ($query) use ($courseId) {
                    $query->select('id')
                        ->from('modules')
                        ->where('course_id', $courseId);
                });
        })->where('user_id', $this->id)->get();

        foreach ($quizzesToDelete as $result) {
            $result->delete();
        }
    }

    public function isAdmin()
    {
        // Implement your logic to check if the user is an admin.
        return $this->role === 'admin';
    }

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
