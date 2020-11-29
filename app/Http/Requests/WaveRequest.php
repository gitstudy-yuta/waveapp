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
        if ($this->path() == 'posts'){
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
            'point_area' => 'required',
            'wave_score' => 'required|integer',
            'wind_description' => 'required',
            'weather' => 'required',
            'poeple_amount' => 'required|integer',
            'comment' => 'required',
        ];
    }

    public function messages(){
        return [
            'point_name.required' => 'ポイント名を入力してください。',
            'point_area.required' => 'ポイントエリアを入力してください。',
            'wave_score.required' => '波の点数を入力してください。',
            'wind_description.required' => '風向きを入力してください。',
            'weather.required' => '天気状況を入力してください。',
            'poeple_amount.required' => '人数を入力してください。',
            'comment.required' => 'コメントを入力してください。',

        ];
    }
}
