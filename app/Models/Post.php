<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'niks', 'nama_pasiens','nama_suamis','tgl_lahirs','tpt_lahirs','umurs','alamat_povs','alamat_kabs','alamat_kecs','desas','rws','rts','hps','image','bumil'
    ];
}
