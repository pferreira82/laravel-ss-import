<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CsvData extends Model
{
    public $table = 'csv_data';
    public $fillable = ['business_client_name','contact', 'email', 'rank', 'annual_fees', 'backward_fees', 'forward_fees', 'accounts_prep', 'audit', 'tax_returns', 'other_backward_looking', 'business_advisory', 'personal_wealth_planning', 'tax_planning', 'other_forward_looking', 'client_gross_sales', 'number_employees', 'business_activity'];
}
