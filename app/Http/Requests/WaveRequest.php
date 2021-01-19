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
            'point_name' => 'required',
            'point_area' => 'required|not_in: 0',
            'wave_score' => 'required|integer|not_in: 123',
            'wind_description' => 'required|not_in: 0',
            'weather' => 'required|not_in: 0',
            'poeple_amount' => 'required|integer|not_in: 99',
            'comment' => 'required',
        ];
    }

    public function messages(){
        return [
            'point_name.required' => 'ポイント名を入力してください。',
            // 'point_area.required' => 'ポイントエリアを入力してください。',
            'point_area.not_in' => 'ポイントエリアを入力してください。',
            'wave_score.not_in' => '波の点数を入力してください。',
            'wind_description.not_in' => '風向きを入力してください。',
            'weather.not_in' => '天気状況を入力してください。',
            'poeple_amount.not_in' => '人数を入力してください。',
            'comment.required' => 'コメントを入力してください。',

        ];
    }
}
