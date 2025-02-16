<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Support\Arr;

class Job extends Model {

    use HasFactory;

    protected $table = 'job_listings';
    protected $fillable = ['title', 'salary', 'location', 'age'];

    public function employeer() {
        return $this->belongsTo(Employeer::class);
    }
    

    // public static function all(): array {
    //     return [
    //         [
    //             'id' => '1',
    //             'title' => 'PHP Developer',
    //             'salary' => "$10000",
    //             'location' => 'Newyork',
    //             'Age' => 25
    //         ], [
    //             'id' => '2',
    //             'title' => 'Java Developer',
    //             'salary' => "$12000",
    //             'location' => 'California',
    //             'Age' => 30
    //         ], [
    //             'id' => '3',
    //             'title' => 'Python Developer',
    //             'salary' => "$15000",
    //             'location' => 'Texas',
    //             'Age' => 35
    //         ]
    //     ];
    // }
    // public static function find(int $id):array {
    //     $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);
    //     if(!$job) {
    //         abort(404);
    //     }
    //     return $job;
    // }
}