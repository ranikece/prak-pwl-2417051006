<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Support\Facades\DB;

class UserModel extends Model
{
    use HasUuids;

    protected $table = 'user';

    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = ['nama', 'npm', 'kelas_id'];

    public function getUser()
    {
        return DB::table('user')
            ->join('kelas', 'user.kelas_id', '=', 'kelas.id')
            ->select('user.id', 'user.nama', 'user.npm', 'kelas.nama_kelas')
            ->get();
    }
}