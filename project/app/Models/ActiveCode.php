<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Ipecompany\Smsirlaravel\Smsirlaravel;
use phplusir\smsir\Smsir;

class ActiveCode extends Model
{
    use HasFactory;
    protected $table='active_code';
    protected $fillable = [
        'user_phone',
        'code',
        'expired_at'
    ];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function scopeGenerateCode($query , $user_number)
    {
            ActiveCode::where('user_phone',$user_number)->delete();
            $code = mt_rand(100000, 999999);
            ActiveCode::create([
                'user_phone'=>$user_number,
                'code' => $code,
                'expired_at' => now()->addHours(4)->addMinutes(50)
            ]);
        Smsir::send(["کاربر عزیز \nکد احرازهویت شما  $code می باشد \n سایت مینو"], [$user_number]);
        return $code;
    }

}
