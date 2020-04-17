<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateReviewsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $review = $this->route('review');
        return [
            'title' => 'required|unique:reviews|max:250'.$review->id,
            'username' => 'required',
            'body' => 'required',
            'rating' => 'required|integer|between:1,10'
        ];
    }
}
