<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Validation\Rule;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
    { $user = new User();
        $users =$user->all();
        $ids=[];
        foreach($users as $item){
            array_push($ids,$item->id);
        }
        return [
            'title' => ['required','min:3',Rule::unique('posts','title')->ignore($this->post)],
            'description' =>['required','min:3',],
            'post_creator'=>['required',Rule::in($ids),]
        ];
    }
}
