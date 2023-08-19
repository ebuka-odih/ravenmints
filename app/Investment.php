<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    protected $guarded = [];
    protected $appends = ['end_date', 'total_earned', 'earning', 'trans'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    
    public function package()
    {
        return $this->belongsTo(Package::class, 'package_id');
    }
    public function getEndDateAttribute()
    {
        $date = Carbon::parse($this->approved_date);
        return $date->addDays($this->package->term_days - 1);
    }

    public function getEarningAttribute()
    {
        $expected_percent = $this->package->daily_interest  * $this->amount;
        $profit_percent =  number_format((float)$expected_percent / 100, 2, '.', '');

        $days = 0;

        $d_approved = Carbon::parse($this->approved_date);
        $d_ended = Carbon::parse($this->end_date);

        $current_date = Carbon::now();

        if($d_approved->diffInDays($current_date) < $this->package->term_days){
            $days = $d_approved->diffInDays($current_date);
        }else {
            $days =  $this->package->term_days;
        }
        if ($this->pause == 1){
            $earned = 0;
            for ($i = 0; $i <= $days; $i++){
                $earned .= $profit_percent;
            }
            return $earned;
        }

    }

    public function getTotalEarnedAttribute(){
        return  $this->earning + $this->amount;

    }

    public function TotalEarned()
    {
        $total_profit = $this->earning;
        return $total_profit;
    }

    public function status()
    {
        if ($this->status == "pending"){
            return "<span class='badge badge-danger text text-uppercase'>Pending</span>";
        }elseif ($this->status == 'approved'){
            return "<span class='badge badge-success text text-uppercase'>Successful</span>";
        }else{
            return "<span class='badge badge-warning text text-uppercase'>Canceled</span>";
        }
    }
    public function adminStatus()
    {
        if ($this->pause == 0){
            return "<span class='badge bg-danger text text-uppercase'>Paused</span>";
        }elseif ($this->pause == 1){
            return "<span class='badge bg-success text text-uppercase'>Running</span>";
        }else{
            return "<span class='badge bg-warning text text-uppercase'>Canceled</span>";
        }
    }


    public function total_earned(){
        return  $this->earning + $this->amount;

    }

    public function expected_profit()
    {
        $expected_profit = $this->package->total_return() * $this->amount;
        $profit =  number_format((float)$expected_profit / 100, 2, '.', '');
        return $profit;
    }

    public function ending_date()
    {
        $date = Carbon::parse($this->created_at);
        return $date->addDays($this->package->term_days - 1);
    }

    public function daily()
    {
        $expected_percent = $this->package->daily_interest  * $this->amount;
        $profit_percent =  number_format((float)$expected_percent / 100, 2, '.', '');
        return $profit_percent;
    }

}
