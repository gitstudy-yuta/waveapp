<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WaveRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->path() == 'post'){
            return true;
        }else{
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        'user_id' => 'required',
        'point_name' => 'required',
        'point_area' => 'required',
        'wave_score' => 'required|integer',
        'wind_description' => 'required',
        'weather' => 'required',
        'poeple_amount' => 'required|integer',
        'comment' => 'required',
        ];
    }
}
