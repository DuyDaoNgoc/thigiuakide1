<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RestaurantRequest extends FormRequest
{
    // Xác định xem người dùng có được phép gửi request không
    public function authorize()
    {
        return true; 
    }

    // Định nghĩa các rules để validate
    public function rules()
    {
        return [
            // Ví dụ các cột trong bảng T_restaurant
            'name'        => 'required|string|max:255',
            'email'       => 'nullable|email|max:255',
            'phone'       => 'nullable|string|max:20',
            'address'     => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'opening_hour'=> 'nullable|date_format:H:i',
            'closing_hour'=> 'nullable|date_format:H:i|after:opening_hour',
            'image'       => 'nullable|mimes:jpeg,jpg,png,gif|max:2048',
            // ... thêm các trường khác nếu cần
        ];
    }

    // (Tuỳ chọn) Tùy biến thông báo lỗi 
    public function messages()
    {
        return [
            'name.required' => 'Tên nhà hàng không được để trống!',
            'email.email'   => 'Email không hợp lệ!',
            // ... hoặc thêm message cho các rule khác
        ];
    }
}