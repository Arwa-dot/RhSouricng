<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OffreRequest extends FormRequest
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
        return [
            'titre_emploi'=>['bail|required'],
            'secteur_emploi'=>['bail|required'],
            'type_emploi'=>['bail|required'],
            'description'=>['bail|required|alpha|maw:255'],
            'date_publication'=>['bail|required|date'],
            'date_limite'=>['bail|required|date'],
            'salaire_propose'=>['bail|required'],
            'mail_recruteur'=>['bail|required'],
            'ville'=>['bail|required'],



        ];
    }
}
