<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OrderInfo
 */
class OrderInfo extends Model
{
    protected $table = 'order_info';

    protected $primaryKey = 'order_id';

    public $timestamps = false;

    protected $fillable = [
        'order_sn',
        'user_id',
        'order_status',
        'shipping_status',
        'pay_status',
        'consignee',
        'country',
        'province',
        'city',
        'district',
        'address',
        'zipcode',
        'tel',
        'mobile',
        'email',
        'best_time',
        'sign_building',
        'postscript',
        'shipping_id',
        'shipping_name',
        'pay_id',
        'pay_name',
        'how_oos',
        'how_surplus',
        'pack_name',
        'card_name',
        'card_message',
        'inv_payee',
        'inv_content',
        'goods_amount',
        'shipping_fee',
        'insure_fee',
        'pay_fee',
        'pack_fee',
        'card_fee',
        'money_paid',
        'surplus',
        'integral',
        'integral_money',
        'bonus',
        'order_amount',
        'from_ad',
        'referer',
        'add_time',
        'confirm_time',
        'pay_time',
        'shipping_time',
        'pack_id',
        'card_id',
        'bonus_id',
        'invoice_no',
        'extension_code',
        'extension_id',
        'to_buyer',
        'pay_note',
        'agency_id',
        'inv_type',
        'tax',
        'is_separate',
        'parent_id',
        'discount'
    ];

    protected $guarded = [];
}
